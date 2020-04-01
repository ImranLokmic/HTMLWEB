<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  $query = mysqli_query($conn,"SELECT * FROM card");
?>
<!DOCTYPE html>
<html lang="ba" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/balance.css">
  </head>
  <body>
    <a href="../index.html">
    <img src="../img/index/banklogo.png" class="logo">
    </a>
    <div class="smallscreen">
      <img src="../img/warning.svg" height="80px">
      <h1>Širina ekrana je premala!</h1>
    </div>
    <div class="container">
        <h1>Stanje na računu iznosi:
        <?php while($row = $query->fetch_assoc()) {
            if ($_SESSION['ime'] == $row["Name"] && $_SESSION['cvv'] == $row["CVV"] && $_SESSION['card'] == $row["Card_Number"] && $_SESSION['mjesec'] == $row["Month"] && $_SESSION['godina'] == $row["Year"] && $_SESSION['pin'] == $row["PIN"]) {
               echo $row["Balance"];
        }
      }
        ?>
        </h1>
    </div>
  </body>
</html>
