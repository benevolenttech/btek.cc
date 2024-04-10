<?php
require_once 'app/layouts/page.php';

pageLayout(
    title: "Mobile App Development",
    heading: "Bleeding Edge Mobile App Development",
    subtitle: "We build mobile apps that are crazy easy to maintain and extend.",
    description: "We build mobile apps that are crazy easy to maintain and extend.",
    renderChildren: function () {
?>

    <style>
        /* Hide the newsletter signup */
        .diagonal-newsletter {
            display: none;
        }

        /* Hide footer */
        .footer-columns {
            display: none !important;
        }
    </style>

    <section class="diagonal" style="padding:10px 0;" id="learn-more">
        <p style="text-align:right; margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px;">
            <a href="#learn-more" style="color:#666">See how &#8595;</a>
        </p>
    </section>

    <section class="diagonal alternate" style="padding-bottom:50px; min-height:450px;">
        <div class="container">
            <h2 style="text-align:center;">Competitive Advantage</h2><br>
        </div>
        <div class="container halves" style="align-items:normal;">
            <div class="editable">
                <ol>
                    <li><strong>Stay in Sync.</strong> Being a marketing agency at heart, we prioritize making marketing and sales software work together in harmony.</li>
                    <li><strong>Simple.</strong> Our unified development process allows us to maintain one codebase for all mobile platforms, thereby slashing costs of maintenance and enhancements.</li>
                    <li><strong>Quick.</strong> We use agile development practices to deploy in multiple phases, so that you can get live fast and improve over time.</li>
                    <li><strong>Low Risk.</strong> All of our projects are fixed-fee -- when we give you a price for the project that's the price you'll pay.</li>
                    <li><strong>Service Obsessed.</strong> We provide world-class training, answer emails quickly and fix critical errors within 24 hours -- we are really serious about service.</li>
                    <li><strong>Endurance.</strong> We're in this for the long haul, so plan on our high quality services indefinitely.</li>
                </ol>
            </div>
            <div>
                <ul class="image-list">
                    <li style="font-size:150%;">You</li>
                    <li style="margin-bottom:20px;">+</li>
                    <li><img src="/img/thumb-lg.png" width="130" style="max-width:80%;" /></li>
                    <p><a style="text-align:left;" href="/contact" class="button">Get your <br>free quote &#8594;</a></p>
                </ul>
            </div>
        </div>
    </section>

    <section class="diagonal patterned">
        <div class="container halves">
            <div>
                <ul class="image-list">
                    <li><a href="#connect-with-hirely" onclick="handleRefClick(event, 'the Hirely team')"><img src="/img/bt-hirely.png" width="300" style="max-width:80%;" /></a></li>
                </ul>
            </div>
            <div>
                <p class="hide-above-mobile" style="text-align: center;"><a target="_blank" href="https://hirely.us"><img src="/img/bt-hirely.png" width="200" style="max-width:80%;" /></a></p>
                <p class="editable" style="font-size:1.8rem;">"btek used bleeding-edge app technology to simplify our internal operations app and smoothly launch 40% ahead of schedule." - <a href="mailto:chris.rosenbaum@gmail.com?subject=Would you recommend btek?">Chris @ Hirely.us</a></p>
            </div>
        </div>
    </section>

    <section class="partners share diagonal alternate">
        <div style="text-align:center; padding:0 20px;">
            <h3>Online Reviews</h3>
            <table class="hide-on-mobile">
                <tr>
                    <td>
                        <a target="_blank" href="https://clutch.co/profile/benevolent-tech#reviews">
                            <img src="/img/clutch.png" width="100%" />
                        </a>
                    </td>
                    <td>
                        <a target="_blank" href="https://maps.google.com/?cid=5725988273627858551">
                            <img style="background:white; padding:15px; width:191px; height:auto;" src="/img/google.png" width="100%" />
                        </a>
                    </td>
                    <td>
                        <a target="_blank" href="https://www.yelp.com/biz/benevolent-tech-washington">
                            <img src="/img/yelp.png" width="100%" />
                        </a>
                    </td>
                </tr>
            </table>

            <div class="hide-above-mobile">
                <p>
                    <a target="_blank" href="https://clutch.co/profile/benevolent-tech#reviews">
                        <img src="/img/clutch.png" width="60%" />
                    </a>
                </p>
                <br>
                <p>
                    <a target="_blank" href="https://maps.google.com/?cid=5725988273627858551">
                        <img style="background:white; padding:15px; width:191px; height:auto;" src="/img/google.png" width="60%" />
                    </a>
                </p>
                <br>
                <p>
                    <a target="_blank" href="https://www.yelp.com/biz/benevolent-tech-washington">
                        <img src="/img/yelp.png" width="60%" />
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section class="diagonal">
        <!--<div class="container">
        <h2 style="text-align:center;">We Are Your Partners</h2><br>
    </div>-->
        <div class="container halves" style="max-width:700px;">
            <div>
                <ul class="image-list">
                    <li style="font-size:150%;">You</li>
                    <li style="margin-bottom:20px;">+</li>
                    <li><img src="/img/thumb-lg.png" width="130" style="max-width:80%;" /></li>
                </ul>
            </div>
            <div style="text-align:center;">
                <p class="hide-above-mobile" style="font-size:60px;">You + <img src="/img/thumb-lg.png" width="55" /></p>
                <p class="editable">Is your mobile app performing?</p>
                <p><a href="/contact" class="button">Team up get better &#8594;</a></p>
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
<?php
    }
);
