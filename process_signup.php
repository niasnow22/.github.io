<?php
include 'connect_sql.php';

// Inserting data into the table

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = $conn->prepare("INSERT INTO USERS (firstname, lastname, email, username, hashed_password)
                            VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss", $firstName, $lastName, $email, $username, $password);

    if ($sql->execute()) {
        echo "<p>Sign up successful! Hello " . $username . ".</p>";
        echo "<a href='login.php'>Now you can log in from here!</a>";
    } else {
        echo "<br>Error inserting data: " . $conn->error;
    }

    $sql->close();
} else {
    echo "not processed";
}

$conn->close();
?>
