<?php

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
  public array $posArgs = []; // is filled in by router.php
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
    // full= check $_SERVER if https or http and add that to the string
    $this->full =
      (isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http') .
      '://' . $this->base . $this->rel;
    $this->env = $siteMetaCol->gbn('url') ? 'prod' : 'dev';
    $this->isProd = $this->env === 'prod';
    $this->isDev = $this->env === 'dev';
  }
};

class RouteBase
{
  public string $path;
  public string $title;
  public string $subtitle = "";
  public string $heading;
  public string $description = "Software  hard. We're here to help and empower you.";
  public string $image = "/img/benevolent_tech_dc_seo.png";
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
