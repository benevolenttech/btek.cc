<?php
require_once 'app/bits/newsletter-section.php';
require_once 'app/bits/page-footer.php';
require_once 'app/bits/page-nav.php';
require_once 'html.php';

function defaultLayout(
  callable $renderChildren,
  string $title = null,
  ?string $description = null,
  ?string $image = null,
  ?string $author = null,
) {
  htmlLayout(
    title: $title,
    description: $description,
    image: $image,
    author: $author,
    renderChildren: function () use ($renderChildren) {
      pageNav();
      $renderChildren();
      newsletterSection();
      pageFooter();
    },
  );
}
