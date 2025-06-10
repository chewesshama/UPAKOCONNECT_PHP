<!-- includes/header.php -->
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header id="header" class="header sticky-top">
  <div class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div><!-- End Top Bar -->

  <div class="branding d-flex align-items-center">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="/index.php" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">UPAKOCONNECT</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/index.php" class="<?php echo $current_page === 'index.php' ? 'active' : ''; ?>">Home</a></li>
          <li><a href="/modules/clinic/patients.php" class="<?php echo $current_page === 'patients.php' ? 'active' : ''; ?>">Patients</a></li>
          <li><a href="/modules/clinic/documents.php" class="<?php echo $current_page === 'documents.php' ? 'active' : ''; ?>">Documents</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="cta-btn d-none d-sm-block" href="#appointment">Make an Appointment</a>
    </div>
  </div>
</header>