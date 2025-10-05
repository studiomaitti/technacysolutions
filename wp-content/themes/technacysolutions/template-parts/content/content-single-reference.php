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

$read_more = get_field('read_more');
$category = get_field('category');
$images = get_field('gallery');
$video_embed = get_field('video_embed');
$size = 'prj-gallery'; // (thumbnail, medium, large, full or custom size)

$header_image = get_field('header_image');
$header_image_tablet = get_field('header_image_tablet');
$header_image_mobile = get_field('header_image_mobile');
$header_image_html = $header_image ? '<img class="dsk" src="' . $header_image . '" alt="">' : '';
$header_image_html_tablet = $header_image_tablet ? '<img class="tbl" src="' . $header_image_tablet . '" alt="">' : '';
$header_image_html_mbl = $header_image_mobile ? '<img class="mbl" src="' . $header_image_mobile . '" alt="">' : '';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <!-- Immagine in evidenza a tutta larghezza -->
  <?php if ($header_image_html || has_post_thumbnail()) : ?>
    <div class="featured-image-container">
      <?php if ($header_image_html || $header_image_html_mbl || $header_image_html_mbl) {
        if ($header_image_html) {
          echo $header_image_html;
        }
        if ($header_image_html_tablet) {
          echo $header_image_html_tablet;
        }
        if ($header_image_html_mbl) {
          echo $header_image_html_mbl;
        }
      }
      else {
        the_post_thumbnail('full', array('class' => 'featured-image'));
      }
      ?>
      <header class="entry-header">
        <div class="tit-container">
          <?php the_title('<div class="entry-title alignwide content-width">', '</div>'); ?>
          <?php if ($category) { ?>
            <div class="category red-box">
              <span><?php echo $category; ?></span>
            </div>
          <?php } ?>
        </div>
      </header><!-- .entry-header -->
    </div>
    <header class="entry-header entry-header-mobile alignwide content-width">
      <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header><!-- .entry-header -->    </div>
  <?php else: ?>
    <header class="entry-header">
      <?php the_title('<h1 class="entry-title alignwide content-width">', '</h1>'); ?>
    </header><!-- .entry-header -->
  <?php endif; ?>
<?php /*
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
*/?>
  <div class="entry-content content-width inview-elem inview-elem-top td-550 section-bg"  data-masthead-color="#000000">
    <div class="first-part">
      <?php the_content(); ?>
    </div>
    <?php if ($read_more) { ?>
      <div class="read-more">
        <a href="#" class="js-read-more-link">Read More</a>
      </div>
      <div class="second-part">
        <?php echo $read_more; ?>
      </div>
    <?php } ?>
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



  <?php if ($images) { ?>
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
  <?php } ?>

  <?php if ($video_embed) { ?>
    <div class="prj-image-container content-width inview-elem inview-elem-left">
      <div class="video-responsive">
        <?php echo $video_embed; ?>
      </div>
      <style type="text/css">
          .video-responsive {
              position: relative;
              display: block;
              width: 100%;
              overflow: hidden;
          }


          .video-responsive::before {
              display: block;
              content: "";
              padding-top: 56.25%;
          }

          .video-responsive iframe {
              position: absolute;
              top: 0;
              bottom: 0;
              left: 0;
              width: 100%;
              height: 100%;
              border: 0;
          }
      </style>
    </div>
  <?php } ?>

  <div class="js-go-back js-dot-to-cicle dot-container inview-elem inview-elem-bottom td-200">
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