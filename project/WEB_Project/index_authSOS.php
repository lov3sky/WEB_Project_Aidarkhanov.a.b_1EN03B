<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=2){
		header("Location:index.php");
	}
	$sql = "SELECT * FROM specialization";
	$res = $con->query($sql);
	$query = "SELECT * FROM city";
	$result = $con->query($query);
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Find Your Dream | Найди свою работу</title>
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <style type="text/css">
    	.ind ul li {
    		text-align: center;
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
				                  		<?php 
								            echo $_SESSION['login'];
				                  		 ?>
				                  	</span></a>
				                  	<ul class="dropdown-menu">
					                    <li><a href="my_cab.php"><span class="glyphicon glyphicon-briefcase"></span> Личный кабинет</a></li>
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
				    	<div style="width: 100%; height: 200px;"></div>
				      	<div id="one">
					      	<div class="col-md-2 col-lg-2 col-sm-2 col-xs-0"></div>
					      	<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
					      		<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
					      			<div class="job_by_prof">
					      				<h1><p>Работа по профессиям</p></h1>
					      			</div>
					      			<div class="row"></div>
					      			<div class="col-xs-12 col-lg-12">
					      				<div class="ind">
					      					<?php while($row1 = $res->fetch_array()){ ?>
					      					<ul>
					      						<li><a href="spec.php?specialization=<?php echo $row1['specialization']; ?>"><?php echo $row1['specialization']; ?></a></li>
					      					</ul>
					      					<?php } ?>
					      				</div>
					      			</div>
					      		</div>
					      		<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
					      			<div class="row_2"></div>
					      			<div class="job_by_city">
					      				<h1><p>Работа по городам</p></h1>
					      			</div>
					      			<div class="row"></div>
					      			<div class="col-xs-12 col-lg-12">
					      				<div class="ind">
					      					<?php while($row2 = $result->fetch_array()){ ?>
						      					<ul>
						      						<li><a href="city.php?city=<?php echo $row2['city']; ?>"><?php echo $row2['city']; ?></a></li>
						      					</ul>
						      				<?php } ?>
					      				</div>
					      			</div>
					      		</div>
					      		<div class="col-md-4"></div>
					      		<div class="col-md-4"></div>
					      		<div class="col-md-4"></div>
					      	</div>
					      	<div class="col-md-2 col-lg-2 col-sm-2 col-xs-0"></div>
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
			   					<li>©2016 Find Your Dream</li>
			   					<li><a href="#" style="color:black;">Контакты</a></li>
			   				</ul>
			   			</div>
			   		</div>
			    </div>
	    	</div>
    	</div>
	</div>
</body>
</html>
