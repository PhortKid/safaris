<?php
$activePage = $activePage ?? basename($_SERVER['PHP_SELF']);
?>

<!-- TOPBAR -->
<div class="topbar">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="d-none d-md-flex gap-3 topbar-info">
      <a href="#"><i class="bi bi-telephone me-1"></i>+255 762 268 845</a>
      <a href="#"><i class="bi bi-telephone me-1"></i>+255 679 268 845</a>
      <a href="#"><i class="bi bi-envelope me-1"></i>info@eugentanzaniasafaris.com</a>
    </div>
    <div class="d-flex gap-2 topbar-social">
      <a href="https://www.facebook.com/eugentanzaniasafaris/"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter-x"></i></a>
      <a href="#"><i class="bi bi-youtube"></i></a>
      <a href="https://www.instagram.com/eugen_tanzania_safaris/"><i class="bi bi-instagram"></i></a>
    </div>
  </div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-2 fixed-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
      <img src="assets/logo.png" alt="Eugen Tanzania Safaris logo" class="d-block" style="max-height:50px; width:auto;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link <?php echo $activePage === 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link <?php echo $activePage === 'about.php' ? 'active' : ''; ?>" href="about.php">About Us</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php echo $activePage === 'destinations.php' ? 'active' : ''; ?>" href="destinations.php" data-bs-toggle="dropdown">Destinations</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Serengeti</a></li>
            <li><a class="dropdown-item" href="#">Ngorongoro</a></li>
            <li><a class="dropdown-item" href="#">Tarangire</a></li>
            <li><a class="dropdown-item" href="#">Zanzibar</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link <?php echo $activePage === 'day-trips.php' ? 'active' : ''; ?>" href="day-trips.php">Day Trips</a></li>
        <li class="nav-item"><a class="nav-link <?php echo $activePage === 'safari-packages.php' ? 'active' : ''; ?>" href="safari-packages.php">Safari Packages</a></li>
        <li class="nav-item"><a class="nav-link <?php echo $activePage === 'gallery.php' ? 'active' : ''; ?>" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link <?php echo $activePage === 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact Us</a></li>
        <li class="nav-item ms-lg-2">
          <a class="btn btn-brand px-3 py-2" href="#">Book Now</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main class="site-content">
