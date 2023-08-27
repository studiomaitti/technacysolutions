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


  <?php wp_head(); ?>

  <script>
    jQuery(document).ready(function ($) {

    });
  </script>

  <style type="text/css">
    .home-iptv-container img{
      max-width: 39vw;
    }
    .site-footer .footer-continer .address-container{
      white-space: normal;
    }
    .header .logo a {
      display: flex;
    }
    .header .logo svg {
      margin: 7px 0 0 7px;
    }

    .site-footer .row-email{
      margin-bottom: 1rem;
    }

    .site-footer .row-email,
    .site-footer .row-sentence {
      line-height: 1.1;
    }

    body.light-mode .blob.white{
      background: #000000;
      box-shadow: 0 0 0 0 #000000;
    }

    body.light-mode .dot.dot-arrow svg path{
      fill: #ffffff;
    }

    body.light-mode .header .logo svg path{
      fill: #000000;
    }

    body.light-mode .about-partners, 
    body.light-mode .about-clients {
      background-color: #ffffff;
      color: #000000;
    }

    body.light-mode.archive .project-category .container-1 .star svg path{
      fill: #000000;
    }
    body.light-mode.archive .content-area article .tit-container .location::before {
      background-color: #000000;
    }

    body.light-mode.single-projects .post-title,
    body.light-mode.single-projects .location,
    body.light-mode.single-projects .entry-content{
      color: #000000;
    }

  </style>


  <!-- PRELOAD IMAGES -->
  <link rel="preload" as="image" href="/wp-content/themes/technacysolutions/assets/img/anim-togheter.gif"/>
  <?php if (is_front_page()) { ?>
    <link rel="preload" as="video" href="/wp-content/uploads/Homevideo_Hero_720.mp4"/>
    <link rel="preload" as="video" href="/wp-content/uploads/technacy-home-1.mp4"/>
    <link rel="preload" as="video" href="/wp-content/uploads/technacy-home-2-1.mp4"/>
    <link rel="preload" as="video" href="/wp-content/uploads/technacy-home-3.mp4"/>
    <link rel="preload" as="video" href="/wp-content/uploads/technacy-home-4.mp4"/>
  <?php } else if(is_page('about')){?>
    <link rel="preload" as="video" href="/wp-content/uploads/technacy-we-are-technacy-smaller.mp4"/>
    <link rel="preload" as="video" href="/wp-content/uploads/astronaut-smaller.mp4"/>
    <link rel="preload" as="video" href="/wp-content/uploads/fashion-style.mp4"/>
    <link rel="preload" as="video" href="/wp-content/uploads/technacysolutions-we-work-globally.mp4"/>
  <?php } ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/header/site-header'); ?>
