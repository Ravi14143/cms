<?php
  $conn=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($conn,"cms");
  if(!$conn){
      echo "<script>alert('connection failed');</script>";
  }

?>