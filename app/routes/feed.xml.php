<?php
header("Content-type: text/xml");

return function () {
  global $postCol, $siteMetaCol;
  // You can't include this line in the template or PHP barfs
  echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";

  $siteTitle = $siteMetaCol->gbn('title');
  $siteUrl = $siteMetaCol->gbn('url');
  $siteDes = $siteMetaCol->gbn('description');
  $posts = $postCol->find(limit: 9999999, sortDir: "dsc");
?>
  <rss version="2.0">
    <channel>
      <title><?php echo $siteTitle; ?></title>
      <link><?php echo $siteUrl; ?></link>
      <description><?php echo $siteDes; ?></description>
      <language>en-us</language>
      <pubDate><?php echo date('r', $posts[0]->publishAt); ?></pubDate>
      <?php foreach ($posts as $post) : ?>
        <item>
          <title><?php echo $post->title; ?></title>
          <link><?php echo $siteUrl . '/posts/' . $post->slug; ?></link>
          <description><?php echo $post->description; ?></description>
          <pubDate><?php echo date('r', $post->publishAt); ?></pubDate>
        </item>
      <?php endforeach; ?>
    </channel>
  </rss>

<?php
};
