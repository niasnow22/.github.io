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

/*
// Inserting data into the table
$sql = "INSERT INTO USERS (firstname, lastname, email, username, hashed_password)
VALUES ('Aika', 'Nemoto', 'nemo@gmail.com', 'Peach', 111)";

if ($conn->query($sql) === TRUE) {
    echo "<br>Data inserted successfully";
} else {
    echo "<br>Error inserting data: " . $conn->error;
}
*/
// delete
$sql = "DELETE FROM USERS;";


if ($conn->query($sql) === TRUE) {
    echo "<br>Data deleted successfully";
} else {
    echo "<br>Error inserting data: " . $conn->error;
}

$conn->close();
?>
</body>
</html>
