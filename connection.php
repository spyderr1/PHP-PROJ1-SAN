<?php
 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $pass = $_POST['pass'];
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "santhosh";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registration (firstName,lastName,pass,mobile,email,gender)
VALUES ('$firstName','$lastName','$pass','$mobile','$email','$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>