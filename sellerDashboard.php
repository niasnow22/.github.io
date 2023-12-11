<?php
  include 'connect_sql.php';
  $select_sql = "SELECT id,  home_address, size, garden, garage, tax FROM Dashboard";
  $result = $conn->query($select_sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seller Dashboard</title>
  <link rel="stylesheet" href="sellerDash.css">
</head>

<body>
  <h2> Seller's Dashboard</h2>
  <?php
      session_start();
      $username = $_SESSION['username'];
      echo "<h3>Hello,". $username."</h3>";
  ?>
  <div class="cardsWrapper">
    <?php
      if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
          echo '<div class="card">
                  <img src="house1.png" alt="house1">
                  <ul>
                    <li>'. $row["home_address"]. '</li>
                    <li>'. $row["size"]. '</li>
                    <li>'. $row["garden"]. '</li>
                    <li>'. $row["garage"]. '</li>
                    <li>'. $row["tax"]. '</li>
                  </ul>
               </div>';
        }
      } else {
          echo "<br>No data in the table";
      }
    ?>
    <div class="card" id="addPropertyCard">
      <p class="addSymbol">+</p>
      <p>Add new property</p>
    </div>
  </div>
  <script src="sellerDashboard.js"></script>
</body>

</html>