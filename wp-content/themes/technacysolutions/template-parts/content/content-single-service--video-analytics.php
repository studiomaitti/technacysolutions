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

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <section class="box-with-skew section-bg" data-masthead-color="#000000">
    <div class="image-container">
      <div class="bg" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0%) skew(7.00031deg);"></div>
      <img src="/wp-content/uploads/2025/08/tecnacysolution-tablet.jpg" alt="Technacy Solutions">
    </div>
    <div class="text-container">
      <div class="description-content">
        <h2 class="section-title">What Makes Technacy’s AI Video Analytics Unique </h2>
        <div class="text-content">
          <h3>✔ Multi-Sector AI Engine</h3>
          <p>Fine-tuned for government, media, telecom, transportation, healthcare, and smart-city scenarios.</p>

          <h3>✔ Smart Search in Seconds</h3>
          <p>Search across faces, objects, scenes, activities, speech, and contextual events in large archives.</p>

          <h3>✔ Real-Time Detection for Live Streams</h3>
          <p>Monitor live TV channels, CCTV, IP streams, or newsroom feeds for critical events.</p>

          <h3>✔ AI Training on Your Content</h3>
          <p>We train the engine on your videos, your policies, your language, including Arabic.</p>

          <h3>✔ Secure On-Prem Option</h3>
          <p>Perfect for ministries, police, and national TV archives that require local data storage.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <section class="small-card-section">
    <div class="content-width">
      <h2 class="section-title inview-elem inview-elem-top">
        <span class="main">Features</span>
        <span class="behind">Core</span>
      </h2>
      <div class="card-container inview-elem inview-elem-top">
        <div class="small-card">
          <h3>Facial Recognition &amp; Person Tracking</h3>
          <ul>
            <li>Identify or track individuals across multiple streams</li>
            <li>Multi-angle recognition</li>
            <li>Privacy-compliant modes available</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Object &amp; Scene Detection</h3>
          <ul>
            <li>Vehicles, bags, equipment, uniforms, tools</li>
            <li>Indoor/outdoor scene classification</li>
            <li>Activity recognition</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>Speech-to-Text &amp; OCR</h3>
          <ul>
            <li>Accurate transcription for Arabic &amp; English</li>
            <li>Subtitle generation</li>
            <li>Keyword search across hours of content</li>
            <li>On-screen text detection</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Live Stream Alerts</h3>
          <ul>
            <li>Abusive content detection (text, speech, gestures)</li>
            <li>Silence detection</li>
            <li>Logo/ticker monitoring</li>
            <li>Content compliance alerts</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>Smart Video Summaries</h3>
          <ul style="margin-bottom: 6px;">
            <li>Auto-create short versions of long videos</li>
            <li>Highlights extraction</li>
            <li>Scene grouping</li>
          </ul>
          <h3>Privacy Modes</h3>
          <ul>
            <li>Masking, blurring, and redaction</li>
            <li>GDPR/ISO-compliant workflows</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Metadata Generation</h3>
          <ul>
            <li>Auto tagging</li>
            <li>Topic classification</li>
            <li>Video categorization</li>
            <li>Searchable content library</li>
          </ul>
        </div>
      </div>

      <h2 class="section-title second-title inview-elem inview-elem-top">
        <span class="main">Sector Specific</span>
        <span class="behind">Intelligence</span>
      </h2>

      <div class="card-container inview-elem inview-elem-top">

        <div class="small-card">
          <h3>Government &amp; Police</h3>
          <ul>
            <li>Real-time alerts for critical events</li>
            <li>Automated compliance monitoring</li>
            <li>Rapid investigation search</li>
            <li>Secure on-prem deployment</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Broadcasters &amp; National Media</h3>
          <ul>
            <li>Archive search</li>
            <li>Silence &amp; abusive content detection</li>
            <li>Automated metadata</li>
            <li>Regulatory compliance</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>Airports &amp; Transportation</h3>
          <ul>
            <li>Crowding alerts</li>
            <li>Abandoned objects</li>
            <li>Passenger flow analytics</li>
            <li>Queue monitoring</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Healthcare</h3>
          <ul>
            <li>Staff movement compliance</li>
            <li>Patient flow</li>
            <li>Restricted area alerts</li>
            <li>Integration with hospital dashboards</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>Smart Cities</h3>
          <ul>
            <li>Traffic analysis</li>
            <li>Incident detection</li>
            <li>Public space monitoring</li>
            <li>AI-powered city insights</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Hospitality</h3>
          <ul>
            <li>Lobby analytics</li>
            <li>Safety monitoring</li>
            <li>Upsell and operational analytics</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <section class="box-with-skew section-bg why-technacy inview-elem inview-elem-top" data-masthead-color="#000000">
    <div class="image-container text">
      <div class="bg" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0%) skew(7.00031deg);"></div>
      <div class="text-content">
        <h2>Technology Advantages</h2>

        <h3>✔ Works with Any Camera or Video Source</h3>
        <p>IP cameras, streaming feeds, TV channels, media archives.</p>

        <h3>✔ Cloud or On-Prem</h3>
        <p>Choose your architecture based on sensitivity.</p>

        <h3>✔ Fully Arabic-Compatible</h3>
        <p>Speech-to-text, metadata, abuse detection.</p>

        <h3>✔ Integrates with Technacy Ecosystem</h3>
        <p>IPTV, Digital Signage, AI Avatar, command centers.</p>

        <h3>✔ Scalable for National Projects</h3>
        <p>Ideal for ministries, airport terminals, and mega-developments.</p>
      </div>
    </div>
    <div class="text-container">
      <div class="description-content">
        <h2 class="section-title">Why Choose Technacy for Video Analytics </h2>
        <div class="text-content">
          <h3>With over a decade of delivering video platforms across GCC, Technacy combines:</h3>
          <br>
          <ul>
            <li><h3>Government-grade security</h3></li>
            <li><h3>AI innovation (via Kaltura + internal R&amp;D)</h3></li>
            <li><h3>Large deployment experience</h3></li>
            <li><h3>Multi-sector customization</h3></li>
            <li><h3>Local support teams in Bahrain, Saudi &amp; UAE</h3></li>
          </ul>
          <h3>This ensures a reliable, high-performance solution that adapts to Emirati, Saudi, and regional market
            requirements
          </h3>
        </div>
      </div>

    </div>

  </section>

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
