<?php
    include "db_conn.php";
    session_start();
    $_SESSION['tname'] = $_POST['tname'];
    $_SESSION['bnum'] = $_POST['bnum'];
    $_SESSION['ac'] = $_POST['ac'];
    $_SESSION['link'] = $_POST['link']; 
    $name=$_SESSION['name'];
    $rollno=$_SESSION['rollno'];
    $year=$_SESSION['year'];	
    $branch=$_SESSION['department'];
    $tname=$_SESSION['tname'];
    $bnum=$_SESSION['bnum'];
    $ac=$_SESSION['ac'];
    $link=$_SESSION['link'];

if(isset($_POST['submit'])){
    $sql = "INSERT INTO sproject (Team_Number,Roll_Number,Name,Project_title,academic_year,Drive_link,branch) VALUES ('$bnum','$rollno','$name','$tname','$ac','$link','$branch')";
    // Execute query
    $res=mysqli_query($conn, $sql);
    if($res) {
        echo "<script>alert('Data Uploaded Successfully')</script>";
        header("Location: studentadd.php");
    }else{
        echo "<script>alert('Data not Uploaded')</script>";
    }
      
}
?>