<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=1){
		header("Location:index.php");
	}
 ?>
<DOCTYPE! html>
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
	            <h1><a href="index_auth_rab.php" style="color:black;">Find Your Dream</a></h1>
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
	                <li><a href="myCompany.php">Моя компания</a></li>
	                <li><a href="myVakanciya.php">Мои вакансии</a></li>
	                <li><a href="svList.php">Список резюме</a></li>
	                <li><a href="help.php">Помощь</a></li>
	              </ul>
	              <ul class="nav navbar-nav navbar-right">
            		<li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list">
	                  	<?php 
	                  		echo $_SESSION['login'];
	                  	 ?>
	                  </span></a>
	                  <ul class="dropdown-menu">
	                    <li><a href="rab_cab.php"><span class="glyphicon glyphicon-briefcase"></span> Личный кабинет</a></li>
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
			    				</div>
			    					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			    						
			    					</div>
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
			    										<form action="updateRabcab.php" method="POST">
				    										<div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
				    											<label class="data_data">Фамилия:</label><br><br><br>
				    											<label class="data_data">Имя:</label><br><br>
				    											<label class="data_data">Отчество:</label><br><br><br>
				    											<label class="data_data">Эл.почта:</label><br><br><br>
				    											<label class="data_data">Моб.телефон:</label>
				    										</div>
				    										<div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
				    											<ul>
				    												<li  id="box"><input type="text" name="surname" placeholder="Новое фамилия..."></li><br>
				    												<li class="box1"><input type="text" name="name" placeholder="Новое имя..."></li><br>
				    												<li class="box1"><input type="text" name="dadname" placeholder="Новое отечество..."></li><br>
				    												<li class="box1"><input type="text" name="email" placeholder="Новая эл.почта..."></li><br>
				    												<li class="box1" style="margin-top:-3px;"><input type="text" name="telNumber" placeholder="Новый тел.номер..."></li><br>
				    												<input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']; ?>">		
				    												<input type="submit" value="Сохранить" style="height:34px; width:270px; font-size:20px;" >
				    											</ul>
				    										</div>
			    										</form>
			    									</div>
			    								</div>
			    								<div class="col-md-1"></div>
			    							</div>
			    							<div class="main_content">
			    								<div class="col-md-1 col-xs-1 col-sm-1 col-lg-1"></div>
			    								<div class="col-md-10 col-xs-10 col-sm-10 col-lg-10">
						    						<div class="header_1v">
						    							<div class="logo_header">
						    								<h1>Компания</h1>
						    							</div>
						    						</div>
						    						<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
						    							<div class="info_main">
							    							<div class="col-md-3 col-xs-5 col-sm-3 col-lg-3">
							    								<label class="info">Название:</label>
							    								<label class="info">Тип компании:</label>
							    								<label class="info">Сайт компании:</label>
							    								<label class="info">Город:</label>
							    								<label class="info">Кол-во сотрудников:</label>
							    							</div>
							    							<div class="col-md-9 col-xs-7 col-sm-9 col-lg-9">
							    								<label class="info1"><?php echo $_SESSION['companyName']; ?></label><br>
							    								<label class="info1"><?php echo $_SESSION['companyType']; ?></label><br>
							    								<label class="info1"><?php echo $_SESSION['website']; ?></label><br>
							    								<label class="info1"><?php echo $_SESSION['city']; ?></label><br>
							    								<label class="info1"><?php echo $_SESSION['count']; ?></label><br>
							    							</div>
							    						</div>
						    						</div>
						    						</div>
						    						<div class="col-md-2 col-xs-2 col-sm-2 col-lg-2"></div>
						    						<div class="col-md-10 col-xs-10 col-sm-10 col-lg-10"></div>
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
		    		<div class="col-md-2 col-sm-2 col-lg-2 col-xs-0"></div>
		    	</div>
		    </div>	
	    </div>
	    </div>
	   </div>

	</div>

</body>
</html>