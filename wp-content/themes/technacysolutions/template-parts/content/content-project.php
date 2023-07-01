<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Technacysolutions
 * @since Technacysolutions 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a class="post-thumbnail-inner alignwide" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
    <?php the_post_thumbnail( 'full' ); ?>
    <?php the_title('<h1 class="entry-title default-max-width">', '</h1>'); ?>
  </a>
</article><!-- #post-<?php the_ID(); ?> -->
