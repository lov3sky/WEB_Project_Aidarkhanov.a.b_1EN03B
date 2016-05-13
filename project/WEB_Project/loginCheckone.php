<?php
	include "connection.php";
	$query = "SELECT login FROM userssos";
	$result = $con->query($query);
	$row = $result->fetch_array();
	if($_GET['login']!=$row['login'] && $_GET['login'] != ''){
		echo "#99ffb4";
	}else if($_GET['login'] === $row['login'] || $_GET['login'] === ''){
		echo "#ffcccc";
	}
 ?>