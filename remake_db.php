<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENTS Table</title>
</head>
<body>
<?php
include 'connect_sql.php';

// delete dashboard table
$sql = "DELETE FROM Dashboard;";

if ($conn->query($sql) === TRUE) {
    echo "<br>Data deleted successfully";
} else {
    echo "<br>Error inserting data: " . $conn->error;
}

// create Users table
$sql = "CREATE TABLE IF NOT EXISTS USERS (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    hashed_password VARCHAR(128) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Inserting  first data into the user table
$sql = "INSERT INTO USERS (firstname, lastname, email, username, hashed_password)
VALUES ('Shota', 'Osada', 'osd@gmail.com', 'Shota', 111)";

if ($conn->query($sql) === TRUE) {
    echo "<br>Insert first data in the Users";
} else {
    echo "<br>Error inserting data: " . $conn->error;
}

// create dashboard table
$sql = "CREATE TABLE IF NOT EXISTS Dashboard(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    home_address VARCHAR(100) NOT NULL,
    size VARCHAR(30) NOT NULL,
    garden VARCHAR(30) NOT NULL,
    garage VARCHAR(30) NOT NULL,
    tax VARCHAR(30) NOT NULL)";

if ($conn->query($sql) === TRUE) {
    echo "<br>Table Dashboard created successfully";
}
else {
    echo "<br>Error creating table: " . $conn->error;
}

// insert first data into the dashboard table
$sql ="INSERT INTO Dashboard (username, home_address, size, garden, garage, tax)
VALUES ('Shilpa', '8060 Preservation Drive Alpharetta, GA 30005', '4,211 SqFt', 'Large Garden', '3 Car Garage', '\$7,283 Property Tax')";
if ($conn->query($sql) === TRUE) {
    echo "<br>Insert first data in the Dashboard";
}
else {
    echo "<br>Error inserting table: " . $conn->error;
}

$conn->close();
?>
</body>
</html>
