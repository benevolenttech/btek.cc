<?php
function postDetails(Post $p)
{
  global $categoryCol;
?>
  <p class="post-details">
    <?php foreach ($p->categories as $category) : ?>
      <?php $c = $categoryCol->g($category); ?>
      <span class="blog-filter">
        <a href="/categories/<?php echo $c->slug ?>" style="text-transform: uppercase"><?php echo $c->title ?></a>
      </span>
    <?php endforeach; ?>
    <span class="post-date"><?php echo date("F d, Y", $p->publishAt); ?></span>
  </p>
<?php
}
