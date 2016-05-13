<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=2){
		header("Location: index.php");
	}
	$city = $_GET['city'];
	$query = "SELECT vakanciya.id, vakanciya.companyName, vakanciya.name, vakanciya.description, vakanciya.money FROM vakanciya INNER JOIN usersrab ON vakanciya.companyName = usersrab.companyName WHERE city='".$city."'";
	$result = $con->query($query);
 ?>
<DOCTYPE! html>
<html>
<head>
	<title>Список вакансии | Find Your Dream | Найди свою работу</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/alma.css">
    <style type="text/css">
    	.content  a{
    		font-weight: bold;
    		text-decoration: underline;
    		float: right;
    		margin-right: 10px;
    		margin-bottom: 20px;
    	}
    	#non {
    		display: none;
    		padding: 5px;
    		font-size: 20px;
    		border: 0px;
    	}
    </style>
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
	        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12s">
		    	<div class="main">
		    		<div class="col-md-2 col-sm-2 col-lg-2 col-xs-0"></div>
		    		<div class="col-md-9 col-sm-9 col-lg-9 col-xs-12">
		    			<div class="resume_paper">
		    				<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
		    					<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			    					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			    						<div class="logo_l">
			    							<h1>Список вакансии</h1>
			    						</div>
			    					</div>
			    					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
		   								<?php while($row = $result->fetch_array()){ ?>
			    						<div class="content" id="cont">
			    							<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			    								<ul>
			    									<li id='zero'><strong>Название компании:</strong>&nbsp;&nbsp;&nbsp;<?php echo $row['companyName']; ?></li>
		   											<li id='one'><strong>Название вакансии:</strong>&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?></li>
		   											<li id='two'><strong>Описание:</strong>&nbsp;&nbsp;&nbsp;<?php echo substr($row['description'],0,110)."..."; ?></li>
		   											<li id='three'><strong>Зарплата:</strong>&nbsp;&nbsp;&nbsp;<?php echo $row['money']; ?></li>
		   										</ul>
		   										<p><a href="showSingleVakSOS.php?id=<?php echo $row['id']; ?>">Подробнее</a></p>
			    							</div>
		   								</div>
		   								<?php } ?>
		   							</div>
		   						</div>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-lg-2"></div>
		    	<div class="col-lg-10">
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
</body>
</html>