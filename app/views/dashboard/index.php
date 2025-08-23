<?php
require_once __DIR__ . '/../layout/header.php';
?>

<div class="dashboard-container">
    <h1>Welcome, <?= htmlspecialchars($user['name']) ?></h1>
    <p>Email: <?= htmlspecialchars($user['email']) ?></p>
    <p>Phone: <?= htmlspecialchars($user['phone_number']) ?></p>
    <p>Address: <?= htmlspecialchars($user['address']) ?></p>

    <div class="dashboard-tabs" style="text-align:center; margin: 20px 0;">
        <button onclick="showSection('package')">Package Bookings</button>
        <button onclick="showSection('custom')">Custom Tours</button>
        <button onclick="showSection('reviewList')">Your Reviews</button>
        <button onclick="showSection('submitReview')">Submit Review</button>
    </div>

    <div id="package-section" class="dashboard-section">
        <?php include 'package.php'; ?>
    </div>

    <div id="custom-section" class="dashboard-section" style="display:none;">
        <?php include 'custom.php'; ?>
    </div>

    <div id="reviewList-section" class="dashboard-section" style="display:none;">
        <?php include 'reviewList.php'; ?>
    </div>

    <div id="submitReview-section" class="dashboard-section" style="display:none;">
        <?php include 'submitReview.php'; ?>
    </div>
</div>

<?php
require_once __DIR__ . '/../layout/footer.php';
?>

<script>
function showSection(section) {
    const sections = ['package', 'custom', 'reviewList', 'submitReview'];
    sections.forEach(s => {
        const el = document.getElementById(`${s}-section`);
        if (el) {
            el.style.display = (s === section) ? 'block' : 'none';
        }
    });
}
</script>
