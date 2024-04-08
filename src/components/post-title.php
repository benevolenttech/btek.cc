<?php
require_once 'src/data/categories/category-collection.php';
require_once 'src/data/posts/post.php';

function postTitle(Post $post)
{
	global $categoryCol;
?>
	<h3><a href="/posts/<?php echo $post->slug ?>']"><?php echo $post->title ?></a></h3>
	<p class="post-details">
		<?php foreach ($post->categories as $category) : ?>
			<?php $c = $categoryCol->get($category); ?>
			<span class="blog-filter">
				<a href="/categories/<?php echo $c->slug ?>" style="text-transform: uppercase"><?php $c->title ?></a>
			</span>
		<?php endforeach; ?>
		<span class="post-date"><?php echo date("F d, Y", strtotime($post->publishedAt)); ?></span>
	</p>
<?php
}
