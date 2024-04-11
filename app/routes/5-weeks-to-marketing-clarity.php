<?php
require_once 'app/layouts/page.php';

return function () {
  pageLayout(
    title: "5 Weeks to Marketing Clarity",
    heading: "5 Weeks to Marketing Clarity",
    subtitle: "Take the Fast, Proven Track to Test and Sharpen Your Idea with this Infographic.",
    description: "Take the Fast, Proven Track to Test and Sharpen Your Idea with this Infographic.",
    image: "/img/benevolent_tech_dc_seo.png",
    renderChildren: function () {
?>

    <section class="diagonal" style="padding:10px 0;" id="learn-more">
      <p style="text-align:right; margin-bottom:0; max-width:1000px; margin-left:auto; margin-right:auto; padding-right:20px;">
        <a href="#learn-more" style="color:#666">Interested? Read on &#8595;</a>
      </p>
    </section>

    <section class="diagonal alternate">
      <div class="container editable">
        <blockquote>
          <p>&ldquo;Trust but verify your instincts. Build into your strategy controlled experiments with key performance indicators (KPIs) to validate your business ideas before you commit to them.&rdquo; - Brian, President</p>
        </blockquote>
        <p>If you&rsquo;ve ever been to a carnival or circus, then you know there are endless possibilities of amazement.</p>
        <p>Things are odd, weird, delicious, and downright entertaining.</p>
        <p>But what&rsquo;s not entertaining is when you have a hard time figuring out where and how to sell your idea.</p>
        <ol>
          <li><strong>Do you think you have a great idea and are unsure how to test the market before building it? </strong></li>
          <li><strong>Do you know how to do idea-market fit research? </strong></li>
          <li><strong>Do you know how to build an audience before you've even developed your idea fully?</strong></li>
        </ol>
        <p>Those are the questions we&rsquo;re here to help answer. Together, we&rsquo;re diving deeper into your idea so you can sharpen you focus and test the market.</p>
      </div>
      <div class="container">
        <img src="/img/5-Weeks-To-Marketing-Clarity.png" width="100%" />
      </div>
      <div class="container editable">
        <p>&nbsp;</p>
        <h3>It&rsquo;s Time To Be Actionable</h3>
        <p>Now that you know what idea-market fit is, the next step for you is to act on the data you have.</p>
        <p>If you have a hard time seeing the correlations, then it could be that you need to do more targeted experiments. That&rsquo;s okay.</p>
        <p>The best thing for you're idea is throwing a marketing veteran at it. <a href="/contact">Reach out now</a> to get a free quote.</p>
      </div>
    </section>

<?php
    }
  );
};
