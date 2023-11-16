<!DOCTYPE html>
<html lang="en">
  <head>
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
    <!-- END nav -->
    <section class="availability" id="availability" style="color:#fa5bdda1">
	<h2 class="mb-4" style="
    margin-left: 496px;
    font-weight: 700;
">Check Availability</h2>
		<form action="" method="post" style="border: var(--border);
		 padding: 2rem;">
		   <div class="flex">
			  <div class="box">
				 <p>check in <span>*</span></p>
				 <input type="date" name="check_in" class="input" required>
			  </div>
			  <div class="box">
				 <p>Person<span>*</span></p>
				 <select name="person" class="input" required>
					<option value="1">1 person</option>
					<option value="2">2 persons</option>
					<option value="3">3 persons</option>
					<option value="4">4 persons</option>
					<option value="5">5 persons</option>
					<option value="6">6 persons</option>
				 </select>
			  </div>
			  <div class="box">
				 <p>Time <span>*</span></p>
				 <select name="rooms" class="input" required>
				 <option value="1" selected>Choose</option>
					<option value="2">8:00-9:00</option>
					<option value="2">9:00-10:00</option>
					<option value="2">10:00-11:00</option>
					<option value="2">11:00-12:00</option>
					<option value="2">12:00-13:00</option>
					<option value="2">14:00-15:00</option>
					<option value="2">15:00-16:00</option>
					<option value="2">16:00-17:00</option>
					<option value="2">17:00-18:00</option>
					<option value="2">18:00-19:00</option>
					<option value="2">19:00-20:00</option>
				 </select>
			  </div>
		   </div>
		   <input type="submit" value="check availability" name="check" class="btn">
		</form>
       
	 </section>
	 
     <!-- reservation -->
	 
     <section class="reservation" id="reservation">

<form action="" method="post">
   <h3>make a reservation</h3>
   <div class="flex">
      <div class="box">
         <p>your name <span>*</span></p>
         <input type="text" name="name" maxlength="50" required placeholder="enter your name" class="input">
      </div>
      <div class="box">
         <p>your email <span>*</span></p>
         <input type="email" name="email" maxlength="50" required placeholder="enter your email" class="input">
      </div>
      <div class="box">
         <p>your number <span>*</span></p>
         <input type="number" name="number" maxlength="10" min="0" max="9999999999" required placeholder="enter your number" class="input">
      </div>
      <div class="box">
         <p>Time<span>*</span></p>
         <select name="rooms" class="input" required>
            <option  selected>Choose</option>
            <option >8:00-9:00</option>
            <option >9:00-10:00</option>
            <option >10:00-11:00</option>
            <option >11:00-12:00</option>
            <option >12:00-13:00</option>
            <option >14:00-15:00</option>
            <option >15:00-16:00</option>
            <option >16:00-17:00</option>
            <option >17:00-18:00</option>
            <option >18:00-19:00</option>
            <option >19:00-20:00</option>
         </select>
      </div>
      <div class="box">
         <p>Date<span>*</span></p>
         <input type="date" name="check_in" class="input" required>
      </div>
    
      <div class="box">
         <p>persons <span>*</span></p>
         <select name="persons" class="input" required>
            <option  selected>1 person</option>
            <option >2 persons</option>
            <option >3 persons</option>
            <option >4 persons</option>
            <option >5 persons</option>
            <option >6 persons</option>
         </select>
      </div>
   <input type="submit" value="book now" name="book" class="btn">
</form>

</section>
   
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.roomspicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script>
<script>swal("slots are available", "" ,"success");</script>

<!-- <script>swal("slots booked successfully!", "" ,"success");</script> -->
  </body>
</html>
<?php

include 'parlorbook\components\connect.php';


if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   setcookie('user_id', create_unique_id(), time() + 60*60*24*30, '/');
  
}

if(isset($_POST['check'])){

   $check_in = $_POST['check_in'];
   $check_in = filter_var($check_in, FILTER_SANITIZE_STRING);

   $total_rooms = 0;

   $check_bookings = $conn->prepare("SELECT * FROM `bookings` WHERE check_in = ?");
   $check_bookings->execute([$check_in]);

   while($fetch_bookings = $check_bookings->fetch(PDO::FETCH_ASSOC)){
      $total_rooms += $fetch_bookings['rooms'];
   }

   // if the hotel has total 30 rooms 
   if($total_rooms >= 12){
      $warning_msg[] = 'slots are not available';
   }else{
      $success_msg[] = 'slots are available';
   }

}


if(isset($_POST['book'])){

    $booking_id = create_unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $rooms = $_POST['rooms'];
    $rooms = filter_var($rooms, FILTER_SANITIZE_STRING);
    $check_in = $_POST['check_in'];
    $check_in = filter_var($check_in, FILTER_SANITIZE_STRING);
    $persons = $_POST['persons'];
    $persons = filter_var($persons, FILTER_SANITIZE_STRING);
 
    $total_rooms = 0;
 
    $check_bookings = $conn->prepare("SELECT * FROM `bookings` WHERE check_in = ?");
    $check_bookings->execute([$check_in]);
 
    while($fetch_bookings = $check_bookings->fetch(PDO::FETCH_ASSOC)){
       $total_rooms += $fetch_bookings['rooms'];
    }
 
    if($total_rooms >= 12){
       $warning_msg[] = 'slots are not available';
    }else{
 
       $verify_bookings = $conn->prepare("SELECT * FROM `bookings` WHERE user_id = ? AND name = ? AND email = ? AND number = ? AND rooms = ? AND check_in = ? AND persons = ?");
       $verify_bookings->execute([$user_id, $name, $email, $number, $rooms, $check_in,$persons]);
 
       if($verify_bookings->rowCount() > 0){
          $warning_msg[] = 'slots booked alredy!';
       }else{
          $book_rooms = $conn->prepare("INSERT INTO `bookings`(booking_id, user_id, name, email, number, rooms, check_in, persons) VALUES(?,?,?,?,?,?,?,?)");
          $book_rooms->execute([$booking_id, $user_id, $name, $email, $number, $rooms, $check_in, $persons]);
          $success_msg[] = 'slots booked successfully!';
       }
 
    }
 
 }
?>

