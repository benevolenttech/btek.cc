<?php
require_once 'app/layouts/page.php';
require_once 'app/bits/post-list.php';
require_once 'app/bits/share.php';

pageLayout(
	title: "The Grapevine",
	heading: "The Grapevine",
	subtitle: "The Latest News from btek",
	description: "The Latest News from btek",
	renderChildren: function () {
?>

	<section class="share diagonal alternate" style="padding:10px 0;">
		<div class="not-skewed" style="margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px; font-size:19px;">
			<table style="float:right;">
				<tr>
					<td>Share on </td>
					<td style="padding-top:5px;"><?php share() ?></td>
				</tr>
			</table>
			<div style="clear:both"></div>
		</div>
	</section>

	<section class="diagonal">
		<!--<p style="font-size:50px;text-align:center;">Coming Soon!</p>-->

		<div class="text-container">
			<?php postList(); ?>
		</div>
	</section>

	<section class="share diagonal alternate" style="padding:10px 0;">
		<div class="not-skewed" style="margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px; font-size:19px;">
			<table style="float:right;">
				<tr>
					<td>Share on </td>
					<td style="padding-top:5px;"><?php share() ?></td>
				</tr>
			</table>
			<div style="clear:both"></div>
		</div>
	</section>

<?php
	}
);
