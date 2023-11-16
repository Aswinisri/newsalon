<?php

session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

	  $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    //change DB name 
    $dbname = "book"; 
	
	
// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	  
	 $sql = "SELECT * from signup where email = '$email' AND password = '$password'";  
	 


// Execute the query
$result = $conn->query($sql);
$message = 'Login Successfully';
// Check if a user with the given credentials exists
// $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
	
	
	
	 if (mysqli_num_rows($result) == 1) {
		 
        $_SESSION["name"] = $row["name"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["id"] = $row["id"];

    
			
			  echo "<script type='text/javascript'>alert('$message');window.location.href='home.php';</script>";
//            header("Location: lawyer_register.php");
	//					$_SESSION["firstname"] = $name;
	

       }  else {





			echo "<script type='text/javascript'>alert('$message');window.location.href='home.php';</script>";
		//	$_SESSION["firstname"] = $name;
        
			$_SESSION["name"] = $row["name"];
			$_SESSION["email"] = $row["email"];
			
		        }
    } else {
		
		

//     header("location:http://localhost/agrishop/login.php?loginerror=".$email);

echo "<script type='text/javascript'>alert('$message');window.location.href='customerlogin.html';</script>";
        
    }





?>