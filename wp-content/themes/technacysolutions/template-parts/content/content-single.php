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
$sfondo = get_field('sfondo');
$colore_testo = get_field('colore_testo');

?>
<style>
  <?php if(!empty($sfondo)){ ?>
  body.singular article {
      background-color: <?php echo $sfondo; ?> !important;
  }

  <?php } ?>

  <?php if(!empty($colore_testo)){ ?>
  body.singular article {
      color: <?php echo $colore_testo; ?>;
  !important;
  }

  body.singular article a {
      color: <?php echo $colore_testo; ?>;
  !important;
  }

  <?php } ?>

</style>

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
                    <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label_link'); ?> <span class="link-icon"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M 19.980469 2.9902344 A 1.0001 1.0001 0 0 0 19.869141 3 L 15 3 A 1.0001 1.0001 0 1 0 15 5 L 17.585938 5 L 8.2929688 14.292969 A 1.0001 1.0001 0 1 0 9.7070312 15.707031 L 19 6.4140625 L 19 9 A 1.0001 1.0001 0 1 0 21 9 L 21 4.1269531 A 1.0001 1.0001 0 0 0 19.980469 2.9902344 z M 5 3 C 3.9069372 3 3 3.9069372 3 5 L 3 19 C 3 20.093063 3.9069372 21 5 21 L 19 21 C 20.093063 21 21 20.093063 21 19 L 21 13 A 1.0001 1.0001 0 1 0 19 13 L 19 19 L 5 19 L 5 5 L 11 5 A 1.0001 1.0001 0 1 0 11 3 L 5 3 z"/></svg></span></a>
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
