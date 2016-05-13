<?php 
	include "connection.php";
	$city = $_POST['city'];
	$sql = "INSERT INTO city VALUES(null, '$city')";
	$result = $con->query($sql);
	if(!$result){
		die($con->error);
	}else{
		header("Location: managesos.php");
	}
 ?>