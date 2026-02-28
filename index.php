<?php get_header(); ?>
 <!-- hero section -->
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
        <a href="<?php echo site_url('/index'); ?>">
      <a href="<?php echo site_url('/about'); about ?>">
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

  <section class="hero">
    <div class="hero-overlay"></div>

    <div class="hero-content">
      <h1>
        Professional IT & <br>
        Computer Services <br>
      </h1>

      <p>
        R.R. Computers delivers reliable computer repair, laptop rental, networking, CCTV, and IT support services for
        homes and businesses with fast and trusted solutions.
      </p>

      <a href="services.html" class="hero-btn">View All Services</a>
    </div>


  </section>
  <!-- section hero 2 -->
  <section class="hero-2">
    <div class="hero-2-container">

      <!-- LEFT CONTENT -->
      <div class="hero-2-left">
        <span class="hero-2-line"></span>

        <h2>
          Who we are<br>
          <!-- and How we Work -->
        </h2>

        <p>
          RR Computers is a trusted IT and computer services company based in New Delhi, providing professional laptop
          and desktop repair, system diagnostics, networking, and IT support services. We focus on delivering reliable,
          secure, and cost-effective technology solutions for individuals, small businesses, and enterprises, ensuring
          quality service and customer satisfaction at every step.
        </p>

        <div class="hero-2-stats">
          <div class="stat">
            <h3>98%</h3>
            <span>Successful repairs</span>
          </div>

          <div class="stat">
            <h3>2k</h3>
            <span>Excellent reviews</span>
          </div>
        </div>
      </div>

      <!-- RIGHT FORM -->
      <div class="hero-2-right">
        <h3>Enquire Now</h3>
        <p>Enter your contact details to schedule a repair.</p>

        <form class="hero-2-form" id="enquiryForm">

          <div class="input-box">
            <input type="text" id="name" placeholder="Your name">
            <small class="error" id="nameError"></small>
          </div>

          <div class="input-box">
            <input type="tel" id="phone" placeholder="Your phone">
            <small class="error" id="phoneError"></small>
          </div>

          <button type="submit">Submit Request</button>

          <p class="success-msg" id="successMsg"></p>
        </form>
      </div>

    </div>
  </section>
  <!-- section hero 3 -->
  <section class="hero-3">
    <div class="hero-3-header">
      <h2>What we Offer</h2>
      <p>
        We deliver comprehensive computer repair and IT solutions in New Delhi for new and existing clients, including
        laptop and desktop repair, diagnostics, hardware upgrades, networking, and local technical support, ensuring
        reliable and efficient system performance.
      </p>
    </div>
    <div class="hero-3-slider-wrapper">
      <div class="hero-3-slider" id="hero3Slider">
        <!-- Card 1 -->
        <a href="services.html">
          <div class="hero-3-card">
            <img src="img/SERVICE 1.png" alt="Spare Parts & Peripherals">
            <h3>Spare Parts & Peripherals</h3>
            <p>
              High-quality computer spare parts and peripherals including RAM, hard drives, SSDs, keyboards, monitors,
              and
              accessories for reliable performance.
            </p>
          </div>
        </a>
        <!-- Card 2 -->
        <a href="services.html">
          <div class="hero-3-card">
            <img src="img/service_2_400x250_HD.png" alt="Laptop & Desktop Rental">
            <h3>Laptop & Desktop Rental</h3>
            <p>
              Affordable laptop and desktop rental services for offices, events, training, and short- or long-term
              business requirements.

            </p>
          </div>
        </a>

        <!-- Card 3 -->
        <a href="services.html">
          <div class="hero-3-card">
            <img src="img/SERVICE 3.png" alt="Laptop & Desktop Repair">
            <h3>Laptop & Desktop Repair</h3>
            <p>
              Professional repair services for laptops and desktops, covering hardware issues, software problems, and
              complete system diagnostics.

            </p>
          </div>
        </a>
        <!-- Card 4 -->
        <a href="services.html">
          <div class="hero-3-card">
            <img src="img/SERVICE 4.1.png" alt="Laptop & Desktop Sales">
            <h3>Laptop & Desktop Sales</h3>
            <p>
              New and refurbished laptops and desktops available at competitive prices, tested for performance and
              reliability.

            </p>
          </div>
        </a>
        <!-- Card 5 -->
        <a href="services.html">
          <div class="hero-3-card">
            <img src="img/service_7_400x250_HD.png" alt="CCTV Installation">
            <h3>CCTV Installation</h3>
            <p>
              Professional CCTV installation services for homes, offices, and commercial spaces with reliable
              surveillance
              and monitoring.
            </p>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- Section hero 4-->
  <section class="hero-4">
    <div class="hero-4-container">
      <!-- Header -->
      <div class="hero-4-header">
        <h2>Why Choose Us</h2>
        <p>
          RR Computers is a trusted computer repair and IT service provider in all over India, known for delivering
          reliable
          laptop servicing, desktop support, system diagnostics, and professional technical solutions to homes and
          businesses.
        </p>
      </div>

      <!-- Features -->
      <div class="hero-4-features">

        <div class="hero-4-item">
          <div class="hero-4-icon">🚀</div>
          <h3>Reliable Services</h3>
          <p>
            We provide dependable local computer repair and IT support services all over India, ensuring timely
            response, accurate diagnostics, and reliable system performance in every region.
          </p>
        </div>

        <div class="hero-4-item">
          <div class="hero-4-icon">👍</div>
          <h3>Skilled Personal</h3>
          <p>
            Our technicians deliver expert laptop servicing, desktop troubleshooting, and on-site technical support for
            homes and businesses
          </p>
        </div>

        <div class="hero-4-item">
          <div class="hero-4-icon">🛡️</div>
          <h3>Licensed & Certified</h3>
          <p>
            We are a trusted IT service provider serving all over India, fully licensed and certified to deliver secure,
            professional, and compliant computer repair solutions.
          </p>
        </div>

      </div>
      <!-- CTA -->
      <div class="hero-4-cta">
        <a href="Contact.html">Sign up for Repair →</a>
      </div>

    </div>
  </section>
  <!-- Section hero 5-->
  <section class="hero-5">
    <div class="hero-5-container">

      <!-- LEFT CONTENT -->
      <div class="hero-5-left">
        <span class="hero-5-line"></span>

        <h2>
          Take Advantage<br>
          of the Benefits and<br>
          Services of our<br>
          Specialists
        </h2>

        <p>
          Get the best customer service and efficient repairs from our
          technicians. Make an inquiry today to get a flawless computer
          tomorrow.
        </p>
      </div>

      <!-- RIGHT FORM -->
      <div class="hero-5-right">
        <h3>Raise a Comapin Ticket</h3>
        <p class="hero-5-sub">
          Enter your contact details to schedule a Meeting.
        </p>

        <form class="hero-5-form" id="sing_up">
          <div class="hero-5-input">
            <input type="text" placeholder="Your name" required id="yourname">
            <small class="error"></small>
          </div>

          <div class="hero-5-input">
            <input type="tel" placeholder="Your phone" required id="yourphone">
            <small class="error"></small>
          </div>

          <button type="submit">Complain Ticket</button>
        </form>
        <!-- Checkbox inline with text -->
        <label class="hero-5-checkbox">
          <input type="checkbox" required>
          <span>
            I agree to the
            <a href="#">Privacy Policy</a>
            and
            <a href="#">Terms of Service</a>
          </span>
        </label>

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

  <!-- script 1-->
  <script>
    function toggleMenu() {
      document.getElementById("navMenu").classList.toggle("show");
    }
  </script>
  <!-- script 2-->
  <script>
    document.getElementById("enquiryForm").addEventListener("submit", function (e) {
      e.preventDefault();

      const name = document.getElementById("name").value.trim();
      const phone = document.getElementById("phone").value.trim();

      const nameError = document.getElementById("nameError");
      const phoneError = document.getElementById("phoneError");
      const successMsg = document.getElementById("successMsg");

      nameError.textContent = "";
      phoneError.textContent = "";
      successMsg.textContent = "";

      let isValid = true;

      // Name validation
      if (name.length < 3) {
        nameError.textContent = "Please enter a valid name";
        isValid = false;
      }

      // Phone validation (India-friendly)
      if (!/^[6-9]\d{9}$/.test(phone)) {
        phoneError.textContent = "Enter a valid 10-digit phone number";
        isValid = false;
      }

      if (isValid) {
        // Simulated submit (replace with backend later)
        successMsg.textContent = "Your request has been submitted successfully!";

        // Reset form
        document.getElementById("enquiryForm").reset();
      }
    });
  </script>
  <!-- singup form -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {

      const form = document.getElementById("sing_up");
      const nameInput = document.getElementById("yourname");
      const phoneInput = document.getElementById("yourphone");

      form.addEventListener("submit", function (e) {
        e.preventDefault();

        let isValid = true;

        // Clear previous errors
        document.querySelectorAll(".error").forEach(err => err.textContent = "");

        // Name validation
        if (nameInput.value.trim().length < 3) {
          showError(nameInput, "Name must be at least 3 characters");
          isValid = false;
        }

        // Phone validation (Indian mobile)
        const phonePattern = /^[6-9]\d{9}$/;
        if (!phonePattern.test(phoneInput.value.trim())) {
          showError(phoneInput, "Enter a valid 10-digit mobile number");
          isValid = false;
        }

        // Submit if valid
        if (isValid) {
          form.submit(); // or replace with AJAX later
        }
      });

      function showError(input, message) {
        const error = input.parentElement.querySelector(".error");
        error.textContent = message;
      }

    });
  </script>
  <!-- Hero section end -->
  <!-- about start -->

<?php get_footer(); ?>