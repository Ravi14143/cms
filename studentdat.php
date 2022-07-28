<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="icon2.png">
	<title>CERTIFICATE MAINTANCE SYSTEM</title>
	<link rel="stylesheet" href="style2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
.n{
  text-decoration: none;
}
#btn1{
	float: right;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}
div.gallery img {
  width: 100%;
  height: auto;
}

	</style>
</head>
<body>
	<a href="logout.php" class="n" ><button type="button" class="btn" id="btn1" style="width: 10%;">Logout</button></a>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="pfc.svg">
		</div>
	    <?php
    include "db_conn.php";
    session_start();
    $uname=$_SESSION['username'];
    $query="select * from login where username='$uname'";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
        ?>
		<div class="login-content">
			<h2>Name: <?php echo $row['name']; ?></h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h2>RollNo: <?php echo $_SESSION['rollno']= $row['rollno'];?> </h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h2>Branch: <?php echo $row['department'];?> </h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h2>Year: <?php echo $row['year'];?> </h2> <br><br>
                <h2>Your Recent Certificates</h2><br>
               <?php 
                include "db_conn.php";
               $res=mysqli_query($conn,"select * from sworkshop limit 3");
               while($row = mysqli_fetch_array($res)) {
                echo "
                <img src='images/".$row['file']."' width='30%' height='20%' >"; 
}?>
                <h2>To Search Your Certificate</h2><br>
                <a href="ssearch.php" class="n" ><button type="button" class="btn">Search</button></a><br>
                <h2>To Add Your Certificate To Your Collection Click Add button</h2><br>
                <a href="studentadd.php" class="n"><button type="button" class="btn">Add</button></a>
        
        </div>
		<?php
    }?>
    </div>
    <script src="mainl.js"></script>

</body>
</html>