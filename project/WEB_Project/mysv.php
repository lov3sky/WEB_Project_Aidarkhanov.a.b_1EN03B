<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=2){
		header("Location:index.php");
	}
	$id = $_SESSION['id'];
	$sql = "SELECT * FROM userssos WHERE id = '$id'";
	$res = $con->query($sql);
	$row = $res->fetch_array();
 ?>
<DOCTYPE! html>
<html>
<head>
	<title>Мое резюме | Find Your Dream | Найди свою работу</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/alma.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <style type="text/css">
    	.mainSVcontent h1 {
    		font-weight: bolder;
    		text-align: center;
    		text-decoration: underline;
    	}
    	.row {
    		width: 100%;
    		height: 100px;
    		float: left;
    	}
    	.label {
    		color:#000;
    		font-size: 25px;
    		margin-left: 15px;
    	}
    	.label a {
    		font-size: 25px;
    		float: right;
    		margin-bottom: 30px;
    	}
    	.mainSVcontent h2{
    		font-weight: bolder;
    		margin-left: 30px;
    	}
    	.line {
    		width: 100%;
    		height: 50px;
    		float: left;
    	}
    </style>

    <script src="js/jquery-2.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="all">
		<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
	      <div class="main_name_1">
	        <div class="center_1_v">
	          <div class="name_logo_1">
	            <h1><a href="index_authSOS.php" style="color:black;">Find Your Dream</a></h1>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
	      <div class="main_nv_1">
	        <nav class="navbar navbar-inverse">
	          <div class="container-fluid">
	            <div class="navbar-header">
	              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	              </button>
	            </div>
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	              <ul class="nav navbar-nav">
	              	<li><a href="mysv.php">Мое резюме</a></li>
	                <li><a href="comp_list.php">Компании</a></li>
	                <li><a href="vakList.php">Список вакансии</a></li>
	                <li><a href="helpSOS.php">Помощь</a></li>
	              </ul>
	              <ul class="nav navbar-nav navbar-right">
	                <li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list">
	                  	<?php echo $_SESSION['login']; ?>
	                  </a>
	                  <ul class="dropdown-menu">
	                    <li><a href="my_cab.php"><span class="glyphicon glyphicon-briefcase"></span> Личный кабинет</a></li>
    					<li><a href="logout.php"><span class="glyphicon glyphicon-remove-circle"></span> Выйти</a></li>
	                  </ul>
	                </li>
	              </ul>
	            </div>
	          </div>
	        </nav>
	        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12s">
		    	<div class="main">
		    		<div class="col-md-2 col-sm-2 col-lg-2 col-xs-0"></div>
		    		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
		    			<div class="resume_paper">
		    				<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
	    						<div class="row"></div>
	    						<div class="mainSVcontent">
	    							<h1>Мое резюме</h1><br>
	    							<h2>Личные данные</h2><br><br>
	    							<div class="col-lg-5 col-xs-5">
	    								<label class="label">Имя:</label><br><br>
	    								<label class="label">Фамилия:</label><br><br>
	    								<label class="label">Отечество:</label><br><br>
	    								<label class="label">Дата рождения:</label><br><br>
	    								<label class="label">Страна:</label><br><br>
	    								<label class="label">Город проживания:</label><br><br>
	    								<label class="label">Эл.почта:</label><br><br>
	    								<label class="label">Тел.номер:</label><br><br>
	    							</div>
	    							<div class="col-lg-7 col-xs-7">
	    								<label class="label"><?php echo $row['name']; ?></label><br><br>
	    								<label class="label"><?php echo $row['surname']; ?></label><br><br>
	    								<label class="label"><?php echo $row['fatherName']; ?></label><br><br>
	    								<label class="label"><?php echo $row['day']; ?>&nbsp;<?php echo $row['month']; ?>&nbsp;<?php echo $row['year']; ?></label><br><br>
	    								<label class="label"><?php echo $row['country']; ?></label><br><br>
	    								<label class="label"><?php echo $row['city']; ?></label><br><br>
	    								<label class="label"><?php echo $row['email']; ?></label><br><br>
	    								<label class="label"><?php echo $row['telNumber']; ?></label><br><br>
	    							</div>
	    							<div class="line"></div>
	    							<h2>Образование</h2><br><br>
	    							<div class="col-lg-5 col-xs-5">
	    								<label class="label">Название ВУЗа:</label><br><br>
	    								<label class="label">Факультет:</label><br><br>
	    								<label class="label">Специальность:</label><br><br>
	    								<label class="label">Степень:</label><br><br>
	    								<label class="label">Год окончания:</label><br><br>
	    							</div>
	    							<div class="col-lg-7 col-xs-7">
	    								<label class="label"><?php echo $row['university']; ?></label><br><br>
	    								<label class="label"><?php echo $row['faculty']; ?></label><br><br>
	    								<label class="label"><?php echo $row['specialization']; ?></label><br><br>
	    								<label class="label"><?php echo $row['level']; ?></label><br><br>
	    								<label class="label"><?php echo $row['finishYear']; ?>&nbsp;год</label><br><br>
	    							</div>
	    							<div class="line"></div>
	    							<h2>Языки</h2><br><br>
	    							<div class="col-lg-5 col-xs-5">
	    								<label class="label">Родной язык:</label><br><br>
	    								<label class="label">Английский язык:</label><br><br>
	    								<label class="label">Русский язык:</label><br><br>
	    							</div>
	    							<div class="col-lg-7 col-xs-7">
	    								<label class="label"><?php echo $row['native']; ?></label><br><br>
	    								<label class="label"><?php echo $row['english']; ?></label><br><br>
	    								<label class="label"><?php echo $row['russian']; ?></label><br><br>
	    							</div>
	    							<div class="line"></div>
	    							<h2>Навыки</h2><br><br>
    								<div class="col-lg-12 col-xs-12">
    									<label class="label"><?php echo $row['prog1']; ?></label>
    									<label class="label"><?php echo $row['prog2']; ?></label>
    									<label class="label"><?php echo $row['prog3']; ?></label>
    								</div>
    								<div class="line"></div>
	    							<h2>Опыт работы</h2><br><br>
	    							<div class="col-lg-12 col-xs-12">
	    								<label class="label"><?php echo $row['work']; ?></label><br><br>
	    								<label class="label"><a href="svEdit.php">Редактировать</a></label>
	    							</div>
	    						</div>
		    				</div>
		    			</div>
    			  		<div class="footer">
   							<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
   								<div class="foot">
   									<ul>
					   					<li>©2016 Find Your Dream</li>
					   					<li><a href="#" style="color:black;">Контакты</a></li>
   									</ul>
   								</div>
   							</div>
   						 </div>
		    		</div>
		    	</div>	
	    	</div>
	      </div>
	    </div>

	</div>

</body>
</html>