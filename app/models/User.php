<?php
require_once __DIR__ . '/../../config/db_connection.php';

class User {
    private $conn;

    public function __construct() {
        $this->conn = $GLOBALS['connection'];

        if (!$this->conn) {
            die("❌ Database connection not initialized.");
        }
    }

    public function findByEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM customers WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function findCustomerByEmail($email) {
        return $this->findByEmail($email);
    }

    public function create($data) {
        $stmt = $this->conn->prepare(
            "INSERT INTO customers (name, email, phone_number, address, password) VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bind_param(
            "sssss",
            $data['name'],
            $data['email'],
            $data['phone_number'],
            $data['address'],
            $data['password']
        );
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM customers WHERE customer_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updatePasswordByEmail($email, $hashedPassword) {
        $stmt = $this->conn->prepare("UPDATE customers SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $hashedPassword, $email);
        return $stmt->execute();
    }
    public function getApprovedReviews() {
        $stmt = $this->conn->prepare("SELECT * FROM reviews WHERE status = 'approved'");
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }


}
