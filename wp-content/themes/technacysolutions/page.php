<?php
/**
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
    get_template_part('template-parts/content/content-page');

}

get_footer();
