<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=0){
		header("Location:index.php");
	}
 ?>
<DOCTYPE! html>
<html>
<head>
	<title>Личный кабинет Администратора| Find Your Dream | Найди свою работу</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/my_cab.css">
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
		            <h1><a href="index_adminSOS.php" style="color:black;">Find Your Dream</a></h1>
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
		              	<ul class="nav navbar-nav navbar-right">
		            		<li class="dropdown">
			                  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list">
			                  	<?php 
			                  		echo $_SESSION['login'];
			                  	 ?>
			                  	</span></a>
			                  	<ul class="dropdown-menu">
				                    <li><a href="adminCabSos.php"><span class="glyphicon glyphicon-briefcase"></span> Личный кабинет</a></li>
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
			    					<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
				    					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
				    						<div class="content">
				    							<div class="header">
				    								<div class="cross"></div>
				    								<div class="col-md-1"></div>
				    								<div class="col-md-10">
				    									<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
				    										<div class="main_photo">
				    											<img src="<?php echo $_SESSION['image']; ?>">
				    										</div>
				    									</div>
				    									<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
				    										<div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
				    											<label class="data_data">Фамилия:</label>
				    											<label class="data_data">Имя:</label>
				    											<label class="data_data">Отчество:</label>
				    											<label class="data_data">Эл.почта:</label>
				    											<label class="data_data">Логин:</label>
				    										</div>
				    										<div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
				    											<?php 
				    												$id = $_SESSION["id"];
				    												$query = "SELECT * FROM usersrab WHERE id = '$id' ";
				    												$res = $con->query($query);
				    												$row = $res->fetch_array();
				    											 ?>
					    											<ul>
					    												<li  id="box"><?php echo $row['surname']; ?></li><br>
					    												<li class="box1"><?php echo $row['name']; ?></li><br>
					    												<li class="box1"><?php echo $row['dadname']; ?></li><br>
					    												<li class="box1"><?php echo $row['email']; ?></li><br>
					    												<li class="box1" style="margin-top:-3px;"><?php echo $row['login']; ?></li>
					    											</ul>
				    										</div>
				    									</div>
				    								</div>
				    								<div class="col-md-1"></div>
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
			    		<div class="col-md-2 col-sm-2 col-lg-2 col-xs-0"></div>
			    	</div>
		    	</div>	
   			</div>
	   </div>
	</div>
</body>
</html>