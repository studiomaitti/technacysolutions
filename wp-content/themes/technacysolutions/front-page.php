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
?>
  <section class="home-intro-section">
    <!-- ABOUT US -->
    <div class="column column-1 inview-elem inview-elem-left">
      <div class="column-container">
        <div class="section-image">
          <a href="/about" class="section-link" title="About us">
            <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-solutions-lab--about-us.jpg" alt="About us">
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
          <a href="/our-sectors" class="section-link" title="Our Services">
            <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-solutions-lab--our-services.jpg" alt="Our Services">
          </a>
        </div>
        <h2 class="section-title">Our Services</h2>
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
          <a href="/our-references" class="section-link" title="Our References">
            <img src="https://fastly.picsum.photos/id/985/380/768.jpg?hmac=05qtXYq0skdeLRIsU3b02UCyjpoccIGZUwoET14UTwM" alt="placeholder">
            <!--<img src="https://picsum.photos/380/768?random=3" alt="placeholder">-->
          </a>
        </div>
        <h2 class="section-title">Our References</h2>
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

    <!-- OUR CLIENTS -->
    <div class="column column-4 inview-elem inview-elem-top">
      <div class="column-container">
        <div class="section-image">
          <a href="/our-clients" class="section-link" title="Our Clients">
            <img src="/wp-content/themes/technacysolutions/assets/img/home/technacy-solutions-lab--our-clients.jpg" alt="Our Clients">
          </a>
        </div>
        <h2 class="section-title">Our Clients</h2>
        <div class="section-description">
          <div class="content-wrapper">
            <h3 class="section-sub-title">Our Clients</h3>
            <div class="short-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quia.</div>
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

    <div class="column column-5 inview-elem inview-elem-right">
      <div class="column-container">
        <div class="section-image">
          <a href="/contact-us" class="section-link" title="Contact Us">
            <img src="https://fastly.picsum.photos/id/1049/380/768.jpg?hmac=fB7MHkKo1xzl5BQmZ5xesktEsh6VzhJQJJWE-abyu8Y" alt="placeholder">
            <!--<img src="https://picsum.photos/380/768?random=5" alt="placeholder">-->
          </a>
        </div>
        <h2 class="section-title">Contact Us</h2>
        <div class="section-description">
          <div class="content-wrapper">
            <h3 class="section-sub-title">Contact Us</h3>
            <div class="short-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quia.</div>
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
          <div class="number">32</div>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2L1 12l3 9h16l3-9-11-10zm0 2.8L19.3 12H4.7L12 4.8z"/>
            </svg>
          </div>
          <div class="description">projects delivered</div>
        </div>
        
        <div class="number-item inview-elem inview-elem-bottom">
          <div class="number">5</div>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
              <path d="M16.59 7.58L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/>
            </svg>
          </div>
          <div class="description">nationalities</div>
        </div>
        
        <div class="number-item inview-elem inview-elem-bottom">
          <div class="number">50</div>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
          </div>
          <div class="description">clients</div>
        </div>
        
        <div class="number-item inview-elem inview-elem-bottom">
          <div class="number">15</div>
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
    <div class="content-width">
      <div class="description-grid">
        <!-- First Column: Text Content -->
        <div class="description-content">
          <h2 class="section-title">Technacy Solutions</h2>
          <div class="text-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quia. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <ul class="feature-list">
              <li class="feature-item">
                <span class="feature-icon">→</span>
                <span>dolor sit amet consectetur</span>
              </li>
              <li class="feature-item">
                <span class="feature-icon">→</span>
                <span>ipsum dolor sit. Quae, quia.</span>
              </li>
              <li class="feature-item">
                <span class="feature-icon">→</span>
                <span>consectetur adipisicing elit. Quae, quia.</span>
              </li>
            </ul>
            <p>Quae, quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quia.</p>
            <button class="download-brochure-btn">Download Brochure</button>
          </div>
        </div>
        
        <!-- Second Column: Video Thumbnail -->
        <div class="video-thumbnail">
          <div class="image-container">
            <img src="https://picsum.photos/800/600?random=1" alt="Technacy Solutions" class="thumbnail-image">
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

  <section class="home-section category-section" id="pinCategorySection">
    <div class="panel panel-1 home-iptv">
      <div class="home-iptv-container content-width">
        <div class="home-iptv-img-container">
          <div class="effetto-fascia-rossa">
            <img class="inview-elem inview-elem-top td-200" src="/wp-content/themes/technacysolutions/assets/img/logo-technacy-rosso.svg" alt="Logo">
          </div>
          <div class="home-iptv-img">
            <img class="inview-elem inview-elem-top td-200" src="/wp-content/themes/technacysolutions/assets/img/logo-technacy-rosso.svg" alt="Logo">
          </div>
        </div>
        <div class="home-iptv-text">
          <h2 class="row-ivy inview-elem inview-elem-left td-400">TELECOMMUNICATION</h2>
          <h2 class="row-neue inview-elem inview-elem-right td-550">IPTV & MEDIA</h2>
          <div class="text inview-elem inview-elem-bottom">
            The Technacy Team offers cutting-edge IPTV technology and global content for an unparalleled viewer
            experience. With industry giants and leading brands as our partners, we have built strong relationships
            based on excellent communication and trust. Our customer-centric approach ensures your unique needs are met,
            providing an incredible IPTV experience. <br>We are committed to customer satisfaction with 24/7 support.
            Our operational flexibility and technical expertise set new benchmarks in IPTV provision across industries.
            Join us as we revolutionize the IPTV experience together.
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-2 home-computer">
      <div class="home-iptv-container content-width">
        <img class="inview-elem inview-elem-top td-200" src="/wp-content/themes/technacysolutions/assets/img/logo-technacy-full.svg" alt="Logo">
        <div class="home-iptv-text">
          <h2 class="row-ivy inview-elem inview-elem-left td-400">DIGITAL</h2>
          <h2 class="row-neue inview-elem inview-elem-right td-550">COMMUNICATION</h2>
          <div class="text inview-elem inview-elem-bottom">
            The Technacy Team is passionate about cutting-edge technologies. We use the likes of virtual reality,
            augmented reality, holographic technology, and AI-generated content to create interactive and immersive
            state-of-the-art projects. There is immense potential these technologies hold for transforming user
            experiences and engaging audiences in entirely new ways. We take care of all creative and technical aspects
            from concept to development and deployment and provide 24/7 support. We have the know-how and expertise to
            translate our client’s visions into jaw dropping projects. Let’s create something awesome together!
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
$a = [];
for ($i = 0; $i < 30; $i++) {
  $a[] = '<a href="/about">about</a>';
}
?>
  <section class="page-link">
    <div class="page-link-top-line" data-paroller-factor="0.35" data-paroller-type="foreground" data-paroller-direction="horizontal" data-paroller-transition="transform .35s linear">
      <?php echo implode('<span class="trattino">-</span>', $a); ?>
    </div>
    <div class="page-link-bottom-line" data-paroller-factor="-0.35" data-paroller-type="foreground" data-paroller-direction="horizontal" data-paroller-transition="transform .35s linear">
      <?php echo implode('<span class="trattino">-</span>', $a); ?>
    </div>
  </section>

<?php
get_footer();
