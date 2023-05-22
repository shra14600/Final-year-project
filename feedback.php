<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (!empty($_POST)) {
   $f_name = $_POST["f_name"];
   $email = $_POST["email"];
   $detail = $_POST["detail"];
}
$sql =  "INSERT INTO feedback (f_name,email,detail)
VALUES ('$f_name', '$email','$detail')";
if ($conn->query($sql) === TRUE) {
  echo '<script>alert("Thank You for feedback!")</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>