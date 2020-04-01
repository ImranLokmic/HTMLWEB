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
  $ime=$_POST['ime'] ;
  $cvv=$_POST['cvv'];
  $card=$_POST['card'];
  $mjesec=$_POST['mjesec'];
  $godina=$_POST['godina'];
}
$query = mysqli_query($conn,"SELECT * FROM card");
    while($row = $query->fetch_assoc()) {
        if ($ime == $row["Name"] && $cvv == $row["CVV"] && $card == $row["Card_Number"] && $mjesec == $row["Month"] && $godina == $row["Year"]) {
          //echo $row["Name"];
          header("Location: http://localhost/htmlweb2/pages/pineng.html");
          die();
        }
        else{
          header("Location: http://localhost/htmlweb2/pages/errorcard.html");
          die();
        }
    }
 ?>
