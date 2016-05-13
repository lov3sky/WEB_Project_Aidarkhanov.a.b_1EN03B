 <?php 
	include "connection.php";
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$dadname = $_POST['dadname'];
	$country = $_POST['countries'];
	$city = $_POST['city'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$pass = $_POST['password'];
	$telNumber = $_POST['tel_number'];
	$level = $_POST['level'];
	$univer = $_POST['uzname'];
	$faculty = $_POST['faculty'];
	$spec = $_POST['spec'];
	$finish = $_POST['finishYear'];
	$native = $_POST['native'];
	$eng = $_POST['eng'];
	$ru = $_POST['ru'];
	$prog1 = $_POST['prog1'];
	$prog2 = $_POST['prog2'];
	$prog3 = $_POST['prog3'];
	$work = $_POST['work'];
	include "upload.php";
	$type = 2;
	$query = "INSERT INTO userssos VALUES(null, '$name', '$surname', '$dadname', '$country', '$city', '$day', '$month', '$year', 
		'$email', '$login', md5('$pass'), '$telNumber', '$level', '$univer', '$faculty', '$spec', '$finish', '$native', '$eng', '$ru', '$prog1', '$prog2', '$prog3',
		'$work', '$target_file', '$type')";
	if($con->query($query)){
		header("Location: loginChoose.php");
	}else{
		die($con->error);
	}
 ?>