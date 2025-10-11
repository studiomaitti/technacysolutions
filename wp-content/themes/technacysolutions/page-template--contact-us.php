<?php
/**
 * Template Name: contact-us
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Technacysolutions
 * @since Technacysolutions 1.0
 */

get_header();

/* Start the Loop */
while (have_posts()){
  the_post();
  ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header alignwide content-width">
      <h1 class="page-title">
        <span class="main">Contact Us</span>
        <span class="behind">Locations</span>
      </h1>
    </header><!-- .entry-header -->

    <div class="entry-content content-width inview-elem inview-elem-top td-550">
      <?php the_content(); ?>

      <div class="card-horiz-container">
        <div class="card-i">
          <div class="card-image">
            <a href="https://www.google.com/maps/place/Bahrain+Bay+Development/@26.249821,50.5755059,17z/data=!3m1!4b1!4m6!3m5!1s0x3e49a5ee55c70e7d:0x64aa2fb7ff57697b!8m2!3d26.2498162!4d50.5780808!16s%2Fg%2F11g_s9kdn?entry=ttu&g_ep=EgoyMDI1MTAwNy4wIKXMDSoASAFQAw%3D%3D" target="_blank">
              <img src="/wp-content/themes/technacysolutions/assets/img/contact-us--bahrain.jpg">
            </a>
          </div>
          <div class="card-info">
            <h2>BAHRAIN HQ</h2>
            <div class="text">
              <p>Office 12, Building 1144, Road 4617, Block 346<br>
                Bahrain Bay Seafront, Bahrain </p>
              <div class="phone">
                <a href="tel:+97317009819"><i class="fa-solid fa-phone"></i> +973 17009819</a>
              </div>
            </div>
            <div class="card-link">
              <a href="mailto:office@technacysolutions.com">office@technacysolutions.com</a>
              <a href="https://www.google.com/maps/place/Bahrain+Bay+Development/@26.249821,50.5755059,17z/data=!3m1!4b1!4m6!3m5!1s0x3e49a5ee55c70e7d:0x64aa2fb7ff57697b!8m2!3d26.2498162!4d50.5780808!16s%2Fg%2F11g_s9kdn?entry=ttu&g_ep=EgoyMDI1MTAwNy4wIKXMDSoASAFQAw%3D%3D" title="Google Maps">Google Maps</a>
            </div>
          </div>
        </div>

        <div class="card-i">
          <div class="card-image">
            <a href="https://www.google.com/maps/search/Dubai+Internet+City,+Building+2,+Office+113+P.O.+Box+500263/@25.0977393,55.1571902,15.75z?entry=ttu&g_ep=EgoyMDI1MTAwNy4wIKXMDSoASAFQAw%3D%3D" target="_blank">
              <img src="/wp-content/themes/technacysolutions/assets/img/technacy-solutions--dubai.jpg">
            </a>
          </div>
          <div class="card-info">
            <h2>DUBAI OFFICE</h2>
            <div class="text">
              <p>Dubai Internet City, Building 2, Office 113<br>
                P.O. Box 500263</p>
              <div class="phone">
                <a href="tel:+97317009819"><i class="fa-solid fa-phone"></i> +973 17009819</a>
              </div>
            </div>
            <div class="card-link">
              <a href="mailto:presales@technacysolutions.com">presales@technacysolutions.com</a>
              <a href="https://www.google.com/maps/search/Dubai+Internet+City,+Building+2,+Office+113+P.O.+Box+500263/@25.0977393,55.1571902,15.75z?entry=ttu&g_ep=EgoyMDI1MTAwNy4wIKXMDSoASAFQAw%3D%3D" title="Google Maps">Google Maps</a>
            </div>
          </div>
        </div>

        <div class="card-i">
          <div class="card-image">
            <a href="https://www.google.com/maps/place/Riyad+12475,+Arabia+Saudita/@24.7671929,46.6865984,16z/data=!3m1!4b1!4m10!1m2!2m1!1sRiyadh+2560+At+Taawun+Bldg,+Riyadh,+KSA+P.O.Box:+57967+Riyadh+12475+!3m6!1s0x3e2efd6c39898f43:0x523004017cfd26e!8m2!3d24.7673439!4d46.6958899!15sCkNSaXlhZGggMjU2MCBBdCBUYWF3dW4gQmxkZywgUml5YWRoLCBLU0EgUC5PLkJveDogNTc5NjcgUml5YWRoIDEyNDc1kgELcG9zdGFsX2NvZGXgAQA!16s%2Fg%2F1tf22kc5?entry=ttu&g_ep=EgoyMDI1MTAwNy4wIKXMDSoASAFQAw%3D%3D" target="_blank">
              <img src="/wp-content/themes/technacysolutions/assets/img/technacy-solutions--riyad.jpg">
            </a>
          </div>
          <div class="card-info">
            <h2>RIYADH OFFICE</h2>
            <div class="text">
              <p>Riyadh 2560 At Taawun Bldg, Riyadh, KSA P.O.<br>
                Box: 57967 Riyadh 12475 </p>
              <div class="phone">
                <a href="tel:+97317009819"><i class="fa-solid fa-phone"></i> +973 17009819</a>
              </div>
            </div>
            <div class="card-link">
              <a href="mailto:support@technacysolutions.com">support@technacysolutions.com</a>
              <a href="https://www.google.com/maps/place/Riyad+12475,+Arabia+Saudita/@24.7671929,46.6865984,16z/data=!3m1!4b1!4m10!1m2!2m1!1sRiyadh+2560+At+Taawun+Bldg,+Riyadh,+KSA+P.O.Box:+57967+Riyadh+12475+!3m6!1s0x3e2efd6c39898f43:0x523004017cfd26e!8m2!3d24.7673439!4d46.6958899!15sCkNSaXlhZGggMjU2MCBBdCBUYWF3dW4gQmxkZywgUml5YWRoLCBLU0EgUC5PLkJveDogNTc5NjcgUml5YWRoIDEyNDc1kgELcG9zdGFsX2NvZGXgAQA!16s%2Fg%2F1tf22kc5?entry=ttu&g_ep=EgoyMDI1MTAwNy4wIKXMDSoASAFQAw%3D%3D" title="Google Maps">Google Maps</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- .entry-content -->

  </article><!-- #post-<?php the_ID(); ?> -->
<?php
}

get_footer();
