<?php
  session_start();
  class SaveData 
  { 
  	public $conn;
  	function __construct()
  	{
  		$this->conn = mysqli_connect("localhost","root","","0fe_29163218_mc") or die ('Server error!'); 
  		//echo "Success!";
  	}

  	public function register($username,$password)
  	{
  		mysqli_query($this->conn,"INSERT INTO users (username,password) VALUES ('$username','$password')") or die('Query Error : Register!');
  		echo "User ".$username." Saved!";
  	}


  	public function login($username,$password)
  	{   
  		$query = mysqli_query($this->conn,"SELECT * FROM users WHERE username = '$username' AND password='$password' ") or die('Query Error : Login!');
         
        $count = mysqli_num_rows($query);

        if($count >= 1){
          $_SESSION['username'] = $username;
        	echo "<script>window.location.replace('home.php')</script>";
        }
        else{
        	echo "Username/Password Incorrect!";
        }
  		
  	}
  }