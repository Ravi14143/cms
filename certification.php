<?php
    include "db_conn.php";
    session_start();
    $_SESSION['en'] = $_POST['en'];
    $_SESSION['org'] = $_POST['org'];
    $_SESSION['sd'] = $_POST['sd'];
    $_SESSION['ed'] = $_POST['ed'];
    $_SESSION['place'] = $_POST['place'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "images/".$filename;  
    $name=$_SESSION['name'];
    $id=$_SESSION['rollno'];
    $year=$_SESSION['year'];	
    $department=$_SESSION['department'];
    $en=$_SESSION['en'];
    $org=$_SESSION['org'];
    $sd=$_SESSION['sd'];
    $ed=$_SESSION['ed'];
    $place=$_SESSION['place'];
    $datetime1 = date_create($sd);
$datetime2 = date_create($ed);
$durt = date_diff($datetime1, $datetime2);
$durt=$durt->format('%m months');
if(isset($_POST['submit'])){
    $sql = "INSERT INTO certificates (name,id,event,org,place,startdate,enddate,duration,file,department) VALUES ('$name','$id','$en','$org','$place','$sd','$ed','$durt','$filename','$department')";
    // Execute query
    $res=mysqli_query($conn, $sql);
    if($res and move_uploaded_file($tempname, $folder)) {
        echo "<script>alert('Data Uploaded Successfully')</script>";
        header("Location: facultyadd.php");
    }else{
        echo "<script>alert('Data not Uploaded')</script>";
    }
      
}
?>