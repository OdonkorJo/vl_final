
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vineyard Lodge Login</title>
    <link rel="stylesheet" href="../css/login_css.css">
</head>
<body>
    <div class="container">
        <h1> Vineyard Lodge</h1>
        <form id="loginForm" action="../action/login_action.php" method="post">
            <label for="username">Email:</label>
            <input type="text" id="username" name="username" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Please enter a valid email address">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="submit" onclick = "login()">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        <a href="../index.php" class="decorative-button">Go to Home Page</a>
        <div></div>
    </div>
</body>

</html>
