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
  $email=$_POST["email_address"];
  $pass=$_POST["pass"];
  if(empty($email)){
    $errors[] = 'Email id is empty.';
  }
  if(empty($pass)){
    $errors[] = 'Password is empty.';
  }
}


$sql =  "SELECT * from user where email_address='$email' and pass='$pass'" ;
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        header("Location: index.php");
    } else {
        echo 'user not found!';
    }
} else {
    echo 'Error: ' . mysqli_error();
}

$conn->close();
?>