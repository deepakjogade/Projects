<?php
//connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email =$_POST['email'];
$password=$_POST['pass'];
$type=2;
//insert query
$sql = "INSERT INTO cms_user(first_name, last_name, email)VALUES ($fname, $lname, $email,)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//signup successfully message you can login now with your details
?>