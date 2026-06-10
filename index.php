<?php
$activePage = basename($_SERVER['PHP_SELF']);
$pageTitle = 'Home | Eugen Tanzania Safaris';
$pageDescription = 'Eugen Tanzania Safaris offers bespoke safari tours, custom itineraries and unforgettable wildlife adventures in Tanzania.';
$pageImage = 'assets/logo.png';
include 'head.php';
?>

<?php include 'nav.php'; ?>
<?php
// load gallery images
$galleryDir = __DIR__ . '/gallery';
$galleryImages = [];
foreach (['jpg','jpeg','png','gif','webp'] as $ext) {
  $galleryImages = array_merge($galleryImages, glob($galleryDir . '/*.' . $ext));
}

$fixedNames = ['IMG-20260605-WA0101.jpg','IMG-20260605-WA0117.jpg','IMG-20260605-WA0093.jpg','IMG-20260605-WA0040.jpg','IMG-20260605-WA0041.jpg'];
$carouselImages = [];
foreach ($fixedNames as $name) {
  if (is_file($galleryDir . '/' . $name)) {
    $carouselImages[] = 'gallery/' . rawurlencode($name);
  }
}
foreach ($galleryImages as $g) {
  if (count($carouselImages) >= 5) break;
  $carouselImages[] = 'gallery/' . rawurlencode(basename($g));
}
$fallback = 'https://images.unsplash.com/photo-1516426122078-c23e76319801?w=1400&q=80';
while (count($carouselImages) < 5) { $carouselImages[] = $fallback; }

$carouselCaptions = [
  ['Explore Africa\'s Wildest Spot', 'Serengeti · Ngorongoro · Tarangire'],
  ['Unforgettable Safari', 'Tailor-made journeys into the wild'],
  ['Guides, Local Experts', 'Authentic Tanzanian safari leadership'],
  ['Experience Beautiful Landscapes', 'From savanna plains to crater highlands'],
  ['Nature of Africa', 'Witness wildlife, sunsets, and unspoiled wilderness'],
];

function gallery_url($path) { return 'gallery/' . rawurlencode(basename($path)); }
?>

<div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-indicators">
    <?php foreach ($carouselImages as $i => $img): ?>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"></button>
    <?php endforeach; ?>
  </div>
  <div class="carousel-inner">
    <?php foreach ($carouselImages as $i => $cimg): 
      $src = strpos($cimg, 'gallery/') === 0 || strpos($cimg, 'http') === 0 ? $cimg : (is_file($cimg) ? gallery_url($cimg) : $cimg);
      $caption = $carouselCaptions[$i] ?? $carouselCaptions[$i % count($carouselCaptions)];
    ?>
      <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
        <img src="<?php echo $src; ?>" class="d-block w-100" alt="">
        <div class="carousel-caption d-flex align-items-center justify-content-center h-100 top-0 start-0 end-0 bottom-0 position-absolute m-0 p-0">
          <div class="hero-caption-box text-white text-center">
            <h1><?php echo htmlspecialchars($caption[0]); ?></h1>
            <p style="display: none;"><?php echo htmlspecialchars($caption[1]); ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<?php
$galleryDir = __DIR__ . '/gallery';
$allImages = [];
foreach (['jpg', 'jpeg', 'png', 'gif', 'webp'] as $ext) {
  $allImages = array_merge($allImages, glob($galleryDir . '/*.' . $ext));
}
sort($allImages);
$preview = array_slice($allImages, 0, 6);
$leftImage = !empty($allImages) ? 'gallery/' . rawurlencode(basename($allImages[0])) : 'https://images.unsplash.com/photo-1516426122078-c23e76319801?w=1000&q=80';
?>

<!-- ABOUT EUGEN TANZANIA SAFARIS -->
<section class="py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-md-4">
        <img src="<?php echo $leftImage; ?>" alt="Eugen Tanzania Safaris" class="img-fluid rounded-3 shadow-sm">
      </div>
      <div class="col-md-8">
        <h2 class="font-serif">About Eugen Tanzania Safaris</h2>
        <p>Welcome to Eugen Tanzania Safaris, a premier, locally-owned boutique tour operator based in Arusha, Tanzania. Founded and led by Eugen Malley—a passionate, transformative travel expert and former Serengeti resident guide—we specialize in crafting bespoke, unforgettable journeys across East Africa.</p>
        <p>We believe that travel should be more than just sightseeing; it should be a meaningful connection. That is why we design personalized itineraries that blend thrilling wildlife game drives, eco-friendly walking safaris, and authentic cultural immersions with local communities like the Maasai and Hadzabe. Whether you are looking to witness the Great Wildebeest Migration in the Serengeti, conquer Mount Kilimanjaro, or give back through our unique educational and medical volunteer mission tours, we tailor every detail to match your budget, style, and dreams.</p>
        <p>At Eugen Tanzania Safaris, we are deeply committed to sustainable tourism, supporting local communities, and minimizing our environmental footprint. Join us to experience the true heartbeat of Tanzania through the eyes of those who call it home.</p>
      </div>
    </div>

   

<!-- DESTINATIONS -->
<section class="py-5">
  <div class="container">
    <h2 class="font-serif text-center fs-2 fw-semibold mb-4">Destinations</h2>
    <?php
      $destNames = ['Tanzania','Kenya','Uganda'];
      $destImgs = array_slice($galleryImages, 3, 3);
      while (count($destImgs) < 3) { $destImgs[] = $fallback; }
    ?>
    <div class="row g-4 justify-content-center">
      <?php foreach ($destNames as $i => $dname): $dimg = $destImgs[$i]; $dsrc = (strpos($dimg,'gallery/')===0 || strpos($dimg,'http')===0) ? $dimg : (is_file($dimg) ? gallery_url($dimg) : $dimg); ?>
        <div class="col-md-4">
          <div class="card dest-card border-0 shadow-sm rounded-3 cursor-pointer">
            <div class="overflow-hidden rounded-top-3">
              <img src="<?php echo $dsrc; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($dname); ?>">
            </div>
            <div class="dest-label rounded-bottom-3">
              <span><?php echo $dname; ?></span>
              <span class="text-brand">›</span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FEATURES STRIP -->
<section class="py-4" style="background:#f7f4f0">
  <div class="container">
    <div class="row g-4 text-center">
      <div class="col-6 col-md-3">
        <i class="bi bi-calendar-range feature-icon d-block mb-2"></i>
        <h6 class="fw-bold mb-1">Years of Experience</h6>
        <p class="small text-muted mb-0">10+ years</p>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-emoji-smile feature-icon d-block mb-2"></i>
        <h6 class="fw-bold mb-1">Happy Travellers</h6>
        <p class="small text-muted mb-0">5000+</p>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-box-seam feature-icon d-block mb-2"></i>
        <h6 class="fw-bold mb-1">Packages</h6>
        <p class="small text-muted mb-0">100+ packages</p>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-headset feature-icon d-block mb-2"></i>
        <h6 class="fw-bold mb-1">24/7 Support</h6>
        <p class="small text-muted mb-0">We're with you every step of the way</p>
      </div>
    </div>
  </div>
</section>

<!-- SAFARI PACKAGES 
<section class="py-5" style="background:#f7f4f0">
  <div class="container">
    <h2 class="font-serif text-center fs-2 fw-semibold mb-4">Popular Safari Packages</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-3 h-100">
          <div class="position-relative">
            <img src="gallery/IMG-20260605-WA0040.jpg" class="card-img-top pkg-img rounded-top-3" alt="Serengeti Safari">
            <span class="pkg-badge">Best Seller</span>
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="fw-bold fs-6 mb-2">3-Day Serengeti & Ngorongoro</h5>
            <p class="small text-muted flex-grow-1">Witness the Great Migration and explore the stunning Ngorongoro Crater — a UNESCO World Heritage Site.</p>
            <div class="d-flex justify-content-between align-items-center pkg-meta mb-3">
              <span><i class="bi bi-clock me-1"></i>3 days</span>
              <span><i class="bi bi-people me-1"></i>Max 6</span>
              <span class="pkg-price">From $850</span>
            </div>
            <button class="btn btn-brand w-100" onclick="sendPrompt('Tell me more about the 3-Day Serengeti & Ngorongoro safari package')">View Details ↗</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-3 h-100">
          <div class="position-relative">
            <img src="gallery/IMG-20260605-WA0041.jpg" class="card-img-top pkg-img rounded-top-3" alt="Kilimanjaro Climb">
            <span class="pkg-badge">Adventure</span>
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="fw-bold fs-6 mb-2">7-Day Kilimanjaro Climb</h5>
            <p class="small text-muted flex-grow-1">Summit Africa's highest peak via the scenic Lemosho Route, with experienced certified mountain guides.</p>
            <div class="d-flex justify-content-between align-items-center pkg-meta mb-3">
              <span><i class="bi bi-clock me-1"></i>7 days</span>
              <span><i class="bi bi-people me-1"></i>Max 8</span>
              <span class="pkg-price">From $2,100</span>
            </div>
            <button class="btn btn-brand w-100" onclick="sendPrompt('Tell me more about the 7-Day Kilimanjaro Climb package')">View Details ↗</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-3 h-100">
          <div class="position-relative">
            <img src="gallery/IMG-20260605-WA0042.jpg" class="card-img-top pkg-img rounded-top-3" alt="Big Five Safari">
            <span class="pkg-badge">Popular</span>
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="fw-bold fs-6 mb-2">5-Day Big Five Safari</h5>
            <p class="small text-muted flex-grow-1">Spot the legendary lion, leopard, elephant, buffalo, and rhino across Tanzania's finest game reserves.</p>
            <div class="d-flex justify-content-between align-items-center pkg-meta mb-3">
              <span><i class="bi bi-clock me-1"></i>5 days</span>
              <span><i class="bi bi-people me-1"></i>Max 6</span>
              <span class="pkg-price">From $1,350</span>
            </div>
            <button class="btn btn-brand w-100" onclick="sendPrompt('Tell me more about the 5-Day Big Five Safari package')">View Details ↗</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->



    <h3 class="font-serif text-center mb-3">Gallery Preview</h3>
    <div class="row g-3 justify-content-center">
      <?php if (empty($preview)): ?>
        <div class="col-12 text-center text-muted">No gallery images available.</div>
      <?php else: ?>
        <?php foreach ($preview as $imgPath): $imgName = basename($imgPath); ?>
          <div class="col-6 col-md-4">
            <div class="card border-0 rounded-3 overflow-hidden">
              <img src="gallery/<?php echo rawurlencode($imgName); ?>" alt="" class="gallery-img">
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="text-center mt-3">
      <a href="gallery.php" class="btn btn-outline-brand">View More Gallery</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
