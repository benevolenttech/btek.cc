<?php
require_once 'app/layouts/page.php';
require_once 'app/bits/competitive-advantage-section.php';

return function () {
  pageLayout(
    title: "Website Development and Marketing",
    heading: "Website Development and Marketing",
    subtitle: "We help you grow your online fanbase.",
    description: "We help you grow your fanbase.",
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
        <li><strong>Skilled.</strong> We apply bleeding-edge technologies to experiment and analyze multiple marketing campaigns simultaneously -- getting you results fast.</li>
        <li><strong>Flexible.</strong> We have deep experience with many common website softwares and CMS like Wordpress, CraftCMS, Shopify, Big Commerce, Drupal, Squarespace, Weebly, Wix, and more.</li>
        <li><strong>Stay in Sync.</strong> Being a marketing agency at heart, we prioritize making marketing and sales software work together in harmony.</li>
        <li><strong>Quick.</strong> We use agile development practices to deploy in multiple phases, so that you can get live fast and improve over time.</li>
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
          <ul class="image-list">
            <li>
              <a aria-label="connect with sara" href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">
                <img alt="sara image" src="/img/bt-saraanani.png" width="300" style="max-width:80%;">
              </a>
            </li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a aria-label="connect with sara" href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">
              <img alt="sara image" src="/img/bt-saraanani.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <p style="font-size:1.8rem;">"There aren't many web shops out there that could deliver my vision -- btek is truly skilled at website development." - <a href="#connect-with-sara" onclick="handleRefClick(event, 'Sara Anani')">Sara Anani</a></p>
        </div>
      </div>
    </section>

<?php
    }
  );
};
