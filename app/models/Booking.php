<?php
require_once __DIR__ . '/../../config/db_connection.php';

class Booking {
    private $conn;

    public function __construct() {
        global $connection;
        $this->conn = $connection;
    }

    public function create($data) {
        $stmt = $this->conn->prepare("
            INSERT INTO bookings (customer_id, package_id, price, discount, status, booking_time) 
            VALUES (?, ?, ?, ?, ?, NOW())
        ");
        $stmt->bind_param("iiids", $data['customer_id'], $data['package_id'], $data['price'], $data['discount'], $data['status']);
        return $stmt->execute();
    }
}
