<?php
function postTitle(Post $p)
{
	global $categoryCol;
?>
	<h3><a href="/posts/<?php echo $p->slug ?>"><?php echo $p->title ?></a></h3>
	<p class="post-details">
		<?php foreach ($p->categories as $category) : ?>
			<?php $c = $categoryCol->g($category); ?>
			<span class="blog-filter">
				<a href="/categories/<?php echo $c->slug ?>" style="text-transform: uppercase"><?php $c->title ?></a>
			</span>
		<?php endforeach; ?>
		<span class="post-date"><?php echo date("F d, Y", strtotime($p->publishAt)); ?></span>
	</p>
<?php
}
