<?php
header("Content-type: text/xml");

$siteUrl = $siteMetaCol->gbn('url');

// glob the current folder for all PHP files recursively. Include the files in the current folder too, not just subfolders
$routePaths = glob(__DIR__ . "/{,*/,*/*/,*/*/*/,*/*/*/*/,*/*/*/*/*/,*/*/*/*/*/*/,*/*/*/*/*/*/*/}*.php", GLOB_BRACE);
// filter routes with [arg] in the path
$routePaths = array_filter($routePaths, function ($r) {
  if (strpos($r, 'sitemap.xml.php')) {
    return false;
  }
  if (strpos($r, '[arg]')) {
    return false;
  }
  return true;
});

$routes = array_map(function ($rp) {
  global $siteUrl;
  $url = $rp;
  $url = str_replace(__DIR__, '', $url);
  $url = str_replace('index.php', '', $url);
  $url = str_replace('.php', '/', $url);
  $isHomepage = $url === '/';
  $url = $siteUrl . $url;
  return [
    'url' => $url,
    'lastmod' => date('Y-m-d', filemtime($rp)),
    'changefreq' => 'weekly',
    'priority' => $isHomepage ? '1.0' : '0.8',
  ];
}, $routePaths);

// add posts
foreach ($postCol->find(limit: 9999999) as $post) {
  $routes[] = [
    'url' => $siteUrl . '/posts/' . $post->slug . '/',
    'lastmod' => date('Y-m-d', $post->updatedAt),
    'changefreq' => 'monthly',
    'priority' => '0.5',
  ];
};

return function () {
  global $routes;
  // You can't include this line in the template or PHP barfs
  echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
  <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($routes as $route) : ?>
      <url>
        <loc><?php echo $route['url']; ?></loc>
        <lastmod><?php echo $route['lastmod']; ?></lastmod>
        <changefreq><?php echo $route['changefreq']; ?></changefreq>
        <priority><?php echo $route['priority']; ?></priority>
      </url>
    <?php endforeach; ?>
  </urlset>
<?php
};
