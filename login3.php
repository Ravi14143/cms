<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="icon2.png">
	<title>CERTIFICATE MAINTANCE SYSTEM</title>
	<link rel="stylesheet" href="style1.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="loginb.svg">
		</div>
		<div class="login-content">
			<form method="post" action="">
				<img src="profile.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" required>
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Login" name="submit">
            </form>
        </div>
    </div>
    <script src="mainl.js"></script>


</body>
</html>

<?php
include "db_conn.php";
if(isset($_POST['submit'])){
    session_start();
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    $uname=$_SESSION['username'];
	$pass=$_SESSION['password'];
    $query="select * from login where username='$uname' and password='$pass'";
    $result=mysqli_query($conn,$query);
   if($result){
    if($pass=="admin"){
        header("location:admin.php");
    }
    else{
        echo "<script>alert('Invalid username or password')</script>";
    }
        
   }    
   
}
?>