<?php
$base_url = '/tour_travel_mvc/public/';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php include '../app/views/layout/header.php'; ?>


<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url('<?= $base_url ?>images/home-slide-20.jpg') no-repeat">
                <div class="overly"></div>
                <div class="content">
                    <span>Explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="<?= BASE_URL ?>/index.php?url=package/list" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url('<?= $base_url ?>images/home-slide-1.jpg') no-repeat">
                <div class="content">
                    <span>Explore, discover, travel</span>
                    <h3>discover new places</h3>
                    <a href="<?= $base_url ?>package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url('<?= $base_url ?>images/home-slide-3.jpg') no-repeat">
                <div class="content">
                    <span>Explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="<?= $base_url ?>package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>


<section class="services">
    <h1 class="heading-title">Our services</h1>
    <div class="box-container">
        <?php
        $services = [
            ['icon' => 'icon-1.png', 'title' => 'adventure'],
            ['icon' => 'icon-2.png', 'title' => 'tour guide'],
            ['icon' => 'icon-3.png', 'title' => 'trekking'],
            ['icon' => 'icon-4.png', 'title' => 'camp fire'],
            ['icon' => 'icon-5.png', 'title' => 'off road'],
            ['icon' => 'icon-6.png', 'title' => 'camping']
        ];
        foreach ($services as $service): ?>
        <div class="box">
            <img src="<?= $base_url ?>images/<?= $service['icon'] ?>" alt="">
            <h3><?= $service['title'] ?></h3>
        </div>
        <?php endforeach; ?>
    </div>
</section>


<section class="home-about">
    <div class="image">
        <img src="<?= $base_url ?>images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Welcome to Cholo Ghurifiri, your trusted travel management platform! We are dedicated to making your travel experiences seamless, enjoyable, and memorable. Whether you're planning a solo adventure, a family trip, or a corporate getaway, we've got you covered.</p>
    <a href="<?= BASE_URL ?>/index.php?url=about/index" class="btn">Read More</a>
    </div>
</section>


<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="<?= $base_url ?>images/cox'sbazar.jpg" alt="">
            </div>
            <div class="content">
                <h3>Cox’s Bazar</h3>
                <p>Cox’s Bazar is home to the world’s longest unbroken sandy beach.</p>
                <a href="<?= BASE_URL ?>/index.php?url=package/view/coxsbazar" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="<?= $base_url ?>images/saint-martin.jpg" alt="">
            </div>
            <div class="content">
                <h3>Saint Martin's Island</h3>
                <p>The only coral island in Bangladesh, with crystal-clear waters and white sandy beaches.</p>
                <a href="<?= BASE_URL ?>/index.php?url=package/view/saintmartin" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="<?= $base_url ?>images/Sundarban.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sundarbans</h3>
                <p>The world’s largest mangrove forest and home to the Royal Bengal Tiger.</p>
                <a href="<?= BASE_URL ?>/index.php?url=package/view/sundarbans" class="btn">Book Now</a>
            </div>
        </div>
    </div>
    <div class="more-package">
    <a href="<?= BASE_URL ?>/index.php?url=package/list" class="btn">More Packages</a>
    </div>
</section>


<section class="home-offer">
    <div class="content">
        <h3>upto 50% discounts 🎉</h3>
        <p>Enjoy exclusive discounts on travel packages. Book now and save big!</p>
    <a href="<?= BASE_URL ?>/index.php?url=package/list" class="btn">Book Now</a>
    </div>
</section>

<?php include '../app/views/layout/footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?= $base_url ?>js/script.js"></script>

</body>
</html>
