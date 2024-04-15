<?php
function competitiveAdvantageSection(
  callable $renderLeft
) {
?>
  <section class="diagonal alternate" style="padding-bottom:50px; min-height:450px;">
    <div class="container">
      <h2 style="text-align:center;">Competitive Advantage</h2><br>
    </div>
    <div class="container halves" style="align-items:normal;">
      <div>
        <?php $renderLeft(); ?>
      </div>
      <div>
        <ul class="image-list">
          <li style="font-size:150%;">You</li>
          <li style="margin-bottom:20px;">+</li>
          <li>
            <img alt="btek banner" src="/img/thumb-lg.png" width="130" style="max-width:80%;" />
          </li>
          <p>
            <a style="text-align:left;" href="/contact" class="button">Get your <br>free quote &#8594;</a>
          </p>
        </ul>
      </div>
    </div>
  </section>
<?php
}
