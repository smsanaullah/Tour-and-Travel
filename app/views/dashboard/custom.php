<h2>Your Custom Tours:</h2>
<?php if (!empty($customTours)): ?>
<table border="1" cellpadding="10" cellspacing="0">
<thead>
<tr>
    <th>#</th>
    <th>Location</th>
    <th>Travel By</th>
    <th>Hotel Type</th>
    <th>Hotel Name</th>
    <th>Days</th>
    <th>Guests</th>
    <th>Arrival Date</th>
    <th>Total Cost (Tk)</th>
    <th>Status</th>
</tr>
</thead>
<tbody>
<?php foreach ($customTours as $index => $row): ?>
<tr>
    <td><?= $index + 1 ?></td>
    <td><?= ucfirst(htmlspecialchars($row['location'])) ?></td>
    <td><?= htmlspecialchars($row['travel_by']) ?></td>
    <td><?= htmlspecialchars($row['hotelType']) ?></td>
    <td><?= htmlspecialchars($row['hotelName']) ?></td>
    <td><?= htmlspecialchars($row['days']) ?></td>
    <td><?= htmlspecialchars($row['guests']) ?></td>
    <td><?= htmlspecialchars($row['arrivals']) ?></td>
    <td><?= htmlspecialchars($row['totalCost']) ?> Tk</td>
    <td><?= htmlspecialchars($row['status']) ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<?php else: ?>
<p>No custom tours found. Plan your own adventure!</p>
<?php endif; ?>
