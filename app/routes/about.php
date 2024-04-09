<?php
require_once 'app/layouts/page.php';
require_once 'app/bits/staff-member.php';

$aboutRoute = new class extends RouteBase
{
  public string $title = "About";
  public string $subtitle = "We have a benevolent mission.";
  public string $heading = "We have a benevolent mission.";
  public string $description = "We strive to ensure our communication services truly benefit businesses and the communities they serve.";
  public string $image = "/img/benevolent_tech_dc_seo.png";

  public function render()
  {
    pageLayout(
      title: $this->title,
      subtitle: $this->subtitle,
      heading: $this->heading,
      description: $this->description,
      image: $this->image,
      fullWidth: false,
      renderChildren: function () {
        global $people;
?>
      <section class="diagonal alternate" style="padding-bottom:50px;">
        <div class="container">
          <p><img alt="" width="100%" height="auto" src="/img/equation.svg" /></p>
          <p>I started btek because I love working with and helping small businesses, especially those who foster community. Coming from a technical background, I found my interests and skills best align with small businesses with software and custom electronics.</p>
          <p class="hide-on-mobile" style="float:right; margin:0 30px 20px;padding:20px 30px 10px;text-align:center;border:1px solid gray;">
            <strong>Total Customers Served</strong><br>
            <strong style="font-size:300%;" id="lead-ticker"><span style="visibility:hidden;">___,___</span></strong>
          </p>
          <p>Towards that end, I've focused my entire career around website technologies and small electronics. I leverage my experience and passion to hand-pick and implement technologies which are beautiful inside and out, affordable, easy to use,&nbsp;<em>and</em> boost sales. Think of us as Red Bull for your business.</p>
          <div style="clear:both;"></div>
          <p style="width:60%;">
            <strong>Here's our 2 technical pillars:</strong><br>
          <ol>
            <li>Building beautiful, highly engaging web applications</li>
            <li>Shockingly affordable and intelligent electronics</li>
          </ol>
          </p>
          <p><strong>Customers are dropping off your website and going to competitors because your customer portal sucks. <a href="/contact">Team up now</a> and get found.</strong></p>
          <p>Not quite ready? Check out our <a href="/learning/">learning center</a>&nbsp;or join our <a href="#footer-newsletter">mailing-list</a>.</p>
          <p><img alt="" width="200" height="170" src="/img/versions/brian---x----200-170x---.png" /></p>
        </div>
      </section>

      <section class="diagonal patterned">
        <div class="container">
          <ul class="image-grid about">
            <?php foreach ($people as $person) : ?>
              <li>
                <?php staffMember($person); ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>

      <section class="partners share diagonal">
        <div style="text-align:center; padding:0 20px;">
          <h3>Our Partner Friends</h3>
          <table class="hide-on-mobile">
            <tr>
              <td>
                <a href="http://www.5pointsdc.com" target="_blank">
                  <img src="/img/5points.png" width="100%" />
                </a>
              </td>
              <td>
                <a href="http://productmaven.co" target="_blank">
                  <img src="/img/product-maven-logo.png" width="100%" />
                </a>
              </td>
              <td>
                <a href="http://sbworksdc.org" target="_blank">
                  <img src="/img/sbworks.png" width="100%" />
                </a>
              </td>
            </tr>
            <tr>
              <td>
                Friendly Co-working Space in Northeast DC
              </td>
              <td>
                Expert Cloud Software Product Managers
              </td>
              <td>
                The one-stop-shop of small business assistance in DC
              </td>
            </tr>
          </table>

          <div class="hide-above-mobile">
            <p>
              <a href="http://www.5pointsdc.com" target="_blank"><img src="/img/5points.png" width="60%" /></a><br>
              Friendly Co-working Space in Northeast DC
            </p>
            <br>
            <p>
              <a href="http://productmaven.co" target="_blank"><img src="/img/product-maven-logo.png" width="60%" /></a><br>
              Expert Cloud Software Product Managers
            </p>
            <br>
            <p>
              <a href="http://sbworksdc.org" target="_blank"><img src="/img/sbworks.png" width="60%" /></a><br>
              The one-stop-shop of small business assistance in DC
            </p>
          </div>


        </div>
      </section>

      <section class="partners share diagonal alternate">
        <div style="text-align:center; padding:0 20px;">
          <h3>Online Reviews</h3>
          <table class="hide-on-mobile">
            <tr>
              <td>
                <a target="_blank" href="https://clutch.co/profile/benevolent-tech#reviews" target="_blank">
                  <img src="/img/clutch.png" width="100%" />
                </a>
              </td>
              <td>
                <a target="_blank" href="https://maps.google.com/?cid=5725988273627858551" target="_blank">
                  <img style="background:white; padding:15px; width:191px; height:auto;" src="/img/google.png" width="100%" />
                </a>
              </td>
              <td>
                <a target="_blank" href="https://www.yelp.com/biz/benevolent-tech-washington" target="_blank">
                  <img src="/img/yelp.png" width="100%" />
                </a>
              </td>
            </tr>
          </table>

          <div class="hide-above-mobile">
            <p>
              <a target="_blank" href="https://clutch.co/profile/benevolent-tech#reviews" target="_blank">
                <img src="/img/clutch.png" width="60%" />
              </a>
            </p>
            <br>
            <p>
              <a target="_blank" href="https://maps.google.com/?cid=5725988273627858551" target="_blank">
                <img style="background:white; padding:15px; width:191px; height:auto;" src="/img/google.png" width="60%" />
              </a>
            </p>
            <br>
            <p>
              <a target="_blank" href="https://www.yelp.com/biz/benevolent-tech-washington" target="_blank">
                <img src="/img/yelp.png" width="60%" />
              </a>
            </p>
          </div>
        </div>
      </section>

      <script>
        (function() {
          function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
          }

          function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0) == ' ') {
                c = c.substring(1);
              }
              if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
              }
            }
            return "";
          }

          if (!getCookie('tickerValue')) {
            setCookie('tickerValue', '741,112');
          }

          document.getElementById('lead-ticker').innerHTML = getCookie('tickerValue');

          setInterval(function() {
            var ticker = document.getElementById('lead-ticker'),
              last = ticker.innerHTML;
            if (Math.random() > 0.9) {
              var next = last.slice(0, 4) + (Number(last.slice(4)) + 1);
              ticker.innerHTML = next;
              setCookie('tickerValue', next);
            }
          }, 1000);
        })();
      </script>

<?php
      }
    );
  }
};
return $aboutRoute;
