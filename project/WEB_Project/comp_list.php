<?php 
	session_start();
	include "connection.php";
	if(!isset($_SESSION['type']) || $_SESSION['type']!=2){
		header("Location: index.php");
	}
	$query="SELECT id, companyName FROM usersrab WHERE type=1";
	$result = $con->query($query);
 ?>
<html>
<head>
	<title>Список компании | Find Your Dream | Найди свою работу</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/comp_list.css">
    <style type="text/css">
    	.liw a{
    		font-size: 30px;
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
	              </ul>>
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
	        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12s">
		    	<div class="main">
		    		<div class="col-md-2 col-sm-2 col-lg-2 col-xs-0"></div>
		    		<div class="col-md-9 col-sm-9 col-lg-9 col-xs-12">
		    			<div class="resume_paper">
		    				<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
		    					<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
			    				</div>
			    					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			    						<div class="logo_l">
			    							<h1>Список компании КЗ</h1>
			    						</div>
			    					</div>
			    					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
			    						<div class="content">
		   									<div class="col-lg-12 col-xs-12	">
		   										<?php while($row=$result->fetch_array()){ ?>
		   										<ul>
		   											<li class="liw"><span class="glyphicon glyphicon-triangle-right"></span><a href="showSingleCompany.php?id=<?php echo $row['id']; ?>"><?php echo $row['companyName']; ?></a></li><br>
		   										</ul>
		   										<?php } ?>
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
		    	</div>	
	    	</div>
	      </div>
	    </div>

	</div>

</body>
</html>