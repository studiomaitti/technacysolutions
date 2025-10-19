<?php
/**
 * Template Name: contact-us-careers
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
        <span class="main"><?php the_title(); ?></span>
        <span class="behind">Careers</span>
      </h1>
    </header><!-- .entry-header -->

    <div class="entry-content content-width inview-elem inview-elem-top td-550">
      <div class="columns">
        <div class="left">
          <?php the_content(); ?>
        </div>
        <div class="right">
          <?php echo do_shortcode(get_field('shortcode_form')); ?>
        </div>
      </div>

    </div><!-- .entry-content -->

  </article><!-- #post-<?php the_ID(); ?> -->
<?php
}

get_footer();
