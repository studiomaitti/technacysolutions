<footer id="colophon" class="site-footer ">
  <div class="footer-continer content-width-2">
    <div class="row-email">
      <a href="#" title="Mail to us"><img src="/wp-content/themes/technacysolutions/assets/img/logo-technacy.svg" alt="Logo Technacy" class="only-logo"> presales@technacysolutions.com</a>
    </div>

    <div class="row-sentence">
      Let's do something<br> awesome <span class="js-open-anim-togheter">togheter<span class="anim-togheter"></span></span>
    </div>

    <div class="row-sedi">
      <div class="sede-i">
        <div class="location">MIDDLE EAST</div>
        <div class="address-container">
          <div class="address">
            Financial Harbour Building 1398. Road 4626, Block 346 P.O. Box 90100
          </div>
          <div class="address">
            Manama Kingdom of Bahrain<br>T +973 17009819
          </div>
        </div>
      </div>
    </div>
  </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>


<div class="menu-container js-menu" style="display: none;">
  <header id="menu-header" class="header">
    <div class="header-container">
      <div class="logo">
        <a href="/" title="Back to home"><img src="/wp-content/themes/technacysolutions/assets/img/logo-technacy-negativo.svg" alt="Logo Technacy"></a>
      </div>
      <div class="dark-mode-hamburger">
        <div class="menu-close">
          <a href="#" class="js-close-menu">X</a>
        </div>
      </div>
    </div>
  </header><!-- #masthead -->

  <div class="menu-area content-width-2">
    <?php if (has_nav_menu('primary')): ?>
      <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'technacysolutions'); ?>">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_class' => 'primary-menu',
          'link_before' => '<span>',
          'link_after' => '</span>',
        ));
        ?>
      </nav><!-- .main-navigation -->
    <?php endif; ?>
    <div class="social-container">
      <div class="social">
        <a href="#"><img src="/wp-content/themes/technacysolutions/assets/img/icon_instagram.svg" alt="Logo Instagram"></a>
        <a href="#"><img src="/wp-content/themes/technacysolutions/assets/img/icon-logo-vimeo.svg" alt="Logo Vimeo"></a>
        <a href="#"><img src="/wp-content/themes/technacysolutions/assets/img/icon-logo-linkedin.svg" alt="Logo Linkedin"></a>
      </div>
    </div>
    <div class="download-email">
      <a href="#">Download</a> <a href="#">Search</a>
    </div>
  </div>
</div>
</body>
</html>
