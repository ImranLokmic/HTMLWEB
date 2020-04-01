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
  $_SESSION['ime']=$_POST['ime'] ;
  $_SESSION['cvv']=$_POST['cvv'];
  $_SESSION['card']=$_POST['card'];
  $_SESSION['mjesec']=$_POST['mjesec'];
  $_SESSION['godina']=$_POST['godina'];
}
$query = mysqli_query($conn,"SELECT * FROM card");
    while($row = $query->fetch_assoc()) {
        if ($_SESSION['ime'] == $row["Name"] && $_SESSION['cvv'] == $row["CVV"] && $_SESSION['card'] == $row["Card_Number"] && $_SESSION['mjesec'] == $row["Month"] && $_SESSION['godina'] == $row["Year"]) {
          header("Location: http://localhost/htmlweb2/pages/pineng.html");
          die();
        }
        else{
          header("Location: http://localhost/htmlweb2/pages/errorcard.html");
          die();
        }
    }
 ?>
