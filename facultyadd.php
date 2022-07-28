<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="icon2.png">
	<title>CERTIFICATE MAINTANCE SYSTEM</title>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
.n{
    text-decoration: none;
}
#btn1{
	float: right;
    margin-top: 1%;
}
h3{
    display: inline-block;
    margin-top: 1%;
}
.info{
    margin-left: 40%;
}
body{
    overflow-y: scroll;
}
	</style>
</head>
<body>
    <a href="logout.php" class="n" ><button type="button" class="btn" id="btn1" style="width: 10%;">Logout</button></a>
    <?php
    include "db_conn.php";
    session_start();
    $uname=$_SESSION['username'];
    $query="select * from login where username='$uname'";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
        ?>
		<div class="info">
			<h3>Name: <?php echo $row['name']; ?></h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h3>Id.No: <?php echo $row['rollno'];?> </h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h3>Year: <?php echo $row['rollno'];?> </h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
		<?php
    }?>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="facultyb.svg">
		</div>
		<div class="login-content">
		<div id="quick-book">
    <form onchange="myFunction()" name="frmRadio" id="radio-buttons" action="">
        <input type="radio" id="workshop" name="option" onclick="document.getElementById('radio-buttons').action='';">workshop
        <input type="radio" id="paperpublications" name="option" onclick="document.getElementById('radio-buttons').action='';">paperpublications
        <input type="radio" id="certification" name="option" onclick="document.getElementById('radio-buttons').action='';">Certifiaction
        <input type="radio" id="FDP" name="option" onclick="document.getElementById('radio-buttons').action='';">FDP
    </form><br>
    <div id="button">
    </div>    
        </div>
    </div>
	<script>
    function myFunction() {
        if (document.getElementById("workshop").checked){
            document.getElementById("button").innerHTML = "<form method='post' action='fworkshop.php' class='w3-container' enctype='multipart/form-data'><p><label>Workshop/Conference/Seminar Name: </label><input class='w3-input' type='text' name='wn' required></p><br><p><label>Name of the oraganizer: </label><input class='w3-input' type='text' name='org' required></p><br><label>Place:</label><input class='w3-input' type='text' name='place'></p><br><p><label>Start Date: </label><input class='w3-input' type='date' name='sd'></p><br><p><label>End Date: </label><input class='w3-input' type='date' name='ed'></p><br><input type='file' name='file'><br><input type='submit' class='btn' value='submit' name='submit'></form>";
        } if (document.getElementById("paperpublications").checked){
            document.getElementById("button").innerHTML = "<form method='post' action='pp.php' class='w3-container'><p><label>Faculty Author:</label><input class='w3-input' type='text' name='fa'></p><br><p><label>Name of Authors:</label><input class='w3-input' type='text' name='n'></p><br><p><label>Main Author/Other:</label><input class='w3-input' type='text' name='m'></p><br><p><label>Title of the Paperpublication: </label><input type class='w3-input' type='text' name='t'></p><br><p><label>Name of the Fournal:</label><input class='w3-input' type='text' name='f'><br><p><label>ISBN/ISSN Number:</label><input class='w3-input' type='text' name='i'><br><p><label>Volume/Month:</label><input class='w3-input' type='text' name='v'><br><p><label>Index/VovGc :</label><input class='w3-input' type='text' name='in'><br><p><label>URL:</label><input class='w3-input' type='text' name='u'><br><input type='submit' class='btn' value='submit' name='submit'></form>";
        }if (document.getElementById("certification").checked){
            document.getElementById("button").innerHTML ="<form method='post' action='certification.php' class='w3-container' enctype='multipart/form-data'><p><label>Name of Event: </label><input class='w3-input' type='text' name='en' required></p><br><p><label>Organisation: </label><input class='w3-input'type='text' name='org' required></p><br><p><label>Place:</label><input class='w3-input' type='text' name='place'><br><p><label>Start Date:</label><input class='w3-input' type='date' name='sd'><br><p><label>End Date:</label><input class='w3-input' type='date' name='ed'><br><input type='file' name='file'><br><input type='submit' class='btn' value='submit' name='submit'></form>";
        }if (document.getElementById("FDP").checked){
            document.getElementById("button").innerHTML = "<form method='post' action='fdp.php' class='w3-container'><p><label>Name of the FDP: </label><input class='w3-input' type='text' name='fd' required></p><br><p><label>Attend/Resource Per: </label><input class='w3-input'type='text' name='a' required></p><br><p><label>Organised by Domain:</label><input class='w3-input' type='text' name='o'></p><br><p><label>Place:</label><input class='w3-input' type='text' name='place'> </p><br><p><label>Start Date:</label><input class='w3-input' type='date' name='sd'><br><p><label>End Date:</label><input class='w3-input' type='date' name='ed'><br><input type='submit' class='btn' value='submit' name='submit'></form>";

        }
        
    }
    </script>
    <script src="mainl.js"></script>

</body>
</html>
<