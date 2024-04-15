<?php
require_once 'default.php';

function pageLayout(
	callable $renderChildren,
	string $title = null,
	?string $subtitle = null,
	?string $heading = null,
	?string $description = null,
	?string $image = null,
	?string $author = null,
	?bool $fullWidth = false,
) {
	defaultLayout(
		title: $title,
		description: $description,
		image: $image,
		author: $author,
		renderChildren: function () use (
			$subtitle,
			$heading,
			$fullWidth,
			$renderChildren,
		) {
?>
		<section class="hero diagonal">
			<div class="container" <?php if ($fullWidth) : ?> style="max-width: 100%" <?php endif ?>>
				<?php if ($heading) : ?>
					<h1 style="display:none;"><?php echo $heading; ?></h1>
					<h2><?php echo $heading; ?></h2>
				<?php endif ?>

				<?php if ($subtitle) : ?>
					<p class="subtext">
						<?php echo $subtitle; ?>
					</p>
				<?php endif ?>
			</div>
		</section>

		<?php $renderChildren(); ?>

<?php
		},
	);
}
