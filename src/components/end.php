<?php
require $_SERVER['DOCUMENT_ROOT'] . '/src/data/navigation.php';

function end() {
  ?>
  <?php if ($url['isDev']): ?>
    <script defer async type="text/javascript" src="/js/bundle.min.js"></script>
  
  <?php else: ?>
    <script defer type="text/javascript" src="/js/libs.min.js"></script>
    <script defer async type="text/javascript" src="/js/custom.min.js"></script>
      
    <!-- Matomo -->
    <script>
      var _paq = window._paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//analytics.btek.cc/";
        _paq.push(['setTrackerUrl', u+'matomo.?> ']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
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
