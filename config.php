<?php 

$dbHost="localhost";
$dbName="lesson";
$dbUser="root";
$dbPassword="";
$charset ="utf8mb4";

$dsn = "mysql:host=".$dbHost.";dbname=".$dbName.";charset=".$charset;

try {
	//connection string
	$con = new PDO($dsn,$dbUser,$dbPassword);
	//echo "connection successfull";
	
} catch (PDOException $e) {
	echo "connection fail";
	
}

 ?>