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
// 1. Recupera l'ID del post corrente
$current_post_id = get_the_ID();

// 2. Recupera i termini della tassonomia 'ref-category' associati a questo post
$terms = wp_get_post_terms($current_post_id, 'ref-category', array('fields' => 'ids'));

if ($terms) {
  // 3. Prepara la query per trovare altri post di tipo 'reference' con gli stessi termini
  $args = array(
    'post_type' => 'reference',
    'post_status' => 'publish',
    'posts_per_page' => 4, // tutti i post
    'post__not_in' => array($current_post_id), // escludi il post corrente
    'tax_query' => array(
      array(
        'taxonomy' => 'ref-category',
        'field' => 'term_id',
        'terms' => $terms,
        'operator' => 'IN', // almeno uno dei termini
      ),
    ),
  );
  $related_query = new WP_Query($args);
}

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
    </div>
  <?php endif; ?>
  <div class="content--contanier">
    <header class="entry-header alignwide content-width">
      <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header><!-- .entry-header -->

    <div class="entry-content content-width inview-elem inview-elem-top td-550">
      <?php the_content(); ?>
    </div><!-- .entry-content -->
  </div>

  <?php if ($current_post_id === 11671) { ?>
    <div class="technacy-references-smart-highlights technacy-references-section">
      <h2 class="page-title inview-elem inview-elem-top">
        <span class="main">Smart Highlights</span>
        <span class="behind">Your Game, Your Way</span>
      </h2>

      <div class="content-width">
        <div class="entry-content">
          <p>
            Smart Highlights feature transforms ordinary recordings into personalized, dynamic experiences.<br>
            It lets viewers create their own highlight reels — whether it’s a 2-minute recap, top plays from a favorite player, or only 3-point shots — all in real time and tailored to their interests.<br>
            <br>
            Sports fans can also access live stats, scores, and summaries from major leagues worldwide, with Minnie AI ready to provide insights, player stories, and historical context on demand.<br>
            <br>
            Smart Highlights isn’t just a replay — it’s your game, your way, instantly.<br><br>
            Try Smart Highlights now — <strong>click below to experience it!</strong>
          </p>
        </div>
      </div>

      <div class="references-container">
        <div class="references-grid">

          <article class="post-i-1 hentry">
            <div class="article-container">
              <div class="column">
                <div class="column-container">
                  <div class="section-image">
                    <a class="post-thumbnail-inner alignwide" href="https://media.tok.tv/minerva/smarthighlights/demo/nba/index.html" aria-hidden="true" tabindex="-1" target="_blank">
                      <img width="600" height="600" src="/wp-content/themes/technacysolutions/assets/img/technacy-solutions--smart-highlights--nba.jpeg" class="attachment-full size-full wp-post-image" alt="" decoding="async" fetchpriority="high" style="">
                    </a>
                  </div>
                  <h2 class="section-title">NBA</h2>
                  <div class="section-description">
                    <div class="content-wrapper">
                      <h3 class="section-sub-title">NBA</h3>
                      <div class="short-description">Try Smart Highlights now<br> Click here to experience it!</div>
                    </div>
                    <div class="dot dot-arrow">
                      <span class="blob-red"></span>
                      <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector" d="M13.6394 3.04289L12.9323 2.33579L12.2252 3.04289L10.3452 4.92289L9.63871 5.62937L10.3446 6.33647L16.0811 12.0833H2.26562H1.26562V13.0833V15.75V16.75H2.26562H16.0811L10.3446 22.4969L9.63871 23.204L10.3452 23.9104L12.2252 25.7904L12.9323 26.4975L13.6394 25.7904L24.3061 15.1238L25.0132 14.4167L24.3061 13.7096L13.6394 3.04289Z" fill="white" stroke="white" stroke-width="2"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="post-i-2 hentry">
            <div class="article-container">
              <div class="column">
                <div class="column-container">
                  <div class="section-image">
                    <a class="post-thumbnail-inner alignwide" href="https://media.tok.tv/minerva/smarthighlights/demo/nfl/index.html" aria-hidden="true" tabindex="-1" target="_blank">
                      <img width="600" height="600" src="/wp-content/themes/technacysolutions/assets/img/technacy-solutions--smart-highlights--nfl.jpg" class="attachment-full size-full wp-post-image" alt="" decoding="async" fetchpriority="high" style="">
                    </a>
                  </div>
                  <h2 class="section-title">NFL</h2>
                  <div class="section-description">
                    <div class="content-wrapper">
                      <h3 class="section-sub-title">NFL</h3>
                      <div class="short-description">Try Smart Highlights now<br> Click here to experience it!</div>
                    </div>
                    <div class="dot dot-arrow">
                      <span class="blob-red"></span>
                      <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector" d="M13.6394 3.04289L12.9323 2.33579L12.2252 3.04289L10.3452 4.92289L9.63871 5.62937L10.3446 6.33647L16.0811 12.0833H2.26562H1.26562V13.0833V15.75V16.75H2.26562H16.0811L10.3446 22.4969L9.63871 23.204L10.3452 23.9104L12.2252 25.7904L12.9323 26.4975L13.6394 25.7904L24.3061 15.1238L25.0132 14.4167L24.3061 13.7096L13.6394 3.04289Z" fill="white" stroke="white" stroke-width="2"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="post-i-1 hentry">
            <div class="article-container">
              <div class="column">
                <div class="column-container">
                  <div class="section-image">
                    <a class="post-thumbnail-inner alignwide" href="https://media.tok.tv/minerva/smarthighlights/demo/soccer/index.html" aria-hidden="true" tabindex="-1" target="_blank">
                      <img width="600" height="600" src="/wp-content/themes/technacysolutions/assets/img/technacy-solutions--smart-highlights--soccer.jpeg" class="attachment-full size-full wp-post-image" alt="" decoding="async" fetchpriority="high" style="">
                    </a>
                  </div>
                  <h2 class="section-title">SOCCER</h2>
                  <div class="section-description">
                    <div class="content-wrapper">
                      <h3 class="section-sub-title">SOCCER</h3>
                      <div class="short-description">Try Smart Highlights now<br> Click here to experience it!</div>
                    </div>
                    <div class="dot dot-arrow">
                      <span class="blob-red"></span>
                      <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector" d="M13.6394 3.04289L12.9323 2.33579L12.2252 3.04289L10.3452 4.92289L9.63871 5.62937L10.3446 6.33647L16.0811 12.0833H2.26562H1.26562V13.0833V15.75V16.75H2.26562H16.0811L10.3446 22.4969L9.63871 23.204L10.3452 23.9104L12.2252 25.7904L12.9323 26.4975L13.6394 25.7904L24.3061 15.1238L25.0132 14.4167L24.3061 13.7096L13.6394 3.04289Z" fill="white" stroke="white" stroke-width="2"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <article class="post-i-1 hentry">
            <div class="article-container">
              <div class="column">
                <div class="column-container">
                  <div class="section-image">
                    <a class="post-thumbnail-inner alignwide" href="https://media.tok.tv/minerva/smarthighlights/demo/mlb/index.html" aria-hidden="true" tabindex="-1" target="_blank">
                      <img width="600" height="600" src="/wp-content/themes/technacysolutions/assets/img/technacy-solutions--smart-highlights--mbl.jpeg" class="attachment-full size-full wp-post-image" alt="" decoding="async" fetchpriority="high" style="">
                    </a>
                  </div>
                  <h2 class="section-title">MLB</h2>
                  <div class="section-description">
                    <div class="content-wrapper">
                      <h3 class="section-sub-title">MLB</h3>
                      <div class="short-description">Try Smart Highlights now<br> Click here to experience it!</div>
                    </div>
                    <div class="dot dot-arrow">
                      <span class="blob-red"></span>
                      <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector" d="M13.6394 3.04289L12.9323 2.33579L12.2252 3.04289L10.3452 4.92289L9.63871 5.62937L10.3446 6.33647L16.0811 12.0833H2.26562H1.26562V13.0833V15.75V16.75H2.26562H16.0811L10.3446 22.4969L9.63871 23.204L10.3452 23.9104L12.2252 25.7904L12.9323 26.4975L13.6394 25.7904L24.3061 15.1238L25.0132 14.4167L24.3061 13.7096L13.6394 3.04289Z" fill="white" stroke="white" stroke-width="2"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- #post-11913 -->
        </div>
      </div>

    </div>
  <?php } ?>


  <div class="reference">
    <?php
    // 4. Loop sui risultati
    if ($terms && $related_query->have_posts()) {
      ?>
      <section class="technacy-references-section">
        <div class="references-container">
          <h2 class="section-title">
            <a href="/references" class="section-link" title="Our References">
              <span class="main">Our References</span>
              <span class="behind">Works</span>
              <span class="dot-container">
            <div class="dot dot-arrow">
              <span class="blob-white"></span>
              <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Vector" d="M13.6394 3.04289L12.9323 2.33579L12.2252 3.04289L10.3452 4.92289L9.63871 5.62937L10.3446 6.33647L16.0811 12.0833H2.26562H1.26562V13.0833V15.75V16.75H2.26562H16.0811L10.3446 22.4969L9.63871 23.204L10.3452 23.9104L12.2252 25.7904L12.9323 26.4975L13.6394 25.7904L24.3061 15.1238L25.0132 14.4167L24.3061 13.7096L13.6394 3.04289Z" fill="black" stroke="black" stroke-width="2"></path>
              </svg>
            </div>
            </span>
            </a>
          </h2>
          <div class="references-grid">

            <?php
            $i = 0;
            while ($related_query->have_posts()) {
              $related_query->the_post();
              $i++;
              $css_class = [];
              $css_class[] = 'post-i-' . $i;

              include(locate_template('template-parts/content/content-reference.php', false, false));
            }
            ?>
          </div>
        </div>
      </section>
      <?php
    }
    ?>
  </div>

</article><!-- #post-<?php the_ID(); ?> -->
