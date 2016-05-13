<?php 
	include "connection.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM vakanciya WHERE id = '".$id."'";
	$result = $con->query($sql);
	if(!$result){
		echo "There are some errors " . $con->error;
	}else{
		header("Location: myVakanciya.php");
	}
 ?>