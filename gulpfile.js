// Load the plugins
var gulp = require('gulp');
var concat = require('gulp-concat');
var compass = require('gulp-compass');
var browserSync = require('browser-sync');
var minifyCss = require('gulp-clean-css');
var cp = require('child_process');
var pump = require('pump');
var sourcemaps = require('gulp-sourcemaps');
var babel = require('gulp-babel');
var uglify = require('gulp-uglify');
var nightmare = require('nightmare');
var imagemin = require('gulp-imagemin');


gulp.task('optimize-images', function () {
  gulp.src(['images/**/*', 'uploads/**/*'])
    .pipe(imagemin())
    .pipe(gulp.dest('images'));
});


// Just a shortcut for purging cloudflare
// Requires cfcli to be installed globally using `npm install -g cfcli`
gulp.task('cf-purge', function (done) {
  return cp.spawn('cfcli', ['purge', '-d', 'benevolent.tech'], {stdio: 'inherit'})
    .on('close', done);
});

gulp.task('algolia-push', ['build-all'], function (done) {
  cp.spawn('bundle', ['exec', 'jekyll', 'algolia', 'push'], {stdio: 'inherit'})
    .on('close', done);
});

// Starts a webserver, takes a snapshot, closes webserver, optimizes snapshot
// Requires http-server to be installed globally using `npm install -g http-server`
// Requires imagemagick to be installed globally using `brew install -g imagemagick`
// Requires jpegtran to be installed globally using `brew install -g jpegtran`
gulp.task('screenshot', function (done) {

  var child = cp.spawn('http-server', ['-p', '9000', '_site'], {stdio: 'inherit'});

  return nightmare()
    .goto('http://localhost:9000')
    .viewport(1200, 1200)
    .screenshot('tmp/screenshot.png')
    .end()
    .then(function (result) { return child.kill(); })
    .then(function (result) {
      return cp.spawn('convert', ['-resize', '1200', 'tmp/screenshot.png', 'tmp/screenshot.jpg'], {stdio: 'inherit'})
        .on('close', function() {
          return cp.spawn('jpegtran', ['-optimize', '-progressive', '-outfile', 'images/screenshot.square.jpg', 'tmp/screenshot.jpg'], {stdio: 'inherit'})
            .on('close', function () {
              return cp.spawn('jpegtran', ['-optimize', '-progressive', '-crop', '1200x500', '-outfile', 'images/screenshot.fold.jpg', 'tmp/screenshot.jpg'], {stdio: 'inherit'});
            });
        });
    })
    .catch(function (error) {
      child.kill();
      console.error('Screenshot failed:', error);
      return done(error);
    })
    ;
});


gulp.task('css', function (cb) {
  pump([
      gulp.src('css/_src/screen.scss'),
      compass({
        css: 'css',
        sass: 'css/_src',
        image: 'images',
        sourcemap: 'css',
        style: 'compressed'
      })
      // browserSync.reload({stream: true}),
    ],
    cb
  );
});


gulp.task('js-libs', function (cb) {
  pump([
      gulp.src([
        'js/_src/libs/smooth-scroll.js',
        'js/_src/libs/echo.js'
      ]),
      sourcemaps.init(),
      concat('libs.min.js'),
      uglify({preserveComments: 'license'}),
      sourcemaps.write('.'),
      gulp.dest('js')
    ],
    cb
  );
});


gulp.task('js-custom', function (cb) {
  pump([
      gulp.src([
        'js/_src/example.js'
      ]),
      sourcemaps.init(),
      babel({
        presets: ['es2015'],
        compact: true
      }),
      concat('custom.min.js'),
      sourcemaps.write('.'),
      // browserSync.reload({stream: true}),
      gulp.dest('js')
    ],
    cb
  );
});


gulp.task('js-production', ['js-libs', 'js-custom'], function (cb) {
  pump([
      gulp.src([
        'js/libs.min.js',
        'js/custom.min.js'
      ]),
      concat('bundle.min.js'),
      uglify({preserveComments: 'license'}),
      gulp.dest('js')
    ],
    cb
  );
});


gulp.task('jekyll-build', ['css', 'js-production'], function (done) {
  browserSync.notify('<span style="color: grey">Running:</span> $ bundle exec jekyll build');
  return cp.spawn('bundle', ['exec', 'jekyll', 'build', '--incremental'], {stdio: 'inherit'})
    .on('close', done);
});


gulp.task('jekyll-rebuild', function (done) {
  return cp.spawn('bundle', ['exec', 'jekyll', 'build', '--incremental'], {stdio: 'inherit'})
      .on('close', function () {
        browserSync.reload();
        return done();
      });
});


gulp.task('browser-sync', ['js-custom', 'css', 'jekyll-build'], function () {
  browserSync({
    server: {
      baseDir: '_site',
      serveStaticOptions: {
        extensions: ["html"]
      }
    }
  });
});


gulp.task('watch', function () {
  gulp.watch('css/_src/*', ['css']);
  gulp.watch('js/_src/*', ['js-custom']);
  gulp.watch(['*.html', 'sdfs_config.yml', 'learning/*.html', '_layouts/*.html', '_includes/*.html', '_posts/*.md', '_plugins/*', 'css/*.css', 'js/*.js'], ['jekyll-rebuild']);
});

gulp.task('serve', ['browser-sync', 'watch']);

gulp.task('build-all', ['css', 'js-production', 'jekyll-build']);

gulp.task('deploy', ['algolia-push'], function (done) {
  cp.spawn('git', ['push'], {stdio: 'inherit'})
  .on('close', done)
});

gulp.task('default', ['build-all']);