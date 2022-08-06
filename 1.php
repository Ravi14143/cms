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
    if($pass=="student"){
        header("location:studentdat.php");
    }
    else{
        echo "<script>alert('Invalid username or password')</script>";
    }
        
   }    
   
}
?>
