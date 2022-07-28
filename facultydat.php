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
.h{
    display: inline-block;
}
	</style>
</head>
<body>
	<a href="logout.php" class="n" ><button type="button" class="btn" id="btn1" style="width: 10%;">Logout</button></a>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="facultyb.svg">
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
			<h2>Name: <?php echo $row['name'];;?> </h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h2>Id.No: <?php echo $row['rollno'];;?> </h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h2>Branch: <?php echo $row['department'];;?> </h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h2>Year: <?php echo $row['year'];;?> </h2> <br><br>
                <h2>Your Recent Certificates</h2><br>
                <?php 
                include "db_conn.php";
               $res=mysqli_query($conn,"select * from fworkshop limit 3");
               while($row = mysqli_fetch_array($res)) {
                echo "
                <img src='images/".$row['file']."' width='30%' height='20%' >"; 
}?>
                <h2>To Search Certificate</h2><br>
				<div id="quick-book">
    <form onchange="myFunction()" name="frmRadio" id="radio-buttons" action="">
        <input type="radio" id="fsearch" name="option" onclick="document.getElementById('radio-buttons').action='';"><h3 class="h">your certificates</h3>&nbsp;&nbsp;
        <input type="radio" id="clssearch" name="option" onclick="document.getElementById('radio-buttons').action='';"><h3 class="h">class students certificates</h3>&nbsp;&nbsp;<br>
        <input type="radio" id="cosearch" name="option" onclick="document.getElementById('radio-buttons').action='';"><h3 class="h">counseling students certificates</h3>&nbsp;&nbsp;
        
    </form>
    <div id="button">
    </div>
</div><br>
                <h2>To Add Your Certificate To Your Collection Click Add button</h2><br>
                <a href="facultyadd.php" class="n"><button type="button" class="btn">Add</button></a>
        
        </div>
        <?php
    }?>
    </div>

	<script>
    function myFunction() {
        if (document.getElementById("fsearch").checked){
            document.getElementById("button").innerHTML = "<a href='fsearch.php' class='n' ><button type='button' class='btn' >search your certificates</button></a><br>";
        } if (document.getElementById("clssearch").checked){
            document.getElementById("button").innerHTML = "<a href='clssearch.php' class='n' ><button type='button' class='btn' >search your class students certificates</button></a><br>";
        }if (document.getElementById("cosearch").checked){
            document.getElementById("button").innerHTML = "<a href='cosearch.php' class='n' ><button type='button' class='btn' >search your counsiling students certificates</button></a><br>";
        }
        
    }
    </script>
    <script src="mainl.js"></script>
</body>
</html>