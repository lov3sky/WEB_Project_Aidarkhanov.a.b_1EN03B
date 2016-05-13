<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=0){
		header("Location: index.php");
	}
 ?>
<!DOCTYPE html>
<html>
  	<head>
	    <meta charset="utf-8">
	    <title>Find Your Dream | Найди свою работу</title>
	    <link rel="shortcut icon" href="logo.png" type="image/png">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/index_admin.css">
	    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

	    <script src="js/jquery-2.2.0.js"></script>
	    <script src="js/bootstrap.min.js"></script>
  	</head>
  	<body>
	  	<div class="all">
		    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
		      	<div class="main_name_1">
			        <div class="center_1_v">
		        	  	<div class="name_logo_1">
			            	<h1><a href="index_adminRAB.php" style="color:black;">Find Your Dream</a></h1>
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
					                <li><a href="stats.php">Статистика сайта</a></li>
					                <li><a href="manage.php">Управление сайтом</a></li>
					            </ul>
					            <ul class="nav navbar-nav navbar-right">
					                <li class="dropdown">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list">
						                	<?php echo $_SESSION['login']; ?>
						                </a></span>
						                <ul class="dropdown-menu">
						                    <li><a href="adminCabRab.php"><span class="glyphicon glyphicon-briefcase"></span> Личный кабинет</a></li>
	                    					<li><a href="logout.php"><span class="glyphicon glyphicon-remove-circle"></span> Выйти</a></li>
						                </ul>
					                </li>
					            </ul>
				            </div>
			          	</div>
			        </nav>
			        <div class="photo_back_view">
				       	<div class="fff">
						    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
						    	<div class="empty"></div>
						      	<div id="one">
							      	<div class="col-md-2 col-lg-2 col-sm-2 col-xs-0"></div>
							      	<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
							      		<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
							      			<div class="job_by_prof">
						      					<h1><p>Добро пожаловать, Админ!</p></h1>
							      			</div>
							      		</div>
							      	</div>
							      	<div class="col-md-2 col-lg-2 col-sm-2 col-xs-0"></div>
						      	</div>
				     		</div>
			  				<div class="row_3"></div>
		      			</div>
		      		</div>
	      		</div>
		      	<div class="footer">
			   		<div class="col-md-2 col-sm-2 col-lg-2 col-xs-0"></div>
			   		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
			   			<div class="foot">
			   				<ul>
			   					<li>&copy;&nbsp;2016 Find Your Dream</li>
			   					<li><a href="#" style="color:black;">Контакты</a></li>
			   				</ul>
			   			</div>
			   		</div>
			    </div>
			</div>
    	</div>
  	</body>
</html>