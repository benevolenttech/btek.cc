<?php
function htmlLayout(
  callable $renderChildren,
  ?string $title = "btek",
  ?string $description = "Websites are hard. We're here to help and empower you.",
  ?string $image = "/img/benevolent_tech_dc_seo.png",
  ?string $author = "btek",
) {
  global $siteMetaCol, $url;
?>
  <!doctype html>

  <html lang="en" class="page--{{ page.url | slice: 1,page.url.size | replace: '/','--' }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Jekyll v{{ jekyll.version }}">
    <meta property="fb:app_id" content="1299829076759410">
    <meta name="theme-color" content="#94040B">

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/touch-icon.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/img/favicon.ico">
    <link rel="manifest" href="/manifest.json">

    <title><?php echo $title ? $title . ' | ' : '' ?>btek</title>
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta name="author" content="<?php echo $author ?>" />
    <meta property="og:locale" content="en_US" />
    <meta name="description" content="<?php echo $description ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />
    <link rel="canonical" href="<?php echo $url->full ?>" />
    <meta property="og:url" content="<?php echo $url->full ?>" />
    <meta property="og:site_name" content="<?php echo $siteMetaCol->gbn('title') ?>" />
    <meta property="og:image" content="<?php echo $siteMetaCol->gbn('url') . $image ?>" />

    <!-- More info on JSON-LD at https://developers.google.com/search/docs/guides/intro-structured-data -->
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "",
        "telephone": "",
        "email": "brian(at)btek.cc",
        "sameAs": [
          "https://www.instagram.com/benevolenttech",
          "https://twitter.com/benevolentweb",
          "https://facebook.com/benevolenttech",
          "https://www.linkedin.com/company/benevolent-tech",
          "https://www.yelp.com/biz/benevolent-tech-washington",
          "https://member.angieslist.com/member/store/22294999",
          "https://angel.co/benevolenttech",
          "https://github.com/benevolenttech",
          "https://plus.google.com/+BenevolentTechDC",
          "https://clutch.co/profile/benevolent-tech",
        ],
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "<?php echo $siteMetaCol->gbn('street') ?>",
          "postalCode": "<?php echo $siteMetaCol->gbn('postalCode') ?>",
          "addressLocality": "<?php echo $siteMetaCol->gbn('town') ?>",
          "addressRegion": "<?php echo $siteMetaCol->gbn('region') ?>",
          "addressCountry": "<?php echo $siteMetaCol->gbn('country') ?>"
        },
        "location": {
          "@type": "Place",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo $siteMetaCol->gbn('street') ?>",
            "postalCode": "<?php echo $siteMetaCol->gbn('postalCode') ?>",
            "addressLocality": "<?php echo $siteMetaCol->gbn('town') ?>",
            "addressRegion": "<?php echo $siteMetaCol->gbn('region') ?>",
            "addressCountry": "<?php echo $siteMetaCol->gbn('country') ?>"
          }
        }

      }
    </script>

    <!--[if lte IE 9]>
    <script src="/js/ie/html5shiv.js"></script><![endif]-->
    <!--[if lte IE 9]>
    <script defer src="/js/ie/respond.min.js"></script><![endif]-->

    <!--{% include register-service-worker.html %}-->
    <link rel="stylesheet" href="/css/screen.css" />

  </head>

  <body>

    <?php $renderChildren() ?>

    <?php if ($url->isDev) : ?>
      <script defer async type="text/javascript" src="/js/bundle.min.js"></script>

    <?php else : ?>
      <script defer type="text/javascript" src="/js/libs.min.js"></script>
      <script defer async type="text/javascript" src="/js/custom.min.js"></script>

      <!-- Matomo -->
      <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (fn() {
          var u = "//analytics.btek.cc/";
          _paq.push(['setTrackerUrl', u + 'matomo.?> ']);
          _paq.push(['setSiteId', '1']);
          var d = document,
            g = d.createElement('script'),
            s = d.getElementsByTagName('script')[0];
          g.async = true;
          g.src = u + 'matomo.js';
          s.parentNode.insertBefore(g, s);
        })();
      </script>
      <!-- End Matomo Code -->

    <?php endif; ?>

    <!-- Load instantsearch last b/c is really big, and only needed for search page. -->
    <!-- <script async defer src="/js/instantsearch.min.js"></script> -->

  </body>

  </html>
<?php
}
