<html>
<head>
	<title>Создание резюме</title>
    <meta charset="utf-8">
    <title>Find Your Dream | Найди свою работу</title>
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/resume.css">

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
	                    <li><a href="sear_rab.php">Разместить вакансию</a></li>
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
		    								<h1>Создание резюме</h1>
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
			    						<label class="info">Фамилия</label><br>
			    						<label class="info">Имя</label><br>
			    						<div class="row"></div>
			    						<label class="info">Дата рождения</label><br>
			    						<br><br>
			    						<label class="info">Пол</label>
			    						<br><br>
			    						<label class="info">Город</label>
			    						<br><br>
			    						<label class="info">Моб.телефон</label>
			    						<br><br>
			    						<label class="info">Гражданство</label>
			    						<br><br>
			    						<label class="info">Разрешение на работу</label>
			    					</div>
			    					<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
			    						<input type="text" name="surname" class="inp"  required><br>
			    						<input type="text" name="name" class="inp" required><br>
			    						<div class="row"></div>
			    						<select class="select_day" required>
			    							<option>1</option>
			    							<option>2</option>
			    							<option>3</option>
			    							<option>4</option>
			    							<option>5</option>
			    							<option>6</option>
			    							<option>7</option>
			    							<option>8</option>
			    							<option>9</option>
			    							<option>10</option>
			    							<option>11</option>
			    							<option>12</option>
			    							<option>13</option>
			    							<option>14</option>
			    							<option>15</option>
			    							<option>16</option>
			    							<option>17</option>
			    							<option>18</option>
			    							<option>19</option>
			    							<option>20</option>
			    							<option>21</option>
			    							<option>22</option>
			    							<option>23</option>
			    							<option>24</option>
			    							<option>25</option>
			    							<option>26</option>
			    							<option>27</option>
			    							<option>28</option>
			    							<option>29</option>
			    							<option>30</option>
			    							<option>31</option>
			    						</select>
			    						<select class="select_month" required>
			    							<option>январь</option>
			    							<option>февраль</option>
			    							<option>март</option>
			    							<option>апрель</option>
			    							<option>май</option>
			    							<option>июнь</option>
			    							<option>июль</option>
			    							<option>август</option>
			    							<option>сентябрь</option>
			    							<option>октябрь</option>
			    							<option>ноябрь</option>
			    							<option>декабрь</option>
			    						</select>
			    						<select class="select_year" required>
			    							<option>1997</option>
			    							<option>1996</option>
			    							<option>1995</option>
			    							<option>1994</option>
			    							<option>1993</option>
			    							<option>1992</option>
			    							<option>1991</option>
			    							<option>1990</option>
			    							<option>1989</option>
			    							<option>1988</option>
			    							<option>1987</option>
			    							<option>1986</option>
			    							<option>1985</option>
			    							<option>1984</option>
			    							<option>1983</option>
			    							<option>1982</option>
			    							<option>1981</option>
			    							<option>1980</option>
			    							<option>1979</option>
			    							<option>1978</option>
			    							<option>1977</option>
			    							<option>1976</option>
			    							<option>1975</option>
			    							<option>1974</option>
			    							<option>1973</option>
			    							<option>1972</option>
			    							<option>1971</option>
			    							<option>1970</option>
			    							<option>1969</option>
			    							<option>1968</option>
			    							<option>1967</option>
			    							<option>1966</option>
			    						</select><br>
			    						<br><br>
			    						<select class="select" required>
			    							<option>Не выбрано</option>
			    							<option>Мужской</option>
			    							<option>Женский</option>
			    						</select>
			    						<br><br>
			    						<input type="text" name="city" class="inp" required>
			    						<br><br>
			    						<input type="text" name="first_num" value="+7" id="f_n">
			    						<input type="text" name="code_num" id="c_n" required>
			    						<input type="text" name="number" id="numb" required>
			    						<br><br>
			    						<select class="select" required>
			    							<option>Не выбрано</option>
			    							<option>Казах</option>
			    							<option>Русский</option>
			    							<option>Киргиз</option>
			    							<option>Туркмен</option>
			    							<option>Другой</option>
			    						</select>
			    						<br><br>
			    						<select class="select" required>
			    							<option>Не выбрано</option>
			    							<option>Есть</option>
			    							<option>Нету</option>
			    						</select>
			    					</div>
			    				</div>
			    				<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
		    						<div class="content">
		    							<div class="logo_header_2">
		    								<h1>Образование</h1>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="col-md-3  col-xs-3 col-sm-3 col-lg-3"></div>
		    					<div class="ll">
			    					<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
				    					<label class="info">Уровень</label><br>
				    					<br><br>
				    					<label class="info" style="font-weight:bolder;">Основное образование</label><br>
				    					<br>
				    					<label class="info">Название УЗ</label><br>
				    					<br>
				    					<label class="info">Факультет</label><br>
				    					<br>
				    					<label class="info">Специализация</label>
				    					<br><br>
				    					<label class="info">Год окончания</label><br>
				    				</div>
			    					<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
			    						<select class="select" required>
			    							<option>Не выбрано</option>
			    							<option>Высшее</option>
			    							<option>&nbsp;&nbsp;&nbsp;Бакалавр</option>
			    							<option>&nbsp;&nbsp;&nbsp;Магистр</option>
			    							<option>&nbsp;&nbsp;&nbsp;Кандидант наук</option>
			    							<option>&nbsp;&nbsp;&nbsp;Доктор наук</option>
			    							<option>Неоконченное высшее</option>
			    							<option>Среднее</option>
			    						</select>
			    						<div class="row"></div>
			    						<div class="row"></div>
			    						<input type="text" name="surname" class="inp"  required>
			    						<br><br>
			    						<input type="text" name="surname" class="inp"  required>
			    						<br><br>
			    						<input type="text" name="surname" class="inp"  required>
			    						<br><br>
			    						<select class="select_year" required>
			    							<option>2019</option>
			    							<option>2018</option>
			    							<option>2017</option>
			    							<option>2016</option>
			    							<option>2015</option>
			    							<option>2014</option>
			    							<option>2013</option>
			    							<option>2012</option>
			    							<option>2011</option>
			    							<option>2010</option>
			    							<option>2009</option>
			    							<option>2008</option>
			    							<option>2007</option>
			    							<option>2006</option>
			    							<option>2005</option>
			    							<option>2004</option>
			    							<option>2003</option>
			    							<option>2002</option>
			    							<option>2001</option>
			    							<option>2000</option>
			    							<option>1999</option>
			    							<option>1998</option>
			    							<option>1997</option>
			    							<option>1996</option>
			    							<option>1995</option>
			    							<option>1994</option>
			    							<option>1993</option>
			    							<option>1992</option>
			    							<option>1991</option>
			    							<option>1990</option>
			    							<option>1989</option>
		    						</select>
			    					</div>
			    				</div>
			    				<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
		    						<div class="content">
		    							<div class="logo_header_2">
		    								<h1>Знание языков</h1>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="col-md-3  col-xs-3 col-sm-3 col-lg-3"></div>
			    				<div class="ll">
			    					<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
				    					<label class="info">Родной язык</label><br>
				    					<br>
				    					<label class="info">Иностранный язык</label><br>
				    					
				    				</div>
			    					<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
			    						<input type="text" name="surname" class="inp"  required><br>
			    						<br>
			    						<input type="text" name="surname" class="inp"  required>
			    					</div>
			    				</div>
			    				<div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
		    						<div class="content">
		    							<div class="logo_header_2">
		    								<h1>Опыт работы</h1>
		    							</div>
		    						</div>
		    					</div>
		    					<div class="col-md-3  col-xs-3 col-sm-3 col-lg-3"></div>
			    				<div class="ll">
			    					<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
				    					<label class="info">Опыт работы</label><br>
				    				</div>
			    					<div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
			    						<select class="select" required>
			    							<option>Не выбрано</option>
			    							<option>Есть</option>
			    							<option>Нет</option>
			    						</select>
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