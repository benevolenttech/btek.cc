<?php
require_once 'post-summary.php';

function postList(
	?int $limit = null,
	?array $exclude = null,
	?array $sortBy = null,
	?string $sortDir = null,
	?array $categories = null,
	?bool $isPublished = null,
	?array $series = null,
) {
	global $postCol;
	$posts = $postCol->find(
		limit: $limit,
		exclude: $exclude,
		sortBy: $sortBy,
		sortDir: $sortDir,
		categories: $categories,
		isPublished: $isPublished,
		series: $series,
	);
?>
	<ul class="blog-posts">
		<?php foreach ($posts as $post) : ?>
			<li class="blog-post">
				<?php postSummary($post) ?>
			</li>
			<!--{% include post-lists.html posts=paginator.posts %}-->
		<?php endforeach; ?>
	</ul>
<?php
}
