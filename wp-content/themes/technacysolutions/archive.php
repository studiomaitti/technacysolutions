<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Artet_magazine
 * @since Artet onlus 1.0
 */

get_header();

$title = get_the_archive_title();
$a = [];
for ($i = 0; $i < 30; $i++) {
  $a[] = '<span>' . $title . '</span>';
}
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="project-category">
  <div class="container">
    <div class="container-1">
      <div class="cat-i cat-1"><a href="/category-prj/iptv-projects/">iptv projects</a></div>
      <div class="star">
        <svg width="90" height="86" viewBox="0 0 90 86" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path id="*" d="M0.339844 38.0416L4.41984 25.0816L33.2198 34.4416L41.1398 39.9616L38.4998 30.8416V0.601562H51.9398V30.8416L49.2998 40.2016L56.9798 34.6816L85.7798 25.5616L89.8598 38.2816L61.0598 47.6416L51.9398 48.1216L59.1398 53.4016L76.8998 77.8816L65.8598 85.8016L48.0998 61.3216L44.9798 52.6816L41.6198 61.3216L23.8598 85.8016L13.0598 77.8816L30.8198 53.4016L38.2598 47.8816L29.1398 47.4016L0.339844 38.0416Z" fill="white"/>
        </svg>
      </div>
      <div class="cat-i cat-2"><a href="#">adasdfasdfd fds fsd</a></div>
    </div>
  </div>
</section>

<section class="page-link">
  <div class="page-link-top-line" data-paroller-factor="0.35" data-paroller-type="foreground" data-paroller-direction="horizontal" data-paroller-transition="transform .35s linear">
    <?php echo implode('<span class="trattino">-</span>', $a); ?>
  </div>
  <div class="page-link-bottom-line" data-paroller-factor="-0.35" data-paroller-type="foreground" data-paroller-direction="horizontal" data-paroller-transition="transform .35s linear">
    <?php echo implode('<span class="trattino">-</span>', $a); ?>
  </div>
</section>

<section id="primary" class="content-area">
  <main id="main" class="site-main content-width" role="main">

    <?php if (have_posts()) : ?>
      <?php
      // Start the Loop.
      $i = 0;
      $mod = 0;
      while (have_posts()) :
        the_post();
        $i++;
        $css_class = [];
        $css_class[] = 'post-mod-' . ($mod % 4);
        $mod++;

        $css_class[] = 'post-i-' . $i;
        $css_class[] = 'post-i-mod-' . ($i % 2);

        include(locate_template('template-parts/content/content-project.php', false, false));

        // End the loop.
      endwhile;
      // Previous/next page navigation.
      /*
        the_posts_pagination(
          array(
            'prev_text' => __('Previous page', 'artetonlus'),
            'next_text' => __('Next page', 'artetonlus'),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'artetonlus') . ' </span>',
          )
        );
  */
    endif;
    ?>

  </main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>
