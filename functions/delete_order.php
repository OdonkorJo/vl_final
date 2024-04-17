<?php
include "../action/order_action.php";

// Check if index is provided in the URL
if(isset($_GET['index'])) {
    // Get the index of the order to delete
    $index = $_GET['index'];
    
    // Check if the index exists in the session array
    if(isset($_SESSION['orders'][$index])) {
        // Remove the order at the specified index
        unset($_SESSION['orders'][$index]);
    }
}

// Redirect back to the page where the orders are displayed
header("Location: ".$_SERVER['HTTP_REFERER']);
exit;
?>