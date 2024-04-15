<?php
$layout = "default";
?>
{% assign portfolio = site.pages | where: "path", "portfolio.html" | first %}

<section class="hero diagonal">
	<div class="container">
		{% if portfolio.heading %}
		<h2>
			<a href="/portfolio/">{{ portfolio.heading }}</a> / {{ page.title | capitalize }}
		</h2>
		{% endif %}
		{% if page.subtitle %}
		<p class="subtext">{{ page.subtitle }}</p>
		{% endif %}
	</div>
</section>

<section class="diagonal">
	<div class="container">
		<p>
			<img alt="client logo" src="{% page.imagePath %}" class="screenshot">
		</p>
		<div>
			{{ content }}
		</div>
		<p>
			<a aria-label="client website" href="{{ page.externalUrl }}">View {{ page.title }} &rarr;</a>
		</p>
	</div>
</section>