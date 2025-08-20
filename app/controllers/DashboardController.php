<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once '../app/models/User.php';
require_once '../core/View.php';

class DashboardController {

    public function index() {
        if (!isset($_SESSION['customer_id'])) {
            header("Location: " . BASE_URL . "/index.php?url=auth/login");
            exit;
        }

        $userModel = new User();
        $user = $userModel->getById($_SESSION['customer_id']);
        if (!$user) {
            session_destroy();
            header("Location: " . BASE_URL . "/index.php?url=auth/login");
            exit;
        }

        View::render('dashboard/index', [
            'title' => 'User Dashboard',
            'user'  => $user
        ]);
    }
}
