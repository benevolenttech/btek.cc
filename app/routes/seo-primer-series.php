<?php

require_once 'app/layouts/page.php';
require_once 'app/bits/share.php';
require_once 'app/bits/post-list.php';

return function () {
  pageLayout(
    title: "SEO Primer Blog Series",
    heading: "SEO Primer Blog Series",
    subtitle: "Climbing your way to the top of the search results.",
    description: "Our intro to climbing your way to the top of the search results.",
    renderChildren: function () {
?>

    <section class="share diagonal alternate" style="padding:10px 0;">
      <div class="not-skewed" style="margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px; font-size:19px;">
        <table style="float:right;">
          <tr>
            <td>Share on</td>
            <td style="padding-top:5px;"><?php share() ?></td>
          </tr>
        </table>
        <div style="clear:both"></div>
      </div>
    </section>
    <section class="diagonal">
      <!--<p style="font-size:50px;text-align:center;">Coming Soon!</p>-->

      <div class="text-container editable">
        <p><strong>We&rsquo;ve come a long way since the early days of the Internet.</strong></p>
        <p>
          <img alt="" src="/img/versions/katie-couric-seo-internet-big---x----1000-507x---.jpg" width="1000" height="507" />
        </p>
        <p><span class="dropcap">B</span>ack then, a few, bare-bones search engines helped &ldquo;computer geeks&rdquo; navigate a relatively limited number of websites along the &ldquo;information superhighway.&rdquo;</p>
        <p>But today, practically anyone in world can tap into a seemingly endless storehouse of information just by typing a few words and clicking a mouse.</p>
        <p>Search engines, including the behemoth Google, have made all that possible. Their sophisticated algorithms can help you get your products and services to a wide audience without spending a ton of money.</p>
        <p>That&rsquo;s great news for small businesses looking for new customers. But it&rsquo;s not a slam-dunk, by any means.</p>
        <p>Getting the attention of search engines can be challenging. You&rsquo;re aiming for a spot on the first page of search results &ndash; or, better yet, among the top 10 search results. To reach that goal, you&rsquo;ll have to engage in an ongoing battle that rivals the competitive force of the Olympic games.</p>
        <p>We call that battle &ldquo;search engine optimization&rdquo; or SEO.</p>
        <p>Fortunately, we&rsquo;re here to help you win the SEO battle. Below is a collection of articles that form a solid foundation to understanding and optimizing search engine results -- to attract more people to your site. If you have any questions or feedback along the way, <a href="/contact">shoot us an email</a> or <a href="https://twitter.com/benevolentweb">tweet at us!</a></p>
      </div>
    </section>
    <section class="diagonal patterned post-seperator" style="padding:70px 0;">
      <div class="container not-skewed">
        <h2 style="text-align:center; font-size:66px; margin:0;">The Posts</h2>
      </div>
    </section>

    <section class="diagonal alternate" style="padding:150px 0">
      <!--<p style="font-size:50px;text-align:center;">Coming Soon!</p>-->

      <div class="text-container">
        <p class="editor-link">
          <a href="cloudcannon:collections/_posts" class="btn"><strong>&#9998;</strong> Add Post</a>
        </p>
        <?php postList(series: ["SEO Primer"]); ?>
      </div>
    </section>

    <section class="share diagonal" style="padding:10px 0;">
      <div class="not-skewed" style="margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px; font-size:19px;">
        <table style="float:right;">
          <tr>
            <td>Share on</td>
            <td style="padding-top:5px;"><?php share() ?></td>
          </tr>
        </table>
        <div style="clear:both"></div>
      </div>
    </section>
<?php
    }
  );
};
