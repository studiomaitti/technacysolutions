<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Technacysolutions
 * @since Technacysolutions 1.0
 *
 * @var integer $i
 * @var integer $css_class
 */

$link = get_the_permalink();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(implode(' ', $css_class)); ?>>
  <div class="article-container">
    <div class="column">
      <div class="column-container">
        <div class="section-image">
          <a class="post-thumbnail-inner alignwide" href="<?php echo $link; ?>" aria-hidden="true" tabindex="-1">
            <?php the_post_thumbnail('full'); ?>
          </a>
        </div>
        <h2 class="section-title"><?php the_title(); ?></h2>
        <div class="section-description">
          <div class="content-wrapper">
            <h3 class="section-sub-title"><?php the_title(); ?></h3>
            <div class="short-description"><?php the_excerpt(); ?></span>
            </div>
          </div>
          <div class="dot dot-arrow">
            <span class="blob"></span>
            <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path id="Vector" d="M13.6394 3.04289L12.9323 2.33579L12.2252 3.04289L10.3452 4.92289L9.63871 5.62937L10.3446 6.33647L16.0811 12.0833H2.26562H1.26562V13.0833V15.75V16.75H2.26562H16.0811L10.3446 22.4969L9.63871 23.204L10.3452 23.9104L12.2252 25.7904L12.9323 26.4975L13.6394 25.7904L24.3061 15.1238L25.0132 14.4167L24.3061 13.7096L13.6394 3.04289Z" fill="white" stroke="white" stroke-width="2"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
