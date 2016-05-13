<?php 
	include "connection.php";
	$id = $_POST['id'];
	$companyName = $_POST['companyName'];
	$country = $_POST['country'];
	$address = $_POST['address'];
	$description = htmlspecialchars($_POST['description'], ENT_QUOTES);
	$count = $_POST['count'];
	$firstBoss = $_POST['firstBoss'];

	$query = "SELECT * FROM usersrab";
	$res = $con->query($query);
	$row = $res->fetch_array();

	if($row['companyName'] != $companyName && $companyName != ''){
		$sql = "UPDATE usersrab SET companyName = '$companyName' WHERE id = '$id'";
		$result = $con->query($sql);
		if(!$result){
			echo "There are some errors" . $con->error;
		}
	}
	if($row['country'] != $country && $country != ''){
		$sql = "UPDATE usersrab SET country = '$country' WHERE id = '$id'";
		$result = $con->query($sql);
		if(!$result){
			echo "There are some errors" . $con->error;
		}
	}

	if($row['address']!=$address && $address!=''){
		$sql = "UPDATE usersrab SET address = '$address' WHERE id = '$id'";
		$result = $con->query($sql);
		if(!$result){
			echo "There are some errors" . $con->error;
		}
	}

	if($row['description']!=$description && $description!=''){
		$sql = "UPDATE usersrab SET description = '$description' WHERE id = '$id'";
		$result = $con->query($sql);
		if(!$result){
			echo "There are some errors" . $con->error;
		}
	}

	if($row['count']!=$count && $count!=''){
		$sql = "UPDATE usersrab SET count = '$count' WHERE id = '$id'";
		$result = $con->query($sql);
		if(!$result){
			echo "There are some errors" . $con->error;
		}
	}

	if($row['firstBoss']!=$firstBoss && $firstBoss!=''){
		$sql = "UPDATE usersrab SET firstBoss = '$firstBoss' WHERE id = '$id'";
		$result = $con->query($sql);
		if(!$result){
			echo "There are some errors" . $con->error;
		}
	}
	header("Location: myCompany.php");
 ?>