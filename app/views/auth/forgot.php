<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/log.css">
</head>
<body>
<div class="auth-container">
    <h2>Forgot Password</h2>

    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>

    <form method="POST" action="<?= BASE_URL ?>/index.php?url=auth/sendOtp">
        <input type="email" name="email" placeholder="Enter your Email" required>
        <button type="submit">Send OTP</button>
    </form>
</div>
</body>
</html>
