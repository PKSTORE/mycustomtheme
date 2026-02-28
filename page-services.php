<?php get_header(); ?>
<header class="navbar">
    <div class="nav-container">

      <!-- Logo -->
      <div class="logo">
        <a href="index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/img/RRC-Long-logo.png">
        </a>

      </div>

      <!-- Hamburger -->
      <div class="hamburger" onclick="toggleMenu()">
        ☰
      </div>

      <!-- Menu -->
      <nav class="menu" id="navMenu">
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="services.html">Services</a>
        <a href="Contact.html">Contact Us</a>
        <a href="rental.html">Rental</a>
        <!-- <a href="#ticket" class="mobile-btn">Complaint Ticket</a> -->
      </nav>

      <!-- Desktop Button -->
      <!-- <div class="nav-btn">
        <a href="#ticket">Complaint Ticket</a>
      </div> -->
    </div>
  </header>
  <!-- services1 -->
  <section class="section-1">
    <div class="section-1-container">
      <div class="section-1-header">
        <span class="section-1-line"></span>
        <h1>Our IT & Computer Services</h1>
        <p>
          RR Computers provides complete IT and computer services for homes, offices, and businesses in New Delhi. From
          laptop and desktop repair to rentals, sales, networking, security, and data recovery, we deliver reliable and
          cost-effective technology solutions with professional support.
        </p>

      </div>
      <a href="Contact.html">
        <div class="section-1-grid">
          <div class="offer-card">
            <img src="img/service_1_400x250_HD.png" alt="Laptop & Desktop Repair">
            <h2>Laptop & Desktop Repair</h2>
            <p>
              We offer professional laptop and desktop repair services, including hardware replacement, software
              troubleshooting, system diagnostics, and performance optimization to ensure smooth and reliable operation.
            </p>

          </div>
          <div class="offer-card">
            <img src="img/service_2_400x250_HD.png" alt="Laptop & Desktop Rental">
            <h2>Laptop & Desktop Rental</h2>
            <p>
              Our laptop and desktop rental services are ideal for offices, startups, training programs, and events. We
              provide flexible short-term and long-term rental options with well-maintained systems.
            </p>


          </div>
          <div class="offer-card">
            <img src="img/service_3_400x250_HD.png" alt="Laptop & Desktop Sales">
            <h2>Laptop & Desktop Sales</h2>
            <p>
              RR Computers offers new and refurbished laptops and desktops at competitive prices. All systems are tested
              for quality, performance, and reliability before sale.
            </p>
          </div>

          <div class="offer-card">
            <img src="img/service_4_400x250_HD.png" alt="Spare Parts & Hardware Upgrade">
            <h2>Spare Parts & Hardware Upgrade</h2>
            <p>
              We supply genuine computer spare parts and provide hardware upgrade services such as RAM, SSD, and storage
              upgrades to improve system speed and efficiency.
            </p>

          </div>
          <div class="offer-card">
            <img src="img/service_5_400x250_HD.png" alt="Data Recovery">
            <h2>Networking & Network Implementation</h2>
            <p>
              We provide complete networking solutions including LAN setup, cabling, router configuration, and network
              optimization for offices and commercial spaces.
            </p>

          </div>
          <div class="offer-card">
            <img src="img/service_6_400x250_HD.png" alt="Firewall Installation & Security">
            <h2>Firewall Installation & Security</h2>
            <p>
              Our firewall installation services help protect your systems and network from cyber threats, unauthorized
              access, and data breaches.
            </p>

          </div>

          <div class="offer-card">
            <img src="img/service_7_400x250_HD.png" alt="CCTV Installation">
            <h2>CCTV Installation</h2>
            <p>
              We offer professional CCTV installation services for homes, offices, and shops to ensure 24/7 surveillance
              and improved security.
            </p>

          </div>
          <div class="offer-card">
            <img src="img/service_8_400x250_HD.png" alt="Data Recovery">
            <h2>Data Recovery</h2>
            <p>
              Our data recovery services help retrieve lost, deleted, or corrupted data from laptops, desktops, hard
              drives, and storage devices safely and securely.
            </p>
          </div>

        </div>
    </div>
  </section>
  </a>

  <!-- Footer-->
  <footer class="site-footer">
    <div class="footer-container">

      <!-- Column 1: Address & Contact -->
      <div class="footer-col">
        <p>
          G-9/ 85 RATIYA MARG SANGAM VIHAR <br>
          NEW DELHI
        </p>

        <p class="footer-email">
          Email:
          <a href="mailto:info@rrcomputers.net">info@rrcomputers.net</a>
        </p>

        <div class="footer-social">
          <a href="#" aria-label="Facebook"><img src="img/facebook.png" alt=""></a>
          <a href="#" aria-label="Twitter"><img src="img/1707222563twitter-logo-png.png" alt=""></a>
          <a href="#" aria-label="Instagram"><img src="img/instagram.png" alt=""></a>
        </div>
      </div>

      <!-- Column 2: Pages -->
      <div class="footer-col">
        <h4>Qucik Links</h4>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="Contact.html">Contacts</a></li>
          <li><a href="rental.html">Rental</a></li>
        </ul>
      </div>
      <!-- Column 3: Services -->
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="services.html">Laptop Repair / Computer Repair</a></li>
          <li><a href="services.html">Cleaning Laptops / Replacing Thermal Paste</a></li>
          <li><a href="services.html">Data Recovery</a></li>
          <li><a href="services.html">OS Installation</a></li>
          <li><a href="services.html">Assembling a Personal Computer at Home</a></li>
        </ul>
      </div>

    </div>

    <!-- Bottom -->
    <div class="footer-bottom">
      © 2026 RR COMPUTERS.
    </div>
  </footer>
<?php get_footer(); ?>