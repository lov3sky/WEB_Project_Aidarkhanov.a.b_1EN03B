<?php 
	include "connection.php";
	$choice = $_GET['choice'];
	$theme = $_GET['theme'];
	$description = $_GET['description'];
	$name = $_GET['name'];
	$email = $_GET['email'];
	$type = $_GET['type'];
	$query = "INSERT INTO help VALUES(null, '$choice', '$theme', '$description', '$name', '$email', '$type')";
	$result = $con->query($query);
	if($result){
		header("Location: index_authSOS.php");
	}else{
		die($con->error);
	}
 ?>