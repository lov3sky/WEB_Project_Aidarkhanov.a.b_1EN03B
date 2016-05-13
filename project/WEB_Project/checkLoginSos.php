<?php 
	include "connection.php";
	$login = $_POST['login'];
	$pass = md5($_POST['password']);
	$query = "SELECT * FROM userssos WHERE login = '".$login."' AND password = '".$pass."'";
	$result = $con->query($query);
	$row = $result->fetch_array();
	if($row['login'] !== $login || $row['password'] !== $pass){
		header("Location: loginChoose.php");
	}
	if($result){
		if(mysqli_num_rows($result)>0){
			session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['surname'] = $row['surname'];
			$_SESSION['fatherName'] = $row['fatherName'];
			$_SESSION['country'] = $row['country'];
			$_SESSION['city'] = $row['city'];
			$_SESSION['day'] = $row['day'];
			$_SESSION['month'] = $row['month'];
			$_SESSION['year'] = $row['year'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['login'] = $row['login'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['telNumber'] = $row['telNumber'];
			$_SESSION['level'] = $row['level'];
			$_SESSION['university'] = $row['university'];
			$_SESSION['faculty'] = $row['faculty'];
			$_SESSION['specialization'] = $row['specialization'];
			$_SESSION['finishYear'] = $row['finishYear'];
			$_SESSION['native'] = $row['native'];
			$_SESSION['english'] = $row['english'];
			$_SESSION['russian'] = $row['russian'];
			$_SESSION['prog1'] = $row['prog1'];
			$_SESSION['prog2'] = $row['prog2'];
			$_SESSION['prog3'] = $row['prog3'];
			$_SESSION['work'] = $row['work'];
			$_SESSION['image'] = $row['image'];
			$_SESSION['type'] = $row['type'];
			if($_SESSION['type']==2){
				header("Location: index_authSOS.php");
			}else{
				header("Location: index_adminSOS.php");
			}
		}
	}else{
		echo $con->error;
	}
 ?>