<?php
function staffMember($member) {
	?>
	<div class="square-image">
		<img
			src="<?php echo $member['imagePath'] ?>"
			alt="<?php echo $member['name'] ?> headshot"
		/>
	</div>
	<div class="details">
		<div class="name"><?php echo $member['name'] ?></div>
		<div class="position"><?php echo $member['position'] ?></div>
	</div>
	<?php
}