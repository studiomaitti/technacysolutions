<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Technacysolutions
 * @since Technacysolutions 1.0
 */

get_header();

// Latest 4 references
$latest_references = new WP_Query([
  'post_type' => 'reference',
  'posts_per_page' => 4,
]);
?>
  <div class="desktop-only">
    <section class="home-intro-section">
      <!-- ABOUT US -->
      <div class="column column-1 inview-elem inview-elem-left">
        <div class="column-container">
          <div class="section-image">
            <a href="/about-us" class="section-link" title="About us">
              <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-Bahrain-Headquarters.jpg" alt="About Us">
            </a>
          </div>
          <h2 class="section-title">About us</h2>
          <div class="section-description">
            <div class="content-wrapper">
              <h3 class="section-sub-title">About us</h3>
              <div class="short-description">We are here to turn your ideas into reality!</div>
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

      <!-- OUR SERVICES -->
      <div class="column column-2 inview-elem inview-elem-top">
        <div class="column-container">
          <div class="section-image">
            <a href="/services" class="section-link" title="Our Services">
              <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-colonna-i.jpg" alt="Our Services">
            </a>
          </div>
          <h2 class="section-title">Services</h2>
          <div class="section-description">
            <div class="content-wrapper">
              <h3 class="section-sub-title">Our Services</h3>
              <div class="short-description">We deliver a powerful suite of digital transformation!</div>
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

      <!-- OUR REFERENCES -->
      <div class="column column-3 inview-elem inview-elem-top td-200">
        <div class="column-container">
          <div class="section-image">
            <a href="/references" class="section-link" title="Our References">
              <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-solutions-home-referemce--home-2.jpg" alt="placeholder">
            </a>
          </div>
          <h2 class="section-title">References</h2>
          <div class="section-description">
            <div class="content-wrapper">
              <h3 class="section-sub-title">Our References</h3>
              <div class="short-description">We have worked on over 80 projects for more than 140 clients.</div>
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

      <!-- INDUSTRIES -->
      <div class="column column-4 inview-elem inview-elem-top">
        <div class="column-container">
          <div class="section-image">
            <a href="/industries" class="section-link" title="Industries">
              <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-solutions--industries-2--long.jpg" alt="Industries">
            </a>
          </div>
          <h2 class="section-title">Industries</h2>
          <div class="section-description">
            <div class="content-wrapper">
              <h3 class="section-sub-title">Industries</h3>
              <div class="short-description">From airports to hospitals, and from universities to royal residences</div>
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

      <!-- CONTACT US -->
      <div class="column column-5 inview-elem inview-elem-right">
        <div class="column-container">
          <div class="section-image">
            <a href="/contact-us" class="section-link" title="Contact Us">
              <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-solutions-lab--contact-us.jpg" alt="Contact Us">
            </a>
          </div>
          <h2 class="section-title">Contact Us</h2>
          <div class="section-description">
            <div class="content-wrapper">
              <h3 class="section-sub-title">Contact Us</h3>
              <div class="short-description">We appreciate your interest in Technacy Solutions Lab!</div>
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

    </section>
  </div>

  <div class="mobile-only" style="color: white;font-size: 55px;">
    <section class="home-intro-section">
      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- ABOUT US -->
          <div class="swiper-slide">
            <div class="section-image">
              <a href="/about-us" class="section-link" title="About us">
                <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-Bahrain-Headquarters.jpg" alt="About Us">
              </a>
            </div>
            <div class="section-description-mobile">
              <div class="content-wrapper">
                <h3 class="section-sub-title">About us</h3>
                <div class="short-description">We are here to turn your ideas into reality!</div>
              </div>
              <div class="dot dot-arrow">
                <span class="blob"></span>
                <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path id="Vector" d="M13.6394 3.04289L12.9323 2.33579L12.2252 3.04289L10.3452 4.92289L9.63871 5.62937L10.3446 6.33647L16.0811 12.0833H2.26562H1.26562V13.0833V15.75V16.75H2.26562H16.0811L10.3446 22.4969L9.63871 23.204L10.3452 23.9104L12.2252 25.7904L12.9323 26.4975L13.6394 25.7904L24.3061 15.1238L25.0132 14.4167L24.3061 13.7096L13.6394 3.04289Z" fill="white" stroke="white" stroke-width="2"></path>
                </svg>
              </div>
            </div>
          </div>

          <!-- OUR SERVICES -->
          <div class="swiper-slide">
            <div class="section-image">
              <a href="/services" class="section-link" title="Our Services">
                <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-colonna-i.jpg" alt="Our Services">
              </a>
            </div>
            <div class="section-description-mobile">
              <div class="content-wrapper">
                <h3 class="section-sub-title">Our Services</h3>
                <div class="short-description">We deliver a powerful suite of digital transformation!</div>
              </div>
              <div class="dot dot-arrow">
                <span class="blob"></span>
                <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path id="Vector" d="M13.6394 3.04289L12.9323 2.33579L12.2252 3.04289L10.3452 4.92289L9.63871 5.62937L10.3446 6.33647L16.0811 12.0833H2.26562H1.26562V13.0833V15.75V16.75H2.26562H16.0811L10.3446 22.4969L9.63871 23.204L10.3452 23.9104L12.2252 25.7904L12.9323 26.4975L13.6394 25.7904L24.3061 15.1238L25.0132 14.4167L24.3061 13.7096L13.6394 3.04289Z" fill="white" stroke="white" stroke-width="2"></path>
                </svg>
              </div>
            </div>
          </div>

          <!-- OUR REFERENCES -->
          <div class="swiper-slide">
            <div class="section-image">
              <a href="/references" class="section-link" title="Our References">
                <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-solutions-home-referemce--home-2.jpg" alt="placeholder">
              </a>
            </div>
            <div class="section-description-mobile">
              <div class="content-wrapper">
                <h3 class="section-sub-title">Our References</h3>
                <div class="short-description">We have worked on over 80 projects for more than 140 clients.</div>
              </div>
              <div class="dot dot-arrow">
                <span class="blob"></span>
                <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path id="Vector" d="M13.6394 3.04289L12.9323 2.33579L12.2252 3.04289L10.3452 4.92289L9.63871 5.62937L10.3446 6.33647L16.0811 12.0833H2.26562H1.26562V13.0833V15.75V16.75H2.26562H16.0811L10.3446 22.4969L9.63871 23.204L10.3452 23.9104L12.2252 25.7904L12.9323 26.4975L13.6394 25.7904L24.3061 15.1238L25.0132 14.4167L24.3061 13.7096L13.6394 3.04289Z" fill="white" stroke="white" stroke-width="2"></path>
                </svg>
              </div>
            </div>

          </div>

          <!-- INDUSTRIES -->
          <div class="swiper-slide">
            <div class="section-image">
              <a href="/industries" class="section-link" title="Industries">
                <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-colonna-i-4-3.jpg" alt="Industries">
              </a>
            </div>
            <div class="section-description-mobile">
              <div class="content-wrapper">
                <h3 class="section-sub-title">Industries</h3>
                <div class="short-description">From airports to hospitals, and from universities to royal residences
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

          <!-- Contact Us -->
          <div class="swiper-slide">
            <div class="section-image">
              <a href="/contact-us" class="section-link" title="Contact Us">
                <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-solutions-lab--contact-us.jpg" alt="About us">
                <!--<img src="https://picsum.photos/380/768?random=5" alt="placeholder">-->
              </a>
            </div>
            <div class="section-description-mobile">
              <div class="content-wrapper">
                <h3 class="section-sub-title">Contact Us</h3>
                <div class="short-description">We appreciate your interest in Technacy Solutions Lab!</div>
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
        <div class="swiper-pagination"></div>
      </div>
    </section>
  </div>

  <section class="technacy-numbers-section">
    <div class="content-width">
      <h2 class="section-title">
        <span class="sent-1">We crush</span>
        <span class="sent-2">every challenge</span>
        <span class="sent-amp">&amp;</span>
        <span class="sent-3">deliver with</span>
      </h2>

      <div class="numbers-grid">
        <div class="number-item inview-elem inview-elem-bottom">
          <div class="number js-number-growing" data-finale-suffix="+">250</div>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2L1 12l3 9h16l3-9-11-10zm0 2.8L19.3 12H4.7L12 4.8z"/>
            </svg>
          </div>
          <div class="description">Special Projects</div>
        </div>

        <div class="number-item inview-elem inview-elem-bottom">
          <div class="number  js-number-growing" data-finale-suffix="+">15</div>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
              <path d="M16.59 7.58L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/>
            </svg>
          </div>
          <div class="description">nationalities</div>
        </div>

        <div class="number-item inview-elem inview-elem-bottom">
          <div class="number  js-number-growing" data-finale-suffix="+">500</div>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
          </div>
          <div class="description">clients</div>
        </div>

        <div class="number-item inview-elem inview-elem-bottom">
          <div class="number  js-number-growing" data-finale-suffix="">15</div>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
              <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
            </svg>
          </div>
          <div class="description">years of experience</div>
        </div>
      </div>
    </div>
  </section>

  <section class="technacy-description-section">
    <div class="bg-img-container inview-elem inview-elem-left--opacity-i"></div>
    <div class="content-width">
      <div class="description-grid">
        <!-- First Column: Text Content -->
        <div class="description-content">
          <h2 class="section-title">Technacy Solutions Lab</h2>
          <div class="text-content">
            <p>Innovating IPTV, AI, and smart digital ecosystems across the Middle East.<br>
<br>
With TM10 AI 360 powered by Minerva, we unify IPTV, digital signage, video analytics, and AI personalization into one seamless platform.<br>
<br>
From airports to hotels, universities to banks, healthcare to residential communities—we help industries connect, engage, and transform.<br>
<br>
One platform. Infinite possibilities.</p>
            <button class="download-brochure-btn">Download Brochure</button>
          </div>
        </div>

        <!-- Second Column: Video Thumbnail -->
        <div class="video-thumbnail">
          <div class="image-container">
            <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-solutions-lab--our-services.jpg" alt="Technacy Solutions" class="thumbnail-image">
            <div class="play-button">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M8 5v14l11-7z"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Video Modal -->
    <div class="video-modal" id="videoModal">
      <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="video-container">
          <iframe id="videoFrame" width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

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
        if ($latest_references->have_posts()) {
          $i = 0;
          while ($latest_references->have_posts()) {
            $latest_references->the_post();
            $i++;
            $css_class = [];
            $css_class[] = 'post-i-' . $i;

            include(locate_template('template-parts/content/content-reference.php', false, false));
          }
        } ?>
      </div>
    </div>
  </section>

<?php
get_footer();
