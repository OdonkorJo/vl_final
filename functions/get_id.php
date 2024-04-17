<?php
include "../settings/connection.php";

function getOrderedJuiceIds($userId) {
    global $conn;

    // Prepare the SQL query
    $sql = "SELECT juiceID FROM OrderTable WHERE userID = ?";
    $stmt = $conn->prepare($sql);

    // Bind the user ID parameter
    $stmt->bind_param("i", $userId);

    // Execute the query
    $stmt->execute();

    // Get the result set
    $result = $stmt->get_result();

    // Initialize an array to store the juice IDs
    $juiceIds = array();

    // Loop through the result set and add the juice IDs to the array
    while ($row = $result->fetch_assoc()) {
        $juiceIds[] = $row['juiceID'];
    }

    // Close the statement
    $stmt->close();

    return $juiceIds;
}
?>