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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $_SESSION['pin']=$_POST['pin'];
}
$query = mysqli_query($conn,"SELECT * FROM card");
    while($row = $query->fetch_assoc()) {
        if ($_SESSION['ime'] == $row["Name"] && $_SESSION['cvv'] == $row["CVV"] && $_SESSION['card'] == $row["Card_Number"] && $_SESSION['mjesec'] == $row["Month"] && $_SESSION['godina'] == $row["Year"] && $_SESSION['pin'] == $row["PIN"]) {
          header("Location: http://localhost/htmlweb2/pages/menueng.html");
          die();
        }
        else{
          header("Location: http://localhost/htmlweb2/pages/errorpin.html");
          die();
        }
    }
echo $_SESSION['pin'];
 ?>
