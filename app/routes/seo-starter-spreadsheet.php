<?php
require_once 'app/layouts/page.php';

return function () {
	pageLayout(
		title: "SEO Starter Spreadsheet",
		heading: "Download our free SEO Starter Spreadsheet",
		subtitle: "Add some jet-fuel to your SEO start.",
		description: "Download our free SEO Starter Spreadsheet to jump start your SEO.",
		renderChildren: function () {
?>

		<section class="diagonal">
			<div class="container">
				<p>Join our famous marketing course to download the SEO Starter Spreadsheet now!</p>
				<form action="/seo-starter-spreadsheet-success/" method="post">
					<input type="hidden" name="_to" value="hi@btek.cc" />
					<input type="text" name="_gotcha" style="display: none;" />

					<div class="halves">
						<div>
							<label for="name">First Name</label>
							<input type="text" name="first-name" id="first-name" placeholder="John" />
						</div>

						<div>
							<label for="name">Last Name</label>
							<input type="text" name="last-name" id="last-name" placeholder="Doe" />
						</div>
					</div>

					<label for="email">Email Address</label>
					<input type="email" name="email" id="email" placeholder="john@appleseed.com" required />

					<input type="submit" value="Sign-up and Download" />
				</form>
			</div>
		</section>

<?php
		}
	);
};
