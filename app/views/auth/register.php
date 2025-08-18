<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <div class="auth-container">
        <h2>Register</h2>
        
       
        <p style="color: red;">Error message will appear here</p>
        
      
        <p style="color: green;">Success message will appear here</p>

        <form action="index.php?url=auth/handleRegister" method="POST">
            <input type="text" name="name" placeholder="Enter Full Name" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="text" name="phone_number" placeholder="Enter Phone Number" required>
            <textarea name="address" placeholder="Enter Address"></textarea>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit" name="register">Register</button>
        </form>

        <p>Already have an account? <a href="index.php?url=auth/login">Login here</a></p>
    </div>
</body>
</html>
