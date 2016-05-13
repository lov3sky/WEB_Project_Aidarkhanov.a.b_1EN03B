<?php 
	include "connection.php";
	$login = $_GET['login'];
	$password = $_GET['password'];
	$query = "SELECT login, password FROM usersrab";
	$result = $con->query($query);
	$row = $result->fetch_array();
	if($row['login'] !== $login || $login === ''){
		echo "#ffcccc";
	}
	if($row['password'] !=== $password || $password ===''){
		echo '#ffcccc';
	}
 ?>