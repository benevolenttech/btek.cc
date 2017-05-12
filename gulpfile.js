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


gulp.task('css', function (cb) {
  pump([
      gulp.src('_sass/screen.scss'),
      compass({
        css: 'assets',
        sass: '_sass',
        image: 'assets/images',
        sourcemap: 'assets'
      }),
      minifyCss(),
      // browserSync.reload({stream: true}),
      gulp.dest('assets/temp')
    ],
    cb
  );
});


gulp.task('js', function (cb) {

  pump([
      gulp.src([
        '_js/load-deferred-images.js',
        '_js/smooth-scroll.js'
      ]),
      sourcemaps.init(),
      babel({
        presets: ['es2015'],
        compact: true
      }),
      concat('custom.min.js'),
      sourcemaps.write(),
      // browserSync.reload({stream: true}),
      gulp.dest('assets')
    ],
    cb
  );
});


gulp.task('jekyll-build', function (done) {
  browserSync.notify('<span style="color: grey">Running:</span> $ bundle exec jekyll build');
  return cp.spawn('bundle', ['exec', 'jekyll', 'build', '--incremental'], {stdio: 'inherit'})
    .on('close', done);
});


gulp.task('jekyll-rebuild', ['jekyll-build'], function () {
  browserSync.reload();
});


gulp.task('browser-sync', ['js', 'css', 'jekyll-build'], function () {
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
  gulp.watch('_sass/*', ['css']);
  gulp.watch('_js/*', ['js']);
  gulp.watch(['*.html', '_layouts/*.html', '_includes/*.html', '_posts/*', 'assets/screen.css', 'assets/bundle.js'], ['jekyll-rebuild']);
});

gulp.task('serve', ['browser-sync', 'watch']);

gulp.task('build-all', ['css', 'js', 'jekyll-build']);

gulp.task('deploy', ['build-all'], function (done) {
  cp.spawn('bundle', ['exec', 'jekyll', 'algolia', 'push'], {stdio: 'inherit'}).on('close', function () {
    cp.spawn('git', ['push'], {stdio: 'inherit'}).on('close',
      done)
  });
});

gulp.task('default', ['build-all']);