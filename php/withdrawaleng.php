
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
  $_SESSION['cash']=$_POST['cash'];
}
$query = mysqli_query($conn,"SELECT * FROM card");
    while($row = $query->fetch_assoc()) {
        if ($_SESSION['ime'] == $row["Name"] && $_SESSION['cvv'] == $row["CVV"] && $_SESSION['card'] == $row["Card_Number"] && $_SESSION['mjesec'] == $row["Month"] && $_SESSION['godina'] == $row["Year"] && $_SESSION['pin'] == $row["PIN"]) {
          $updatedamount = $row["Balance"] - $_SESSION['cash'];
          if ($updatedamount < 0) {
            header("Location: http://localhost/htmlweb2/pages/errorwithdrawal.html");
            die();
          }
          else{
          $sql =  "UPDATE card SET Balance = ".$updatedamount." WHERE Card_Number='".$_SESSION['card']."'  ";
          if(mysqli_query($conn, $sql)){

          } else {
              echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($conn);
          }
          header("Location: http://localhost/htmlweb2/pages/balancebos.php");
          die();
          }
        }
        else{
          header("Location: http://localhost/htmlweb2/pages/errorwithdrawal.html");
          die();
        }
    }
 ?>
