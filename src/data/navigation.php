<?php
include 'site.php';

$routes = [
  'about' => [
    'name' => 'About',
    'path' => '/about',
  ],
  'services' => [
    'name' => 'Services',
    'path' => '/services',
  ],
  'learn' => [
    'name' => 'Learn',
    'path' => '/learning',
  ],
  'grapevine' => [
    'name' => 'Grapevine',
    'path' => '/grapevine',
  ],
  'connect' => [
    'name' => 'Connect',
    'path' => '/contact',
  ],
];

$links = [
  'about' => $routes['about'],
  'services' => $routes['services'],
  'learn' => $routes['learn'],
  'grapevine' => $routes['grapevine'],
  'connect' => $routes['connect'],
];

function _url() {
  global $site;
  $base = $_SERVER['HTTP_HOST'];
  $pathname = $_SERVER['REQUEST_URI'];
  $qs = $_SERVER['QUERY_STRING'];
  $rel = $pathname . '?' . $qs;
  $full = $base . $rel;
  $env = $baseUrl === $site['url'] ? 'prod' : 'dev';
  $isProd = $env === 'prod';
  $isDev = $env === 'dev';
  return [
    'base' => $base,
    'pathname' => $pathname,
    'rel' => $rel,
    'qs' => $qs,
    'full' => $full,
    'env' => $env,
    'isProd' => $isProd,
    'isDev' => $isDev,
  ];
}
$url = _url();

function pathIsActive($path) {
  global $url;
  return $path === $url['pathname'];
}
