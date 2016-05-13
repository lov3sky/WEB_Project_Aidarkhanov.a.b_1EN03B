<?php 
    include "connection.php";
    session_start();
    if(!isset($_SESSION['type']) || $_SESSION['type']!=0){
        header("Location: index.php");
    }
    $query = "SELECT * FROM usersrab";
    $res = $con->query($query);
    $row = mysqli_num_rows($res);
    $sql = "SELECT * FROM userssos WHERE type=2";
    $result = $con->query($sql);
    $col = $result->fetch_array();
    $numb2 = mysqli_num_rows($result);
    $smth = "SELECT * FROM vakanciya";
    $rose = $con->query($smth);
    $num = mysqli_num_rows($rose);
 ?>
<DOCTYPE! html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Статистика сайта | Find Your Dream | Найди свою работу</title>
	<link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/statistics.css">
    <script src="js/jquery-2.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-lg-12 col-xs-12">
		<div class="content">
    		<nav>	
                <div class="col-lg-12 col-xs-12">
    				<div class="fydline">
    					<h1 id="cloud">Find Your Dream</h1>
    				</div>
    				<div id="header">
    					<div id="brand">
    						<h1><a href="index_adminSOS.php">ADMIN</a></h1>
    					</div>
                        <div id="login">
                            <h1><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;<?php echo $_SESSION['login']; ?></a></h1>
                            <div id="dropdown">
                                <ul>
                                    <li><a href="adminCabSos.php">Мой кабинет</a></li>
                                    <li><a href="logout.php">Выйти</a></li>
                                </ul>
                            </div>
                        </div>
    				</div>
    			</div>
            </nav>
            <div style="width:100%; height: 100px;float:left;"></div>
            <div class="col-lg-12 col-xs-12">
                <div class="statistics">
                    <div class="col-lg-6 col-xs-12">
                        <button id="aa">Показать количество зарегистрированных пользователей</button>
                        <button id="aa1">Закрыть</button><br><br>
                        <button id="bb">Показать количество компании и резюме</button>
                        <button id="bb1">Закрыть</button><br><br>
                        <button id="cc">Показать количество вакансии и нанятых на работу</button>
                        <button id="cc1">Закрыть</button><br><br>
                    </div>
                    <?php 
                        $a = "SELECT * FROM confirm";
                        $b = $con->query($a);
                        $d = mysqli_num_rows($b);
                     ?>
                    <div class="col-lg-6 col-xs-12">
                        <p id="aaa">Зарегистрировались <?php echo $numb2;?> соискателя(ей).</p><br>
                        <p id="bbb">На сайте <?php echo intval($row)-1; ?> компания(и) и <?php echo $numb2; ?> резюме.</p><br>
                        <p id="ccc">Создано <?php echo $num; ?> вакансия(и) и было принято на работу <?php echo $d; ?> соискатель(ей).</p>
                    </div>
                </div>
            </div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $("#login").click(function(){
            $("#dropdown").slideToggle(400);
        });
        $("#aa").click(function(){
            $("#aaa").show(500);
            $("#aa1").show(500);
        });
        $("#aa1").click(function(){
            $("#aaa").hide(500);
            $("#aa1").hide(500);
        });
        $("#bb").click(function(){
            $("#bbb").show(500);
            $("#bb1").show(500);
        });
        $("#bb1").click(function(){
            $("#bbb").hide(500);
            $("#bb1").hide(500);
        });
        $("#cc").click(function(){
            $("#ccc").show(500);
            $("#cc1").show(500);
        });
        $("#cc1").click(function(){
            $("#ccc").hide(500);
            $("#cc1").hide(500);
        });
    });
</script>