<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link your CSS file here if needed -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php
    include 'connect_sql.php'; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

   
        $sql = $conn->prepare("SELECT hashed_password FROM USERS WHERE username = ?");
        $sql->bind_param("s", $username);
        $sql->execute();
        $sql->store_result();

    
        if ($sql->num_rows > 0) {
            $sql->bind_result($hashed_password);
            $sql->fetch();

            
            if (password_verify($password, $hashed_password)) {
                //echo "<p>Login successful! Welcome back, " . $username . "!</p>";
                //Session
                session_start();
                $_SESSION['username'] = $username;

                header("Location: sellerDashboard.php");
                exit(); 
            } else {
                echo "<p>Login failed. Incorrect password.</p>";
            }
        } else {
            echo "<p>Login failed. User not found.</p>";
        }

        $sql->close();
    }
    ?>
    <section>
        <h2>Login</h2>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </section>
</body>
</html>
