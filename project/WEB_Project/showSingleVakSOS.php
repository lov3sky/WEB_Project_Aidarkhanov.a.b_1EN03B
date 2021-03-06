<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=2){
		header("Location: index.php");
	}
	$id = $_GET['id'];
	$query = "SELECT * FROM vakanciya WHERE id = '".$id."'";
	$res = $con->query($query);
	$row = $res->fetch_array();
 ?>
<DOCTYPE! html>
<html>
<head>
	<title><?php echo $row['companyName']; ?> | Find Your Dream | Найди свою работу</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/beeline.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <style type="text/css">
		.edit {
		  float: right;
		  font-weight: bold;
		}

		.edit  {
			font-size: 25px;
		}

		.edit:hover{
		  color: red;
		}
		.par p {
			font-size: 25px;
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
			                  	</a></span>
			                  	<ul class="dropdown-menu">
				                    <li><a href="my_cab.php"><span class="glyphicon glyphicon-briefcase"></span> Личный кабинет</a></li>
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
		        	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
		        		<div class="photos">
		        			<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
		        				<div id="more">
		        					<h1><?php echo $row['name']; ?></h1><br>
		        				</div>
		        			</div>
		        		</div>
		        	</div>
			       	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			       		<div class="par">
			       			<h2><strong>Компания:</strong></h2>
			       			<p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['companyName']; ?></p>
			       			<h2><strong>Сфера:</strong></h2>
			       			<p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['type']; ?></p>
			       			<h2><strong>О вакансии:</strong></h2>
			        		<p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['description']; ?></p>
			       			<h2><strong>Требования:</strong></h2>
			       			<p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['need']; ?></p>
			       		</div>
			       		<div class="par">
			       			<h2><strong>Время работы:</strong></h2>
			       			<p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['time']; ?></p>
			       			<h2><strong>Зарплата:</strong></h2>
			       			<p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['money'];?></p>
			       			<a class="edit" href="vakThrow.php?companyName=<?php echo htmlspecialchars($row['companyName'], ENT_QUOTES); ?>">Откликнутся</a>
			       		</div>
			       	</div>
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