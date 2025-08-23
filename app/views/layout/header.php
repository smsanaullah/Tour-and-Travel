<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= isset($title) ? htmlspecialchars($title) . " | Cholo Ghurifiri" : "Cholo Ghurifiri" ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
</head>
<body>

<section class="header">
  <a href="<?= BASE_URL ?>/index.php?url=home/index" class="logo">Cholo GhuriFiri.</a>
  <nav class="navbar">
    <a href="<?= BASE_URL ?>/index.php?url=home/index">Home</a>
    <a href="<?= BASE_URL ?>/index.php?url=about/index">About</a>
    <a href="<?= BASE_URL ?>/index.php?url=package/list">Package</a>

    <?php if (isset($_SESSION['admin'])) : ?>
      <a href="<?= BASE_URL ?>/index.php?url=admin/dashboard" class="btn">Dashboard</a>
      <a href="<?= BASE_URL ?>/index.php?url=auth/logout" class="btn">Logout</a>
    <?php elseif (isset($_SESSION['customer_id'])) : ?>
      <a href="<?= BASE_URL ?>/index.php?url=tour/create">Make a Tour</a>
      <a href="<?= BASE_URL ?>/index.php?url=dashboard/index" class="btn">Dashboard</a>
      <a href="<?= BASE_URL ?>/index.php?url=auth/logout" class="btn">Logout</a>
    <?php else : ?>
      <a href="<?= BASE_URL ?>/index.php?url=auth/login" class="btn">Login</a>
      <a href="<?= BASE_URL ?>/index.php?url=auth/register" class="btn">Register</a>
    <?php endif; ?>
  </nav>
  <div id="menu-btn" class="fas fa-bars"></div>
</section>
