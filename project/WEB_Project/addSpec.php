<?php 
	include "connection.php";
	$spec = $_POST['specialization'];
	$sql = "INSERT INTO specialization VALUES(null, '$spec')";
	$result = $con->query($sql);
	if(!$result){
		die($con->error);
	}else{
		header("Location:managesos.php");
	}
 ?>