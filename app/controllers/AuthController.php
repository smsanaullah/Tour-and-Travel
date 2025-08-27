<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once '../app/models/User.php';
require_once '../core/View.php';

class AuthController {

    public function login() {
        View::render('auth/login');
    }

    public function register() {
        View::render('auth/register');
    }

    public function forgot() {
        View::render('auth/forgot');
    }

    public function resetPassword() {
        View::render('auth/reset_password');
    }

    public function verifyOtp() {
        View::render('auth/verify_otp');
    }

    public function handleRegister() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = trim(htmlspecialchars($_POST["name"]));
            $email = trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
            $phone = trim($_POST["phone_number"]);
            $address = trim($_POST["address"]);
            $password = trim($_POST["password"]);
            $confirm_password = trim($_POST["confirm_password"]);

            $errors = [];

            if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
                $errors[] = "All fields are required.";
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format.";
            }

            if ($password !== $confirm_password) {
                $errors[] = "Passwords do not match.";
            }

            if (strlen($password) < 6) {
                $errors[] = "Password must be at least 6 characters.";
            }

            $userModel = new User();
            if ($userModel->findByEmail($email)) {
                $errors[] = "Email already registered.";
            }

            if (!empty($errors)) {
                View::render('auth/register', ['error' => implode("<br>", $errors)]);
                return;
            }

            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $created = $userModel->create([
                'name' => $name,
                'email' => $email,
                'phone_number' => $phone,
                'address' => $address,
                'password' => $hashed
            ]);

            $msg = $created ? "Registration successful! You can login now." : "Registration failed.";
            View::render('auth/register', ['success' => $msg]);
        }
    }

    public function handleLogin() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            if ($email === 'sanaullah@admin.com' && $password === 'sana0') {
                $_SESSION['admin'] = true;
                $_SESSION['admin_name'] = 'Sanaullah';
                header("Location: " . BASE_URL . "/admin/dashboard");
                exit;
            }

            $userModel = new User();
            $user = $userModel->findCustomerByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['customer_id'] = $user['customer_id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];

                header("Location: " . BASE_URL . "/index.php?url=dashboard/index");
                exit;
            }

            View::render('auth/login', ['error' => "Invalid email or password."]);
        }
    }

    public function sendOtp() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST['email'] ?? '';
            $userModel = new User();
            $user = $userModel->findCustomerByEmail($email);

            if ($user) {
                $otp = rand(100000, 999999);
                $_SESSION['otp'] = $otp;
                $_SESSION['email'] = $email;

                echo "<h3 style='text-align:center;'>Your OTP is: <span style='color:green;'>$otp</span></h3>";
                echo "<script>setTimeout(function(){ window.location.href = '" . BASE_URL . "/auth/verifyOtp'; }, 3000);</script>";
                exit;
            } else {
                View::render('auth/forgot', ['error' => "Email not found!"]);
            }
        }
    }

    public function handleOtp() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $enteredOtp = $_POST['otp'] ?? '';

            if (isset($_SESSION['otp']) && $enteredOtp == $_SESSION['otp']) {
                header("Location: " . BASE_URL . "/auth/resetPassword");
                exit;
            } else {
                View::render('auth/verify_otp', ['error' => "Invalid OTP!"]);
            }
        }
    }

    public function handleReset() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $password = trim($_POST['password']);
            $confirm_password = trim($_POST['confirm_password']);

            if (!isset($_SESSION['email'])) {
                View::render('auth/reset_password', ['error' => "Session expired. Please try again."]);
                return;
            }

            if (empty($password) || empty($confirm_password)) {
                View::render('auth/reset_password', ['error' => "All fields are required."]);
                return;
            }

            if ($password !== $confirm_password) {
                View::render('auth/reset_password', ['error' => "Passwords do not match."]);
                return;
            }

            if (strlen($password) < 6) {
                View::render('auth/reset_password', ['error' => "Password must be at least 6 characters."]);
                return;
            }

            $email = $_SESSION['email'];
            $hashed = password_hash($password, PASSWORD_DEFAULT);

            $userModel = new User();
            $updated = $userModel->updatePasswordByEmail($email, $hashed);

            if ($updated) {
                unset($_SESSION['email'], $_SESSION['otp']);
                View::render('auth/login', ['success' => "Password reset successful. You can now login."]);
            } else {
                View::render('auth/reset_password', ['error' => "Failed to reset password. Try again."]);
            }
        }
    }

   
    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        session_unset();
        session_destroy();

           header("Location: " . BASE_URL . "/index.php?url=home/index");
        exit;
    }
}
