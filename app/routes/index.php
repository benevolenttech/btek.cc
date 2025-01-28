<?php

require_once 'app/layouts/page.php';
require_once 'app/bits/team-up-section.php';

return function () {
  pageLayout(
    title: "Home",
    heading: "Software is hard. We're here to help and empower you.",
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
            <li>
              <a aria-label="connect with alan" href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')">
                <img alt="apmfoodworks logo" src="/img/bt-apmfoodworks.png" width="300" style="max-width:80%;">
              </a>
            </li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a aria-label="connect with alan" href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')">
              <img alt="apmfoodworks logo" src="/img/bt-apmfoodworks.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <h3>
            <a aria-label="connect with alan" href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')">
              APM Foodworks
            </a>
          </h3>
          <p>
            "btek recommended tweaks to our blog posts and unifying our 3 brands into one e-commerce&nbsp;
            website to maximize SEO. We saw a 240% boost in Google rankings in 1 month!" -&nbsp;
            <a aria-label="connect with alan" href="#connect-with-alan" onclick="handleRefClick(event, 'Alan Magan')">
              Alan Magan
            </a>
          </p>
        </div>
      </div>
    </section>

    <section class="diagonal patterned">
      <div class="container halves">
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a aria-label="connect with ryan" href="mailto:bdombro@gmail.com">
              <img alt=" image of productmaven website" src="/img/bt-product-maven.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <h3>
            <a aria-label="connect with ryan" href="mailto:bdombro@gmail.com">Product Maven</a>
          </h3>
          <p>
            "btek acts as our in-house website tech expert, advising us on our hardest web projects." -&nbsp;
            <a href="mailto:bdombro@gmail.com" target="_blank">Ryan</a>
          </p>
        </div>
        <div>
          <ul class="image-list">
            <li>
              <a aria-label="connect with ryan" href="mailto:bdombro@gmail.com">
                <img alt="image of productmaven website" src="/img/bt-product-maven.png" width="300" style="max-width:80%;">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="diagonal alternate">
      <div class="container halves">
        <div>
          <ul class="image-list image-list-right">
            <li>
              <a aria-label="connect with hirely" href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')">
                <img alt="image of hirely website" src="/img/bt-hirely.png" width="300" style="max-width:80%;">
              </a>
            </li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a aria-label="connect with hirely" href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')">
              <img alt="image of hirely website" src="/img/bt-hirely.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <h3>
            <a aria-label="connect with hirely" href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')">
              Hirely
            </a>
          </h3>
          <p>
            "We had btek get our cloud application project back on track after a messy loss with our former&nbsp;
            leader. Can't recommend enough!" -&nbsp;
            <a href="mailto:chris.rosenbaum@gmail.com?subject=Would you recommend btek?">Chris</a>
          </p>
        </div>
      </div>
    </section>

    <section class="diagonal patterned">
      <div class="container halves">
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a aria-label="connect with sara" href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">
              <img alt="sara image" src="/img/bt-saraanani.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <h3>
            <a href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">
              Sara Anani, Inc.
            </a>
          </h3>
          <p>
            "There aren't many dev shops out there that could deliver my vision -- btek is truly skilled&nbsp;
            at website development." -&nbsp;
            <a href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">Sara Anani</a>
          </p>
        </div>
        <div>
          <ul class="image-list">
            <li>
              <a aria-label="connect with sara" href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">
                <img alt="sara image" src="/img/bt-saraanani.png" width="300" style="max-width:80%;">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="diagonal alternate">
      <div class="container halves">
        <div>
          <ul class="image-list image-list-right">
            <li>
              <a aria-label="connect with Season's Therapy" href="#connect-with-seasonstherapy" onclick="handleRefClick(event, 'Seasons Therapy')">
                <img alt="image of seasonstherapy website" src="/img/bt-seasons-therapy.png" width="300" style="max-width:80%;">
              </a>
            </li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a aria-label="connect with Season's Therapy" href="#connect-with-seasonstherapy" onclick="handleRefClick(event, 'Seasons Therapy')">
              <img alt="image of seasonstherapy website" src="/img/bt-seasons-therapy.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <h3>
            <a aria-label="connect with Season's Therapy" href="#connect-with-seasonstherapy" onclick="handleRefClick(event, 'Seasons Therapy')">Seasons Therapy</a>
          </h3>
          <p>
            "I had btek do my website 4 years ago and couldn't be happier. Best of all, the design was so on-point&nbsp;
            that it's still relevant!" -&nbsp;
            <a aria-label="connect with Ruth" href="mailto:ruthdom@comcast.net?subject=Would you recommend btek?">Ruth</a>
          </p>
        </div>
      </div>
    </section>

    <?php teamUpSection(); ?>

    <!--<section class="diagonal patterned">-->
    <!--<div class="container halves">-->
    <!--<div>-->
    <!--<h3>Some of our work</h3>-->
    <!--<p>We take pride in our previous work and our happy partners. We cater to small businesses and non-profits to boost business and increase exposure.</p>-->
    <!--<p>
<a href="/portfolio/">View Full Portfolio &rarr;<p></p>-->
    <!--</div>-->
    <!--<div>-->
    <!--<ul class="image-grid home">-->
    <!--{% for client in clients limit: 4 %}-->
    <!--&lt;!&ndash; <li>
<a href="{{ client.url }}">
<img src="{% client.imagePath %}" /> &ndash;&gt;-->
    <!--<li style="background-image:url({% client.imagePath %});">
<a target="_blank" href="{{ client.externalUrl }}"></a>-->
    <!--{% endfor %}-->
    <!--</ul>-->
    <!--</div>-->
    <!--</div>-->
    <!--</section>-->

<?php
    }
  );
};
