<?php
// router.php
// if (php_sapi_name() == 'cli-server') {
/* route static assets and return false */
// }
/* go on with normal index.php operations */

// php -t public -S localhost:8000 router.php 

if (preg_match(
  '/\.(?:3gp|apk|avi|bmp|css|csv|doc|docx|flac|gif|gz|gzip|htm|html|ics|jpe|jpeg|jpg|js|json|kml|kmz|m4a|mov|mp3|mp4|mpeg|mpg|odp|ods|odt|oga|ogg|ogv|pdf|pdf|png|pps|pptx|qt|svg|swf|tar|text|tif|txt|wav|webm|wmv|xls|xlsx|xml|xsl|xsd|zip)$/',
  $_SERVER["REQUEST_URI"]
)) {
  return false;
} else {

  // Pre-load core files so they needn't be required
  foreach (glob("app/db/**/*.php") as $file) {
    include_once $file;
  }
  include_once 'app/util/nav.php';

  /**
   * Look for a route file that matches the request URI and render it
   */
  $pathname = explode('?', $_SERVER['REQUEST_URI'])[0];
  if ($pathname === '/') {
    $pathname = '/index';
  }
  $route = null;
  if (file_exists('app/routes' . $pathname . '.php')) {
    $route = include_once 'app/routes' . $pathname . '.php';
  } else {
    $route = include_once 'app/routes/404.php';
  }
  $route->render();
  return true;
}
