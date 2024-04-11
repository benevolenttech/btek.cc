<?php


// can target just php local server if needed
// if (php_sapi_name() == 'cli-server') {
/* route static assets and return false */
// }

// php -t public -S localhost:8000 router.php 

$pathname = explode('?', $_SERVER['REQUEST_URI'])[0];
if ($pathname === '/') {
  $pathname = '/index';
}

// if (preg_match(
//   '/\.(?:3gp|apk|avi|bmp|css|csv|doc|docx|flac|gif|gz|gzip|htm|html|ics|jpe|jpeg|jpg|js|json|kml|kmz|m4a|mov|mp3|mp4|mpeg|mpg|odp|ods|odt|oga|ogg|ogv|pdf|pdf|png|pps|pptx|qt|svg|swf|tar|text|tif|txt|wav|webm|wmv|xls|xlsx|xml|xsl|xsd|zip)$/',
//   $_SERVER["REQUEST_URI"]
// )) {
//   return false;
// }

// if file exists at public/$_SERVER["REQUEST_URI"], return false
if (file_exists('public' . $pathname)) {
  return false;
}

// Pre-load core files so they needn't be required
foreach (glob("app/db/**/*.php") as $file) {
  include_once $file;
}
include_once 'app/util/nav.php';

/**
 * Look for a route file that matches the request URI and render it
 */

$route = null;

if (file_exists('app/routes' . $pathname . '.php')) {
  $route = 'app/routes' . $pathname . '.php';
} else if (file_exists('app/routes' . $pathname . '/index.php')) {
  $route = 'app/routes' . $pathname . '/index.php';
} else {

  // else check if a route exists which has variables in the filepath.
  // Ex. /post/foo-bar/meta should match file app/routers/post/[arg]/meta
  $pathParts = explode('/', $pathname);
  $pathParts = array_filter($pathParts);
  $pathParts = array_values($pathParts);
  $pathPartsCount = count($pathParts);
  $lastPath = 'app/routes';
  for ($i = 0; $i <= $pathPartsCount; $i++) {
    $path = $lastPath . '/' . $pathParts[$i];
    if (
      $i == $pathPartsCount - 1 &&
      file_exists($path . '.php')
    ) {
      $route = $path . '.php';
      break;
    } else if (
      $i == $pathPartsCount - 1 &&
      file_exists($path . '/index.php')
    ) {
      $route = $path . '/index.php';
      break;
    } else if (file_exists($path)) {
      $lastPath = $path;
      continue;
    } else if (file_exists($lastPath . '/[arg]')) {
      $pathParts[$i] = '[arg]';
      $url->posArgs[] = $pathParts[$i];
      $lastPath = $lastPath . '/[arg]';
      continue;
    } else if (file_exists($lastPath . '/[arg].php')) {
      $url->posArgs[] = $pathParts[$i];
      $route = $lastPath . '/[arg].php';
      break;
    }
    break;
  }
}

if ($route) {
  (include_once $route)();
} else {
  (include_once 'app/routes/404.php')();
}

return true;
