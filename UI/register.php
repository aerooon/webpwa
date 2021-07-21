<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#009578">
    <link rel="manifest" href="./manifest.webmanifest">
    <link rel="apple-touch-icon" href="./192.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="description" 
    content="This is an example of a meta description. 
    This will often show up in search results.">
   <link rel="stylesheet" href="register.css">
</head>
<body>
  <?php
      if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['cpassword']))
      {
         if($_POST['password'] == $_POST['cpassword'])
         {
            $username = $_POST['username'];
            $password = $_POST['password'];

            include 'control.php';
            $save = new SaveData();
            $save->register($username,$password);
         }
         else{
          echo "Password not match!";
         }
      }
  ?>
     <div class="center">
     <h1>New Account</h1>
  	 <legend>Enter your credentials</legend>
  	 <form action ="register.php" method="POST">
  	 	<div class="txt_field">
            <input type="text" name="username" placeholder="Username" required="">
      </div>
      <div class="txt_field">
  	 	<input type="password" name="password" placeholder="Password" required="">
         </div>
      <div class="txt_field">
      <input type="password" name="cpassword" placeholder="Confirm Password" required="">
      </div>
  	 	<input class = "sub" type="submit" value="Register">
  	 </form>
      <a class = "enter" href="index.php">Sign In?</a>
      </div>

</body>
</html>