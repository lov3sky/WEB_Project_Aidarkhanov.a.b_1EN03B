<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=1){
		header("Location: index.php");
	}
	$com = $_SESSION["companyName"];
	$query = "SELECT * FROM vakanciya WHERE companyName = '$com'";
	$res = $con->query($query);
	$row = $res->fetch_array();
 ?>
<DOCTYPE! html>
<html>
<head>
	<title><?php echo $_SESSION['companyName']; ?></title>
    <meta charset="utf-8">
    <title>Find Your Dream | Найди свою работу</title>
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/beeline.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <style type="text/css">
		.edit {
		  margin: 40px 0px 8px 0px;
		  font-size: 20px;
		  float: right;
		  font-weight: 300;
		}

		.edit a:hover{
		  color: red;
		}
		.par p {
			font-size: 25px;
		}
		textarea {
			resize: none;
			width: 550px;	
		}
		input[type="submit"]{
			height: 40px;
			width: 200px;
			font-size: 20px;
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
	            <h1><a href="index_auth_rab.php" style="color:black;">Find Your Dream</a></h1>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
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
			                <li><a href="myCompany.php">Моя компания</a></li>
			                <li><a href="myVakanciya.php">Мои вакансии</a></li>
			                <li><a href="svList.php">Список резюме</a></li>
			                <li><a href="help.php">Помощь</a></li>
		              	</ul>
		              	<ul class="nav navbar-nav navbar-right">
			                <li class="dropdown">
			                  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list">
			                  		<?php echo $_SESSION['login']; ?>
			                  	</a></span>
			                  	<ul class="dropdown-menu">
				                    <li><a href="rab_cab.php"><span class="glyphicon glyphicon-briefcase"></span> Личный кабинет</a></li>
	            					<li><a href="logout.php"><span class="glyphicon glyphicon-remove-circle"></span> Выйти</a></li>
			                    </ul>
			                </li>
		              	</ul>
		            </div>
	          	</div>
	        </nav>
	      	<div class="main_nv_1">
		        <div class="col-md-2 col-xs-0 col-sm-2 col-lg-2"></div>
		        <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
		        	<form method="POST" action="vakanciyaEdit.php">
			        	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			        		<div class="photos">
			        			<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			        				<div id="more">
			        					<h1>Название: <input type="text" name="name" placeholder="Название вашей вакансии..."></h1>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
				       	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
				       		<div class="par">
				       			<h2><strong>Тип вакансии:</strong></h2>
				       			<select style="height:45px; width:350px; font-size:20px;" name="type"> 
				       					<option value="Автомобильный бизнес">Автомобильный бизнес</option>
				       					<option value="Административный персонал">Административный персонал</option>
				       					<option value="Банки, инвестиции, лизинг">Банки, инвестиции, лизинг</option>
				       					<option value="Высший менеджмент">Высший менеджмент</option>
				       					<option value="Добыча сырья">Добыча сырья</option>
				       					<option value="Инсталляция и сервис">Инсталляция и сервис</option>
				       					<option value="Информационные технологии, интернет, телеком">Информационные технологии, интернет, телеком</option>
				       					<option value="Искусство, развлечения, масс-медиа">Искусство, развлечения, масс-медиа</option>
				       					<option value="Маркетинг, реклама, PR">Маркетинг, реклама, PR</option>
				       					<option value="Медицина, фармацевтика">Медицина, фармацевтика</option>
				       					<option value="Начало карьеры, студенты">Начало карьеры, студенты</option>
				       					<option value="Спортивные клубы, фитнес, салоны красоты">Спортивные клубы, фитнес, салоны красоты</option>
				       					<option value="Страхование">Страхование</option>
				       					<option value="Строительство, недвижимость">Строительство, недвижимость</option>
				       				</select>
				       			<h2><strong>О вакансии:</strong></h2>
				       			<p><textarea name="description" placeholder="О вашей вакансии..."></textarea></p>
				       			<h2><strong>Требования:</strong></h2>
				        		<p><input type="text" name = "need" placeholder="Ваши требования..."></p>
				       		</div>
				       		<div class="par">
				       			<h2><strong>Время работы:</strong></h2>
				       			<p><input type="text" name="time" placeholder="Время работы..."></p>
				       			<h2><strong>Зарплата:</strong></h2>
				       			<p><input type="text" name="money" placeholder="Зарплата..."></p><br>
				       			<p><input type="hidden" name="companyName" value="<?php echo $_SESSION['companyName']; ?>"></p>
				       			<input type="submit" value="Сохранить">
				       		</div>
				       	</div>
				    </form>
		        </div>
		        <div class="col-md-2 col-xs-0 col-sm-2 col-lg-2"></div>
		    </div>
	    </div>
	    <div class="footer">
		   		<div class="col-md-2 col-sm-2 col-lg-2 col-xs-0"></div>
		   		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
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
</body>
</html>