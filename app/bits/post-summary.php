<?php
require_once 'post-title.php';
require_once 'post-details.php';

function postSummary(Post $p, bool $isBack = false)
{
?>
	<?php postTitle($p); ?>
	<?php postDetails($p); ?>
	<div class="post-content">
		<p><?php echo $p->description ?></p>
		<p>
			<a href="/posts/<?php echo $p->slug ?>">
				<?php if ($isBack) : ?>
					&larr; Read more
				<?php else : ?>
					Read More &rarr;
				<?php endif; ?>
			</a>
		</p>
	</div>
<?php
}
