<?php
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php
$activePage = basename($_SERVER['PHP_SELF']);
$pageTitle = 'Safari Packages | Eugen Tanzania Safaris';
$pageDescription = 'View our safari packages, including Serengeti, Kilimanjaro, and Big Five adventures designed for every traveler.';
$pageImage = 'assets/logo.png';
include 'head.php';
?>

<?php include 'nav.php'; ?>

<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="font-serif">Safari Packages</h1>
      <p class="text-muted">Choose the ideal safari package for your next Tanzania adventure.</p>
    </div>
    <div class="row g-4">
      <?php $packages = [
        ['title' => '3-Day Serengeti & Ngorongoro', 'price' => 'From $850', 'duration' => '3 days', 'group' => 'Max 6'],
        ['title' => '7-Day Kilimanjaro Climb', 'price' => 'From $2,100', 'duration' => '7 days', 'group' => 'Max 8'],
        ['title' => '5-Day Big Five Safari', 'price' => 'From $1,350', 'duration' => '5 days', 'group' => 'Max 6'],
      ];
      foreach ($packages as $pkg): ?>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm rounded-3 h-100">
            <div class="card-body d-flex flex-column">
              <h5 class="fw-bold fs-6 mb-3"><?php echo $pkg['title']; ?></h5>
              <p class="small text-muted flex-grow-1">A tailored safari package designed for unforgettable wildlife encounters and local experiences.</p>
              <div class="d-flex justify-content-between align-items-center pkg-meta mb-3">
                <span><i class="bi bi-clock me-1"></i><?php echo $pkg['duration']; ?></span>
                <span><i class="bi bi-people me-1"></i><?php echo $pkg['group']; ?></span>
              </div>
              <div class="pkg-price mb-3"><?php echo $pkg['price']; ?></div>
              <a href="contact.php" class="btn btn-brand w-100">Book Now</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
