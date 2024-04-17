<?php
// include a connection file
include "../Settings/connection.php";

// collection of form data
if(isset($_POST["registrationForm"])){
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $email = $_POST["email"];
    $dob = $_POST["dateOfBirth"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmPassword"];
    
    if($password != $confirmpassword){
        header("Location:../View/register.php");
        exit();
    }
     
    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

    $sql_query = "INSERT INTO Customer (firstName, lastName, email, userPassword, dateOfBirth, registrationDate) VALUES ('$first_name','$last_name', '$email', '$encrypted_password', '$dob', NOW())";

    if ($con->query($sql_query) === true) {
        // redirect to login page
        header("Location:../View/login.php");
    } 
    else {
        // echo error 
        header("Location:../login/register.php");
        echo "Error: " . $con->error;
    }

    // close database connection
    $con->close();
}
?>
