<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Technacysolutions
 * @since Technacysolutions 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <!-- Immagine in evidenza a tutta larghezza -->
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="featured-image-container">
      <?php the_post_thumbnail( 'full', array( 'class' => 'featured-image' ) ); ?>
    </div>
  <?php endif; ?>

  <header class="entry-header alignwide content-width">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->

  <div class="entry-content content-width inview-elem inview-elem-top td-550">
    <?php the_content(); ?>
  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
