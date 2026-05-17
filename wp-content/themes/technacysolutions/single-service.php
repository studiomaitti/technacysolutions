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
while ( have_posts() ) :
	the_post();
  if(get_the_ID() === 11671){
    get_template_part( 'template-parts/content/content-single-service--iptv' );
  } else if(get_the_ID() === 11673){
    get_template_part( 'template-parts/content/content-single-service--video-analytics' );
  } else if(get_the_ID() === 11675){
    get_template_part( 'template-parts/content/content-single-service--cybersecurity' );
  } else {
    get_template_part( 'template-parts/content/content-single-service' );
  }

endwhile; // End of the loop.

get_footer();
