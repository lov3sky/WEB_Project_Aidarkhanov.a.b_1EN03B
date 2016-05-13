<?php 
	include "connection.php";
	$id = $_POST['id'];
	$surname = $_POST['surname'];
	$name = $_POST['name'];
	$dadname = $_POST['dadname'];
	$email = $_POST['email'];
	$telNumber = $_POST['telNumber'];
	
	$query = "SELECT * FROM usersrab";
	$res = $con->query($query);
	$row = $res->fetch_array();

	if($row['surname'] != $surname && $surname != ""){
		$sql = "UPDATE usersrab SET surname = '$surname' WHERE id = '$id'";
		$result = $con->query($sql);
		if(!$result){
			echo " There are some errors = " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['name'] != $name && $name != ""){
		$sql = "UPDATE usersrab SET name = '$name' WHERE id = '$id'";
		$result = $con->query($sql);
		if(!$result){
			echo " There are some errors = " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}
	if($row['dadname'] != $dadname && $dadname != ""){
		$sql = "UPDATE usersrab SET dadname = '$dadname' WHERE id = '$id'";
		$result = $con->query($sql);
		if(!$result){
			echo " There are some errors = " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['email'] != $email && $email != ""){
		$sql = "UPDATE usersrab SET email = '$email' WHERE id = '$id'";
		$result = $con->query($sql);
		if(!$result){
			echo " There are some errors = " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['telNumber'] != $telNumber && $telNumber != ""){
		$sql = "UPDATE usersrab SET telNumber = '$telNumber' WHERE id = '$id'";
		$result = $con->query($sql);
		if(!$result){
			echo " There are some errors = " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}
	header("Location: rab_cab.php");
 ?>