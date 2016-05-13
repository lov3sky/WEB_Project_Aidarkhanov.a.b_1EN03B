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
    <title>Find Your Dream | Найди свою работу</title>
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/my_cab.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <style type="text/css">
    	.otk {
    		width: 100%;
    		border-bottom:1px dashed black;
    		border-left:1px dashed black;
    		border-right:1px dashed black;
    		margin-bottom: 10px;
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
			    										<div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
			    											<label class="data_data">Фамилия:</label>
			    											<label class="data_data">Имя:</label>
			    											<label class="data_data">Отчество:</label>
			    											<label class="data_data">Эл.почта:</label>
			    											<label class="data_data">Моб.телефон:</label>
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
				    												<li class="box1" style="margin-top:-3px;"><?php echo $row['telNumber']; ?></li><label class="edit"><a href="rab_edit.php"><strong>Редактировать</strong></a></label>
				    											</ul>
			    										</div>
			    									</div>
			    								</div>
			    								<div class="col-md-1"></div>
			    							</div>
			    							<div class="main_content">
			    								<div class="col-md-1 col-xs-0 col-sm-1 col-lg-1"></div>
			    								<div class="col-md-10 col-xs-12 col-sm-10 col-lg-10">
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
							    								<label class="info">Адрес:</label>
							    								<label class="info">Кол-во сотрудников:</label>
							    							</div>
							    							<div class="col-md-9 col-xs-7 col-sm-9 col-lg-9">
							    								<label class="info1"><?php echo $row['companyName']; ?></label><br>
							    								<label class="info1"><?php echo $row['companyType']; ?></label><br>
							    								<label class="info1"><?php echo $row['website']; ?></label><br>
							    								<label class="info1"><?php echo $row['country']; ?>,&nbsp;<?php echo $row['address']; ?></label><br>
							    								<label class="info1"><?php echo $row['count']; ?></label><br>
							    							</div>
							    						</div>
							    						<div class="logo_header">
							    							<h1>Откликнувшиеся соискатели</h1>
							    							<?php 
							    								$companyName = $row['companyName'];
							    								$sql = "SELECT * FROM queue WHERE companyName = '".$companyName."'";
							    								$result = $con->query($sql);
							    								while($col = $result->fetch_array()){
							    							 ?>
							    							 <div class="col-lg-12 col-xs-11">
								    							<div class="otk">
								    								<label class="info1">Имя:&nbsp;&nbsp;&nbsp;<?php echo $col['name']; ?></label><br>
								    								<label class="info1">Фамилия:&nbsp;&nbsp;&nbsp;<?php echo $col['surname']; ?></label><br>
								    								<label class="info1">Отчество:&nbsp;&nbsp;&nbsp;<?php echo $col['dadname']; ?></label><br>
								    								<label class="info1"><a href="showSingleSV.php?name=<?php echo $col['name']; ?>" style="font-size:25px;font-weight:bold;">Подробнее</a></label>
								    								<label class="info1"><a href="pod.php?name=<?php echo $col['name']; ?>&surname=<?php echo $col['surname']; ?>&dadname=<?php echo $col['dadname']; ?>&companyName=<?php echo $col['companyName']; ?>" style="font-size:25px;"><strong>Подтвердить</strong></a></label>
								    							</div>
								    						</div>
							    							<?php 
							    								}
							    							 ?>
							    						</div>
						    						</div>
			    								</div>
			    								<div class="col-md-1 col-xs-0 col-sm-1 col-lg-1"></div>
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