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

echo "<h1>User infomation</h1>";

// Selecting data from the user table
$select_sql = "SELECT id, firstname, lastname, email, username, hashed_password FROM USERS";
$result = $conn->query($select_sql);

if ($result->num_rows > 0) {
    echo "<br><br><table border='1'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>email</th><th>uername</th><th>hashed_password</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["username"] . "</td><td>" . $row["hashed_password"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "<br>No data in the table";
}

echo "<h1>Dashboard infomation</h1>";

// Selecting data from the dahboard table
$select_sql = "SELECT id, username, home_address, size, garden, garage, tax FROM Dashboard";
$result = $conn->query($select_sql);

if ($result->num_rows > 0) {
    echo "<br><br><table border='1'><tr><th>ID</th><th>username</th><th>home_address</th><th>size</th><th>garden</th><th>garage</th><th>tax</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["home_address"] . "</td><td>" . $row["size"] . "</td><td>" . $row["garden"] . "</td><td>" . $row["garage"] . "</td><td>" . $row["tax"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "<br>No data in the table";
}

$conn->close();
?>
</body>
</html>
