<?php
require_once 'post-title.php';

function postSummary(Db\Post $post)
{
?>
	<?php postTitle($post); ?>
	<div class="post-content">
		<p><?php echo $post->description ?></p>
		<p><a href="/posts/<?php echo $post->slug ?>">Read More &rarr;</a></p>
	</div>
<?php
}
