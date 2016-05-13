<?php 
	include "connection.php";
	session_start();
	if(!isset($_SESSION['type']) || $_SESSION['type']!=2){
		header("Location:index.php");
	}
 ?>
<DOCTYPE! html>
<html>
<head>
	<title>Мое резюме | Find Your Dream | Найди свою работу</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/alma.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <style type="text/css">
    	.mainSVcontent h1 {
    		font-weight: bolder;
    		text-align: center;
    		text-decoration: underline;
    	}
    	.row {
    		width: 100%;
    		height: 100px;
    		float: left;
    	}
    	.label {
    		color:#000;
    		font-size: 25px;
    		margin:0px 0px 30px 15px!important;

    	}
    	.label a {
    		font-size: 25px;
    		float: right;
    		margin-bottom: 30px;
    	}
    	.mainSVcontent h2{
    		font-weight: bolder;
    		margin-left: 30px;
    	}
    	.line {
    		width: 100%;
    		height: 50px;
    		float: left;
    	}
    	.asi{
    		width: 250px;
    		height: 35px;	
    		margin-bottom: 6.5px;
    		font-size: 25px;
    	}
    	#area {
    		resize: none;
    		margin-left: 25px;
    		height: 15%;
    		width: 300px;
    		font-size: 25px;
    	}
    	input[type="submit"]{
    		width: 150px;
    		height: 40px;
    		margin-left: 25px;
    		font-size: 25px;
    		background-color: orange;
    		font-weight: bold;
    		border-radius: 10px;
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
	                  </a>
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
		    		<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
		    			<div class="resume_paper">
		    				<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
	    						<div class="row"></div>
	    						<div class="mainSVcontent">
	    							<h1>Мое резюме</h1><br>
	    							<h2>Личные данные</h2><br><br>
	    							<form method="POST" action="svUpdate.php">
		    							<div class="col-lg-5 col-xs-5">
		    								<label class="label">Имя:</label><br><br><br>
		    								<label class="label">Фамилия:</label><br><br><br>
		    								<label class="label">Отечество:</label><br><br><br>
		    								<label class="label">Дата рождения:</label><br><br><br>
		    								<label class="label">Страна:</label><br><br><br>
		    								<label class="label">Город проживания:</label><br><br><br>
		    								<label class="label">Эл.почта:</label><br><br><br>
		    								<label class="label">Тел.номер:</label><br><br><br>
		    							</div>
		    							<div class="col-lg-7 col-xs-7">
		    								<input class="asi" type="text" name="name" placeholder="Ваше имя..."></input><br><br>
		    								<input class="asi" type="text" name="surname" placeholder="Ваша фамилия..."></input><br><br> 
		    								<input class="asi" type="text" name="fatherName" placeholder="Ваша фамилия..."></input><br><br>
		    								<select style="margin-bottom:13px; height:35px;width:15%; font-size:18px;" name="day">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
		    								</select>
		    								<select style="margin-bottom:13px; height:35px;width:20%; font-size:18px;" name="month">
	    										<option value="Январь">Январь</option>
												<option value="Февраль">Февраль</option>
												<option value="Март">Март</option>
												<option value="Апрель">Апрель</option>
												<option value="Май">Май</option>
												<option value="Июнь">Июнь</option>
												<option value="Июль">Июль</option>
												<option value="Август">Август</option>
												<option value="Сентябрь">Сентябрь</option>
												<option value="Октябрь">Октябрь</option>
												<option value="Ноябрь">Ноябрь</option>
												<option value="Декабрь">Декабрь</option>
		    								</select>
		    								<select style="margin-bottom:13px; height:35px;width:18%; font-size:18px;" name="year">
		    									<option value="1998">1998</option>
												<option value="1997">1997</option>
												<option value="1996">1996</option>
												<option value="1995">1995</option>
												<option value="1994">1994</option>
												<option value="1993">1993</option>
												<option value="1992">1992</option>
												<option value="1991">1991</option>
												<option value="1990">1990</option>
												<option value="1989">1989</option>
												<option value="1988">1988</option>
												<option value="1987">1987</option>
												<option value="1986">1986</option>
												<option value="1985">1985</option>
												<option value="1984">1984</option>
												<option value="1983">1983</option>
												<option value="1982">1982</option>
												<option value="1981">1981</option>
												<option value="1980">1980</option>
		    								</select><br><br>
		    								<input class="asi" type="text" name="country" placeholder="Ваша страна..."></input></label><br><br>
		    								<input class="asi" type="text" name="city" placeholder="Ваш город..."></input><br><br>
		    								<input class="asi" type="text" name="email" placeholder="Ваша почта..."></input></label><br><br>
		    								<input class="asi" type="text" name="telNumber" placeholder="Ваш номер..."></input></label><br><br><br><br>
		    							</div>
		    							<h2>Образование</h2><br><br>
		    							<div class="col-lg-5 col-xs-5">
		    								<label class="label">Название ВУЗа:</label><br><br><br>
		    								<label class="label">Факультет:</label><br><br><br>
		    								<label class="label">Специальность:</label><br><br><br>
		    								<label class="label">Степень:</label><br><br><br>
		    								<label class="label">Год окончания:</label><br><br><br>
		    							</div>
		    							<div class="col-lg-7 col-xs-7">
		    								<input class="asi" type="text" name="university" placeholder="Ваш университет..."></input><br><br>
		    								<input class="asi" type="text" name="faculty" placeholder="Ваш факультет..."></input><br><br>
		    								<input class="asi" type="text" name="specialization" placeholder="Ваша специализация..."></input><br><br>
		    								<select style="width:; font-size:18px; margin-bottom:13px;width: 250px; height: 35px; " name="level">
		    									<option value="n/a">Не выбрано</option>
												<option value="Неоконченное высшее">Неоконченное высшее</option>
												<option value="Бакалавр">Бакалавр</option>
												<option value="Магистр">Магистр</option>
		    								</select><br><br>
		    								<input class="asi" type="texy" name="finishYear" placeholder="Год окончания учебы..."></input><br><br><br>
		    							</div>
		    							<div class="line"></div>
		    							<h2>Образование</h2><br><br>
		    							<div class="col-lg-5 col-xs-5">
		    								<label class="label">Ваш родной язык:</label><br><br><br>
		    								<label class="label">Английский язык:</label><br><br><br>
		    								<label class="label">Русский язык:</label><br><br><br>
		    							</div>
		    							<div class="col-lg-7 col-xs-7">
		    								<input class="asi" type="text" name="native" placeholder="Родной язык..."></input><br><br>
		    								<select style="width:; font-size:18px; margin-bottom:13px;width: 250px; height: 35px; " name="english">
		    									<option value="n/a">Не выбрано</option>
		    									<option value="Свободно">Свободно</option>
		    									<option value="Со словарем">Со словарем</option>
		    								</select><br><br>
		    								<select style="width:; font-size:18px; margin-bottom:13px;width: 250px; height: 35px; " name="russian">
		    									<option value="n/a">Не выбрано</option>
		    									<option value="Свободно">Свободно</option>
		    									<option value="Со словарем">Со словарем</option>
		    								</select><br><br><br>
		    							</div>
		    							<div class="line"></div>
		    							<h2>Навыки</h2><br><br>
	    								<div class="col-lg-12 col-xs-12">
	    									<input class="asi" style="margin-left:25px;" type="text" name="prog1" placeholder="-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/"></input><br><br>
	    									<input class="asi" style="margin-left:25px;" type="text" name="prog2" placeholder="-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/"></input><br><br>
	    									<input class="asi" style="margin-left:25px;" type="text" name="prog3" placeholder="-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/"></input><br><br>
	    								</div>
	    								<div class="line"></div>
		    							<h2>Опыт работы</h2><br><br>
		    							<div class="col-lg-12 col-xs-12">
		    								<textarea id="area" name="work"></textarea><br><br> 
		    								<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
		    								<input type="submit" value="Сохранить"><br><br>	
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

</body>
</html>