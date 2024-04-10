<?php
require_once 'app/layouts/page.php';

pageLayout(
  title: "Not Found",
  heading: "404: Not Found",
  renderChildren: function () {
?>
  <section class="diagonal">
    <div class="container">
      We can't find the page you're looking for.
    </div>
  </section>
<?php
  }
);
