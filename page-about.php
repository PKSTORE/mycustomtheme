<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>

<!-- about start -->
    <header class="navbar">
        <div class="nav-container">
            <!-- Logo -->
            <div class="logo">
              <a href="<?php echo site_url('/'); ?>">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/RRC-Long-logo.png">
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
    <!-- about 1-->
    <section class="about-1">
        <div class="about-1-container">

            <!-- Left Content -->
            <div class="about-1-content">
                <h1>ABOUT US</h1>
                <p>
                    Akshita Vault is a trusted IT and computer services company based in New Delhi, dedicated to
                    delivering reliable and affordable technology solutions for individuals, small businesses, and
                    corporate clients. With years of hands-on experience in the IT industry, we specialize in providing
                    complete laptop and desktop services under one roof.
                </p>
                <p>
                    We offer a wide range of <a href="<?php echo site_url('/services'); ?>">Services</a> including laptop and desktop repair,
                    computer sales and rentals,
                    hardware upgrades, networking solutions, CCTV installation, firewall security, data recovery, and
                    refurbished systems. Our goal is to ensure smooth, secure, and efficient performance of your systems
                    with quick turnaround time and professional support.
                </p>
                <p>
                    At Akshita Vault, we believe in quality service, transparency, and customer satisfaction. Our skilled
                    technicians use genuine spare parts and modern tools to diagnose and resolve issues accurately.
                    Whether you need technical support for your home, office, or business, we focus on delivering
                    cost-effective solutions tailored to your needs.
                </p>
                <p>
                    We are committed to building long-term relationships with our customers by providing dependable IT
                    support, honest guidance, and prompt service. Akshita Vault continues to grow with the trust of our
                    clients and a passion for technology-driven solutions.
                </p>
                <p>
                    If you need reliable IT support for your home or office, 
                    <br>
                    feel free to
                   <a href="<?php echo site_url('/contact'); ?>">Contact Our Team</a>
                    for quick assistance.
                </p>
            <!-- Right Image -->
            <div class="about-1-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about-01-470x580.jpg" alt="About Akshita Vaults">
            </div>

        </div>
    </section>
        <!-- Footer start-->
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
         <a href="#"  aria-label="Facebook" target = "_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a>
          <a href="https://www.instagram.com/" aria-label="Instagram" target = "_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt=""></a>
          <a href="#" aria-label="Twitter" target = "_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/1707222563twitter-logo-png.png" alt=""></a>
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
       <!-- script 1 -->
    <script>
    function toggleMenu() {
      document.getElementById("navMenu").classList.toggle("show");
    }
  </script>
        <?php get_footer(); ?>