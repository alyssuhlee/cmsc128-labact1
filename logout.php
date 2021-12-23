<?php
session_start(); 

$notify_logout = "You have been logged out of the system.";
if (isset($_SESSION['inactive_user'])) {  
   $notify_logout = "The session has expired due to inactivity."; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="lo.css">

   <script src="https://kit.fontawesome.com/220d6b62fe.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Poppins:wght@200;300;600&display=swap" rel="stylesheet">
</head>

<body>

   <div class="logout-message">
      <h3><?php echo $notify_logout; ?></h3>
      <br>
      <img src="logout-icon.jpg" alt="Logout Icon">
      <p>If you want to enter in the system again, </p>
      <p><a href="login.php">click here.</a></p>
   </div>

   <?php
   $_SESSION = array();    
   session_destroy();   
   ?>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
   <script src='register.js'></script>
</body>
</html>