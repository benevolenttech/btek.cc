<?php
require_once 'app/db.php';
require_once 'post-summary.php';

function listPosts()
{
	global $postCol;
	foreach ($postCol->find() as $post) {
?>
		<li class="blog-post">
			<?php postSummary($post) ?>
		</li>
<?php
	}
}
