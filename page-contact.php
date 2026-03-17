<?php get_header(); ?>
<header class="navbar">
  <div class="nav-container">

    <!-- Logo -->
    <div class="logo">
      <a href="<?php echo site_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/akshita-vault-1.png">
      </a>

    </div>

    <!-- Hamburger -->
    <div class="hamburger" onclick="toggleMenu()">
      ☰
    </div>

    <!-- Menu -->
    <nav class="menu" id="navMenu">
      <a href="<?php echo site_url('/'); ?>">Home</a>
      <a href="<?php echo site_url('/about'); ?>">About</a>
      <a href="<?php echo site_url('/services'); ?>">Services</a>
      <a href="<?php echo site_url('/contact'); ?>">Contact</a>
      <a href="<?php echo site_url('/rental'); ?>">Rental</a>
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
        <a href="#" aria-label="Facebook" target="_blank"> <img
            src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a>
        <a href="https://www.instagram.com/" aria-label="Instagram" target="_blank"><img
            src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt=""></a>
        <a href="#" aria-label="Twitter" target="_blank"><img
            src="<?php echo get_template_directory_uri(); ?>/img/1707222563twitter-logo-png.png" alt=""></a>

      </div>
    </div>

    <!-- Right Form -->
    <div class="contact-1-form" id="contactForm" method="post">
      <form method="post">
        <div class="form-group">
          <input type="text" name="contact_name" placeholder="Your name" required>
        </div>

        <div class="form-group">
          <input type="tel" name="contact_phone" placeholder="Your phone" required>
        </div>

        <div class="form-group">
          <input type="email" name="contact_email" placeholder="Your mail" required>
        </div>

        <div class="form-group">
          <textarea name="contact_message" placeholder="Your message"></textarea>
        </div>

        <button type="submit" name="submit_contact">Submit Request</button>
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
        <a href="#" aria-label="Facebook" target="_blank"> <img
            src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a>
        <a href="https://www.instagram.com/" aria-label="Instagram" target="_blank"><img
            src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt=""></a>
        <a href="#" aria-label="Twitter" target="_blank"><img
            src="<?php echo get_template_directory_uri(); ?>/img/1707222563twitter-logo-png.png" alt=""></a>

      </div>
    </div>

    <!-- Column 2: Pages -->
    <div class="footer-col">
      <h4>Qucik Links</h4>
      <ul>
        <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
        <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
        <li><a href="<?php echo site_url('/services'); ?>">Services</a></li>
        <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
        <li><a href="<?php echo site_url('/rental'); ?>">Rental</a></li>
      </ul>
    </div>

    <!-- Column 3: Services -->
    <div class="footer-col">
      <h4>Services</h4>
      <ul>
        <li><a href="<?php echo site_url('/services'); ?>">Laptop Repair / Computer Repair</a></li>
        <li><a href="<?php echo site_url('/services'); ?>">Cleaning Laptops / Replacing Thermal Paste</a></li>
        <li><a href="<?php echo site_url('/services'); ?>">Data Recovery</a></li>
        <li><a href="<?php echo site_url('/services'); ?>">OS Installation</a></li>
        <li><a href="<?php echo site_url('/services'); ?>">Assembling a Personal Computer at Home</a></li>
      </ul>
    </div>

  </div>

  <!-- Bottom -->
  <div class="footer-bottom">
    © 2026 Akshita Vault.
  </div>
</footer>
<!-- script 1 -->
<script>
  function toggleMenu() {
    document.getElementById("navMenu").classList.toggle("show");
  }
</script>
<?php get_footer(); ?>