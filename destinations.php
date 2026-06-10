<?php
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php
$activePage = basename($_SERVER['PHP_SELF']);
$pageTitle = 'Destinations | Eugen Tanzania Safaris';
$pageDescription = 'Discover Tanzania safari destinations with Eugen Tanzania Safaris — from Serengeti and Ngorongoro to Tarangire and Zanzibar.';
$pageImage = 'assets/logo.png';
include 'head.php';
?>

<?php include 'nav.php'; ?>

<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="font-serif">Destinations</h1>
      <p class="text-muted">Explore Tanzania's most iconic safari destinations and plan the perfect wildlife adventure.</p>
    </div>
    <div class="row g-4">
      <?php $destinations = [
        ['title' => 'Serengeti', 'description' => 'Witness the Great Migration and encounter big cats on wide-open plains.'],
        ['title' => 'Ngorongoro Crater', 'description' => 'A unique UNESCO World Heritage safari inside a volcanic caldera rich in wildlife.'],
        ['title' => 'Tarangire', 'description' => 'Famous for huge elephant herds, baobabs, and rewarding game drives.'],
        ['title' => 'Zanzibar', 'description' => 'Relax on white sand beaches and explore the historic Stone Town.'],
      ];
      foreach ($destinations as $destination): ?>
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm rounded-3 h-100 p-4">
            <h5 class="mb-3"><?php echo $destination['title']; ?></h5>
            <p class="mb-0 text-muted"><?php echo $destination['description']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<footer class="pt-5 pb-3">
  <div class="container">
    <div class="row g-4 mb-4">
      <div class="col-lg-4">
      <?php include 'footer.php'; ?>
        <p class="small" style="line-height:1.8">Tanzania Safaris Limited — your trusted partner for unforgettable African wildlife adventures since 2010.</p>
