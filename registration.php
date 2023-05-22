<!-- database connection using mysqli object oriented method -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(!empty($_POST)){
  $full_name=$_POST["full_name"];
  $email=$_POST["email_address"];
  $pass=$_POST["pass"];
}


$sql =  "INSERT INTO user (full_name, email_address,pass)
VALUES ('$full_name', '$email', '$pass')";
if ($conn->query($sql) === TRUE) {
  echo '<script>alert("You have registered successfully")</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>