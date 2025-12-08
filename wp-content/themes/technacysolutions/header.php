<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Technacysolutions
 * @since Technacysolutions 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php technacysolutions_the_html_classes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/cqc4bfc.css">

  <link rel="preload" href="/wp-content/themes/technacysolutions/assets/fonts/PPNeueMachinaInktrapUltrabold.woff2" as="font" type="font/woff2" crossorigin>
  <script src="https://kit.fontawesome.com/6d0fda75df.js" crossorigin="anonymous"></script>

  <?php wp_head(); ?>

  <script>
    jQuery(document).ready(function ($) {

    });
  </script>

  <style type="text/css">
      @media screen and (max-width: 852px) {
          body.is-mobile .about-partners .testo .title,
          body.is-mobile .about-clients .testo .title {
              line-height: 1.2;
              margin-bottom: 0.5rem;
          }

          body.is-mobile .about-partners .logo-row .img-i,
          body.is-mobile .about-clients .logo-row .img-i {
              margin-bottom: 0.6rem;
              margin-top: 0.6rem;
          }

          body.is-mobile .about-testimonial .title {
              line-height: 1.2;
              margin-bottom: 0.5rem;
          }

          body.is-mobile .about-testimonial .testimonial-slide .img {
              background-position: center;
          }

          body.is-mobile .about-testimonial .testimonial-slide .data .description {
              font-size: 20px;
              line-height: 1.2;
              margin-bottom: 14px;
              margin-top: 14px;
          }

          body.is-mobile.archive .content-area article .img a img {
              display: block;
              margin-left: auto;
              margin-right: auto;
          }

          body.is-mobile .footer-container .row-email img {
              width: 50px;
          }

          .rotate-logo {
              transition-delay: 1s;
              transition: all 1s ease-in-out;
          }

          .rotate-logo.rotate {
              transform: rotate(-90deg);
          }
      }

  </style>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
      window.setTimeout(function () {
        document.querySelector('.rotate-logo').classList.add('rotate');
      }, 1000);
    });
  </script>


  <!-- PRELOAD IMAGES -->
  <link rel="preload" as="image" href="/wp-content/themes/technacysolutions/assets/img/anim-togheter.gif"/>
  <?php if (is_front_page()) { ?>
  <?php } else if (is_page('about')) { ?>
    <link rel="preload" as="video" href="/wp-content/uploads/technacy-we-are-technacy-smaller.mp4"/>
    <link rel="preload" as="video" href="/wp-content/uploads/astronaut-smaller.mp4"/>
    <link rel="preload" as="video" href="/wp-content/uploads/fashion-style.mp4"/>
    <link rel="preload" as="video" href="/wp-content/uploads/technacysolutions-we-work-globally.mp4"/>
  <?php } ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/header/site-header'); ?>
