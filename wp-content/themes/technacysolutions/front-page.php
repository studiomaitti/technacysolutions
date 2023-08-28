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
        <div class="row-i row-1 row-ivy inview-elem inview-elem-left td-1200" data-id-video="1">
          <span class="txt"><span class="bg"></span>WE ARE TECHNACY</span></div>
        <div class="row-i row-2 row-neue inview-elem inview-elem-left td-1300" data-id-video="2">
          <span class="txt"><span class="bg"></span>A TEAM OF VIBRANT &</span></div>
        <div class="row-i row-3 row-neue inview-elem inview-elem-left td-1400" data-id-video="3">
          <span class="txt"><span class="bg"></span>DYNAMIC CREATIVES</span></div>
        <div class="row-i row-4 row-ivy inview-elem inview-elem-left td-620 js-hover-intro" data-id-video="4">
          <span class="txt js-dot-to-cicle js-white-cicle"><span class="bg js-dot-to-cicle js-white-cicle"></span>BASED IN BAHRAIN.</span></div>
      </div>
    </div>

    <div class="home-intro-top-hover">
      <video class="video-4" src="/wp-content/uploads/Homevideo_Hero_720.mp4" autoplay playsinline muted loop></video>
    </div>
  </section>

  <section class="home-section home-video-scroll">
    <div class="home-video-scroll-inner">
      <div class="home-video-scroll-livello-base">
        <div class="home-video-scroll-elem video-2">
          <video src="/wp-content/uploads/technacy-home-1-1.mp4" autoplay playsinline muted loop></video>
        </div>
        <div class="home-video-scroll-elem video-4">
          <video src="/wp-content/uploads/technacy-home-1-2.mp4" autoplay playsinline muted loop></video>
        </div>
        <!--
        <div class="home-video-scroll-elem video-1" style="">
          <video src="/wp-content/uploads/technacy-home-1-3.mp4" autoplay playsinline="" muted="" loop=""></video>
        </div>
        -->
      </div>
      <div class="home-video-scroll-livello-medio">
        <div class="home-video-scroll-text">
          <div class="row-ivy inview-elem inview-elem-top td-200">WE DELIVER</div>
          <div class="row-neue inview-elem inview-elem-top td-400">CUTTING-EDGE</div>
          <div class="row-ivy inview-elem inview-elem-top td-550">IPTV SOLUTIONS</div>
          <div class="row-ivy inview-elem inview-elem-top td-620">& DIGITAL EXPERIENCES</div>
          <div class="row-neue inview-elem inview-elem-top td-700">WELCOME</div>
          <div class="row-ivy inview-elem inview-elem-top td-710">TO THE NEW</div>
          <div class="row-neue inview-elem inview-elem-top td-740">DIGITAL ERA</div>
        </div>
      </div>
      <div class="home-video-scroll-livello-top">

        <div class="home-video-scroll-elem video-1">
          <video src="/wp-content/uploads/technacy-home-3.mp4" autoplay playsinline muted loop></video>
        </div>

        <div class="home-video-scroll-elem video-3">
          <video src="/wp-content/uploads/technacy-home-1-4.mp4" autoplay playsinline muted loop></video>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="home-section category-section" id="pinCategorySection">
    <div class="panel panel-1 home-iptv">
      <div class="home-iptv-container content-width">
        <div class="home-iptv-img-container">
          <div class="effetto-fascia-rossa">
            <img class="inview-elem inview-elem-top td-200" src="/wp-content/themes/technacysolutions/assets/img/logo-technacy-rosso.svg" alt="Logo">
          </div>
          <div class="home-iptv-img">
            <img class="inview-elem inview-elem-top td-200" src="/wp-content/themes/technacysolutions/assets/img/logo-technacy-rosso.svg" alt="Logo">
          </div>
        </div>
        <div class="home-iptv-text">
          <h2 class="row-ivy inview-elem inview-elem-left td-400">TELECOMMUNICATION</h2>
          <h2 class="row-neue inview-elem inview-elem-right td-550">IPTV & MEDIA</h2>
          <div class="text inview-elem inview-elem-bottom">
            The Technacy Team offers cutting-edge IPTV technology and global content for an unparalleled viewer experience. With industry giants and leading brands as our partners, we have built strong relationships based on excellent communication and trust. Our customer-centric approach ensures your unique needs are met, providing an incredible IPTV experience. <br>We are committed to customer satisfaction with 24/7 support. Our operational flexibility and technical expertise set new benchmarks in IPTV provision across industries. Join us as we revolutionize the IPTV experience together.
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-2 home-computer">
      <div class="home-iptv-container content-width">
        <img class="inview-elem inview-elem-top td-200" src="/wp-content/themes/technacysolutions/assets/img/logo-technacy-full.svg" alt="Logo">
        <div class="home-iptv-text">
          <h2 class="row-ivy inview-elem inview-elem-left td-400">DIGITAL</h2>
          <h2 class="row-neue inview-elem inview-elem-right td-550">COMMUNICATION</h2>
          <div class="text inview-elem inview-elem-bottom">
            The Technacy Team is passionate about cutting-edge technologies. We use the likes of virtual reality, augmented reality, holographic technology, and AI-generated content to create interactive and immersive state-of-the-art projects. There is immense potential these technologies hold for transforming user experiences and engaging audiences in entirely new ways. We take care of all creative and technical aspects from concept to development and deployment and provide 24/7 support. We have the know-how and expertise to translate our client’s visions into jaw dropping projects. Let’s create something awesome together!
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  $a = [];
  for ($i = 0; $i < 30; $i++) {
    $a[] = '<a href="/about">about</a>';
  }
?>
  <section class="page-link">
    <div class="page-link-top-line" data-paroller-factor="0.35" data-paroller-type="foreground" data-paroller-direction="horizontal" data-paroller-transition="transform .35s linear">
      <?php echo implode('<span class="trattino">-</span>', $a); ?>
    </div>
    <div class="page-link-bottom-line" data-paroller-factor="-0.35" data-paroller-type="foreground" data-paroller-direction="horizontal" data-paroller-transition="transform .35s linear">
      <?php echo implode('<span class="trattino">-</span>', $a); ?>
    </div>
  </section>

<?php
get_footer();
