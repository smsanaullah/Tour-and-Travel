<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>

<?php require_once __DIR__ . '/../layout/header.php'; ?>

<div class="heading" style="background:url(<?= BASE_URL ?>/images/img-12.jpg) no-repeat">
  <h1>about us</h1>
</div>

<section class="about">
  <div class="image">
    <img src="<?= BASE_URL ?>/images/about-img-1.jpg" alt="">
  </div>
  <div class="content">
    <h3>why choose us?</h3>
    <p>Welcome to Cholo Ghurifiri, your trusted travel management platform! We are dedicated to making your travel experiences seamless, enjoyable, and memorable. Whether you're planning a solo adventure, a family trip, or a corporate getaway, we've got you covered.</p>
    <h3>Our Mission</h3>
    <p>Our mission is to provide a hassle-free and personalized travel experience by offering well-designed tour packages, secure bookings, and excellent customer service.</p>

    <div class="icons-container">
      <div class="icons">
        <i class="fas fa-map"></i>
        <span>top destinations</span>
      </div>
      <div class="icons">
        <i class="fas fa-hand-holding-usd"></i>
        <span>affordable price</span>
      </div>
      <div class="icons">
        <i class="fas fa-headset"></i>
        <span>24/7 guide service</span>
      </div>
    </div>
  </div>
</section>

<section class="reviews">
  <h1 class="heading-title">Clients Reviews</h1>

  <div class="swiper reviews-slider">
    <div class="swiper-wrapper">
      <?php
      
      require_once __DIR__ . '/../../models/User.php';

      $UserModel = new User();
      $approvedReviews = $UserModel->getApprovedReviews();

      foreach ($approvedReviews as $review): ?>
        <div class="swiper-slide slide">
          <div class="stars">
            <?php for ($i = 0; $i < intval($review['rating']); $i++): ?>
              <i class="fas fa-star"></i>
            <?php endfor; ?>
          </div>
          <p><?= htmlspecialchars($review['review_text']) ?></p>
          <h3><?= htmlspecialchars($review['name']) ?></h3>

          <span>Traveler</span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../layout/footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?= BASE_URL ?>/js/script.js"></script>

</body>
</html>
