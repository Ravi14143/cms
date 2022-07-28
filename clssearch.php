<?php
include_once('db_conn.php');
?>
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
* {
  box-sizing: border-box;
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
.btn{
  float: right;
}
#myInput{
  width:80%;
  margin-top: 20px;
  margin-left: 32px;
}
	</style>
</head>
<body>
<a href="facultydat.php" class="n" ><button type="button" class="btn" style="width:10%;float:left;">Back</button></a>
<a href="logout.php" class="n" ><button type="button" class="btn" style="width:10%;">Logout</button></a><br><br><br><br><br>
	<h1>Workshop</h1>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="search for Name of Certificate.." title="Type in a name">

   
	<img class="wave" src="wave.png">
	<div class="container">
		
		<div class="login-content">
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
				session_start();
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
		<h1>Internship</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="search for Name of Certificate.." title="Type in a name">
        <div class="scroll">
      <table id="myTable">
				<tr class="header">
				<th style="width:60%;">Name</th>
					<th style="width:60%;">Roll No</th>
					<th style="width:30%;">Company Name</th>
					<th style="width:20%;">Branch</th>
					<th style="width:20%;">Year</th>
					<th style="width:20%;">Start Date</th>
					<th style="width:20%;">End Date</th>
					<th style="width:20%;">Duration</th>
					<th style="width:20%;">Amount</th>
					<th style="width:20%;">Paid</th>
					<th style="width:20%;">Tech/Non-Tech</th>
					<th style="width:20%;">File</th>
				</tr>
				<?php
				 $query="SELECT * FROM sinternship";
				 $result=mysqli_query($conn,$query);
				  while($rows=mysqli_fetch_assoc($result))
				  {
				?>
				<tr>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['rollno']; ?></td>
					<td><?php echo $rows['companyname']; ?></td>
					<td><?php echo $rows['branch']; ?></td>
					<td><?php echo $rows['year']; ?></td>
					<td><?php echo $rows['startdate']; ?></td>
					<td><?php echo $rows['enddate']; ?></td>
					<td><?php echo $rows['duration']; ?></td>
					<td><?php echo $rows['amount']; ?></td>
					<td><?php echo $rows['paid']; ?></td>
					<td><?php echo $rows['tech']; ?></td>
					<td><?php echo $rows['pic']; ?></td>
				
				</tr>
				<?php
				  }
				 ?>
			</table>
        </div>
		<h1>Project</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="search for Name of Certificate.." title="Type in a name">
        <div class="scroll">
      <table id="myTable">
				<tr class="header">
				<th style="width:60%;">Team Number</th>
					<th style="width:60%;">Roll Number</th>
					<th style="width:30%;">Name</th>
					<th style="width:20%;">Project Title</th>
					<th style="width:20%;">Academic Year</th>
					<th style="width:20%;">Drive Link</th>
					<th style="width:20%;">Branch</th>
					
				</tr>
				<?php
				 $query="SELECT * FROM sproject";
				 $result=mysqli_query($conn,$query);
				  while($rows=mysqli_fetch_assoc($result))
				  {
				?>
				<tr>
					<td><?php echo $rows['Team_Number']; ?></td>
					<td><?php echo $rows['Roll_Number']; ?></td>
					<td><?php echo $rows['Name']; ?></td>
					<td><?php echo $rows['Project_title']; ?></td>
					<td><?php echo $rows['academic_year']; ?></td>
					<td><?php echo $rows['Drive_link']; ?></td>
					<td><?php echo $rows['branch']; ?></td>
				
				</tr>
				<?php
				  }
				 ?>
			</table>
        </div>
		<h1>Course</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="search for Name of Certificate.." title="Type in a name">
        <div class="scroll">
      <table id="myTable">
				<tr class="header">
				<th style="width:60%;">Roll NO</th>
					<th style="width:60%;">Name</th>
					<th style="width:30%;">Course Name</th>
					<th style="width:20%;">Oraganisation</th>
					<th style="width:20%;">Start Date</th>
					<th style="width:20%;">End Date</th>
					<th style="width:20%;">Duration</th>
					<th style="width:20%;">Acadameic year</th>
					<th style="width:20%;">File</th>
					<th style="width:20%;">Branch</th>
				</tr>
				<?php
				 $query="SELECT * FROM course";
				 $result=mysqli_query($conn,$query);
				  while($rows=mysqli_fetch_assoc($result))
				  {
				?>
				<tr>
					<td><?php echo $rows['RollNo']; ?></td>
					<td><?php echo $rows['Name']; ?></td>
					<td><?php echo $rows['CourseName']; ?></td>
					<td><?php echo $rows['OrganisationName']; ?></td>
					<td><?php echo $rows['StartDate']; ?></td>
					<td><?php echo $rows['Enddate']; ?></td>
					<td><?php echo $rows['Duration']; ?></td>
					<td><?php echo $rows['Acadameicyear']; ?></td>
					<td><?php echo $rows['file']; ?></td>
					<td><?php echo $rows['branch']; ?></td>
				
				</tr>
				<?php
				  }
				 ?>
			</table>
        </div>
<h1>Extra Circular</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="search for Name of Certificate.." title="Type in a name">
        <div class="scroll">
      <table id="myTable">
				<tr class="header">
				<th style="width:60%;">Name</th>
					<th style="width:60%;">Roll No</th>
					<th style="width:30%;">Year</th>
					<th style="width:20%;">Branch</th>
					<th style="width:20%;">Event Name</th>
					<th style="width:20%;">Conducting College</th>
					<th style="width:20%;">Organisation Name</th>
					<th style="width:20%;">Dates</th>
					<th style="width:20%;">Internal/External</th>
					<th style="width:20%;">Academic year</th>
					<th style="width:20%;">File</th>
					
				</tr>
				<?php
				 $query="SELECT * FROM extracircular";
				 $result=mysqli_query($conn,$query);
				  while($rows=mysqli_fetch_assoc($result))
				  {
				?>
				<tr>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['rollno']; ?></td>
					<td><?php echo $rows['year']; ?></td>
					<td><?php echo $rows['branch']; ?></td>
					<td><?php echo $rows['eventname']; ?></td>
					<td><?php echo $rows['conductingclg']; ?></td>
					<td><?php echo $rows['orgname']; ?></td>
					<td><?php echo $rows['dates']; ?></td>
					<td><?php echo $rows['ie']; ?></td>
					<td><?php echo $rows['academicyear']; ?></td>
					<td><?php echo $rows['file']; ?></td>
				
				</tr>
				<?php
				  }
				 ?>
			</table>
        </div>
<h1>Co Circular</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="search for Name of Certificate.." title="Type in a name">
        <div class="scroll">
      <table id="myTable">
				<tr class="header">
				<th style="width:60%;">Name</th>
					<th style="width:60%;">Roll No</th>
					<th style="width:30%;">Year</th>
					<th style="width:20%;">Branch</th>
					<th style="width:20%;">Event Name</th>
					<th style="width:20%;">Conducting College</th>
					<th style="width:20%;">Organisation Name</th>
					<th style="width:20%;">Dates</th>
					<th style="width:20%;">Internal/External</th>
					<th style="width:20%;">Academic year</th>
					<th style="width:20%;">File</th>
				</tr>
				<?php
				 $query="SELECT * FROM cocircular";
				 $result=mysqli_query($conn,$query);
				  while($rows=mysqli_fetch_assoc($result))
				  {
				?>
				<tr>
				<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['rollno']; ?></td>
					<td><?php echo $rows['year']; ?></td>
					<td><?php echo $rows['branch']; ?></td>
					<td><?php echo $rows['eventname']; ?></td>
					<td><?php echo $rows['conductingclg']; ?></td>
					<td><?php echo $rows['orgname']; ?></td>
					<td><?php echo $rows['dates']; ?></td>
					<td><?php echo $rows['ie']; ?></td>
					<td><?php echo $rows['academicyear']; ?></td>
					<td><?php echo $rows['file']; ?></td>
				
				</tr>
				<?php
				  }
				 ?>
			</table>
        </div>
        
        </div>
    </div>
    <script src="mainl.js"></script>
	<script>
function myFunction() {
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
</body>
</html>