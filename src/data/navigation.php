<?php
require_once 'site.php';

function pathIsActive($path)
{
  return $path === $_SERVER['REQUEST_URI'];
}

$routes = [
  'about' => [
    'name' => 'About',
    'path' => '/about',
    'isActive' => pathIsActive('/about'),
  ],
  'services' => [
    'name' => 'Services',
    'path' => '/services',
    'isActive' => pathIsActive('/services'),
  ],
  'learn' => [
    'name' => 'Learn',
    'path' => '/learning',
    'isActive' => pathIsActive('/learning'),
  ],
  'grapevine' => [
    'name' => 'Grapevine',
    'path' => '/grapevine',
    'isActive' => pathIsActive('/grapevine'),
  ],
  'connect' => [
    'name' => 'Connect',
    'path' => '/contact',
    'isActive' => pathIsActive('/contact'),
  ],
];

$url = new class
{
  public string $base;
  public string $pathname;
  public string $qs;
  public string $rel;
  public string $full;
  public string $env;
  public bool $isProd;
  public bool $isDev;
  public function __construct()
  {
    global $site;
    $this->base = $_SERVER['HTTP_HOST'];
    $this->rel = $_SERVER['REQUEST_URI'];
    $this->pathname = explode('?', $this->rel)[0];
    $this->qs = explode('?', $this->rel)[1] ?? '';
    $this->full = $this->base . $this->rel;
    $this->env = $site->url ? 'prod' : 'dev';
    $this->isProd = $this->env === 'prod';
    $this->isDev = $this->env === 'dev';
  }
};
