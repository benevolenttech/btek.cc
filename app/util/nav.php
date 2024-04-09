<?php
require_once 'app/db.php';

function pathIsActive($path)
{
  return $path === $_SERVER['REQUEST_URI'];
}

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
    global $siteMetaCol;
    $this->base = $_SERVER['HTTP_HOST'];
    $this->rel = $_SERVER['REQUEST_URI'];
    $this->pathname = explode('?', $this->rel)[0];
    $this->qs = explode('?', $this->rel)[1] ?? '';
    $this->full = $this->base . $this->rel;
    $this->env = $siteMetaCol->getByName('url') ? 'prod' : 'dev';
    $this->isProd = $this->env === 'prod';
    $this->isDev = $this->env === 'dev';
  }
};


class RouteBase
{
  public string $path;
  public string $title;
  public string $subtitle;
  public string $heading;
  public string $description;
  public string $image;
  public bool $isActive;

  public function __construct()
  {
    $path = $_SERVER['SCRIPT_FILENAME'];
    $path = str_replace(
      'app/routes',
      '',
      $path
    );
    $path = str_replace('/index', '', $path);
    $path = str_replace('.php', '', $path);
    $this->path = $path;

    $this->isActive = pathIsActive($path);
  }
}
