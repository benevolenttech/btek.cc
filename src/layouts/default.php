<?php
require_once 'src/components/newsletter-section.php';
require_once 'src/components/page-footer.php';
require_once 'src/components/page-nav.php';
require_once 'html.php';

function defaultLayout(
  callable $renderChildren,
  ?string $title,
  ?string $description,
  ?string $image,
  ?string $author,
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
