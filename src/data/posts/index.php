<?php

// include all the php files in this directory to get all the posts, and include them into a variable
$posts = [];
foreach (glob(__DIR__ . '/*.php') as $filename) {
  if ($filename !== __FILE__) {
    include $filename;
    $posts[] = $post;
  }
}