<?php

require_once 'app/layouts/page.php';

pageLayout(
  renderChildren: function () {
?>

  <section class="diagonal" style="padding:10px 0;" id="learn-more">
    <p style="text-align:right; margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px;">
      <a href="#learn-more" style="color:#666">What clients are saying &#8595;</a>
    </p>
  </section>

  <!--<section class="diagonal" style="padding:0px 0 10px; background:#94040B;">-->
  <!--<p style="text-align:center;margin-bottom:0;color:#ccc;">What clients are saying &#8595;</p>-->
  <!--</section>-->

  <section class="diagonal alternate">
    <div class="container halves">
      <div>
        <ul class="image-list image-list-right">
          <li><a href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')"><img src="/img/bt-apmfoodworks.png" width="300" style="max-width:80%;" /></a></li>
        </ul>
      </div>
      <div>
        <p class="hide-above-mobile" style="text-align: center;"><a href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')"><img src="/img/bt-apmfoodworks.png" width="200" style="max-width:80%;" /></a></p>
        <h3 class="editable"><a href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')">APM Foodworks</a></h3>
        <p class="editable">"btek recommended tweaks to our blog posts and unifying our 3 brands into one e-commerce website to maximize SEO. We saw a 240% boost in Google rankings in 1 month!" - <a href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')">Alan Magan</a></p>
      </div>
    </div>
  </section>

  <section class="diagonal patterned">
    <div class="container halves">
      <div>
        <p class="hide-above-mobile" style="text-align: center;"><a href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')"><img src="/img/bt-saraanani.png" width="200" style="max-width:80%;" /></a></p>
        <h3 class="editable"><a href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">Sara Anani, Inc.</a></h3>
        <p class="editable">"There aren't many dev shops out there that could deliver my vision -- btek is truly skilled at website development." - <a href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">Sara Anani</a></p>
      </div>
      <div>
        <ul class="image-list">
          <li><a href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')"><img src="/img/bt-saraanani.png" width="300" style="max-width:80%;" /></a></li>
        </ul>
      </div>
    </div>
  </section>

  <!--<section class="diagonal">-->
  <!--<div class="container editable" style="margin-top:20px;margin-bottom:-50px;max-width:700px;">-->
  <!--<h3 style="text-align:center;">How We Help</h3>-->
  <!--<ol>-->
  <!--<li>Building you a beautiful, sales-optimized website to guide customers happily down a path to purchasing your product, while at the same time reflecting your brand vision.</li>-->
  <!--<li>Getting your business more attention with custom-tailored search engine optimization, advertising and social media branding.</li>-->
  <!--<li>Continuous improvements based on real-world analytics.</li>-->
  <!--</ol>-->
  <!--</div>-->
  <!--</section>-->

  <section class="diagonal alternate">
    <div class="container halves">
      <div>
        <ul class="image-list">
          <li style="font-size:150%;">You</li>
          <li style="margin-bottom:20px;">+</li>
          <li><img src="/img/thumb-lg.png" width="130" style="max-width:80%;" /></li>
        </ul>
      </div>
      <div>
        <p class="hide-above-mobile" style="font-size:60px;">You + <img src="/img/thumb-lg.png" width="55" /></p>
        <h3 class="editable">We Are Your Partners</h3>
        <p class="editable">Customers are searching the internet right now for your offering and choose competitors because they don't know you exist.</p>
        <p><a href="/contact" class="button">Team up and get found &#8594;</a></p>
        <!--<ol>-->
        <!--<li>Strategy</li>-->
        <!--<li>Keyword planning</li>-->
        <!--<li>On-site and off-site optimization</li>-->
        <!--<li>Content creation</li>-->
        <!--<li>Ad campaigns</li>-->
        <!--</ol>-->
        <!--<p>↳ all with a focus on generating leads and growing your business.</p>-->
      </div>
    </div>
  </section>

  <!--<section class="diagonal patterned">-->
  <!--<div class="container halves">-->
  <!--<div>-->
  <!--<h3 class="editable">Some of our work</h3>-->
  <!--<p class="editable">We take pride in our previous work and our happy partners. We cater to small businesses and non-profits to boost business and increase exposure.</p>-->
  <!--<p class="editable"><a href="/portfolio/">View Full Portfolio &rarr;<p></p>-->
  <!--</div>-->
  <!--<div>-->
  <!--<ul class="image-grid home">-->
  <!--{% for client in clients limit: 4 %}-->
  <!--&lt;!&ndash; <li><a href="{{ client.url }}"><img src="{% client.imagePath %}" /> &ndash;&gt;-->
  <!--<li style="background-image:url({% client.imagePath %});"><a target="_blank" href="{{ client.externalUrl }}"></a>-->
  <!--{% endfor %}-->
  <!--</ul>-->
  <!--</div>-->
  <!--</div>-->
  <!--</section>-->

<?php
  }
);
