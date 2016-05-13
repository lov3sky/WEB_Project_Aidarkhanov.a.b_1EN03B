<?php 
	include "connection.php";
	$name = $_GET['name'];
	$surname = $_GET['surname'];
	$dadname = $_GET['dadname'];
	$companyName = $_GET['companyName'];
	$sql = "INSERT INTO confirm VALUES(null, '$name', '$surname', '$dadname', '$companyName')";
	$query = $con->query($sql);
	if(!$query){
		die($con->error);
	}else{
		$row = "SELECT id FROM queue";
		$row1 = $con->query($row);
		$row2 = $row1->fetch_array();
		$id = $row2['id'];
		$col = "DELETE FROM queue WHERE id = '".$id."'";
		$col1 = $con->query($col);
		header("Location: rab_cab.php");
	}
 ?>