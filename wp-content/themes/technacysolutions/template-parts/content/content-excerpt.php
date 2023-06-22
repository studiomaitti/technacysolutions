<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Technacysolutions
 * @since Technacysolutions 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php get_template_part('template-parts/header/excerpt-header'); ?>
  <div class="cat-links-date">
    <div class="cat-links">
      <?php
      $a_links = technacysolutions_get_categories(get_the_ID());

      if (!empty($a_links)) {
        $a_links_print = [];
        foreach ($a_links as $k => $v) {
          $a_links_print[] = '<a href="' . get_category_link($v) . '" rel="category tag">' . $v->name . '</a>';
        }
        echo implode(', ', $a_links_print);
      }
      ?>
    </div>
    <div class="post-date"><?php the_date() ?></div>
  </div>
</article><!-- #post-${ID} -->
