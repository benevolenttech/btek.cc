<?php
include $_SERVER['DOCUMENT_ROOT'] . '/src/data/categories.php';
function postTitle($post) {
	?>
	<h3><a href="/posts/$post['slug']"><?php echo $post['title'] ?></a></h3>
	<p class="post-details">
		<?php foreach ($post['categories'] as $category): ?>
			<?php $c = $categories[$category]; ?>
			<span class="blog-filter">
				<a
					href="/categories/<?php echo $c['slug'] ?>"
					style="text-transform: uppercase"
				><?php $c['title'] ?></a>
			</span>
		<?php endforeach; ?>
		<span class="post-date"><?php echo date("F d, Y", strtotime($post['date'])); ?></span>
	</p>
	<?php
}

