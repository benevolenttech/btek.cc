<?php
$_SERVER['HTTP_HOST'] = 'localhost:8000';
$_SERVER['REQUEST_URI'] = '/about';
set_include_path(get_include_path() . PATH_SEPARATOR . '/Users/brian.dombrowski/Dev/_projects/benevolenttek/benevolent.tech/bt-jekyll-website');

// $_SERVER['DOCUMENT_ROOT'] = '/Users/brian.dombrowski/Dev/_projects/benevolenttek/benevolent.tech/bt-jekyll-website/public';// require_once $argv[1];

require_once 'app/routes/about.php';
$aboutRoute->render();
// echo $aboutRoute->title;
// pageStart();
// $path = $_SERVER['SCRIPT_FILENAME'];
// $path = str_replace('routes/', '', $path);
// $path = str_replace('/index', '', $path);
// $path = str_replace('.php', '', $path);
// echo $path;
