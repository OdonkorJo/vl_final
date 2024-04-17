<?php
// Initialize total price
$totalPrice = 0;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are set
    if (isset($_POST['juiceName']) && isset($_POST['juicePrice'])) {
        // Collect the juice details
        $juiceName = $_POST['juiceName'];
        $juicePrice = $_POST['juicePrice'];

        // Check if there are existing orders in the session
        session_start();
        if (!isset($_SESSION['orders'])) {
            // If no existing orders, initialize an empty array
            $_SESSION['orders'] = array();
        }

        // Append the new order to the existing orders
        $_SESSION['orders'][] = array('name' => $juiceName, 'price' => $juicePrice);

        // Calculate total price
        foreach ($_SESSION['orders'] as $order) {
            $totalPrice += $order['price'];
        }

        // Display the updated orders and total price
        echo "<h2>Updated Orders:</h2>";
        foreach ($_SESSION['orders'] as $index => $order) {
            echo "<p>{$order['name']} - GHS {$order['price']} <button onclick=\"deleteOrder($index)\">Delete</button></p>";
        }
        echo "<p>Total Price: GHS {$totalPrice}</p>";

        // Add a button to go back to the previous page
        echo '<button onclick="goBack()">Go Back</button>';

        // JavaScript function to go back
        echo '<script>
                function goBack() {
                    window.history.back();
                }
              </script>';
    } else {
        // Handle the case where required fields are not set
        echo "Error: Required fields are not set.";
    }
} else {
    // Handle the case where the form is not submitted
    echo "Error: Form not submitted.";
}
?>

<script>
    function deleteOrder(index) {
        // Send index of the order to delete to the action file
        window.location.href = 'delete_order.php?index=' + index;
    }
</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are set
    if (isset($_POST['nameOfJuice']) && isset($_POST['dateOfDelivery']) && isset($_POST['ingredient'])) {
        // Collect the form data
        $juiceName = $_POST['nameOfJuice'];
        $deliveryDate = $_POST['dateOfDelivery'];
        $selectedIngredients = implode(', ', $_POST['ingredient']); // Convert array to string
        
        // Display the collected data
        echo "<h2>Order Details:</h2>";
        echo "<p><strong>Name of Juice:</strong> $juiceName</p>";
        echo "<p><strong>Selected Ingredients:</strong> $selectedIngredients</p>";
        echo "<p><strong>Date of Delivery:</strong> $deliveryDate</p>";
    } else {
        // Handle the case where required fields are not set
        echo "Error: Required fields are not set.";
    }
} else {
    // Handle the case where the form is not submitted
    echo "Error: Form not submitted.";
}
?>



<!-- <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are set
    if (isset($_POST['juiceName']) && isset($_POST['juicePrice'])) {
        // Collect the juice details
        $juiceName = $_POST['juiceName'];
        $juicePrice = $_POST['juicePrice'];

        // Check if there are existing orders in the session
        session_start();
        if (!isset($_SESSION['orders'])) {
            // If no existing orders, initialize an empty array
            $_SESSION['orders'] = array();
        }

        // Append the new order to the existing orders
        $_SESSION['orders'][] = array('name' => $juiceName, 'price' => $juicePrice);

        // Display the updated orders
        echo "<h2>Updated Orders:</h2>";
        foreach ($_SESSION['orders'] as $order) {
            echo "<p>{$order['name']} - GHS {$order['price']}</p>";
        }

        // Add a button to go back to the previous page
        echo '<button onclick="goBack()">Go Back</button>';

        // JavaScript function to go back
        echo '<script>
                function goBack() {
                    window.history.back();
                }
              </script>';
    } else {
        // Handle the case where required fields are not set
        echo "Error: Required fields are not set.";
    }
} else {
    // Handle the case where the form is not submitted
    echo "Error: Form not submitted.";
}
?> -->

