
<?php 
include('config.php');


//insert data
if (isset($_POST['submit'])) {

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
	$insert="insert into student(firstName,lastName,email) VALUES(:firstName,:lastName,:email)";
$stmt=$con->prepare($insert);
$stmt->bindParam(':firstName',$firstName,PDO::PARAM_STR);
$stmt->bindParam(':lastName',$lastName,PDO::PARAM_STR);
$stmt->bindParam(':email',$email,PDO::PARAM_STR);
$stmt->execute();

}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
		<!--	style script----->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<h1 class="text-center">
		
		<a href="index.php" class="btn btn-lg btn-primary">Add </a>
<a href="show.php" class="btn btn-lg btn-primary">View</a>
	</h1>
</div>
	<div class="container well">
		<h1 class="text-center">Complete  Bootcamp 2021</h1>
		<form action="index.php" method="POST">
			<div class="from-group ">
				<input type="text" class="form-control"  name="firstName" placeholder="First Name">
			</div>

			<div class="from-group ">
				<input type="text" class="form-control"  name="lastName" placeholder="Last Name">
			</div>
			
			<div class="from-group ">
				<input type="text" class="form-control"  name="email" placeholder="Email">
			</div>
			<button type="submit" name="submit">Submit</button>
		</form>

	</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>