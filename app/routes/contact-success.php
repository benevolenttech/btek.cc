<?php
require_once 'app/layouts/page.php';

pageLayout(
    title: "Contact",
    subtitle: "We'll get back to you as soon as possible",
    heading: "Thanks for getting in touch",
    renderChildren: function () {
?>
    <section class="diagonal">
        <p style="font-size:50px;text-align:center;">Meanwhile, click <a href="/learning">here</a> to jumpstart learnings!</p>
    </section>
<?php
    }
);
