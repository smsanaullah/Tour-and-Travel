<h2>Your Reviews</h2>
<?php if (!empty($reviews)): ?>
<table border="1">
<tr>
    <th>Location</th>
    <th>Review</th>
    <th>Rating</th>
    <th>Date</th>
</tr>
<?php foreach ($reviews as $review): ?>
<tr>
    <td><?= htmlspecialchars($review['location']) ?></td>
    <td><?= htmlspecialchars($review['review_text']) ?></td>
    <td><?= htmlspecialchars($review['rating']) ?>/5</td>
    <td><?= htmlspecialchars($review['created_at']) ?></td>
</tr>
<?php endforeach; ?>
</table>
<?php else: ?>
<p>No reviews yet. Share your experience!</p>
<?php endif; ?>
