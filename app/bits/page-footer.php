<?php
require_once 'app/bits/social-icon.php';

function pageFooter()
{
  global $siteMetaCol;
  $columns = [
    [
      'title' => 'Pages',
      'links' => [
        [
          'name' => 'About',
          'link' => '/about'
        ],
        [
          'name' => 'Services',
          'link' => '/services'
        ],
        [
          'name' => 'Learning',
          'link' => '/learning'
        ],
        [
          'name' => 'Grapevine',
          'link' => '/grapevine'
        ],
        [
          'name' => 'Contact',
          'link' => '/contact'
        ]
      ]
    ],
    [
      'title' => 'Social',
      'links' => [
        [
          'name' => 'Facebook',
          'link' => 'https://www.facebook.com/benevolenttech',
          'social_icon' => 'Facebook',
          'new_window' => true
        ],
        [
          'name' => 'Twitter',
          'link' => 'https://twitter.com/benevolentweb',
          'social_icon' => 'Twitter',
          'new_window' => true
        ],
        [
          'name' => 'Google+',
          'link' => 'https://plus.google.com/+BenevolentTech',
          'social_icon' => 'Google+',
          'new_window' => true
        ],
        [
          'name' => 'LinkedIn',
          'link' => 'https://www.linkedin.com/company-beta/10853689/',
          'social_icon' => 'LinkedIn',
          'new_window' => true
        ]
      ]
    ]
  ];

?>

  <footer class="diagonal" id="footer">
    <div class="container">

      <div class="footer-columns">
        <?php foreach ($columns as $column) : ?>

          <ul class="footer-links">
            <li>
              <h2><?php echo $column['title']; ?></h2>
            </li>
            <?php foreach ($column['links'] as $link) : ?>
              <li>
                <a <?php if (array_key_exists('new_window', $link)) echo 'target="_blank"'; ?> href="<?php echo $link['link']; ?>" <?php if (isset($link['social_icon'])) echo 'class="' . strtolower($link['social_icon']) . '-icon"'; ?>>
                  <?php if (isset($link['social_icon'])) : ?>
                    <?php socialIcon($link['social_icon']); ?>
                  <?php endif; ?>

                  <?php echo $link['name']; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endforeach; ?>

        <ul class="footer-links">
          <li>
            <h2><?php echo $siteMetaCol->getByName('title'); ?></h2>
          </li>
          <li><?php echo $siteMetaCol->getByName('description'); ?></li>
          <li><a href="<?php echo $siteMetaCol->getByName('url'); ?>/feed.xml"><?php socialIcon('RSS'); ?> Subscribe with RSS</a></li>
        </ul>
      </div>

      <div class="footer-links-mobile">
        <?php foreach ($columns as $column) : ?>
          <ul class="footer-links">
            <?php foreach ($column['links'] as $link) : ?>
              <?php if (isset($link['social_icon'])) : ?>
                <li>
                  <a target="_blank" href="<?php echo $link['link']; ?>" class="<?php echo strtolower($link['social_icon']); ?>-icon">
                    <?php socialIcon($link['social_icon']); ?>
                  </a>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        <?php endforeach; ?>
      </div>

    </div>

    <div class="legal-line desktop">
      <p class="container">
        &copy; <?php echo date('Y'); ?> <?php echo $siteMetaCol->getByName('title'); ?>
        &bull;
        benevolent tek
        &bull;
        austin, tx
      </p>
    </div>

    <div class="legal-line mobile">
      <p class="container">
        &copy; <?php echo date('Y'); ?> <?php echo $siteMetaCol->getByName('title'); ?><br>
        Made with &lt;3 in austin, tx
      </p>
    </div>
  </footer>

<?php
}
