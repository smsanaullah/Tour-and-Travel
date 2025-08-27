<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once '../app/models/Booking.php';
require_once '../core/View.php';

class BookingController {

    // Confirm booking
    public function confirm() {
        if (!isset($_SESSION['customer_id'])) {
            header("Location: " . BASE_URL . "/auth/login");
            exit;
        }

        $customer_id = $_SESSION['customer_id'];
        $package_id = $_GET['id'] ?? null;
        $discount = $_GET['discount'] ?? 0;
        $discount_price = $_GET['discount_price'] ?? 0;

        if (!$package_id) {
            echo "❌ Package ID missing.";
            return;
        }

        $bookingModel = new Booking();
        $saved = $bookingModel->create([
            'customer_id' => $customer_id,
            'package_id' => $package_id,
            'price' => $discount_price,
            'discount' => $discount,
            'status' => 'Pending'
        ]);

        if ($saved) {
            header("Location: " . BASE_URL . "/dashboard");
            exit;
        } else {
            echo "❌ Booking failed!";
        }
    }
}
