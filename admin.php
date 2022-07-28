<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="icon2.png">
	<title>CERTIFICATE MAINTANCE SYSTEM</title>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
.n{
  text-decoration: none;
}
#btn1{
	float: right;
}

.wrapper{
  display: inline-flex;
  padding-left: 30%;

}
.wrapper .icon{
  margin: 0 20px;
  display: flex;
  flex-direction: column;
}
.wrapper .icon span {
  height: 100px;
  width: 160px;
  background: #fff;
  border-radius: 10%;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.2);
}
.wrapper .icon span i{
  line-height: 6px;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
}

.container1{
    float: left;

}

.img img{
	width: 400px;
	height: 400px;
}

h2{
	padding-top: 10%;
	text-align: center;
    color: #38d39f;
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
.n{
  text-decoration: none;
}
.scroll{
  height:300px;
  overflow-x:scroll;
}

#myInput{
  width:80%;
  margin-top: 20px;
  margin-left: 32px;
}
.h{
  display: inline-block;
}
body{
  overflow-y: scroll;
}
.c{
margin-left: 45%;
margin-top: 1%;
}


	</style>
</head>
<body>
<a href="logout.php" class="n" ><button type="button" class="btn" id="btn1" style="width: 10%;" >Logout</button></a>
<div class="wrapper">
<div class="icon">
            <span><h2>No.of signups</h2><?php include "db_conn.php";
            $q="select * from login";
            $res=mysqli_query($conn,$q);
             echo "<h2>".mysqli_num_rows($res)."</h2>";
            ?></span>
         </div>
         <div class="icon" class="clearfix">
            <span><a href="asearch.php" style="text-decoration: none;"><h2>No.of Students</h2></a><?php include "db_conn.php";
            $q="select * from login where password='student'";
            $res=mysqli_query($conn,$q);
            echo "<h2>".mysqli_num_rows($res)."</h2>";
            ?></span>
         </div>
         <div class="icon">
            <span><a href="fsearch.php" style="text-decoration: none;"><h2>No.of faculty</h2></a><?php include "db_conn.php";
            $q="select * from login where password='faculty'";
            $res=mysqli_query($conn,$q);
            echo "<h2>".mysqli_num_rows($res)."</h2>";
            ?></span>
         </div>
         <div class="icon" class="clearfix">
            <span><div style="margin-top: 10%;margin-left:20%;"><select style="width:90%;height:20%;" id="mylist" class="btn" onchange="myFunction()" class='form-control'>
<option>1st year</option>
<option>2nd year</option>
<option>3rd year</option>
<option>4th year</option>
</select></div><div style="margin-top: 10%;margin-left:20%;">
<select class="btn" style="width:60%;height:20%;" id="mylist" onchange="myFunction()" class='form-control'>
<option>CSM</option>
<option>CSE-A</option>
<option>CSE-B</option>
<option>CIC</option>
<option>ECE</option>
<option>EEE</option>
</select></div>
</div></span>
         </div>
        </div>

	<img class="wave" src="wave.png">
	<div class="container1">
		<div class="img">
			<img src="admin.svg">
    	<div class="login-content">
      <h1>Workshop</h1>
		<div class="scroll">
      <table id="myTable">
				<tr class="header">
				<th style="width:60%;">Roll No</th>
					<th style="width:60%;">Name</th>
					<th style="width:30%;">Workshop Name</th>
					<th style="width:20%;">Organisation</th>
					<th style="width:30%;">Start Date</th>
					<th style="width:20%;">End Date</th>
					<th style="width:30%;">Duration</th>
					<th style="width:20%;">place</th>
					<th style="width:20%;">Academic year</th>
					<th style="width:20%;">file</th>
					<th style="width:20%;">Branch</th>
					<th style="width:20%;">Year</th>
				</tr>
				<?php
				include "db_conn.php";
        $query="SELECT * FROM sworkshop";
        $result=mysqli_query($conn,$query);
				while($rows=mysqli_fetch_assoc($result))
				  {
				?>
				<tr>
					<td><?php echo $rows['RollNo']; ?></td>
					<td><?php echo $rows['Name']; ?></td>
					<td><?php echo $rows['WorkshopName']; ?></td>
					<td><?php echo $rows['OrgName']; ?></td>
					<td><?php echo $rows['StartDate']; ?></td>
					<td><?php echo $rows['EndDate']; ?></td>
					<td><?php echo $rows['Duration']; ?></td>
					<td><?php echo $rows['Place']; ?></td>
					<td><?php echo $rows['AcadameicYear']; ?></td>
					<td><?php echo $rows['file']; ?></td>
					<td><?php echo $rows['branch']; ?></td>
					<td><?php echo $rows['year']; ?></td>
				</tr>
				<?php
				  }
				 ?>
			</table>
        </div>
  
<br>


<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("mylist");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    <script src="mainl.js"></script>

</body>
</html>