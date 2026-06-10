<?php
$activePage = basename($_SERVER['PHP_SELF']);
?>
<?php
$activePage = basename($_SERVER['PHP_SELF']);
$pageTitle = 'Contact Us | Eugen Tanzania Safaris';
$pageDescription = 'Contact Eugen Tanzania Safaris to book your safari, ask about availability, or customize your Tanzania adventure.';
$pageImage = 'assets/logo.png';
include 'head.php';
?>

<?php include 'nav.php'; ?>

<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="font-serif">Contact Us</h1>
      <p class="text-muted">Reach out to our team to start planning your safari or ask about availability and custom packages.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-3 p-4 h-100">
          <h3>Get in touch</h3>
          <p class="mb-3">Call, email, or send a message through the form and our safari specialists will reply quickly.</p>
          <p class="mb-1"><strong>Phone:</strong> +255 762 268 845</p>
          <p class="mb-1"><strong>Email:</strong> info@eugentanzaniasafaris.com</p>
          <p class="mb-0"><strong>Location:</strong> Dar es Salaam, Tanzania</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-3 p-4 h-100">
          <form>
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" placeholder="Your name">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="you@example.com">
            </div>
            <div class="mb-3">
              <label class="form-label">Message</label>
              <textarea class="form-control" rows="5" placeholder="Tell us about your safari plans"></textarea>
            </div>
            <button type="submit" class="btn btn-brand">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php include 'footer.php'; ?>
