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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <link rel="preload" href="/wp-content/themes/technacysolutions/assets/fonts/PPNeueMachinaInktrapUltrabold.woff2" as="font" type="font/woff2" crossorigin>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php get_template_part('template-parts/header/site-header'); ?>
