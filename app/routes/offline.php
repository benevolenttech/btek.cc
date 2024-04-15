<?php
require_once 'app/layouts/page.php';

return function () {
  pageLayout(
    title: "Offline",
    renderChildren: function () {
?>
    <h1>Sorry, we can't load this page without internet.</h1>
<?php
    }
  );
};
