<?php 
	include "connection.php";
	session_start();
	$name = $_SESSION['name'];
	$surname = $_SESSION['surname'];
	$fatherName = $_SESSION['fatherName'];
	$companyName = $_GET['companyName'];
	$sql = "INSERT INTO queue VALUES(null, '$name', '$surname', '$fatherName', '$companyName')";
	$res = $con->query($sql);
	if(!$res){
		die($con->error);
	}else{
		header("Location:index_authSOS.php");
	}
 ?>