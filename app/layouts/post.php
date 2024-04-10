<?php
require_once 'app/bits/share.php';
$layout = "page";
$author = $person[$page['author_staff_member']];
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
	<div class="blog-post text-container" style="margin-bottom:0;">
		{% include post-title.html post=page %}
		<div class="post-content">
			{{ content }}
		</div>
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
</section>{% if page.author_staff_member %}
<section class="diagonal patterned">
	<div class="container">
		<h2>Author</h2>
		<ul class="image-grid">
			<li style="max-width:500px; margin:auto;"><?php echo $author['bio'] ?></li>
		</ul>
	</div>
</section>
{% endif %}

{% if page.next or page.previous %}
<section class="diagonal alternate">
	<div class="text-container">
		{% if page.next %}
		<h2>Next post</h2>
		{% else %}
		<h2>Previous post</h2>
		{% endif %}
		<div class="blog-post">
			{% if page.next %}
			{% include post-summary.html post=page.next %}
			{% elsif page.previous %}
			{% include post-summary.html post=page.previous %}
			{% endif %}
		</div>
	</div>
</section>
{% endif %}

{% if site.disqus_shortname and page.show_comments %}
<section class="diagonal">
	<div class="container">
		<h2>Comments</h2>
		<div id="disqus_thread"></div>
		<script>
			/**
			 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(fn() { // DON'T EDIT BELOW THIS LINE
				var d = document,
					s = d.createElement('script');
				s.src = '//{{ site.disqus_shortname }}.disqus.com/embed.js';
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
			})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	</div>
</section>
{% endif %}