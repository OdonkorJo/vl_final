<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Ordered Juice Items</title> 
    <link rel="stylesheet" href="../css/order.css">
</head> 
<body>
    <h1>Ordered Juice Items</h1>
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Example PHP function to retrieve ordered juice items
            function getOrderedJuices() {
                // This is just an example. You need to implement your logic to fetch ordered juice items
                return array(
                    array("Apple Juice", 2, 10.50),
                    array("Orange Juice", 1, 9.25),
                    array("Pineapple Juice", 3, 11.75)
                );
            }

            // Get ordered juice items
            $orderedJuices = getOrderedJuices();

            // Display ordered juice items in table rows
            foreach ($orderedJuices as $juice) {
                echo "<tr>";
                echo "<td>{$juice[0]}</td>";
                echo "<td>{$juice[1]}</td>";
                echo "<td>{$juice[2]}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body> 
</html>
