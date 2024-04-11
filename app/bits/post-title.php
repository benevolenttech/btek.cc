<?php
function postTitle(Post $p)
{
?>
	<h3><a href="/posts/<?php echo $p->slug ?>"><?php echo $p->title ?></a></h3>
<?php
}
