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


  <div class="content-width ">
    <div class="swiper mySwiper owl-card-vertical">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="card-i">
            <div class="card-info">
              <h2>Next-Gen Android TV IPTV for Hospitality, Healthcare & Enterprise</h2>
              <h3 class="category">Transform every screen into an engaging, interactive experience with Technacy + Minerva Networks.</h3>
              <div class="text">
                Technacy Solutions delivers an end-to-end IPTV solution powered by Minerva Networks, designed for Android TV devices.<br>
                Our platform transforms how hospitality, healthcare, airports, and residential environments
                engage users, offering an immersive, seamless, and scalable experience across all screens.
              </div>
            </div>
            <div class="card-link">
              Schedule a Consultation Today to Discover How Technacy + Minerva Can Transform Your Screens into Interactive,
              High-Performance IPTV Experiences Across Hospitality, Healthcare, Airports, and Enterprise Environments.
              <a href="/request-a-demo/" class="js-contact-modal request-demo" title="Request a Demo">REQUEST A DEMO</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="card-i">
            <div class="card-info">
              <h2>Your Complete IPTV Ecosystem</h2>
              <div class="text">
                Technacy’s Android TV IPTV platform provides a fully integrated ecosystem including Middleware, Headend,
                Servers, and STBs. <br>
                <br>
                From content acquisition to device management, analytics, and user experience, every
                layer is designed for maximum performance, reliability, and ease of use.
              </div>
            </div>
            <div class="card-link">
              Discover How Our Complete Android TV IPTV Ecosystem Works from Middleware and Headend to Servers and
              end-user Devices designed to Deliver Seamless, Scalable, and Engaging Digital Experiences.
              <a href="/request-a-demo/" class="js-contact-modal request-demo" title="Request a Demo read IPTV & TM10 AI 360 Ecosystem">REQUEST A DEMO</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="card-i">
            <div class="card-info">
              <h2>Middleware – The Intelligent Core</h2>
              <div class="text">
                The Minerva Middleware is the brain of your IPTV ecosystem, built for Android TV to orchestrate content
                delivery, user interaction, analytics, and enterprise integrations. It seamlessly unifies Live TV, VOD,
                Catch-Up, and OTT content while connecting with PMS, HIS, and CRM systems. Featuring multi-language
                support, customizable branding, enterprise-grade DRM, and a native Android TV interface, it delivers
                fast performance and a rich user experience. Personalized guest and resident profiles enable targeted
                content delivery, ensuring relevance and engagement.
              </div>
            </div>
            <div class="card-link">
              Learn More About Our Minerva Middleware and How It Powers Live TV, VOD, OTT Integration, Guest Personalization, and Enterprise-Level Analytics Across All Screens.
              <a href="/request-a-demo/" class="js-contact-modal request-demo" title="Request a Demo">REQUEST A DEMO</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="card-i">
            <div class="card-info">
              <h2>End-User Devices – Seamless Experiences</h2>
              <div class="text">
                Technacy offers a complete range of Android TV-powered devices—including set-top boxes, Smart TVs, and
                tablets—delivering a consistent, intuitive experience. All run the native Android TV OS with Play Store
                access, support over-the-air updates, remote management, and enterprise-grade provisioning with custom
                branding for hotels and hospitals. Built-in Chromecast, HDMI-CEC, secure boot, and DRM compliance ensure
                seamless integration, security, and a unified interface across every device.
              </div>
            </div>
            <div class="card-link">
              View Our Range of Android TV-Powered Devices, Including STBs, Smart TVs, and Tablets, with Enterprise Provisioning, OTA Updates, Remote Management, and Seamless User Experiences.
              <a href="/request-a-demo/" class="js-contact-modal request-demo" title="Request a Demo">REQUEST A DEMO</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="card-i">
            <div class="card-info">
              <h2>Servers & Infrastructure – Scalable & Reliable</h2>
              <div class="text">
                At the heart of the IPTV ecosystem is a robust server architecture, with Technacy providing flexible
                deployment options—on-premises, hybrid cloud, or fully cloud-based—to guarantee high availability,
                performance, and security. The platform combines origin servers, content management, and real-time
                analytics pipelines with built-in redundancy, failover, and disaster recovery. Built on containerized
                microservices for agile scaling, it also integrates seamlessly with enterprise IT and IoT systems,
                enabling comprehensive monitoring and operational resilience.
              </div>
            </div>
            <div class="card-link">
              Discover Our Server and Infrastructure Solutions That Ensure Maximum Performance, Redundancy, Security, and Scalability for Your IPTV Ecosystem — On-Premises, Hybrid Cloud, or Fully Cloud-Based.
              <a href="/request-a-demo/" class="js-contact-modal request-demo" title="Request a Demo">REQUEST A DEMO</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="card-i">
            <div class="card-info">
              <h2>Technacy Works With Leading IPTV & Video Platforms</h2>
              <div class="text">
                Technacy is proud to operate and integrate multiple global IPTV and video platforms, giving clients choice, flexibility, and unmatched interoperability.
                Partner Platforms:
                <ul style="margin-bottom: 0">
                  <li><strong>Televes:</strong> IPTV headend and signal distribution solutions</li>
                  <li>Sonifi: Hospitality-focused in-room entertainment</li>
                  <li>HiBox: Hospital and enterprise IPTV solutions</li>
                  <li>Souka TV: Regional OTT content platform for Arabic content</li>
                  <li>Kaltura: Enterprise video platform with transcoding, API integration, and analytics</li>
                  <li>MCOMS: Luxury IPTV and digital signage solutions for hotels and resorts</li>
                </ul>

              </div>
            </div>
            <div class="card-link">
              <a href="/request-a-demo/" class="js-contact-modal request-demo" title="Request a Demo" style="margin-top: 0">REQUEST A DEMO</a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>

  </div>


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
