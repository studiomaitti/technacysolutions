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
  <header class="entry-header alignwide content-width">
    <div class="client inview-elem inview-elem-top">
      <span><?php the_field('location'); ?></span>
    </div>
    <h1 class="post-title inview-elem inview-elem-top td-200">
      <?php the_field('client'); ?>
    </h1>
    <div class="location inview-elem inview-elem-top td-400">
      <span><?php the_field('year'); ?></span>
    </div>
  </header><!-- .entry-header -->

  <div class="entry-content content-width inview-elem inview-elem-top td-550">
    <?php the_content(); ?>
  </div><!-- .entry-content -->
  <?php
  $video = get_field('video');
  $size = 'prj-gallery'; // (thumbnail, medium, large, full or custom size)
  if ($video) {

  ?>
    <div class="entry-video content-width inview-elem inview-elem-top td-600">
      <video src="<?php echo $video; ?>" controls muted autoplay></video>
    </div><!-- .entry-content -->
    <?php
  }
  ?>



  <?php
  $images = get_field('gallery');
  $size = 'prj-gallery'; // (thumbnail, medium, large, full or custom size)
  if ($images) {

    ?>
    <div class="prj-gallery-container">
      <div class="owl-carousel">
        <?php
        foreach ($images as $image_id) {
          $img_info = wp_get_attachment_image_src($image_id, $size);
          ?>
          <div class="owl-slide" style="width: <?php echo $img_info[1]; ?>px;">
            <img src="<?php echo $img_info[0]; ?>" width="<?php echo $img_info[1]; ?>" height="<?php echo $img_info[2]; ?>">
          </div>
          <?php
        }
        foreach ($images as $image_id) {
          $img_info = wp_get_attachment_image_src($image_id, $size);
          ?>
          <div class="owl-slide" style="width: <?php echo $img_info[1]; ?>px;">
            <img src="<?php echo $img_info[0]; ?>" width="<?php echo $img_info[1]; ?>" height="<?php echo $img_info[2]; ?>">
          </div>
          <?php
        }
        ?>

      </div>
    </div>
    <?php
  }
  else if(empty($video)){
    ?>
    <div class="prj-image-container content-width inview-elem inview-elem-left">
      <?php the_post_thumbnail('full'); ?>
    </div>
    <?php
  }
  ?>

  <div class="dot-container inview-elem inview-elem-bottom td-200">
    <div class="dot dot-arrow">
      <span class="blob white"></span>
      <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="Icon">
          <path id="Vector" d="M17.465 35.6641L17.8185 36.0177L18.1721 35.6641L20.6075 33.2286L20.9608 32.8754L20.6079 32.5219L11.8214 23.7196L31.6367 23.7196L32.1367 23.7196L32.1367 23.2196L32.1367 19.7651L32.1367 19.2651L31.6367 19.2651L11.8214 19.2651L20.6079 10.4629L20.9608 10.1093L20.6075 9.75609L18.1721 7.32063L17.8185 6.96708L17.465 7.32063L3.6468 21.1388L3.29325 21.4924L3.6468 21.8459L17.465 35.6641Z" fill="black" stroke="black"/>
        </g>
      </svg>
    </div>
  </div>

</article><!-- #post-<?php the_ID(); ?> -->