<?php
 $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "book"; 
	
	$message = "Register successful";
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	 $Name = $_POST['name'];

     $email = $_POST['email'];

     $password = $_POST['password'];

     $number = $_POST['number'];

     $address = $_POST['address'];

     $sql = "INSERT INTO signup(name, email, password,number,address) VALUES('$Name','$email','$password','$number','$address')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='customerlogin.html';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>