<h2>Package Bookings:</h2>

<?php if (!empty($bookings)): ?>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Location</th>
            <th>Travel Date</th>
            <th>Travel Time</th>
            <th>Hotel Name</th>
            <th>Price</th>
            <th>Status</th>
            <th>Booking Time</th>
        </tr>

        <?php foreach ($bookings as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['location']) ?></td>
                <td><?= htmlspecialchars($row['travel_date']) ?></td>
                <td><?= htmlspecialchars($row['travel_time']) ?></td>
                <td><?= htmlspecialchars($row['hotel_name']) ?></td>
                <td><?= number_format($row['price']) ?> BDT</td>
                <td><?= htmlspecialchars($row['status']) ?></td>
                <td><?= htmlspecialchars($row['booking_time']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No bookings found. Start planning your next trip!</p>
<?php endif; ?>
