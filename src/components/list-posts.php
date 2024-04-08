<?php
include $_SERVER['DOCUMENT_ROOT'] . '/src/data/posts/index.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/components/post-summary.php';

function listPosts() {
	foreach ($posts as $post) {
		?>
		<li class="blog-post">
			<?php postSummary($post) ?>
		</li>
		<?php
	}
}
