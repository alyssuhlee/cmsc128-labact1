<?php session_start();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> User Log In Page </title>
   <link rel="stylesheet" href="login.css">

   <script src="https://kit.fontawesome.com/220d6b62fe.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Poppins:wght@200;300;600&display=swap" rel="stylesheet">
</head>
<?php
include 'connect_db.php';     

$login_user = $login_pass =  NULL; 
$err_invalid_username = $err_invalid_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $login_user = $_POST['login_username'];
   $login_pass = $_POST['login_password'];

   $user_query = "SELECT `username`, `email`, `password` FROM `register`
                     WHERE `username` = '$login_user' or `email` = '$login_user'";
   $user = $conn->query($user_query);

   $user_arr = $user->fetch_array(MYSQLI_ASSOC);

   if (!isset($user_arr)) {      
      $err_invalid_username = "Can't find username/email. Please try again.";    

   } else if (password_verify($login_pass, $user_arr['password'])) {    
      $err_invalid_username = $err_invalid_password = "";   

      $_SESSION['username'] = $user_arr['username'];  
      $_SESSION['last_login_timestamp'] = time();  

      $conn->close();
      header("Location: homepage.php");
      die();

   } else {    
      $err_invalid_password = "Invalid password. Please try again.";    
}
}
?>
<body>

   <div class="auth-container">
      <h2>Log In</h2>

      <form name="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <div class="form-fields">
            <label for="Username">Username or email</label>
            <input type="text" name="login_username" class="text-input" required>
            <label for="input-error" class="error-labels" id="err-invalid-username">
               <?php echo $err_invalid_username ?>
            </label>
         </div>
         <div class="form-fields">
            <label for="Password">Password</label>
            <div class="password-wrapper">
               <div class="password-container">
                  <input type="password" id="auth_pass" name="login_password" class= "text-input" required>
                  <span id="password-toggle" onclick="passwordToggle()">
                     <i class="fas fa-eye"></i>
                  </span>
               </div>
            </div>
            <label for="input-error" class="error-labels" id="err-invalid-password">
               <?php echo $err_invalid_password ?>
            </label>
         </div>
         <div>
            <button type="submit" name="login-button" id="login-btn">Login</button>
         </div>
         <p>Not a member? <a href="register.php">Sign up now</a>.</p>
      </form>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
   <script src='register.js'></script>
</body>
</html>