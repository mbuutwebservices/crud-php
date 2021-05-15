<?php 
//database connection
include("config.php");

//fetching data from student table
$show ="select * from student";
$stmt=$con->prepare($show);
$stmt->execute();
$students=$stmt->fetchAll(PDO::FETCH_OBJ);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>show</title>
	<!--	style script----->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<h1 class="text-center">
		
		<a href="index.php" class="btn btn-lg btn-primary">Add </a>
<a href="show.php" class="btn btn-lg btn-primary">View</a>
	</h1>
<!--TABLE display information from databases--->
	<div class="container well">
		<table class="table table-bordered  table-striped">
			<caption class=" glyphicon glyphicon-user">Student Information</caption>
			<th>
				<td>ID</td>
				<td>First Name</td>
				<td>Last Name</td>
			</th>



<?php  foreach ($students as $student ): ?>



			<tr>
				<td><?= $student->id;  ?></td>
				<td><?= $student->firstName;  ?></td>
				<td><?= $student->lastName;  ?></td>
				<td><?= $student->email;  ?></td>
				
			</tr>
		
	 <?php endforeach; ?>
		</table>
	</div>

<!-- js scripts------>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>