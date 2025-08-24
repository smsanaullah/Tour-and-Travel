<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <div class="auth-container">
        <h2>Forgot Password</h2>

        
        <p id="error" style="color:red; display:none;">Error message here</p>
        <p id="success" style="color:green; display:none;">Success message here</p>

        
        <form method="POST" action="index.html">
            <input type="email" name="email" placeholder="Enter your Email" required>
            <button type="submit">Send OTP</button>
        </form>
    </div>
</body>
</html>
