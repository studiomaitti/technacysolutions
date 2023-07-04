<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Technacysolutions
 * @since Technacysolutions 1.0
 */

get_header();
?>
  <section class="home-section home-intro-top">
    <div class="home-intro-top-base content-width">
      <div class="home-intro-top-base-testo">
        <div class="row-ivy">WE ARE TECHNACY</div>
        <div class="row-neue">A TEAM OF VIBRANT &</div>
        <div class="row-neue">DYNAMIC CREATIVES</div>
        <div class="row-ivy">BASED IN BAHRAIN.</div>
      </div>
    </div>

    <div class="home-intro-top-hover">
      <div class="home-intro-top-hover-video">
        <video src="/wp-content/uploads/Homevideo_Hero_720.mp4" autoplay muted loop></video>
      </div>
      <div class="home-intro-top-hover-testo">
        BASED IN BAHRAIN.
      </div>
    </div>
  </section>

  <section class="home-section home-video-scroll">
    <div class="home-video-scroll-inner">
      <div class="home-video-scroll-livello-base">
        <div class="home-video-scroll-elem video-2">
          <video src="/wp-content/uploads/video-art.mp4" autoplay muted loop></video>
        </div>
        <div class="home-video-scroll-elem video-4">
          <video src="/wp-content/uploads/video-art.mp4" autoplay muted loop></video>
        </div>
      </div>
      <div class="home-video-scroll-livello-medio">
        <div class="home-video-scroll-text">
          <div class="row-ivy">WE DELIVER</div>
          <div class="row-neue">CUTTING-EDGE</div>
          <div class="row-ivy">IPTV SOLUTIONS</div>
          <div class="row-ivy">& DIGITAL EXPERIENCES</div>
          <div class="row-neue">WELCOME</div>
          <div class="row-ivy">TO THE NEW</div>
          <div class="row-neue">DIGITAL ERA</div>
        </div>
      </div>
      <div class="home-video-scroll-livello-top">
        <div class="home-video-scroll-elem video-1">
          <video src="/wp-content/uploads/video-art.mp4" autoplay muted loop></video>
        </div>
        <div class="home-video-scroll-elem video-3">
          <video src="/wp-content/uploads/video-art.mp4" autoplay muted loop></video>
        </div>
      </div>
    </div>
  </section>

  <section class="home-section home-fascia-rossa"></section>

  <section class="home-section home-iptv">
    <div class="home-iptv-container content-width">
      <img src="/wp-content/themes/technacysolutions/assets/img/logo-technacy-rosso.svg" alt="Logo">
      <div class="home-iptv-text">
        <h2 class="row-ivy">IPTV & MEDIA</h2>
        <h2 class="row-neue">IPTV & MEDIA</h2>
        <div class="text">
          We are shipping thousands products in EMEA market every month and have supported<br>
          hundreds customers in launching their video services. Technacy enable you to deliver the best<br>
          of linear broadcast television and IP-based services with a seamless user experience
        </div>
      </div>
    </div>
  </section>

  <section class="home-section home-computer">
    <div class="home-iptv-container content-width">
      <img src="/wp-content/themes/technacysolutions/assets/img/logo-technacy-full.svg" alt="Logo">
      <div class="home-iptv-text">
        <h2 class="row-ivy">COMPUTER</h2>
        <h2 class="row-neue">DEVELOPMENT</h2>
        <div class="text">
          We are shipping thousands products in EMEA market every month and have supported<br>
          hundreds customers in launching their video services. Technacy enable you to deliver the best<br>
          of linear broadcast television and IP-based services with a seamless user experience
        </div>
      </div>
    </div>
  </section>

<?php
$a = [];
for($i = 0 ; $i < 30; $i++){
  $a[] = '<a href="/about">about</a>';
}
?>
  <section class="page-link">
    <div class="page-link-top-line" data-paroller-factor="0.35" data-paroller-type="foreground"
            data-paroller-direction="horizontal" data-paroller-transition="transform .35s linear">
      <?php echo implode('<span class="trattino">-</span>', $a); ?>
    </div>
    <div class="page-link-bottom-line" data-paroller-factor="-0.35" data-paroller-type="foreground"
            data-paroller-direction="horizontal" data-paroller-transition="transform .35s linear">
      <?php echo implode('<span class="trattino">-</span>', $a); ?>
    </div>
  </section>

<?php
get_footer();
