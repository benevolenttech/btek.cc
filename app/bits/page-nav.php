<?php
require_once 'app/util/nav.php';

function pageNav()
{
  global $url;
?>
  <header>
    <div class="container">
      <div class="company-name"><a href="/"></a></div>

      <nav>
        <a class="nav-toggle" id="open-nav" href="#">&#9776;</a>
        <ul>
          <li>
            <a href="/about" class="<?php pathIsActive('/about') ?>">
              About
            </a>
          </li>
          <li>
            <a href="/services" class="<?php pathIsActive('/services') ?>">
              Services
            </a>
          </li>
          <li>
            <a href="/learning" class="<?php pathIsActive('/learning') ?>">
              Learn
            </a>
          </li>
          <li>
            <a href="/grapevine" class="<?php pathIsActive('/grapevine') ?>">
              Grapevine
            </a>
          </li>
          <li>
            <a href="/contact" class="<?php pathIsActive('/contact') ?>">
              Connect
            </a>
          </li>

          <!-- Hidden menu items for SEO -->
          <li style="display:none;"><a href="/services/mobile-app-development">Mobile App Development</a></li>
          <li style="display:none;"><a href="/services/website-marketing">Mobile App Development</a></li>
          <li style="display:none;"><a href="/services/salesforce-consulting">Salesforce Consulting</a></li>

          <li>
            <style>
              #header-search-icon-a {
                margin-left: -10px;
              }

              #header-search-icon-a svg {
                fill: rgba(255, 255, 255, 0.8);
                transition: 0.2s ease-in-out;
              }

              #header-search-icon-a:hover svg {
                fill: white;
              }
            </style>
            <a href="/search?src=<?php echo rawurlencode($url->rel); ?>" id="header-search-icon-a" class="hide-on-mobile">
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" style="margin-bottom:-8px;" viewBox="0 0 50 50">
                <path d="M 21 3 C 11.623004 3 4 10.623004 4 20 C 4 29.376996 11.623004 37 21 37 C 24.709505 37 28.140329 35.803849 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460556 28.087561 38 24.221313 38 20 C 38 10.623004 30.376996 3 21 3 z M 21 5 C 29.296116 5 36 11.703884 36 20 C 36 28.296116 29.296116 35 21 35 C 12.703884 35 6 28.296116 6 20 C 6 11.703884 12.703884 5 21 5 z" color="#000" overflow="visible" enable-background="accumulate" />
              </svg>
            </a>
          </li>
          <li class="hide-above-mobile">
            <a href="/search?src=<?php echo rawurlencode($url->rel); ?>">
              Search
            </a>
          </li>

        </ul>
      </nav>

    </div>
  </header>

  <script>
    (function() {
      /* Mobile Header */
      document.getElementById("open-nav").addEventListener("click", function(event) {
        event.preventDefault();
        document.body.classList.toggle("nav-open");
      });
    })();
  </script>

<?php
}
