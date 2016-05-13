<?php 
	include "connection.php";
	$login = $_POST['login'];
	$pass = md5($_POST['password']);
	$query = "SELECT * FROM usersrab WHERE login = '".$login."' AND password = '".$pass."'";
	$result = $con->query($query);
	$row = $result->fetch_array();
	if($row['login'] !== $login || $row['password'] !== $pass){
		header("Location: loginChoose.php");
	}
	if($result){
		if(mysqli_num_rows($result) > 0){
			session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['surname'] = $row['surname'];
			$_SESSION['dadname'] = $row['dadname'];
			$_SESSION['gender'] = $row['gender'];
			$_SESSION['coutry'] = $row['country'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['login'] = $row['login'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['telNumber'] = $row['telNumber'];
			$_SESSION['companyType'] = $row['companyType'];
			$_SESSION['companyName'] = $row['companyName'];
			$_SESSION['website'] = $row['website'];
			$_SESSION['count'] = $row['count'];
			$_SESSION['city'] = $row['city'];
			$_SESSION['image'] = $row['image'];
			$_SESSION['description'] = $row['description'];
			$_SESSION['address'] = $row['address'];
			$_SESSION['firstBoss'] = $row['firstBoss'];
			$_SESSION['type'] = $row['type'];
			if($_SESSION['type']==0){
				header("Location:index_adminRAB.php");
			}else{
				header("Location:index_auth_rab.php");
			}
		}
	}else{
		echo $con->error;
	}
 ?>