<?php 
  session_start();
  if (!isset($_SESSION['username'])) {
  	header('location:index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
  <div class="container">
  <h1>Account Name : <?php echo $_SESSION['username'];?> <br/>Your Current Wallet / Balance : P 999,999,999</h1>
  </div>
  <br>
  <br>
  <a class = "sub" href="logout.php">Logout</a>
</body>
</html>