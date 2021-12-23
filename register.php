<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> User Registration Form </title>
   <link rel="stylesheet" href="register.css">

   <script src="https://kit.fontawesome.com/220d6b62fe.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Poppins:wght@200;300;600&display=swap" rel="stylesheet">
</head>

<?php
include 'connect_db.php'; 

// check if username and email are not in database
// decline if found in database, accept if not found in database
$reg_username = $reg_email = $reg_pass = "";
$err_username_exists = $err_email_exists = "";

// verify request method
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
   $reg_username = $_POST['reg_username'];
   $reg_email = $_POST['reg_email'];
   $reg_password = $_POST['reg_password'];

   // counts the number of usernames in database that are the same with the username inputted
   $username_query = "SELECT COUNT(username) FROM register
                  WHERE username = '$reg_username'";
   // executes the sql query
   $username_res = mysqli_query($conn, $username_query);
   
   // counts the number of email in database that are the same with the email inputted
   $email_query = "SELECT COUNT(email) FROM register
                  WHERE email = '$reg_email'";
   $email_res = mysqli_query($conn, $email_query);

   $count_un = $username_res->fetch_array(MYSQLI_NUM)[0];
   $count_email = $email_res->fetch_array(MYSQLI_NUM)[0];

   // if total count is 0, username and email not yet in database
   if ($count_un > 0 || $count_email > 0) {  
      // if username count is greater than 0, username already used      
      if ($count_un > 0) {
         $err_username_exists = "Username already exists. Try another.";  
      }
      // if email count is greater than 0, email already used
      if ($count_email > 0) {
         $err_email_exists = "Email already used. Try another.";    
      }

   // if the total count is both 0, add user to database
   } else {   
      // creates a password hash for the password
      $pass_hash = password_hash($reg_password, PASSWORD_DEFAULT);
      // creates query to database to add user
      $add_user = "INSERT INTO register (admin, username, email, password) VALUES ('0', '$reg_username', '$reg_email', '$pass_hash')";   
      // submit query
      if ($register_user = mysqli_query($conn, $add_user)) {
         mysqli_close($conn);
         header("Location: register_success.php");    
         die();
      }
   }
}
?>

<body>
   <div class="auth-container" id="register-container">
      <h2> Sign Up </h2>
      <form name="register-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class>
         <div class="form-fields">
            <label for="Username">Username</label>
            <input type="text" name="reg_username" class="text-input" value="<?php echo $reg_username; ?>" required>
            <label for="input-error" class="error-labels" id="err-existing-username"><?php echo $err_username_exists; ?></label>
         </div>
         <div class="form-fields">
            <label for="Email">Email</label>
            <input type="email" name="reg_email" class="text-input" value="<?php echo $reg_email; ?>" required>
            <label for="input-error" class="error-labels" id="err-existing-email"><?php echo $err_email_exists; ?></label>
         </div>
         <div class="form-fields">
            <label for="Password">Password</label>
            <div class="password-wrapper">
               <div class="password-container">
                  <input type="password" id="auth_pass" name="reg_password" class="text-input" oninput="passwordStrengthChecker()" required>
                  <span id="password-toggle" onclick="passwordToggle()">
                     <i class="fas fa-eye"></i>
                  </span>
</div>
<div id="password-check-bar"></div>
</div>
<label for="passwordRequirement">Note: Password must consist of at least 8 characters containing at least 1 capital letter, 1 number, and 1 symbol.</label>
         </div>
         <div>
            <button type="submit" name="register-button" id="register-btn">Register</button>
</div>
        <p> Already a member? <a href="login.php"> Login here.</a>.</p>
      </form>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
   <script src='register.js'></script>
</body>
</html>