<?php
    include "db_conn.php";
    session_start();
    $_SESSION['ni'] = $_POST['ni'];
    $_SESSION['nc'] = $_POST['nc'];
    $_SESSION['sd'] = $_POST['sd'];
    $_SESSION['ed'] = $_POST['ed'];
    $_SESSION['ay'] = $_POST['ay'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "images/".$filename;  
    $name=$_SESSION['name'];
    $rollno=$_SESSION['rollno'];
    $year=$_SESSION['year'];	
    $branch=$_SESSION['department'];
    $ni=$_SESSION['ni'];
    $nc=$_SESSION['nc'];
    $sd=$_SESSION['sd'];
    $ed=$_SESSION['ed'];
    $ay=$_SESSION['ay'];
    $datetime1 = date_create($sd);
$datetime2 = date_create($ed);
$durt = date_diff($datetime1, $datetime2);
$durt=$durt->format('%m months');
if(isset($_POST['submit'])){
    $sql = "INSERT INTO course (RollNo,Name,CourseName,OrganisationName,StartDate,Enddate,Duration,Acadameicyear,file,branch) VALUES ('$rollno','$name','$nc','$ni','$sd','$ed','$durt','$ay','$filename','$branch')";
    // Execute query
    $res=mysqli_query($conn, $sql);
    if($res and move_uploaded_file($tempname, $folder)) {
        echo "<script>alert('Data Uploaded Successfully')</script>";
        header("Location: studentadd.php");
    }else{
        echo "<script>alert('Data not Uploaded')</script>";
    }
      
}
?>