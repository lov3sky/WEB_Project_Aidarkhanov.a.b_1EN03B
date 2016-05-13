<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=1){
		header("Location: index.php");
	}
	$query = "SELECT * FROM vakanciya";
	$result = $con->query($query);
 ?>
<DOCTYPE! html>
<html>
<head>
	<title>Мои вакансии | Find Your Dream | Найди свою работу</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/alma.css">
    <style type="text/css">
    	.content  label a{
    		font-weight: bold;
    		text-decoration: underline;
    		float: right;
    		margin-left: 50px;
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
		    					<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			    					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			    						<div class="logo_l">
			    							<h1>Мои вакансии</h1>
			    						</div>
			    					</div>
			    					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
			    						<div class="content" id="non">
			    							<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			    								<h1 id="h1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;В данный момент у вас нету вакансии</h1>
			    							</div>
		   								</div>
		   								<?php while($row = $result->fetch_array()){ ?>
			    						<div class="content" id="cont">
			    							<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			    								<ul>
			    									<li id='zero'><strong>Название компании:</strong>&nbsp;&nbsp;&nbsp;<?php echo $row['companyName']; ?></li>
		   											<li id='one'><strong>Название вакансии:</strong>&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?></li>
		   											<li id='two'><strong>Описание:</strong>&nbsp;&nbsp;&nbsp;<?php echo substr($row['description'],0,110)."..."; ?></li>
		   											<li id='three'><strong>Зарплата:</strong>&nbsp;&nbsp;&nbsp;<?php echo $row['money']; ?></li>
		   										</ul>
		   										<label><a href="showSingleVak.php?id=<?php echo $row['id']; ?>">Подробнее</a></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   											<label><a href="vakDelete.php?id=<?php echo $row['id']; ?>">Удалить вакансию</a></label>
			    							</div>
		   								</div>
		   								<?php } ?>
		   								<div class="add">
		   									<ul>
		   										<li><a href="VakanciyaAdd.php">Добавить вакансию</a></li>
		   									</ul>
		   								</div>
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
// <script type="text/javascript">
// 	var how = document.getElementById('zero').value;
// 	var row = document.getElementById('one').value;
// 	var now = document.getElementById('two').value;
// 	var cow = document.getElementById('three').value;
// 	if(how == '' && row == '' && now == '' && cow == ''){
// 		document.getElementById("non").style.display = 'block';
// 		document.getElementById("cont").style.display = 'none';
// 		document.getElementById("h1").style.fontWeight = 'bold';
// 	}
// </script>