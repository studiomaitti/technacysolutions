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

  <header class="entry-header alignwide">
    <?php get_template_part('template-parts/header/entry-header'); ?>
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
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
  </div><!-- .entry-content -->

  <?php if (get_edit_post_link()) : ?>
    <footer class="entry-footer default-max-width">
      <?php
      edit_post_link(sprintf(/* translators: %s: Post title. Only visible to screen readers. */ esc_html__('Edit %s', 'technacysolutions'), '<span class="screen-reader-text">' . get_the_title() . '</span>'), '<span class="edit-link">', '</span>');
      ?>
    </footer><!-- .entry-footer -->
  <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
