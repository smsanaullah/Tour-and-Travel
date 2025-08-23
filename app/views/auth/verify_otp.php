<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify OTP</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <div class="auth-container">
        <h2>Verify OTP</h2>

        <!-- Message Placeholder -->
        <p id="error" style="color:red; display:none;">Error message here</p>

        <!-- Form -->
        <form action="handle_otp.html" method="POST">
            <input type="number" name="otp" placeholder="Enter 6-digit OTP" required>
            <button type="submit">Verify</button>
        </form>
    </div>
</body>
</html>
