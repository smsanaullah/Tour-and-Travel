<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify OTP</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/log.css">
</head>
<body>
<div class="auth-container">
    <h2>Verify OTP</h2>

    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form action="<?= BASE_URL ?>/index.php?url=auth/handleOtp" method="POST">
        <input type="number" name="otp" placeholder="Enter 6-digit OTP" required>
        <button type="submit">Verify</button>
    </form>
</div>
</body>
</html>
