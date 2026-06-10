<?php
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php
$activePage = basename($_SERVER['PHP_SELF']);
$pageTitle = 'About Us | Eugen Tanzania Safaris';
$pageDescription = 'Learn about Eugen Tanzania Safaris, our sustainable safari experiences, and how we create unforgettable East Africa journeys.';
$pageImage = 'assets/logo.png';
include 'head.php';
?>

<?php include 'nav.php'; ?>

<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="font-serif">About Eugen Tanzania Safaris</h1>
    </div>
    <div class="row justify-content-center mb-4">
      <div class="col-lg-10">
        <p>Welcome to Eugen Tanzania Safaris, a premier, locally-owned boutique tour operator based in Arusha, Tanzania. Founded and led by Eugen Malley—a passionate, transformative travel expert and former Serengeti resident guide—we specialize in crafting bespoke, unforgettable journeys across East Africa.</p>
        <p>We believe that travel should be more than just sightseeing; it should be a meaningful connection. That is why we design personalized itineraries that blend thrilling wildlife game drives, eco-friendly walking safaris, and authentic cultural immersions with local communities like the Maasai and Hadzabe. Whether you are looking to witness the Great Wildebeest Migration in the Serengeti, conquer Mount Kilimanjaro, or give back through our unique educational and medical volunteer mission tours, we tailor every detail to match your budget, style, and dreams.</p>
        <p>At Eugen Tanzania Safaris, we are deeply committed to sustainable tourism, supporting local communities, and minimizing our environmental footprint. Join us to experience the true heartbeat of Tanzania through the eyes of those who call it home.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-lg-6">
        <p class="small mb-2"><i class="bi bi-envelope me-2"></i>info@eugentanzaniasafaris.com</p>
        <p class="small mb-0"><i class="bi bi-geo-alt me-2"></i>Dar es Salaam, Tanzania</p>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
