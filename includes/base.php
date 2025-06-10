<?php
// includes/base.php
require_once __DIR__ . '/../config/database.php';
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>UPAKOCONNECT</title>
  <meta name="description" content="Patient and document management system">
  <meta name="keywords" content="healthcare, patient management, medical records">

  <!-- Favicons -->
  <link href="/UPAKOCONNECT_PHP/assets/img/favicon.png" rel="icon">
  <link href="/UPAKOCONNECT_PHP/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/UPAKOCONNECT_PHP/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/UPAKOCONNECT_PHP/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/UPAKOCONNECT_PHP/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/UPAKOCONNECT_PHP/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/UPAKOCONNECT_PHP/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/UPAKOCONNECT_PHP/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/UPAKOCONNECT_PHP/assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
  <?php require_once __DIR__ . '/header.php'; ?>

  <main class="main">
    <?php
    $content = ob_get_clean();
    ob_start();
    echo $content;
    ?>
  </main>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/UPAKOCONNECT_PHP/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/UPAKOCONNECT_PHP/assets/vendor/php-email-form/validate.js"></script>
  <script src="/UPAKOCONNECT_PHP/assets/vendor/aos/aos.js"></script>
  <script src="/UPAKOCONNECT_PHP/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/UPAKOCONNECT_PHP/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/UPAKOCONNECT_PHP/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/UPAKOCONNECT_PHP/assets/js/main.js"></script>

  <?php ob_end_flush();?>
</body>
</html>