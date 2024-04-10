<?php

function staffMember(Person $person)
{
?>
	<div class="square-image">
		<img src="<?php echo $person->imagePath ?>" alt="<?php echo $person->name ?>" />
	</div>
	<div class="details">
		<div class="name"><?php echo $person->name ?></div>
		<div class="position"><?php echo $person->position ?></div>
	</div>
<?php
}
