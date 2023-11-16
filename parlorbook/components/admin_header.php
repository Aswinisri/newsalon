<header class="header">

   <section class="flex">

      <a href="dashboard.php" class="logo">AdminPanel.</a>

      <nav class="navbar">
         <a href="dashboard.php">home</a>
         <a href="bookings.php">bookings</a>
         <a href="admins.php">admins</a>
         <a href="admin_chat.php">chat</a>
         <a href="register.php">register</a>
         <a href="login.php">login</a>
         <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');">logout</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>
   <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>


</header>