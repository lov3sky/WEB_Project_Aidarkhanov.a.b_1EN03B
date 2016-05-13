<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=1){
		header("Location: index.php");
	}
	$query = "SELECT * FROM userssos WHERE type='2'";
	$result = $con->query($query);
 ?>
<DOCTYPE! html>
<html>
<head>
	<title>Список резюме | Find Your Dream | Найди свою работу</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/alma.css">
    <style type="text/css">
    	.content ul li a{
    		font-weight: 300;
    		text-decoration: underline;
    		float: left;
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
	                <li><a href="svlist.php">Список резюме</a></li>
	                <li><a href="help.php">Помощь</a></li>
	              </ul>
	              <ul class="nav navbar-nav navbar-right">
	                <li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list">
	                  	<?php 
	                  		echo $_SESSION['login'];
	                  	 ?>
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
	        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12s">
		    	<div class="main">
		    		<div class="col-md-2 col-sm-2 col-lg-2 col-xs-0"></div>
		    		<div class="col-md-9 col-sm-9 col-lg-9 col-xs-12">
		    			<div class="resume_paper">
		    				<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
		    					<div class="col-md-9 col-xs-12 col-sm-9 col-lg-9">
			    					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			    						<div class="logo_l">
			    							<h1>Список резюме</h1>
			    						</div>
			    					</div>
			    					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
			    						<?php 
		    								while($row = $result->fetch_array()){
		    							 ?>
			    						<div class="content">
			    							<div class="col-md-4 col-xs-6 col-sm-4 col-lg-4">
			    								<ul>
		   											<li><strong>ФИО:</strong></li>
		   											<li><strong>Местоположение:</strong></li>
		   											<li><strong>Год рождения:</strong></li>
		   											<li><strong>ВУЗ:</strong></li><br>
		   											<li><a href="showSingleSV.php?name=<?php echo $row['name']; ?>" style="margin-bottom:15px;"><strong>Подробнее</strong></a></li>
		   										</ul>
			    							</div>
		   									<div class="col-md-8 col-sm-8 col-lg-8 col-xs-6">
		   										<ul>
		   											<li><?php echo $row['surname']; ?>&nbsp;<?php echo $row['name']; ?>&nbsp;<?php echo $row['fatherName']; ?></li>
		   											<li><?php echo $row['country']; ?>,&nbsp;<?php echo $row['city']; ?></li>
		   											<li><?php echo $row['day']; ?>&nbsp;<?php echo $row['month']; ?>&nbsp;<?php echo $row['year']; ?></li>
		   											<li><?php echo $row['university']; ?></li>
		   										</ul>
		   									</div>
		   									<div class="col-md-0 col-xs-0 col-sm-0 col-lg-2"></div>
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