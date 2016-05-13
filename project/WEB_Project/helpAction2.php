<?php 
	include "connection.php";
	$choice = $_POST['choice'];
	$theme = $_POST['theme'];
	$description = $_POST['description'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$type = $_POST['type'];
	$query = "INSERT INTO help VALUES(null, '$choice', '$theme', '$description', '$name', '$email', '$type')";
	$result = $con->query($query);
	if($result){
		header("Location: index_auth_rab.php");
	}else{
		die($con->error);
	}
 ?>