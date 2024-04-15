<?php
require_once 'app/layouts/page.php';
require_once 'app/bits/competitive-advantage-section.php';

return function () {
  pageLayout(
    title: "Mobile App Development",
    heading: "Bleeding Edge Mobile App Development",
    subtitle: "We build mobile apps that are crazy easy to maintain and extend.",
    description: "We build mobile apps that are crazy easy to maintain and extend.",
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
        <li><strong>Stay in Sync.</strong> Being a marketing agency at heart, we prioritize making marketing and sales software work together in harmony.</li>
        <li><strong>Simple.</strong> Our unified development process allows us to maintain one codebase for all mobile platforms, thereby slashing costs of maintenance and enhancements.</li>
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
              <a aria-label="connect with hirely" href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')">
                <img alt="hirely website" src="/img/bt-hirely.png" width="300" style="max-width:80%;">
              </a>
            </li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a target="_blank" href="https://hirely.us">
              <img alt="hirely website" src="/img/bt-hirely.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <p style="font-size:1.8rem;">"btek used bleeding-edge app technology to simplify our internal operations app and smoothly launch 40% ahead of schedule." - <a href="mailto:chris.rosenbaum@gmail.com?subject=Would you recommend btek?">Chris @ Hirely.us</a></p>
        </div>
      </div>
    </section>
<?php
    }
  );
};
