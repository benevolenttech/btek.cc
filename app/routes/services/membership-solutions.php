<?php
require_once 'app/layouts/page.php';
require_once 'app/bits/team-up-section.php';

return function () {
  pageLayout(
    title: "Membership Solutions",
    heading: "Get and Keep Subscribers",
    subtitle: "We build membership sites that reduce churn and grow recurring revenue.",
    description: "We build membership sites that reduce churn and grow recurring revenue.",
    renderChildren: function () {
?>

    <section class="diagonal" style="padding:10px 0;" id="learn-more">
      <p style="text-align:right; margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px;">
        <a href="#learn-more" style="color:#666">See how &#8595;</a>
      </p>
    </section>

    <section class="diagonal alternate" style="padding-bottom:50px; min-height:450px;">
      <div class="container">
        <h2 style="text-align:center;">Why Choose Us</h2><br>
      </div>
      <div class="container halves">
        <div>
          <ol>
            <li>Unlike other technical firms, we specialize in sites: member management, on-boarding, trial plans, churn and revenue tracking.</li>
            <li>All of our projects are fixed-fee, when we give you a price for the project that's the price you'll pay. We will never hit you up for more money half-way through the project.</li>
          </ol>
        </div>
        <div>
          <img alt="member churn chart" width="90%" src="/img/churn.png" />
        </div>
      </div>
    </section>

    <section class="diagonal patterned">
      <div class="container halves">
        <div>
          <ul class="image-list image-list-right">
            <li>
              <a aria-label="connect with hirely" href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')">
                <img alt="image of hirely website" alt="hirely website" src="/img/bt-hirely.png" width="300" style="max-width:80%;">
              </a>
            </li>
          </ul>
        </div>
        <div>
          <p class="hide-above-mobile" style="text-align: center;">
            <a aria-label="connect with hirely" href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')">
              <img alt="image of hirely website" alt="hirely website" src="/img/bt-hirely.png" width="200" style="max-width:80%;">
            </a>
          </p>
          <h3>
            Testimonial:&nbsp;
            <a aria-label="connect with hirely" href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')">Hirely</a>
          </h3>
          <p>"We had btek get our cloud application project back on track after a messy loss with our former leader. Can't recommend enough!" - <a href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')">Chris</a></p>
        </div>
      </div>
    </section>

    <?php teamUpSection(""); ?>

    <!--<section class="diagonal patterned">-->
    <!--<div class="container">-->
    <!--<ul class="image-grid portfolio">-->
    <!--{% for client in clients %}-->
    <!--<li data-bg-img="url({% client.imagePath %})">-->
    <!--&lt;!&ndash; <a href="{{ client.url }}"> &ndash;&gt;-->
    <!--<a target="_blank" href="{{ client.externalUrl }}">-->
    <!--<div class="details">-->
    <!--<div class="name">{{ client.name }}</div>-->
    <!--<div class="position">{{ client.subtitle }}</div>-->
    <!--</div>-->
    <!--</a>-->
    <!--</li>-->
    <!--{% endfor %}-->
    <!--<li class="filler"></li>-->
    <!--&lt;!&ndash; <li class="filler"></li> &ndash;&gt;-->
    <!--</ul>-->
    <!--</div>-->
    <!--</section>-->

<?php
    }
  );
};
