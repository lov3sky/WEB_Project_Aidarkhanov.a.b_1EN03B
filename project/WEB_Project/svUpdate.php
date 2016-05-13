<?php 
	include "connection.php";
	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$fatherName = $_POST['fatherName'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$country = $_POST['country'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$telNumber = $_POST['telNumber'];
	$university = $_POST['university'];
	$faculty = $_POST['faculty'];
	$specialization = $_POST['specialization'];
	$level = $_POST['level'];
	$finishYear = $_POST['finishYear'];
	$native = $_POST['native'];
	$english = $_POST['english'];
	$russian = $_POST['russian'];
	$prog1 = $_POST['prog1'];
	$prog2 = $_POST['prog2'];
	$prog3 = $_POST['prog3'];
	$work = $_POST['work'];

	$query = "SELECT * FROM userssos";
	$result = $con->query($query);
	$row = $result->fetch_array();

	if($row['name'] != $name && $name != ""){
		$sql = "UPDATE userssos SET name = '$name' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['surname'] != $surname && $surname != ""){
		$sql = "UPDATE userssos SET surname = '$surname' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['fatherName'] != $fatherName && $fatherName != ""){
		$sql = "UPDATE userssos SET fatherName = '$fatherName' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['day'] != $day && $day != ""){
		$sql = "UPDATE userssos SET day = '$day' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['month'] != $month && $month != ""){
		$sql = "UPDATE userssos SET month = '$month' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['year'] != $year && $year != ""){
		$sql = "UPDATE userssos SET year = '$year' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['country'] != $country && $country != ""){
		$sql = "UPDATE userssos SET country = '$country' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['city'] != $city && $city != ""){
		$sql = "UPDATE userssos SET city = '$city' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['email'] != $email && $email != ""){
		$sql = "UPDATE userssos SET email = '$email' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['telNumber'] != $telNumber && $telNumber != ""){
		$sql = "UPDATE userssos SET telNumber = '$telNumber' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['university'] != $university && $university != ""){
		$sql = "UPDATE userssos SET university = '$university' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['faculty'] != $faculty && $faculty != ""){
		$sql = "UPDATE userssos SET faculty = '$faculty' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['specialization'] != $specialization && $specialization != ""){
		$sql = "UPDATE userssos SET specialization = '$specialization' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['level'] != $level && $level != ""){
		$sql = "UPDATE userssos SET level = '$level' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['finishYear'] != $finishYear && $finishYear != ""){
		$sql = "UPDATE userssos SET finishYear = '$finishYear' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['native'] != $native && $native != ""){
		$sql = "UPDATE userssos SET native = '$native' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['english'] != $english && $english != ""){
		$sql = "UPDATE userssos SET english = '$english' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['russian'] != $russian && $russian != ""){
		$sql = "UPDATE userssos SET russian = '$russian' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['prog1'] != $prog1 && $prog1 != ""){
		$sql = "UPDATE userssos SET prog1 = '$prog1' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['prog2'] != $prog2 && $prog2 != ""){
		$sql = "UPDATE userssos SET prog2 = '$prog2' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['prog3'] != $prog3 && $prog3 != ""){
		$sql = "UPDATE userssos SET prog3 = '$prog3' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}

	if($row['work'] != $work && $work != ""){
		$sql = "UPDATE userssos SET work = '$work' WHERE id = '$id'";
		$res = $con->query($sql);
		if(!$res){
			echo " There are some errors " . $con->error;
		}else{
			echo "SUCCESS &";
		}
	}
	header("Location: mysv.php");
 ?>
