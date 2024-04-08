<?php
$layout = "default";
?> 
<section class="hero diagonal">
	<div class="container" {% if page.full_width %}style="max-width: 100%"{% endif %}>
		{% if page.heading %}
			{% assign heading = page.heading %}
		{% elsif page.title %}
			{% assign heading = page.title %}
		{% endif %}

		{% if heading %}
			<h1 style="display:none;">{{ heading }}</h1>
			<h2>{{ heading }}</h2>
		{% endif %}

		{% if page.subtitle %}
			<p class="subtext">
				{{ page.subtitle }}
			</p>
		{% endif %}
	</div>
</section>

{{ content }}
