<?php
require_once 'app/layouts/page.php';
require_once 'app/bits/post-details.php';
require_once 'app/bits/post-summary.php';
require_once 'app/bits/share.php';
require_once 'app/bits/staff-member.php';
require_once 'app/util/markdown.php';

return function () {
  global $postCol, $personCol, $url;

  $post = $postCol->getBySlug($url->posArgs[0]);
  $author = $personCol->get($post->author_staff_member);

  pageLayout(
    title: $post->title,
    subtitle: $post->subtitle,
    heading: $post->title,
    description: $post->description,
    image: $post->image,
    author: $author->name,
    renderChildren: function () use ($post, $author) {
      global $markdown, $postCol;
      $prev = $post->prev ? $postCol->get($post->prev) : null;
      $next = $post->next ? $postCol->get($post->next) : null;
?>

    <section class="share diagonal alternate" style="padding:10px 0;">
      <div class="not-skewed" style="margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px; font-size:19px;">
        <table style="float:right;">
          <tr>
            <td>Share on </td>
            <td style="padding-top:5px;"><?php share() ?></td>
          </tr>
        </table>
        <div style="clear:both"></div>
      </div>
    </section>

    <section class="diagonal">
      <div class="blog-post text-container" style="margin-bottom:0;">
        <?php postDetails($post) ?>
        <div class="post-content">
          <?php echo $markdown->text($post->content) ?>
        </div>
      </div>
    </section>

    <section class="share diagonal alternate" style="padding:10px 0;">
      <div class="not-skewed" style="margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px; font-size:19px;">
        <table style="float:right;">
          <tr>
            <td>Share on </td>
            <td style="padding-top:5px;"><?php share() ?></td>
          </tr>
        </table>
        <div style="clear:both"></div>
      </div>
    </section>

    <section class="diagonal patterned">
      <div class="container">
        <h2>Author</h2>
        <ul class="image-grid">
          <li style="max-width:500px; margin:auto;">
            <?php staffMember($author); ?>
          </li>
        </ul>
      </div>
    </section>

    <?php if ($next || $prev) : ?>
      <section class="diagonal alternate">
        <div class="text-container">
          <?php if ($next) : ?>
            <h2>Next post</h2>
            <div class="blog-post">
              <?php postSummary($next) ?>
            </div>
          <?php endif ?>
          <br />

          <?php if ($prev) : ?>
            <h2>Previous post</h2>
            <div class="blog-post">
              <?php postSummary($prev, true) ?>
            </div>
          <?php endif ?>
        </div>
        </div>
      </section>
    <?php endif ?>

    <!-- <section class="diagonal">
      <div class="container">
        <h2>Comments</h2>
        <div id="disqus_thread"></div>
        <script>
          /**
          *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
          *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
          /*
          var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          */
          (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
              s = d.createElement('script');
            s.src = '//{{ site.disqus_shortname }}.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
          })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      </div>
    </section> -->

<?php
    },
  );
};
