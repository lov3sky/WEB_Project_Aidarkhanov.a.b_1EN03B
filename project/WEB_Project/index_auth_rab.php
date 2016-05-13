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
    <meta charset="utf-8">
    <title>Find Your Dream | Найди свою работу</title>
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">

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
	        <div class="photo_back_view">
	        	<div class="fff">
			    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
			    	<div class="line"></div>
			      	<div id="one">
				      	<div class="col-md-2 col-lg-2 col-sm-0 col-xs-0"></div>
				      	<div class="col-md-8 col-sm-12 col-lg-8 col-xs-12">
				      		<div class="col-xs-12 col-lg-12">
				      			<div class="job_by_prof">
				      				<h1><p>Добро пожаловать!</p></h1>
				      			</div>
				      			<div class="row"></div>
				      			<div class="col-xs-12 col-lg-12">
				      				<div class="col">
				      					<p>
				      						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Добро пожаловать на сайт &copy;&nbsp;Find Your Dream! На нашем сайте у вас есть большая возможность найти работников в Вашу компанию.
				      						Вы можете разместить Ваши вакансии и в скором времени на Ваши вакансии откликнутся соискатели.
				      					</p>
				      					<p>
				      						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;На сайте работает быстрая Техническая Поддержка, которая ответит Вам на Ваши вопросы.
				      					</p>
				      					<p style="float:right; font-size:22px;">Администрация сайта &copy;&nbsp;Find Your Dream</p>
				      				</div>
				      			</div>
				      		</div>
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
  </body>
</html>
