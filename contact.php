<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact us";
// $errors = [];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (!empty($_POST)) {
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $emailid = $_POST['emailid'];
   $message = $_POST['msg'];
  
   if (empty($fname)) {
       $errors[] = 'First name is empty';
   }

   if (empty($lname)) {
       $errors[] = 'Last name is empty';
   }

   if (empty($emailid)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($emailid, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }
}
$sql =  "INSERT INTO contact (fname,lname,emailid,msg)
VALUES ('$fname','$lname', '$emailid','$message')";
if ($conn->query($sql) === TRUE) {
  echo '<script>alert("Thank You!")</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>