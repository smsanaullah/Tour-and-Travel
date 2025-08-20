<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <div class="auth-container">
        <h2>Reset Password</h2>

        
        <p class="message" style="color:red; display:none;">Error message here</p>
        <p class="message" style="color:green; display:none;">Success message here</p>

        
        <form method="POST" action="handle_reset.html">
            <input type="password" name="password" placeholder="New Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Reset</button>
        </form>
    </div>
</body>
</html>
