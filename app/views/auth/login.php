<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/log.css">
</head>
<body>
    <div class="auth-container">
        <h2>Login</h2>

        <?php if (isset($_GET['error'])): ?>
            <p style="color: red; text-align:center;">
                <?php 
                    if ($_GET['error'] === 'invalid') echo "Invalid email or password.";
                    elseif ($_GET['error'] === 'notfound') echo "User not found. Please register.";
                ?>
            </p>
        <?php endif; ?>

       <form action="<?= BASE_URL ?>/index.php?url=auth/handleLogin" method="POST">
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <a href="<?= BASE_URL ?>/index.php?url=auth/forgot">Forgot Password</a>
            <button type="submit" name="login">Login</button>
        </form>

        <p>Don't have an account? <a href="<?= BASE_URL ?>/index.php?url=auth/register">Register here</a></p>
    </div>
</body>
</html>
