<?php
    include "db_conn.php";
    session_start();
    $_SESSION['cn'] = $_POST['cn'];
    $_SESSION['tech'] = $_POST['tech'];
    $_SESSION['sd'] = $_POST['sd'];
    $_SESSION['ed'] = $_POST['ed'];
    $_SESSION['paid'] = $_POST['paid'];
    $_SESSION['tamount'] = $_POST['tamount'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "images/".$filename;  
    $name=$_SESSION['name'];
    $rollno=$_SESSION['rollno'];
    $year=$_SESSION['year'];	
    $branch=$_SESSION['department'];	
    $cn=$_SESSION['cn'];
    $tech=$_SESSION['tech'];
    $sd=$_SESSION['sd'];
    $ed=$_SESSION['ed'];
    $paid=$_SESSION['paid'];
    $amount=$_SESSION['tamount'];
    $datetime1 = date_create($sd);
$datetime2 = date_create($ed);
$durt = date_diff($datetime1, $datetime2);
$durt=$durt->format('%m months');
if(isset($_POST['submit'])){
    $sql = "INSERT INTO sinternship (name,rollno,companyname,branch,year,startdate,enddate,duration,amount,paid,tech,pic) VALUES ('$name','$rollno','$cn','$branch','$year','$sd','$ed','$durt','$amount','$paid','$tech','$filename')";
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