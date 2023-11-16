<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fusion Parlor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.roomspicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="parlorbook\css\style.css">
    <style>
      span {
    color: white;
} 
.form{
   border: var(--border);
    margin-left: 527px;
    width: 467px;
    height: 275px;
    margin-top: 40px;
    padding-left: 60px;
}
    </style>
</head>
<body>
<div class="hero-wrap js-fullheight" style="background-image: url('images/banner5.png');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          	<div class="icon">
          		<a href="home.php" class="logo">
          		<span class="flaticon-flower"></span>
          			<h1>Fusion</h1>
          		</a>
          	</div>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Beauty Parlor</h1>
            <!-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a href="#">Colorlib.com</a></p> -->

            <!-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3">View Our Services</a></p> -->
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.php">Fusion Parlor</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="work.html" class="nav-link">Work</a></li>
	          <li class="nav-item"><a href="mybooking.php" class="nav-link">MyBookings</a></li>
			  <li class="nav-item"><a href="chat_app.php" class="nav-link">Chat</a></li>
			  <li class="nav-item"><a href="booknow.php" class="nav-link">Book Now</a></li>
			  <li class="nav-item"><a href="parlorbook\admin\login.php" class="nav-link">Admin</a></li>
			  <li class="nav-item"><a href="commonhome.html" class="nav-link">Log Out</a></li>
	        </ul>
	      </div>
         
	    </div>
	  </nav>
     <?php
        // Database connection
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'book';

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $name=$_SESSION['name'];
        // Query to select all images from the table
        $sql = "SELECT * from bookings where name='$name'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data
                $name = $row['name'];
                $email = $row['email'];
                $number = $row['number'];
                $rooms = $row['rooms'];
                $check_in = $row['check_in'];
                $persons = $row['persons'];

              
             
                
                echo '<div class="box-container">';
               echo'<form action="" style="border: var(--border);
               margin-left: 527px;
               width: 467px;
               height: 357px;
               margin-top: 40px;
               padding-left: 60px;
               padding-top: 49px;">';
            //    echo '<img src="d1.png" width="50" height="50">';
               echo '<h2>Name <span class="name">: '. $name .'</span></h2>';
               echo '<h2>Email <span class="email">: '. $email .'</span></h2>';
               echo '<h2>number name<span class="number">: '.$number.'</span></h2>';
               echo '<h2>Time <span class="rooms">: '.$rooms.'</span> </h2>';
               echo '<h2>Date<span class="check_in">: '.$check_in.'</span> </h2>';
               echo '<h2>persons <span class="persons">: '.$persons.'</span></h2>';
              echo ' <a href="payment.php"> <button class="btn" onclick="listView()">Place Order</button></a>';

               echo '</div>';
               echo '</div>';
               echo '</div>';
               echo '</form></div> <br><br>';
              
            }
        } else {
            echo 'No data found in the table.';
        }

        $conn->close();
        ?>
</body>
</html>



   





