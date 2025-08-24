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

  <header class="entry-header alignwide content-width">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <div class="cat-links-date">
      <div class="cat-links">
        <?php
        $a_links = get_the_category(get_the_ID());

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
  </header><!-- .entry-header -->

  <div class="entry-content content-width inview-elem inview-elem-top td-550">
    <?php the_content(); ?>
  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
