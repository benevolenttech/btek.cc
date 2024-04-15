<?php
require_once 'app/layouts/page.php';
require_once 'app/bits/competitive-advantage-section.php';

return function () {
  pageLayout(
    title: "Sales Tech Consulting",
    heading: "Sales Tech Consulting",
    subtitle: "We help you choose and implement the best cloud sales software for your business.",
    description: "We help you choose and implement the best cloud sales software for your business.",
    renderChildren: function () {
?>

    <section class="diagonal" style="padding:10px 0;" id="learn-more">
      <p style="text-align:right; margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px;">
        <a href="#learn-more" style="color:#666">See how &#8595;</a>
      </p>
    </section>

    <?php competitiveAdvantageSection(
        renderLeft: function () {
    ?>
      <ol>
        <li><strong>Experienced and Unbiased.</strong> We've worked with dozens of marketing and sales services and know what works and doesn't. We are especially experienced at Salesforce, unifying data and reporting.</li>
        <li><strong>Stay in Sync.</strong> Being a marketing agency at heart, we prioritize making marketing and sales work together in harmony.</li>
        <li><strong>Low Risk.</strong> All of our projects are fixed-fee -- when we give you a price for the project that's the price you'll pay.</li>
        <li><strong>Service Obsessed.</strong> We provide world-class training, answer emails quickly and fix critical errors within 24 hours -- we are really serious about service.</li>
        <li><strong>Endurance.</strong> We're in this for the long haul, so plan on our high quality services indefinitely.</li>
      </ol>

    <?php
        }
      ); ?>

    <section class="diagonal patterned">
      <div class="container halves">
        <div>
          <ul class="image-list image-list-right">
            <li>
              <a aria-label="connect with Matt" href="#connect-with-matt" onclick="handleRefClick(event, 'Matt Magan')">
                <img alt="summit park website" src="/img/bt-summit-park.png" width="300" style="max-width:80%;">
              </a>
            </li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a aria-label="connect with Matt" href="#connect-with-matt" onclick="handleRefClick(event, 'Matt Magan')">
              <img alt="summit park website" src="/img/bt-summit-park.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <!--<h3>Testimonial: <a href="https://www.hirely.com" >Hirely</a></h3>-->
          <p style="font-size:1.8rem;">
            "btek is a tremendous Salesforce partner to help affect transformational change and accelerate our growth initiatives without disruption to the organization. They bring a wealth of experience and consultative business sense to deliver on-target, on-time, and on-budget."
            - <a aria-label="connect with Matt" href="#connect-with-matt" onclick="handleRefClick(event, 'Matt Magan')">
              Matt @ SummitParkLLC.com
            </a>
          </p>
        </div>
      </div>
    </section>
<?php
    }
  );
};
