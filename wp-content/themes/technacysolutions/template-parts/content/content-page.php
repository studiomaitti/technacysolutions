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
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>

    <?php if (have_rows('gruppo_link')): ?>
      <div class="link-group">

        <?php while (have_rows('gruppo_link')): the_row();
          $titolo = get_sub_field('titolo');
          if (have_rows('lista_link')):
            ?>
            <div class="link-group-i">
              <div class="link-group-title"><?php echo $titolo ?></div>
              <div class="link-group-lista">
                <?php while (have_rows('lista_link')): the_row(); ?>
                  <div class="link-i">
                    <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label_link'); ?></a>
                  </div>
                <?php endwhile; ?>
              </div>

            </div>
          <?php
          endif;
        endwhile;
        ?>
      </div>
    <?php endif; ?>


  </div><!-- .entry-content -->

  <?php if (get_edit_post_link()) : ?>
    <footer class="entry-footer default-max-width">
      <?php
      edit_post_link(sprintf(/* translators: %s: Post title. Only visible to screen readers. */ esc_html__('Edit %s', 'technacysolutions'), '<span class="screen-reader-text">' . get_the_title() . '</span>'), '<span class="edit-link">', '</span>');
      ?>
    </footer><!-- .entry-footer -->
  <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
