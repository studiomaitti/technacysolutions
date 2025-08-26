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
<section id="primary" class="content-area">
  <div class="archive-description sticky-elem">
    <h1 class="page-title">
      <span class="main">Our Services</span>
      <span class="behind">Solutions</span>
    </h1>
    <div class="content-width">
      At Technacy Solutions Lab, we deliver a powerful suite of digital transformation tools designed to enhance content
      delivery, data intelligence, and security infrastructure across industries.
    </div>
  </div>
  <main id="main" class="site-main" role="main">
    <div class="content-width">
      <?php if (have_posts()) : ?>
        <?php
        // Start the Loop.
        $i = 0;
        while (have_posts()) :
          the_post();
          $i++;
          $css_class = [];
          $css_class[] = 'post-i-' . $i;

          include(locate_template('template-parts/content/content-service.php', false, false));

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
    </div>

  </main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>
