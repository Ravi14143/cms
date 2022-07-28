 <?php
    include "db_conn.php";
    session_start();
    $_SESSION['wn'] = $_POST['wn'];
    $_SESSION['org'] = $_POST['org'];
    $_SESSION['sd'] = $_POST['sd'];
    $_SESSION['ed'] = $_POST['ed'];
    $_SESSION['place'] = $_POST['place'];
    $_SESSION['ay'] = $_POST['ay'];

    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "images/".$filename;  
    $name=$_SESSION['name'];
    $rollno=$_SESSION['rollno'];
    $year=$_SESSION['year'];
    $branch=$_SESSION['department'];	
    $wn=$_SESSION['wn'];
    $org=$_SESSION['org'];
    $sd=$_SESSION['sd'];
    $ed=$_SESSION['ed'];
    $place=$_SESSION['place'];
    $ay=$_SESSION['ay'];
    $datetime1 = date_create($sd);
$datetime2 = date_create($ed);
$durt = date_diff($datetime1, $datetime2);
$durt=$durt->format('%m months');
if(isset($_POST['submit'])){
    $sql = "INSERT INTO sworkshop (RollNo,Name,WorkShopName,OrgName,StartDate,EndDate,Duration,Place,AcadameicYear,file,branch,year) VALUES ('$rollno','$name','$wn','$org','$sd','$ed','$durt','$place','$ay','$filename','$branch','$year')";
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