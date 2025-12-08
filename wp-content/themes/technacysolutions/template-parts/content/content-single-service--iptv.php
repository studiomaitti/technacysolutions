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
      <img src="/wp-content/themes/technacysolutions/assets/img/home-bg-01.jpg" alt="Technacy Solutions">
    </div>
    <div class="text-container">
      <div class="description-content">
        <h2 class="section-title">AI Avatar — The Intelligent Layer of the Ecosystem </h2>
        <div class="text-content">
          <p>Our <strong>AI Avatar</strong> brings human-like digital interaction across IPTV, OTT, Digital Signage,
            mobile apps, and kiosks.</p>

          <p><strong>How the Avatar Enhances IPTV &amp; OTT</strong></p>
          <ul>
            <li>Natural conversation (Arabic/English)</li>
            <li>Content discovery through voice</li>
            <li>Episode summaries &amp; “Explain this video”</li>
            <li>AI-recommended VOD &amp; live channels</li>
            <li>Real-time metadata extraction</li>
            <li>Personalized suggestions</li>
          </ul>
          <p><strong>Beyond TV — Cross-Industry AI Assistant</strong></p>
          <ul>
            <li>Hospitality guest concierge</li>
            <li>Healthcare patient assistant</li>
            <li>Real estate digital advisor</li>
            <li>Corporate helpdesk &amp; HR assistant</li>
            <li>Smart-city community information</li>
            <li>Airport passenger guidance</li>
            <li>Retail customer support</li>
            <li>Powered by advanced generative AI — the Avatar bridges media interaction and enterprise productivity.
            </li>
          </ul>
        </div>
      </div>

    </div>

  </section>

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <section class="small-card-section">
    <div class="content-width">
      <h2 class="section-title inview-elem inview-elem-top">
        <span class="main">Core Capabilities</span>
        <span class="behind">Technacy<br>Ecosystem</span>
      </h2>
      <div class="card-container inview-elem inview-elem-top">
        <div class="small-card">
          <h3>IPTV</h3>
          <ul>
            <li>Live TV, EPG</li>
            <li>Catch-up, Time-shift</li>
            <li>VOD, multilingual libraries</li>
            <li>STB & Smart TV apps</li>
            <li>Multi-brand hotel UI themes</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>OTT & Multi-Screen</h3>
          <ul>
            <li>iOS / Android apps</li>
            <li>Web TV</li>
            <li>Samsung & LG Smart TV</li>
            <li>Android TV Operator Tier</li>
            <li>Cloud DVR</li>
            <li>Partner integrations (Netflix, Prime, Shahid, YouTube…)</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>AI Intelligence Layer</h3>
          <ul>
            <li>Video understanding</li>
            <li>Metadata creation</li>
            <li>Face/object/scene detection</li>
            <li>Automated cataloging</li>
            <li>Personalized user journeys</li>
            <li>Content &amp; workflow automation</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Digital Signage Integration</h3>
          <ul>
            <li>Multi-zone layouts</li>
            <li>Airport/retail wayfinding</li>
            <li>Corporate messaging</li>
            <li>Emergency alerts</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>ELV & Headend Integration</h3>
          <ul>
            <li>RF, SMATV, fiber distribution</li>
            <li>IPTV headend</li>
            <li>Multiswitch solutions</li>
            <li>Server architecture</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Deployment Models</h3>
          <ul>
            <li>Cloud</li>
            <li>Hybrid</li>
            <li>Government on-premise</li>
            <li>Fully redundant for hospitals & airports</li>
          </ul>
        </div>
      </div>

      <h2 class="section-title second-title inview-elem inview-elem-top">
        <span class="main">Specific Solutions</span>
        <span class="behind">Sector</span>
      </h2>

      <div class="card-container inview-elem inview-elem-top">
        <div class="small-card">
          <h3>Hospitality</h3>
          <ul>
            <li>Guest IPTV</li>
            <li>Casting (Chromecast-secure)</li>
            <li>Room control integration</li>
            <li>AI concierge</li>
            <li>Digital menus</li>
            <li>Hotel branding &amp; PMS integration</li>
            <li>Certified with Marriott, IHG, Ritz, Four Seasons, Bulgari</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Healthcare</h3>
          <ul>
            <li>Patient engagement IPTV</li>
            <li>HIS integration</li>
            <li>Nurse call</li>
            <li>Medical content library</li>
            <li>AI medical assistant for patient guidance</li>
            <li>Digital signage for clinics &amp; waiting rooms</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>Smart Cities &amp; Residential</h3>
          <ul>
            <li>IPTV for communities</li>
            <li>AI digital concierge</li>
            <li>Home services &amp; real estate support</li>
            <li>Smart home integration</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Airports</h3>
          <ul>
            <li>IPTV for lounges &amp; staff areas</li>
            <li>Flight information &amp; signage</li>
            <li>AI passenger assistant</li>
            <li>Operational messaging</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>Telecom Operators</h3>
          <ul>
            <li>Multi-million subscriber IPTV/OTT</li>
            <li>Monetization engine</li>
            <li>App store integrations</li>
            <li>Android TV / Linux STB deployments</li>
            <li>Regional CDN/Edge optimization</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Government &amp; Public Sector</h3>
          <ul>
            <li>Secure IPTV networks</li>
            <li>Internal AI knowledge &amp; policy assistant</li>
            <li>Training &amp; education systems</li>
            <li>Video archive management</li>
            <li>Forma</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <section class="box-with-skew section-bg why-technacy inview-elem inview-elem-top" data-masthead-color="#000000">
    <div class="image-container table">
      <div class="bg" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0%) skew(7.00031deg);"></div>
      <table>
        <thead>
        <tr>
          <th>Feature</b></th>
          <th>Technacy Ecosystem</th>
          <th>Traditional IPTV Vendor</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td><b><span>AI Avatar</span></b></td>
          <td><span>✔</span><span> Human-like assistant</span></td>
          <td><span>✘</span><span> Not available</span></td>
        </tr>
        <tr>
          <td><b><span>Metadata AI Extraction</span></b></td>
          <td><span>✔</span><span> Automatic</span></td>
          <td><span>✘</span><span> Manual only</span></td>
        </tr>
        <tr>
          <td><b><span>Sector Customization</span></b></td>
          <td><span>✔</span><span> Full</span></td>
          <td><span>✘</span><span> Limited</span></td>
        </tr>
        <tr>
          <td><b><span>Hospitality Certification</span></b></td>
          <td><span>✔</span><span> Marriott, IHG, Ritz, FS</span></td>
          <td><span>✘</span><span> No</span></td>
        </tr>
        <tr>
          <td><b><span>Smart City Integration</span></b></td>
          <td><span>✔</span><span> Yes</span></td>
          <td><span>✘</span><span> No</span></td>
        </tr>
        <tr>
          <td><b><span>AI Video Analytics</span></b></td>
          <td><span>✔</span><span> Native</span></td>
          <td><span>✘</span><span> External only</span></td>
        </tr>
        <tr>
          <td><b><span>Arabic Support</span></b></td>
          <td><span>✔</span><span> Full</span></td>
          <td><span>✘</span><span> Partial</span></td>
        </tr>
        <tr>
          <td><b><span>OTT Integration</span></b></td>
          <td><span>✔</span><span> Netflix, Prime, etc.</span></td>
          <td><span>✔</span><span> / </span><span>✘</span><span> varies</span></td>
        </tr>
        <tr>
          <td><b><span>STB Options</span></b></td>
          <td><span>✔</span><span> Android + Linux</span></td>
          <td><span>✔</span><span> Limited</span></td>
        </tr>
        <tr>
          <td><b><span>Regional Support</span></b></td>
          <td><span>✔</span><span> Bahrain, KSA, UAE</span></td>
          <td><span>✘</span><span> Offshore only</span></td>
        </tr>
        </tbody>
      </table>
    </div>
    <div class="text-container">
      <div class="description-content">
        <h2 class="section-title">Why the Technacy Ecosystem Is Unique</h2>
        <div class="text-content">
          <h3>✔ AI at the Core</h3>
          <p>IPTV + OTT + AI Avatar + Digital Signage = one unified ecosystem.</p>

          <h3>✔ Custom Fine-Tuning</h3>
          <p>Each deployment is built specifically for the sector it serves.</p>

          <h3>✔ Regional Presence</h3>
          <p>HQ in Bahrain, operational offices in Saudi Arabia &amp; UAE.</p>

          <h3>✔ Enterprise-Grade Security</h3>
          <p>Designed for ministries, airports, hospitals and telcos.</p>

          <h3>✔ World-Class Partnerships</h3>
          <p>Minerva • MCOMS • Kaltura • Milestone • WISI • Broadpeak</p>

          <h3>✔ Built for Giga-Projects</h3>
          <p>Scalable for NEOM, Diriyah, KAIA, Red Sea, and telecom operators.</p>
        </div>
      </div>

    </div>

  </section>

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <div class="technacy-references-smart-highlights technacy-references-section">
    <h2 class="page-title inview-elem inview-elem-top">
      <span class="main">Smart Highlights</span>
      <span class="behind">Your Game, Your Way</span>
    </h2>

    <div class="content-width">
      <div class="entry-content">
        <p>
          Smart Highlights feature transforms ordinary recordings into personalized, dynamic experiences.<br>
          It lets viewers create their own highlight reels — whether it’s a 2-minute recap, top plays from a favorite
          player, or only 3-point shots — all in real time and tailored to their interests.<br>
          <br>
          Sports fans can also access live stats, scores, and summaries from major leagues worldwide, with Minnie AI
          ready to provide insights, player stories, and historical context on demand.<br>
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
