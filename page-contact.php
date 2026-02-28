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
  <!-- Contact1-->
  <section class="contact-1">
    <div class="contact-1-container">

      <!-- Left Content -->
      <div class="contact-1-info">
        <h2>Have Any<br>Questions?</h2>

        <p class="contact-1-desc">
          If you have any query or suggestion or complaint, please fill the
          form and submit, we will get back to you.
        </p>

        <ul class="contact-1-details">
          <li>
            <span>📞</span>
            <a href="tel:+919899437756">+91 98994 37756</a>,
            <a href="tel:+919354933007">+91 93549 33007</a>
          </li>

          <li>
            <span>✉️</span>
            <a href="mailto:info@rrcomputers.net">
              info@rrcomputers.net
            </a>
          </li>

          <li>
            <span>📍</span>
            G-9/85 RATIYA MARG SANGMA VIHAR <br>
            New Delhi
          </li>

          <li>
            <span>⏰</span>
            Monday – Friday: 08:00am – 07:00pm<br>
            Saturday – Sunday: 10:00am – 05:00pm
          </li>
        </ul>

        <div class="contact-1-social">
          <a href="#"><img src="img/facebook.png" alt=""></a>
          <a href="#"><img src="img/instagram.png" alt=""></a>
          <a href="#"><img src="img/1707222563twitter-logo-png.png" alt=""></a>
        </div>
      </div>

      <!-- Right Form -->
      <div class="contact-1-form">
        <form>
          <div class="form-group">
            <input type="text" placeholder="Your name" required>
          </div>

          <div class="form-group">
            <input type="tel" placeholder="Your phone" required>
          </div>

          <div class="form-group">
            <input type="email" placeholder="Your mail" required>
          </div>

          <div class="form-group">
            <textarea placeholder="Your message"></textarea>
          </div>

          <button type="submit">Submit Request</button>
        </form>
      </div>

    </div>
  </section>
  <!-- footer start-->
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