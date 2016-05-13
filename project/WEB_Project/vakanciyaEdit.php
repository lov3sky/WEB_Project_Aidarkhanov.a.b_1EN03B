<?php 
	include "connection.php";
	$name = $_POST['name'];
	$type = $_POST['type'];
	$description = htmlspecialchars($_POST['description'], ENT_QUOTES);
	$need = $_POST['need'];
	$time = $_POST['time'];
	$money = $_POST['money'];
	$companyName = $_POST['companyName'];

	$query = "SELECT * FROM vakanciya";
	$result = $con->query($query);
	$row = $result->fetch_array();

	if($row['name'] != $name && $name != ''){
		$sql = "UPDATE vakanciya SET name = '$name' WHERE companyName = '$companyName'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}
		else{
			echo "SUCCESS &";
		}
	}

	if($row['type'] != $type && $type != ''){
		$sql = "UPDATE vakanciya SET type = '$type' WHERE companyName = '$companyName'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}
		else{
			echo "SUCCESS &";
		}
	}

	if($row['description'] != $description && $description != ''){
		$sql = "UPDATE vakanciya SET description = '$description' WHERE companyName = '$companyName'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo " SUCCESS &";
		}
	}

	if($row['need'] != $need && $need != ''){
		$sql = "UPDATE vakanciya SET need = '$need' WHERE companyName = '$companyName'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo " SUCCESS &";
		}
	}

	if($row['time'] != $time && $time != ''){
		$sql = "UPDATE vakanciya SET time = '$time' WHERE companyName = '$companyName'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo " SUCCESS &";
		}
	}

	if($row['money'] != $money && $money != ''){
		$mine = 'money';
		$sql = "UPDATE vakanciya SET $mine = '$money' WHERE companyName = '$companyName'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo " SUCCESS ";
		}
	}
	header("Location: showSingleVak.php")
 ?>