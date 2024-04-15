<?php

function teamUpSection(
  ?string $class = 'patterned',
) {
?>
  <section class="diagonal <?php echo $class ?>">
    <div class="container halves">
      <div>
        <ul class="image-list">
          <li style="font-size:150%;">You</li>
          <li style="margin-bottom:20px;">+</li>
          <li>
            <img alt="btek banner image" src="/img/thumb-lg.png" width="130" style="max-width:80%;" />
          </li>
        </ul>
      </div>
      <div>
        <p class="hide-above-mobile" style="font-size:60px;">
          You + <img alt="btek banner image" src="/img/thumb-lg.png" width="55" />
        </p>
        <h3>We Are Your Partners</h3>
        <p>
          Customers are searching the internet right now for your offering and choose competitors because&nbsp;
          they don't know you exist.
        </p>
        <p>
          <a href="/contact" class="button">Team up and get found &#8594;</a>
        </p>
      </div>
    </div>
  </section>
<?php
}
