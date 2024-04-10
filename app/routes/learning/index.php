<?php
require_once 'app/layouts/page.php';
require_once 'app/bits/share.php';
require_once 'app/bits/post-list.php';

pageLayout(
	title: "Learning Center",
	heading: "Learning Center",
	subtitle: "Our tips and tricks on charting the digital world.",
	description: "Our tips and tricks on charting the digital world.",
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
			<p class="editor-link"><a href="cloudcannon:collections/_posts" class="btn"><strong>&#9998;</strong> Add Post</a></p>
			<?php postList(categories: ["0007", "0008"], sortBy: ["publishAt"]); ?>
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
