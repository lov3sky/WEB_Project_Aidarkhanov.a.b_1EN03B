<?php 
	include "connection.php";
	$name = $_POST['name'];
	$type = $_POST['type'];
	$description = $_POST['description'];
	$need = $_POST['need'];
	$time = $_POST['time'];
	$money = $_POST['money'];
	$companyName = $_POST['companyName'];
	$sql = "INSERT INTO vakanciya VALUES(null, '$name', '$description', '$need', '$time', '$money', '$companyName', '$type')";
	$result = $con->query($sql);
	if(!$result){
		echo " There are some errors " . $con->error;
	}else{
		header("Location:myVakanciya.php");
	}
 ?>