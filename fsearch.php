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
<a href="logout.php" class="n" ><button type="button" class="btn" style="width:10%;">Logout</button></a>
<a href="facultydat.php" class="n" ><button type="button" class="btn" style="width:10%;float:left;">Back</button></a><br><br><br><br><br>
	<h1>Workshop</h1>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="search for Name of Certificate.." title="Type in a name">
	
	<img class="wave" src="wave.png">
	<div class="container">
		
		<div class="login-content">
		<div class="scroll">
      <table id="myTable">
				<tr class="header">
				<th style="width:60%;">Name of Faculty</th>
					<th style="width:60%;">Id.no</th>
					<th style="width:30%;">Department</th>
					<th style="width:20%;">Workshop Name</th>
					<th style="width:30%;">Organisation</th>
					<th style="width:20%;">Place</th>
					<th style="width:30%;">Start Date</th>
					<th style="width:30%;">End Date</th>
					<th style="width:30%;">Duration</th>
					<th style="width:20%;">file</th>
				</tr>
				<?php
				include "db_conn.php";
				session_start();
				
        $query="SELECT * FROM fworkshop";
        $result=mysqli_query($conn,$query);
				while($rows=mysqli_fetch_assoc($result))
				  {
				?>
				<tr>
				<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['department']; ?></td>
					<td><?php echo $rows['workshopn']; ?></td>
					<td><?php echo $rows['org']; ?></td>
					<td><?php echo $rows['place']; ?></td>
					<td><?php echo $rows['startdate']; ?></td>
					<td><?php echo $rows['enddate']; ?></td>
					<td><?php echo $rows['duration']; ?></td>
					<td><?php echo $rows['file']; ?></td>
				</tr>
				<?php
				  }
				 ?>
			</table>
        </div>
		<h1>Certificates</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="search for Name of Certificate.." title="Type in a name">
        <div class="scroll">
      <table id="myTable">
				<tr class="header">
				<th style="width:60%;">Name</th>
					<th style="width:60%;">Id No</th>
					<th style="width:30%;">Event Name</th>
					<th style="width:20%;">Organisation</th>
					<th style="width:20%;">place</th>
					<th style="width:20%;">Start Date</th>
					<th style="width:20%;">End Date</th>
					<th style="width:20%;">Duration</th>
					<th style="width:20%;">File</th>
					<th style="width:20%;">Department</th>
				</tr>
				<?php
				 $query="SELECT * FROM certificates";
				 $result=mysqli_query($conn,$query);
				  while($rows=mysqli_fetch_assoc($result))
				  {
				?>
				<tr>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['event']; ?></td>
					<td><?php echo $rows['org']; ?></td>
					<td><?php echo $rows['place']; ?></td>
					<td><?php echo $rows['startdate']; ?></td>
					<td><?php echo $rows['enddate']; ?></td>
					<td><?php echo $rows['duration']; ?></td>
					<td><?php echo $rows['file']; ?></td>
					<td><?php echo $rows['department']; ?></td>
					
				
				</tr>
				<?php
				  }
				 ?>
			</table>
        </div>
		<h1>FDP</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="search for Name of Certificate.." title="Type in a name">
        <div class="scroll">
      <table id="myTable">
				<tr class="header">
				<th style="width:60%;">Name</th>
					<th style="width:60%;">FDP Number</th>
					<th style="width:30%;">Attened</th>
					<th style="width:20%;">Organisation</th>
					<th style="width:20%;">Start Date</th>
					<th style="width:20%;">End Date</th>
					<th style="width:20%;">Duration</th>
					<th style="width:20%;">place</th>
					<th style="width:20%;">id</th>
					<th style="width:20%;">department</th>
					
				</tr>
				<?php
				 $query="SELECT * FROM fdp";
				 $result=mysqli_query($conn,$query);
				  while($rows=mysqli_fetch_assoc($result))
				  {
				?>
				<tr>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['fdpname']; ?></td>
					<td><?php echo $rows['attened']; ?></td>
					<td><?php echo $rows['org']; ?></td>
					<td><?php echo $rows['startdate']; ?></td>
					<td><?php echo $rows['enddate']; ?></td>
					<td><?php echo $rows['duration']; ?></td>
					<td><?php echo $rows['place']; ?></td>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['department']; ?></td>
				
				</tr>
				<?php
				  }
				 ?>
			</table>
        </div>
		<h1>PaperPublications</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="search for Name of Certificate.." title="Type in a name">
        <div class="scroll">
      <table id="myTable">
				<tr class="header">
				<th style="width:60%;">Author</th>
					<th style="width:60%;">No.of Authors</th>
					<th style="width:30%;">Main Author/Others</th>
					<th style="width:20%;">Title of Paperpublications</th>
					<th style="width:20%;">Name of the Fournal</th>
					<th style="width:20%;">ISSN/ISBN Number</th>
					<th style="width:20%;">Volume/month</th>
					<th style="width:20%;">Index</th>
					<th style="width:20%;">URL</th>
			
				</tr>
				<?php
				 $query="SELECT * FROM paperpublications";
				 $result=mysqli_query($conn,$query);
				  while($rows=mysqli_fetch_assoc($result))
				  {
				?>
				<tr>
					<td><?php echo $rows['author']; ?></td>
					<td><?php echo $rows['noauthor']; ?></td>
					<td><?php echo $rows['otherauthor']; ?></td>
					<td><?php echo $rows['title']; ?></td>
					<td><?php echo $rows['fournal']; ?></td>
					<td><?php echo $rows['issn']; ?></td>
					<td><?php echo $rows['vol']; ?></td>
					<td><?php echo $rows['findex']; ?></td>
					<td><?php echo $rows['url']; ?></td>

				
				</tr>
				<?php
				  }
				 ?>
			</table>
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