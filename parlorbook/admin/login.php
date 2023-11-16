<?php
session_start();
include '../components/connect.php';

if(isset($_POST['submit'])){


   $name = $_POST['name'];
   $pass = $_POST['pass'];

   $select_admins = $conn->prepare("SELECT * FROM `admins` WHERE name = '".$name."' AND password = '".$pass."' ");
   $select_admins->execute();
   $row = $select_admins->fetchAll(PDO::FETCH_ASSOC);

   
   if($select_admins->rowCount() > 0){
      setcookie('admin_id', $row[0]['id'], time() + 60*60*24*30, '/');
      $_SESSION["aid"] = $row[0]["id"];
      $_SESSION['auser'] = $row[0]['name'];
     

    

      header('location: dashboard.php');
   }else{
      $warning_msg[] = 'Incorrect username or password!';
      
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link  rel="stylesheet" href="scss\style.scss">
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

<!-- login section starts  -->
<body >
   <div style="justify-content:center; text-align:center;">
   <img src="../images/commonhome.png"  alt="">
   </div>

<section class="form-container" style="margin-top:-200px;" >

   
   <form action="" method="POST">
      <h3>welcome back!</h3>
      <input type="text" name="name" placeholder="enter username" maxlength="20" class="box" required >
      <input type="password" name="pass" placeholder="enter password" maxlength="20" class="box" required >
      <input type="submit" value="login now" name="submit" class="btn">
      <div class="signup-link" style="
    margin-top: 21px;
">Already a member? <a href="register.php">Signup now</a></div>
   </form>

</section>

<!-- login section ends -->


















<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include '../components/message.php'; ?>

</body>
</html>