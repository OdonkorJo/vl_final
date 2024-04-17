<?php
include("action/register_action.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="container">
        <div class="registration">
            <h1>Register to be a Vineyard member</h1>
            <form id="registrationForm" action="../action/register_action.php" method="post" onsubmit="return validateForm()">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>
                
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                    title="Please enter a valid email address">
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                
                <label for="dateOfBirth">Date of Birth:</label>
                <input type="date" id="dateOfBirth" name="dateOfBirth" required>
                
                <input type="hidden" id="registrationDate" name="registrationDate" value="">
                
                <button type="submit" name="registrationForm">Register</button>
            </form>
            <p> Already a member? <a href="login.php">Login</a>.</p>
            <a href="../index.php" class="decorative-button">Go to Home Page</a>
        </div>
        
    </div>
    
    <script>
        // Set registrationDate to current date
        document.getElementById('registrationDate').value = new Date().toISOString().split('T')[0];
    </script>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return false;
            }

            // Here you can add additional validation if needed

            // Redirect to login page after successful registration
            window.location.href = "login.html";
            return true;
        }
    </script>
</body>
</html>
