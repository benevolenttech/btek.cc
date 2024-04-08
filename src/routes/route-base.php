<?php

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
      'src/routes',
      '',
      $path
    );
    $path = str_replace('/index', '', $path);
    $path = str_replace('.php', '', $path);
    $this->path = $path;

    $this->isActive = $path === $_SERVER['REQUEST_URI'];
  }
}
