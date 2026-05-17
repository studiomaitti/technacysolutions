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
      <img src="/wp-content/uploads/2025/08/technacy-cybersecurity-tablet.jpeg" alt="Technacy Solutions">
    </div>
    <div class="text-container">
      <div class="description-content">
        <h2 class="section-title">Our Cybersecurity Approach </h2>
        <div class="text-content">
          <h3>✔ Built for High-Risk Environments</h3>
          <p>Airports, hospitals, ministries, police, telcos, financial institutions.</p>

          <h3>✔ Fully Integrated</h3>
          <p>Security engineered directly into IPTV, ELV, AI, Digital Signage & OTT workflows.</p>

          <h3>✔ Custom for Every Sector</h3>
          <p>Healthcare privacy, telecom-grade encryption, government access control, hospitality guest protection.</p>

          <h3>✔ Regional Compliance</h3>
          <p>Aligned with GCC cybersecurity frameworks, including:</p>
          <ul>
            <li>NCA (Saudi)</li>
            <li>Bahrain CERT</li>
            <li>UAE Cyber Security Council</li>
            <li>NIST, ISO 27001, GDPR (where required)</li>
          </ul>


        </div>
      </div>

    </div>
  </section>

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <section class="small-card-section">
    <div class="content-width">
      <h2 class="section-title inview-elem inview-elem-top">
        <span class="main">Cybersecurity Services</span>
        <span class="behind">Core</span>
      </h2>
      <div class="card-container inview-elem inview-elem-top">
        <div class="small-card">
          <h3>Infrastructure Security for IPTV &amp; OTT</h3>
          <ul>
            <li>Zero-trust architecture</li>
            <li>DRM / CAS content protection</li>
            <li>Secure STB provisioning</li>
            <li>Hardening of Android &amp; Linux STBs</li>
            <li>Secure cloud / hybrid / on-prem IPTV hosting</li>
            <li>Multi-tenant security isolation</li>
            <li>Encrypted casting &amp; mobile pairing</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>AI Security &amp; Data Protection</h3>
          <ul>
            <li>Secure AI Avatar workflows</li>
            <li>Sanitized AI training pipelines</li>
            <li>Identity protection in AI interactions</li>
            <li>AI hallucination controls</li>
            <li>AI content-safety filters (political, medical, religious neutrality)</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>Video Platform Security</h3>
          <ul style="margin-bottom: 6px">
            <li>Watermarking</li>
            <li>Conditional access</li>
            <li>Secure content ingestion</li>
            <li>Stream protection &amp; URL rotation</li>
            <li>Anti-piracy monitoring</li>
          </ul>
          <h3 style="font-size: 23px;">Compliance &amp; Governance</h3>
          <ul>
            <li>Content governance (broadcasters)</li>
            <li>Healthcare privacy policies (HIS, EMR)</li>
            <li>Smart-city data protection frameworks</li>
            <li>Access control and identity management</li>
            <li>Vendor risk assessment</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Network &amp; ELV Security</h3>
          <ul>
            <li>Firewalling for IPTV &amp; Signage networks</li>
            <li>Network segmentation (LAN/WAN/VLAN)</li>
            <li>Secure SMATV &amp; headend deployment</li>
            <li>Redundancy &amp; failover planning</li>
            <li>Fiber/Coax protection &amp; monitoring</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>Threat Detection &amp; SOC Integration</h3>
          <ul>
            <li>Real-time anomaly detection</li>
            <li>Security event monitoring</li>
            <li>Integration with government SOC/NOC</li>
            <li>Log correlation across IPTV + AI + ELV</li>
            <li>Automated alerts</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Penetration Testing</h3>
          <ul>
            <li>IPTV application pentest</li>
            <li>STB firmware pentest</li>
            <li>Mobile app pentest</li>
            <li>API &amp; backend penetration testing</li>
            <li>Digital signage exploit simulations</li>
          </ul>
        </div>
      </div>

      <h2 class="section-title second-title second-title-cybersecurity inview-elem inview-elem-top">
        <span class="main">Cybersecurity Expertise </span>
        <span class="behind">Sector-Specific</span>
      </h2>

      <div class="card-container inview-elem inview-elem-top">

        <div class="small-card">

          <h3>Government &amp; Ministries</h3>
          <ul>
            <li>On-premise IPTV with full isolation</li>
            <li>Secure digital signage &amp; command center networks</li>
            <li>Classified metadata protection</li>
            <li>Video analytics data hardening</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Airports</h3>
          <ul>
            <li>Secure IPTV for lounges &amp; terminals</li>
            <li>Flight information integrity protection</li>
            <li>Video analytics compliance (safety &amp; regulatory)</li>
            <li>Redundant &amp; failover-secure systems</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>Healthcare</h3>
          <ul>
            <li>Patient privacy compliance</li>
            <li>HIS/IPTV secure integration</li>
            <li>Medical video content protection</li>
            <li>Access control for staff &amp; visitors</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Smart Cities</h3>
          <ul>
            <li>Secure IPTV for residences</li>
            <li>AI Avatar with safe civic interactions</li>
            <li>IoT integrations with isolation</li>
            <li>CCTV + Digital Signage security ecosystem</li>
          </ul>
        </div>

        <div class="small-card">
          <h3>Hospitality</h3>
          <ul>
            <li>Guest privacy</li>
            <li>Safe OTT integrations</li>
            <li>Fraud prevention</li>
            <li>Casting security (Netflix/Prime/YouTube)</li>
          </ul>
        </div>

        <div class="small-card white">
          <h3>Telecom Operators</h3>
          <ul>
            <li>Multi-million subscriber protection</li>
            <li>DDoS/anti-piracy</li>
            <li>Secure middleware integration</li>
            <li>Cloud/edge/CAS/DRM end-to-end security</li>
          </ul>

        </div>

      </div>
    </div>
  </section>

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <section class="box-with-skew section-bg why-technacy inview-elem inview-elem-top" data-masthead-color="#000000">
    <div class="image-container">
      <div class="bg" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0%) skew(7.00031deg);"></div>
      <img src="/wp-content/uploads/2025/08/technacy-cybersecurity-tablet.jpeg" alt="Technacy Solutions">
    </div>
    <div class="text-container">
      <div class="description-content">
        <h2 class="section-title">Why Choose Technacy for Cybersecurity </h2>
        <div class="text-content">
          <h3>✔ Deep regional experience (10+ years)</h3>
          <p>We know the regulatory, cultural, and technical requirements of GCC markets.</p>

          <h3>✔ Integration with AI, IPTV, ELV, Telecom & Smart City infrastructure</h3>
          <p>Most security firms can't secure media infrastructure — but we do.</p>

          <h3>✔ Teams in Bahrain, Saudi Arabia and UAE</h3>
          <p>24/7 SLA, fast response, local engineers.</p>

          <h3>✔ Government-grade standards</h3>
          <p>Trusted for police, ministries, airports, giga projects.</p>

          <h3>✔ Alignment with major vendors</h3>
          <p>Kaltura • Minerva • MCOMS • Milestone • Broadpeak • WISI • Amino</p>

          <h3> ✔ Built for future scalability</h3>
          <p>From single buildings to national infrastructure.</p>
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
