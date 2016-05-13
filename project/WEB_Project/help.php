<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=1){
		header("Location: index.php");
	}
 ?>
<DOCTYPE! html>
<html>
<head>
	<title>Обратная связь | Find Your Dream | Найди свою работу</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/help.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <style type="text/css">
    	.main {
    		padding: 10px;
    	}
    	textarea{
    		resize:none;
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
				                    	<?php echo $_SESSION['login']; ?>
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
			    					<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
				    					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				    						<div class="logo_l">
				    							<h1>Обратная связь</h1>
				    						</div>
				    					</div>
				    					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
				    						<div class="content">
				    							<p>Мы ценим ваше время и стремимся максимально быстро и качественно предоставить ответ на ваш вопрос. Пожалуйста, прежде чем обратиться в службу поддержки, ознакомьтесь с соответствующим разделом помощи — там вы сможете найти ответы на наиболее часто задаваемые вопросы.</p>
				    							<p>Если вы забыли пароль, воспользуйтесь функцией его восстановления.</p>
				    							<p>Если вы хотите подсказать нам, как улучшить наш сайт, высказать ваши замечания или задать вопрос службе поддержки, пожалуйста, выберите подходящую тему и категорию вашего вопроса из предложенных вариантов:</p>
				    							<br><br>
				    							<form method="POST" action="helpAction2.php">
					    							<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
					    								<label class="inf">Кому вы адресуете<br> своё сообщение</label>
					    								<br><br>
					    								<label class="inf">Тема</label>
					    								<br><br>
					    								<label class="inf">Содержание</label>
					    								<br><br><br><br><br><br><br><br><br><br><br>
					    								<label class="inf">ФИО</label>
					    								<br><br><br>
					    								<label class="inf">Эл.почта</label>
					    								<br><br>
					    							</div>
					    							<div class="col-md-8 col-sm-8 col-xs-8 col-lg-8">
					    								<select id="sel" name="choice">
					    									<option value="n/a">Не выбрано</option>
					    									<option value="Техническая поддержка">Техническая поддержка</option>
					    									<option value="Отдел маркетинга и рекламы">Отдел маркетинга и рекламы</option>
					    									<option value="Отдел по работе с соискателями">Отдел по работе с соискателями</option>
					    								</select>
					    								<br><br>
					    								<input type="text" class="text" name="theme">
					    								<br><br>
					    								<textarea id="tex1" name="description"></textarea>
					    								<br><br>
					    								<input type="text" class="text" name="name">
					    								<br><br>
					    								<input type="text" class="text" name="email">
					    								<input type="hidden" name="type"  value="<?php echo $_SESSION['type']; ?>">
					    								<br><br>
					    								<input type="submit" value="Отправить" id="sub1">
					    							</div>
					    						</form>
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
</body>
</html>