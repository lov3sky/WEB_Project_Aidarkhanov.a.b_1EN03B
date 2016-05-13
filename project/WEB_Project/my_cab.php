<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=2){
		header("Location:index.php");
	}

	$id = $_SESSION['id'];
	$sql = "SELECT * FROM userssos WHERE id = '".$id."'";
	$res = $con->query($sql);
	$row = $res->fetch_array();
 ?>
<html>
<head>
	<title>Личный кабинет | Find Your Dream | Найди свою работу</title>
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
	                  </a></span>
	                  <ul class="dropdown-menu">
	                    <li><a href="my_cab.php"><span class="glyphicon glyphicon-briefcase"></span> Личный кабинет</a></li>
	                    <li><a href="logout.php"><span class="glyphicon glyphicon-remove-circle"></span> Выйти</a></li>
	                  </ul>
	                </li>
	              </ul>
	        </nav>
	        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12s">
		    	<div class="main">
		    		<div class="col-md-0 col-sm-0 col-lg-2 col-xs-0"></div>
		    		<div class="col-md-12 col-sm-12 col-lg-8 col-xs-12">
		    			<div class="resume_paper">
		    				<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
		    					<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
			    				</div>
			    					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			    						
			    					</div>
			    					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
			    						<div class="content">
			    							<div class="header">
			    								<div class="cross"></div>
			    								<div class="col-md-1"></div>
			    								<div class="col-md-10">
			    									<div class="col-md-4 col-xs-3 col-sm-4 col-lg-4">
			    										<div class="main_photo">
			    											<img src="<?php echo $row['image']; ?>">
			    										</div>
			    									</div>
			    									<div class="col-md-8 col-xs-9 col-sm-8 col-lg-8">
			    										<div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
			    											<label class="data_data">Фамилия:</label>
			    											<label class="data_data">Имя:</label>
			    											<label class="data_data">Отчество:</label>
			    											<label class="data_data">Город:</label>
			    											<label class="data_data">Эл.почта:</label>
			    											<label class="data_data">Моб.телефон:</label>
			    											<label class="data_data">Дата рождения:</label>
			    										</div>
			    										<div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
			    											<ul>
			    												<li  id="box"><?php echo $row['surname']; ?></li><br>
			    												<li class="box1"><?php echo $row['name']; ?></li><br>
			    												<li class="box1"><?php echo $row['fatherName']; ?></li><br>
			    												<li class="box1"><?php echo $row['city']; ?></li><br>
			    												<li class="box1"><?php echo $row['email']; ?></li><br>
			    												<li class="box1" style="margin-top:-4px;"><?php echo $row['telNumber']; ?></li><br>
			    												<li class="box1"><?php echo $row['day']; ?>&nbsp;<?php echo $row['month']; ?>&nbsp;<?php echo $row['year']; ?></li><br>
			    											</ul>
			    										</div>
			    									</div>
			    								</div>
			    								<div class="col-md-1"></div>
			    							</div>
			    							<div class="main_content">
			    								<div class="col-md-1 col-xs-1 col-sm-1 col-lg-1"></div>
			    								<div class="col-md-10 col-xs-10 col-sm-10 col-lg-10">
							    					<div class="header_1v">
						    							<div class="logo_header">
						    								<h1>Образование</h1>
						    							</div>
						    						</div>
						    						<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
							    						<div class="info_main">
							    							<div class="col-md-4 col-xs-5 col-sm-3 col-lg-3">
							    								<label class="info">Уровень:</label>
							    								<label class="info">Название УЗ:</label>
							    								<label class="info">Факультет:</label>
							    								<label class="info">Специальность:</label>
							    								<label class="info">Год окончания:</label>
							    							</div>
							    							<div class="col-md-9 col-xs-7 col-sm-9 col-lg-9">
							    								<label class="info1"><?php echo $row['level']; ?></label><br>
							    								<label class="info1"><?php echo $row['university']; ?></label><br>
							    								<label class="info1"><?php echo $row['faculty']; ?></label><br>
							    								<label class="info1"><?php echo $row['specialization']; ?></label><br>
							    								<label class="info1"><?php echo $row['finishYear']; ?></label>
							    							</div>
							    						</div>
						    						</div>
						    						<div class="header_1v">
						    							<div class="logo_header">
						    								<h1>Опыт работы</h1>
						    							</div>
						    						</div>
						    						<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
						    							<div class="info_main">
							    							<label class="info1"><?php echo $row['work']; ?></label>
							    						</div>
						    						</div>
						    						<div class="header_1v">
						    							<div class="logo_header">
						    								<h1>Навыки</h1>
						    							</div>
						    						</div>
						    						<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
						    							<div class="info_main">
							    							<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
							    								<label class="info"><?php echo $row['prog1']; ?></label>
							    								<label class="info"><?php echo $row['prog2']; ?></label>
							    								<label class="info"><?php echo $row['prog3']; ?></label>
							    							</div>
							    						</div>
						    						</div>
						    						<div class="header_1v">
						    							<div class="logo_header">
						    								<h1>Откликнувшиеся вакансии</h1>
						    							</div>
						    						</div>
						    						<div class="col-xs-12 col-lg-12">
						    							<div class="info_main">
						    								<?php 
						    									$query = "SELECT * FROM confirm";
						    									$result = $con->query($query);
						    									$cow = $result->fetch_array();
						    									if($cow['name'] === $row['name']){
						    								 ?>
						    								 <label class="info">Поздравляем! Компания <?php echo $cow['companyName']; ?> откликнулась на ваше резюме и вы можете связаться с ними и обсудить договор.</label>
						    								<?php } ?>
						    							</div>
						    						</div>
			    								</div>
			    								<div class="col-md-1 col-xs-1 col-sm-1 col-lg-1"></div>
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
		    		<div class="col-md-0 col-sm-0 col-lg-2 col-xs-0"></div>
		    	</div>
		    </div>	
	    </div>
	    </div>
	   </div>

	</div>

</body>
</html>