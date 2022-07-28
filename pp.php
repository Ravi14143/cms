<?php
    include "db_conn.php";
    session_start();
    $_SESSION['fa'] = $_POST['fa'];
    $_SESSION['n'] = $_POST['n'];
    $_SESSION['m'] = $_POST['m'];
    $_SESSION['t'] = $_POST['t'];
    $_SESSION['f'] = $_POST['f'];
    $_SESSION['i'] = $_POST['i']; 
    $_SESSION['v'] = $_POST['v'];
    $_SESSION['in'] = $_POST['in'];
    $_SESSION['u'] = $_POST['u'];

    $name=$_SESSION['name'];
    $rollno=$_SESSION['rollno'];
    $department=$_SESSION['department'];	
    $fa=$_SESSION['fa'];
    $n=$_SESSION['n'];
    $m=$_SESSION['m'];
    $t=$_SESSION['t'];
    $f=$_SESSION['f'];
    $i=$_SESSION['i'];
    $v=$_SESSION['v'];
    $in=$_SESSION['in'];
    $u=$_SESSION['u'];
if(isset($_POST['submit'])){
    $sql = "INSERT INTO paperpublications (author,noauthor,otherauthor,title,fournal,issn,vol,findex,url) VALUES ('$fa','$n','$m','$t','$f','$i','$v','$in','$u')";
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