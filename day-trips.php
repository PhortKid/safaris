<?php
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php
$activePage = basename($_SERVER['PHP_SELF']);
$pageTitle = 'Day Trips | Eugen Tanzania Safaris';
$pageDescription = 'Explore our short day trip itineraries, perfect for wildlife lovers and cultural travelers visiting Tanzania.';
$pageImage = 'assets/logo.png';
include 'head.php';
?>

<?php include 'nav.php'; ?>

<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="font-serif">Day Trips</h1>
      <p class="text-muted">Perfect short escapes for wildlife lovers, nature explorers, and culture seekers.</p>
    </div>
    <div class="row g-4">
      <?php $trips = [
        ['title' => 'Half-Day City Tour', 'details' => 'Discover Dar es Salaam’s cultural highlights and markets.'],
        ['title' => 'Mikumi Day Safari', 'details' => 'See elephants and giraffes on a quick wildlife day trip.'],
        ['title' => 'Zanzibar Spice Tour', 'details' => 'Explore fragrant farms, historic villages, and local traditions.'],
        ['title' => 'Beach Picnic', 'details' => 'Relax at a private beach with food, shade, and ocean views.'],
      ];
      foreach ($trips as $trip): ?>
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm rounded-3 h-100 p-4">
            <h5 class="mb-3"><?php echo $trip['title']; ?></h5>
            <p class="mb-0 text-muted"><?php echo $trip['details']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
