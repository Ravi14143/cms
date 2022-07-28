<?php
    include "db_conn.php";
    session_start();
    $_SESSION['fd'] = $_POST['fd'];
    $_SESSION['a'] = $_POST['a'];
    $_SESSION['o'] = $_POST['o'];
    $_SESSION['sd'] = $_POST['sd'];
    $_SESSION['ed'] = $_POST['ed'];
    $_SESSION['place'] = $_POST['place'];
    
    $name=$_SESSION['name'];
    $id=$_SESSION['rollno'];
    $year=$_SESSION['year'];	
    $department=$_SESSION['department'];
    $fd=$_SESSION['fd'];
    $a=$_SESSION['a'];
    $o=$_SESSION['o'];
    $sd=$_SESSION['sd'];
    $ed=$_SESSION['ed'];
    $place=$_SESSION['place'];
    $datetime1 = date_create($sd);
$datetime2 = date_create($ed);
$durt = date_diff($datetime1, $datetime2);
$durt=$durt->format('%m months');
if(isset($_POST['submit'])){
    $sql = "INSERT INTO fdp (name,fdpname,attened,org,startdate,enddate,duration,place,id,department) VALUES ('$name','$fd','$a','$o','$sd','$ed','$durt','$place','$id','$department')";
    // Execute query
    $res=mysqli_query($conn, $sql);
    if($res) {
        echo "<script>alert('Data Uploaded Successfully')</script>";
        header("Location: facultyadd.php");
    }else{
        echo "<script>alert('Data not Uploaded')</script>";
    }
      
}
?>