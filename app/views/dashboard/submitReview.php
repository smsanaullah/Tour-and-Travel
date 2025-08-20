<h2>Submit a Review</h2>
<form action="../../public/submit_review.php" method="POST">
    <select name="booking_id" required>
        <option value="" disabled selected>Select Booking</option>
        <?php foreach ($customTours as $booking): ?>
            <option value="<?= $booking['id'] ?>"><?= htmlspecialchars($booking['location']) ?></option>
        <?php endforeach; ?>
    </select>
    <textarea name="review_text" placeholder="Write your review here..." required></textarea>
    <input type="number" name="rating" min="1" max="5" placeholder="Rating (1-5)" required>
    <button type="submit" class="btn">Submit Review</button>
</form>
