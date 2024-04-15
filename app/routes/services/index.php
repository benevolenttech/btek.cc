<?php
require_once 'app/layouts/page.php';
require_once 'app/bits/team-up-section.php';

return function () {
  pageLayout(
    title: "Services",
    heading: "Reliable and Fast Web Services",
    subtitle: "We build mobile apps, websites, campaigns and sales operations software for high achievers.",
    description: "We build mobile apps, websites, campaigns and sales operations software for high achievers.",
    renderChildren: function () {
?>

    <style>
      /* Hide the newsletter signup */
      .diagonal-newsletter {
        display: none;
      }
    </style>

    <section class="diagonal" style="padding:10px 0;" id="learn-more">
      <p style="text-align:right; margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px;">
        <a href="#learn-more" style="color:#666">See how &#8595;</a>
      </p>
    </section>

    <section class="diagonal alternate">
      <div class="container halves">
        <div>
          <ul class="image-list image-list-right">
            <li>
              <a href="/services/mobile-app-development">
                <img alt="hirely website" src="/img/bt-hirely.png" width="300" style="max-width:80%;">
              </a>
            </li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a href="/services/mobile-app-development">
              <img alt="hirely website" src="/img/bt-hirely.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <h3>
            <a href="/services/mobile-app-development">Mobile App Development</a>
          </h3>
          <p style="font-size:1.2rem;">"btek used bleeding-edge app technology to simplify our internal operations app and smoothly launch 40% ahead of schedule." - <a href="mailto:chris.rosenbaum@gmail.com?subject=Would you recommend btek?">Chris @ Hirely.us</a></p>
          <p>
            <a href="/services/mobile-app-development" class="button">Learn More &#8594;</a>
          </p>
        </div>
      </div>
    </section>

    <section class="diagonal patterned">
      <div class="container halves">
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a href="/services/website-marketing">
              <img alt="picture of Sara" src="/img/bt-saraanani.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <h3>
            <a href="/services/website-marketing">Website Development &amp; Marketing</a>
          </h3>
          <p style="font-size:1.2rem;">
            "There aren't many web shops out there that could deliver my vision -- btek is truly skilled at website development." -&nbsp;
            <a aria-label="connect with sara" href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">Sara Anani</a>
          </p>
          <p>
            <a href="/services/website-marketing" class="button">Learn More &#8594;</a>
          </p>
        </div>
        <div>
          <ul class="image-list">
            <li>
              <a href="/services/website-marketing">
                <img alt="picture of Sara" src="/img/bt-saraanani.png" width="300" style="max-width:80%;">
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
              <a aria-label="sales tech consulting" href="/services/salesforce-consulting">
                <img alt="summit park website" src="/img/bt-summit-park.png" width="300" style="max-width:80%;">
              </a>
            </li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a aria-label="sales tech consulting" href="/services/salesforce-consulting">
              <img alt="summit park website" src="/img/bt-summit-park.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <h3>
            <a href="/services/salesforce-consulting">Sales Tech Consulting</a>
          </h3>
          <p style="font-size:1.2rem;">"btek is a tremendous Salesforce partner to help affect transformational change and accelerate our growth initiatives without disruption to the organization. They bring a wealth of experience and consultative business sense to deliver on-target, on-time, and on-budget."
            - <a aria-label="connect with Matt" href="#connect-with-matt" onclick="handleRefClick(event, 'Matt Magan')">
              Matt @ SummitParkLLC.com
            </a>
          </p>
          <p>
            <a href="/services/salesforce-consulting" class="button">Learn More &#8594;</a>
          </p>
        </div>
      </div>
    </section>

    <?php teamUpSection(''); ?>

<?php
    }
  );
};
