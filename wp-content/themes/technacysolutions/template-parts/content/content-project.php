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

$link = get_the_permalink();

//RANDOM
$css_class_container = [];
//Nella sua colonna, l'articolo occupa meno spazio, un massimo del 70% e questo è allineato orizzontalmente a caso
$a_pos = array('left', 'center', 'right');
if($i == 1){
  $css_class_container[] = 'left';
  //$css_class[] = 'inview-elem inview-elem-left';
} else if($i == 2){
  $css_class_container[] = 'right';
  //$css_class[] = 'inview-elem inview-elem-left';
} else if($i == 3){
  $css_class_container[] = 'center';
  $css_class[] = 'upper-upper';
  //$css_class[] = 'inview-elem inview-elem-left';
} else if($i == 6){
  $css_class[] = 'upper';
  //$css_class[] = 'inview-elem inview-elem-right';
} else {
  $css_class_container[] = $a_pos[array_rand($a_pos, 1)];

  if($i % 2){
    //$css_class[] = 'inview-elem inview-elem-left';
  } else {
    //$css_class[] = 'inview-elem inview-elem-right';
  }
}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(implode(' ', $css_class)); ?>>
  <div class="article-container <?php echo implode(' ', $css_class_container) ?>">
    <div class="img">
      <span class="blob-big white"></span>
      <a class="post-thumbnail-inner alignwide" href="<?php echo $link; ?>" aria-hidden="true" tabindex="-1">
        <?php the_post_thumbnail('full'); ?>
      </a>
    </div>
    <div class="tit-container">
      <a class="post-thumbnail-inner alignwide" href="<?php echo $link; ?>" aria-hidden="true" tabindex="-1">
        <span class="client"><?php the_field('client'); ?></span>
        <span class="location"><?php the_field('location'); ?></span> </a>
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
