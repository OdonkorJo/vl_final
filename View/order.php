<?php
include "../Settings/core.php";
isLoggedIn();

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch juices from the database
$sql = "SELECT juiceID, juiceName, storageInstructions, price FROM Juice";
$result = $conn->query($sql);

// Check if any juices were found
if ($result->num_rows > 0) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Cart</title>
    <link rel="stylesheet" href="../css/order.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Order Cart</h1>
            <nav>
                <a href="home.php">Home</a>
                <a href="login.php">Logout</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <table>
                <tr>
                    <th>Juice Name</th>
                    <th>Storage Instructions</th>
                    <th>Price</th>
                </tr>
                <?php
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["juiceName"] . "</td>
                            <td>" . $row["storageInstructions"] . "</td>
                            <td>GHS " . $row["price"] . "</td>
                        </tr>";
                }
                ?>
            </table>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 The Vineyard Lodge. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

<?php
} else {
    echo "No juices found.";
}

$conn->close();
?>