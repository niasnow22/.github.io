<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'connect_sql.php';

// Inserting data into the dashboard table
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST request
    $address = $_POST["address"];
    $size = $_POST["size"]; // Assuming 'size' is a string
    $garden = $_POST["garden"].'Garden';
    $garage = $_POST["garage"].'Car Garage';
    $tax = $_POST["tax"]; // Assuming 'tax' is a string

    session_start();
    $username = $_SESSION['username'];
    // Prepare SQL statement
    $sql = $conn->prepare("INSERT INTO Dashboard (username, home_address, size, garden, garage, tax) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssss", $username, $address, $size, $garden, $garage, $tax);

    // Execute and provide feedback
    if ($sql->execute()) {
        echo "<p>Dashboard data added successfully.</p>";
    } else {
        echo "<br>Error inserting data: " . $conn->error;
    }

    // Close the statement and connection
    $sql->close();
} else {
    echo "Data not processed";
}

$conn->close();
?>
<a href="sellerDashboard.php">You can go back from here!</a>
</body>
</html>
