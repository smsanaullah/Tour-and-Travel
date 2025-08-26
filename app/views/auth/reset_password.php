<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/log.css">
</head>
<body>
<div class="auth-container">
    <h2>Reset Password</h2>

    <?php if (!empty($error)) echo "<p class='message'>$error</p>"; ?>
    <?php if (!empty($success)) echo "<p class='message' style='color:green;'>$success</p>"; ?>

    <form method="POST" action="<?= BASE_URL ?>/index.php?url=auth/handleReset">
        <input type="password" name="password" placeholder="New Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Reset</button>
    </form>
</div>
</body>
</html>
