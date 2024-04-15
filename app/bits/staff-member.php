<?php

function staffMember(Person $person)
{
?>
	<div class="square-image">
		<img alt="<?php echo $person->name ?>" src="<?php echo $person->imagePath ?>" />
	</div>
	<div class="details">
		<div class="name"><?php echo $person->name ?></div>
		<div class="position"><?php echo $person->position ?></div>
	</div>
<?php
}
