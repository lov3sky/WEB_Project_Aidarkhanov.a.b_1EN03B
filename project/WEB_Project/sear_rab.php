<html>
<head>
	<title>Создание вакансии</title>
    <meta charset="utf-8">
    <title>Find Your Dream | Найди свою работу</title>
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/sear_rab.css">

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
	            <h1><a href="index.php" style="color:black;">Find Your Dream</a></h1>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
	      <div class="main_nv_1">
	        <nav class="navbar navbar-inverse">
	          <div class="container-fluid">
	            <!-- Brand and toggle get grouped for better mobile display -->
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
	                <li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ищу работу</a>
	                  <ul class="dropdown-menu">
	                    <li><a href="resume.php">Создать резюме</a></li>
	                  </ul>
	                </li>
	                <li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ищу сотрудников</a>
	                  <ul class="dropdown-menu"> 
	                    <li><a href="#">Разместить вакансию</a></li>
	                  </ul>
	                </li>
	                <li><a href="comp_list.php">Компании</a></li>
	                <li><a href="help.php">Помощь</a></li>
	              </ul>
	              <ul class="nav navbar-nav navbar-right">
	                <li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Авторизация</a>
	                  <ul class="dropdown-menu">
	                    <form>
	                    	<label>Логин</label>
	                    	<input type="text" name="login" placeholder="Логин" class="two">
	                    	<label>Пароль</label>
	                    	<input type="text" name="password" placeholder="Пароль" class="two">
	                    	<input type="submit" name="submit" value="Авторизоваться" id="butt">
	                    </form>
	                  </ul>
	                </li>
	              </ul>
	              <ul class="nav navbar-nav navbar-right">
	                <li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Регистрация</a>
	                  <ul class="dropdown-menu">
	                    <li><a href="sos_regist.php">Соискателя</a></li>
	                    <li><a href="rab_regist.php">Работодателя</a></li>
	                  </ul>
	                </li>
	              </ul>
	              <form class="navbar-form navbar-right" role="search">
	                <div class="form-group">
	                  <input type="text" class="form-control search_bar" placeholder="Что ищете?">
	                </div>
	                <button type="submit" class="btn btn-default">Поиск</button>
	              </form>
	            </div><!-- /.navbar-collapse -->
	          </div><!-- /.container-fluid -->
	        </nav>
	        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12s">
		    	<div class="main">
		    		<div class="col-md-2 col-sm-2 col-lg-2 col-xs-0"></div>
		    		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
		    			<div class="resume_paper">
		    				<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
		    					<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
		    						<div class="header">
		    							<div class="logo_header">
		    								<h1>Создание вакансии</h1>
		    							</div>
		    						</div>
		    						<div class="content">
		    							<div class="logo_header_2">
		    								<h1>Основная информация</h1>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="col-md-3  col-xs-3 col-sm-3 col-lg-3"></div>
		    					<div class="ll">
			    					<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
			    						<label class="info">Название:</label><br>
			    						<label class="info">Вид профессии:</label><br><br>
			    						<label class="info">Название компании:</label>
			    						<br><br>
			    						<label class="info">Город:</label>
			    						<br><br>
			    						<label class="info">Зарплата:</label>
			    						<br><br>
			    						<label class="info">Обязанности:</label>
			    						<br><br><br><br><br>
			    						<label class="info">Условия:</label>
			    						<br><br><br><br><br>
			    						<label class="info">Требования:</label>
			    						<br><br><br><br><br>
			    						<label class="info">Знания:</label>
			    						<br><br><br><br>
			    					</div>
			    					<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
			    						<input type="text" name="surname" class="inp"  required><br>
			    						<select class="select" required>
			    							<option>Не выбрано</option>
			    							<option>Автомобильный бизнес</option>
			    							<option>Административный персонал</option>
			    							<option>Банки, инвестиции, лизинг</option>
			    							<option>Высший менеджмент</option>
			    							<option>Добыча сырья</option>
			    							<option>Инсталляция и сервис</option>
			    							<option>Информационные технологии, интернет, телеком</option>
			    							<option>Искусство, развлечения, масс-медиа</option>
			    							<option>Маркетинг, реклама, PR</option>
			    							<option>Медицина, фармацевтика</option>
			    							<option>Начало карьеры, студенты</option>
			    							<option>Спортивные клубы, фитнес, салоны красоты</option>
			    							<option>Страхование</option>
			    							<option>Строительство, недвижимость</option>
			    						</select><br><br>
			    						<input type="text" name="city" class="inp" required>
			    						<br><br>
			    						<input type="text" name="city" class="inp" required>
			    						<br><br>
			    						<input type="text" name="city" class="inp" required>
			    						<br><br>
			    						<textarea id="text"></textarea>
			    						<br><br>
			    						<textarea id="text"></textarea>
			    						<br><br>
			    						<textarea id="text"></textarea>
			    						<br><br>
			    						<textarea id="text"></textarea>
			    					</div>
			    				<input type="submit" value="Сохранить" id="sub">
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