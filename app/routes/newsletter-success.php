<?php
require_once 'app/layouts/page.php';

pageLayout(
    title: "Newsletter",
    heading: "Thanks for signing up!",
    subtitle: "You're about to up your marketing game",
    description: "Thanks for signing up for the newsletter!",
    image: "/img/benevolent_tech_dc_seo.png",
    renderChildren: function () {
?>

    <style>
        /* Hide the newsletter signup */
        .diagonal-newsletter {
            display: none;
        }

        .newsletter.diagonal p {
            font-size: 50px;
            text-align: center;
        }
    </style>

    <section class="newsletter diagonal">
        <div class="not-skewed">
            <p>Meanwhile, click <a href="/learning">here</a> to jumpstart learnings!</p>
        </div>
    </section>

<?php
    }
);
