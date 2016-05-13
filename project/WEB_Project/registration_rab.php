<?php 
	include "connection.php";
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$dadname = $_POST['dadname'];
	$gender = $_POST['gender'];
	$countries = $_POST['countries'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$telNumber = $_POST['tel_number'];
	$comtype = $_POST['comtype'];
	$Comname = $_POST['Comname'];
	$site = $_POST['site'];
	$count = $_POST['count'];
	$city = $_POST['city'];
	include "rabUpload.php";
	$description = htmlspecialchars($_POST['description'], ENT_QUOTES);
	$address = $_POST['address'];
	$firstBoss = $_POST['firstBoss'];
	$type = 1;
	$query = "INSERT INTO usersrab VALUES(null, '$name', '$surname', '$dadname', '$gender', '$countries', '$email', '$login', md5('$password'), 
		'$telNumber', '$comtype', '$Comname', '$site', '$count', '$city', '$target_file', '$description', '$address', '$firstBoss', '$type')";
	if($con->query($query)){
		header("Location: loginChoose.php");
	}else{
		die($con->error);
	}
 ?>