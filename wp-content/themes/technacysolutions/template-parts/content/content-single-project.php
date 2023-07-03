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
<article id="post-<?php the_ID(); ?>" <?php post_class('content-width'); ?>>
  <header class="entry-header alignwide">
    <div class="client">
      <span><?php the_field('client'); ?></span>
    </div>
    <h1 class="post-title">
      <?php the_title(); ?>
    </h1>
    <div class="location">
      <span><?php the_field('location'); ?></span>
    </div>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
  </div><!-- .entry-content -->

  <div class="prj-gallery-container">
    <div class="owl-carousel">
      <?php
      $images = get_field('gallery');
      $size = 'prj-gallery'; // (thumbnail, medium, large, full or custom size)
      if ($images) {
        foreach ($images as $image_id) {
          $img_info = wp_get_attachment_image_src($image_id, $size);
          ?>
            <div class="owl-slide" style="width: <?php echo $img_info[1]; ?>px;"><img src="<?php echo $img_info[0]; ?>" width="<?php echo $img_info[1]; ?>" height="<?php echo $img_info[2]; ?>" ></div>
          <?php
        }
      }
      ?>
      <?php
      $images = get_field('gallery');
      $size = 'prj-gallery'; // (thumbnail, medium, large, full or custom size)
      if ($images) {
        foreach ($images as $image_id) {
          $img_info = wp_get_attachment_image_src($image_id, $size);
          ?>
          <div class="owl-slide" style="width: <?php echo $img_info[1]; ?>px;"><img src="<?php echo $img_info[0]; ?>" width="<?php echo $img_info[1]; ?>" height="<?php echo $img_info[2]; ?>" ></div>
          <?php
        }
      }
      ?>
    </div>
  </div>

</article><!-- #post-<?php the_ID(); ?> -->