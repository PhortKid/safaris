<?php
$activePage = basename($_SERVER['PHP_SELF']);
$galleryDir = __DIR__ . '/gallery';
$images = [];
foreach (['jpg', 'jpeg', 'png', 'gif', 'webp'] as $ext) {
    $images = array_merge($images, glob($galleryDir . '/*.' . $ext));
}
sort($images);
?>
<?php
$activePage = basename($_SERVER['PHP_SELF']);
$pageTitle = 'Gallery | Eugen Tanzania Safaris';
$pageDescription = 'Browse the Eugen Tanzania Safaris gallery of wildlife, landscapes, and memorable safari moments from Tanzania.';
$pageImage = 'assets/logo.png';
include 'head.php';
?>

<?php include 'nav.php'; ?>

<section class="py-5">
  <div class="container">
    <h2 class="font-serif text-center fs-2 fw-semibold mb-4">Gallery</h2>
    <div class="text-center mb-3">
      <input id="gallerySearch" class="form-control gallery-search" placeholder="Search gallery by name..." aria-label="Search gallery">
    </div>
    <?php if (empty($images)): ?>
      <div class="text-center text-muted">No gallery images found in the <code>gallery/</code> folder.</div>
    <?php else: ?>
      <div class="masonry" id="galleryMasonry">
        <?php foreach ($images as $imagePath): ?>
          <?php $imageName = basename($imagePath); $label = htmlspecialchars(pathinfo($imageName, PATHINFO_FILENAME)); ?>
          <div class="masonry-item" data-name="<?php echo strtolower($label); ?>">
            <img src="gallery/<?php echo rawurlencode($imageName); ?>" alt="<?php echo $label; ?>">
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<script>
  (function(){
    const input = document.getElementById('gallerySearch');
    if (!input) return;
    input.addEventListener('input', function(){
      const q = this.value.trim().toLowerCase();
      const items = document.querySelectorAll('.masonry-item');
      items.forEach(it => {
        const name = it.getAttribute('data-name') || '';
        it.style.display = q === '' || name.includes(q) ? '' : 'none';
      });
    });
  })();
</script>
<?php include 'footer.php'; ?>
