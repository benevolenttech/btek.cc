<?php


// require_once 'app/db.php/site-meta-collection.php';

// echo $siteMeta->title;

$postCol = new class
{
  public function __construct()
  {
  }
  public function render()
  {
    global $siteMetaCol;
    echo $siteMetaCol->getByName('title');
  }
};
return $postCol;
