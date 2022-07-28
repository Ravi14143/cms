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
<a href="studentdat.php" class="n" ><button type="button" class="btn" id="btn1" style="width: 10%;float:left;">Back</button></a>
<?php
    include "db_conn.php";
    session_start();
    $uname=$_SESSION['username'];
    $query="select * from login where username='$uname'";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
        $_SESSION['name']=$row['name'];
        $_SESSION['rollno']=$row['rollno'];
        $_SESSION['year']=$row['year'];
        $_SESSION['department']=$row['department'];
        ?>
		<div class="info">
			<h3>Name: <?php echo $row['name']; ?></h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h3>RollNo: <?php echo $row['rollno'];?> </h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h3>Year: <?php echo $row['year'];?> </h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
		<?php
    }?>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="pfc.svg">
		</div>
		<div class="login-content">
    
<div id="quick-book">
    <form onchange="myFunction()" name="frmRadio" id="radio-buttons" action="">
        <input type="radio" id="workshop" name="option" onclick="document.getElementById('radio-buttons').action='';">Workshop&nbsp;&nbsp;
        <input type="radio" id="internship" name="option" onclick="document.getElementById('radio-buttons').action='';">Internship&nbsp;&nbsp;
        <input type="radio" id="project" name="option" onclick="document.getElementById('radio-buttons').action='';">Project&nbsp;&nbsp;<br>
        <input type="radio" id="course" name="option" onclick="document.getElementById('radio-buttons').action='';">Course&nbsp;&nbsp;
        <input type="radio" id="extracircular" name="option" onclick="document.getElementById('radio-buttons').action='';">Extra-Circular&nbsp;&nbsp;
        <input type="radio" id="cocircular" name="option" onclick="document.getElementById('radio-buttons').action='';">Co-circular&nbsp;&nbsp;
        
    </form><br>
    <div id="button">
    </div>
</div>
</div></div>
<script>
     function myFunction() {
        if (document.getElementById("workshop").checked){
            document.getElementById("button").innerHTML = "<form method='post' action='sworkshop.php' class='w3-container' enctype='multipart/form-data'><p><label>Workshop Name: </label><input class='w3-input' type='text' name='wn' required></p><br><p><label>Name of the oraganization: </label><input class='w3-input' type='text' name='org' required></p><br><label>Place:</label><input class='w3-input' type='text' name='place'></p><br><p><label>Start Date: </label><input class='w3-input' type='date' name='sd'></p><br><p><label>End Date: </label><input class='w3-input' type='date' name='ed'></p><br><p><label>Academic Year: </label><input class='w3-input' type='text' name='ay'></p><br><input type='file' name='file'><br><input type='submit' class='btn' value='submit' name='submit'></form>";
        } if (document.getElementById("internship").checked){
            document.getElementById("button").innerHTML = "<form method='post' action='sinternship.php' class='w3-container' enctype='multipart/form-data'><p><label>Company Name:</label><input class='w3-input' type='text' name='cn'</p><br><p><label>Technical/Non Technical:</label><input class='w3-input' type='text' name='tech'</p><br><p><label>Starting Date: </label><input class='w3-input'type='date' name='sd'></p><br><p><label>Ending Date:</label><input class='w3-input' type='date' name='ed'></p><br><p><br><p><label>Paid/Not Paid:</label><input class='w3-input' type='text' name='paid'></p><br><p><label>Total Amount:</p><br><p><input class='w3-input' type='text' name='tamount'></p><br><input type='file' name='file'><br><input type='submit' class='btn' value='submit' name='submit'></form>";
        }if (document.getElementById("project").checked){
            document.getElementById("button").innerHTML = "<form method='post' action='sproject.php' class='w3-container'><p><br><p><label>Title of the Project:</label><input class='w3-input' type='text' name='tname'></p><br><p><label>Team Number:</label><input class='w3-input' type='text' name='bnum'></p><br><p><label>Academic Year: </label><input class='w3-input' type='text' name='ac'></p><br><p><label>Upload Your Project Drive link: </label><input class='w3-input' type='text' name='link'></p><br><input type='submit' class='btn' value='submit' name='submit'></form>";
        }if (document.getElementById("course").checked){
            document.getElementById("button").innerHTML = "<form method='post' action='scourse.php' class='w3-container' enctype='multipart/form-data'><p><label>Name of Institution: </label><input class='w3-input' type='text' name='ni' required></p><br><br><p><label>Name of the Course:</label><input class='w3-input' type='text' name='nc'</p><br><p><label>Starting Date:</label><input class='w3-input'type='date' name='sd'></p><br><p><label>Ending Date:</label><input class='w3-input' type='date' name='ed'></p><br><p><label>Academic year:</label><input class='w3-input' type='text' name='ay'></p><input type='file' name='file'><br><input type='submit' class='btn' value='submit' name='submit'></form>";
        }if (document.getElementById("extracircular").checked){
            document.getElementById("button").innerHTML = "<form method='post' action='sextracircular.php' class='w3-container' enctype='multipart/form-data'><p><label>Event Name: </label><input class='w3-input' type='text' name='nevent' required></p><br><p><label>Name of the Conducting College:</label><input class='w3-input' type='text' name='condclg'></p><br><p><label>Conducting Organisation: </label><input class='w3-input' type='text' name='conorg' required></p><br><p><label>Dates:</label><input class='w3-input' type='date' name='dates'></p><br><p><label>Internal/External: </label><input class='w3-input'type='text' name='ie'></p><br><p><label>Academic Year:</label><input class='w3-input' type='text' name='ay'</p><br><input type='file' name='file'><br><input type='submit' class='btn' value='submit' name='submit'></form>";
        }if (document.getElementById("cocircular").checked){
            document.getElementById("button").innerHTML = "<form method='post' action='scocircular.php' class='w3-container' enctype='multipart/form-data'><p><label>Event Name: </label><input class='w3-input' type='text' name='nevent' required></p><br><p><label>Name of the Conducting College: </label><input class='w3-input'type='text' name='condclg' required></p><br><p><label>Conducting Organisation:</label><input class='w3-input' type='text' name='conorg'></p><br><p><label>Dates:</label><input class='w3-input' type='date' name='dates'></p><br><p><label>Internal/External:</label><input class='w3-input' type='text' name='ie'></p><br><p><label>Acadmeic Year:</label><input class='w3-input'type='text' name='ay'><br><input type='file' name='file'><br><input type='submit' class='btn' value='submit' name='submit'></form>";

        }
        
    }
        
    </script>
    <script src="mainl.js"></script>
</body>
</html>
