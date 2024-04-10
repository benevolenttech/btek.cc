<?php
require_once 'post-title.php';

function postSummary(Post $p)
{
?>
	<?php postTitle($p); ?>
	<div class="post-content">
		<p><?php echo $p->description ?></p>
		<p><a href="#">Read More &rarr;</a></p>
	</div>
<?php
}
