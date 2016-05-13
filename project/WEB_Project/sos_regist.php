<?php 
	session_start();
 ?>
<html>
<head>
	<title>Регистрация Соискателя | Find Your Dream | Найди свою работу</title>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/sos_regist.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <style type="text/css">
    	.miniInp {
    		height: 35px;
			width: 100px;
			float: left;
			margin:0px 0px 10px 10px;	
			color:black;
			font:20px "Times New Roman";
    	}
    	textarea {
    		resize:none;
    		width: 340px;
    		float: right;
    		margin: 0px 50px 10px 10px;
    		height: 100px;
    		font-size: 20px;
    	}
		.footer {
			height: 30px;
			width: 100%;
			display: inline-block;
		}

		.foot ul li{
			list-style-type: none;
			display: inline-block;
			padding: 0px 10px 0px 0px;
			font-size: 17px;
			margin: 0px 20px 0px 0px;
		}
		a:hover{
			color:red!important;
		}
    </style>
    <script src="js/regValidationSOS.js"></script>
    <script src="js/jquery-2.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
		<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
			<div class="header">
				<div class="name_logo_1">
	            	<h1><a href="index.php" style="color:black;">Find Your Dream</a></h1>
	        	</div>
			</div>
		</div>
		<div class="col-12 col-xs-12 col-lg-12 col-sm-12">
			<div class="col-md-3 col-xs-0 col-lg-3 col-sm-0"></div>
			<div class="col-md-6 col-xs-12 col-lg-6 col-sm-12">
				<div class="reg_tab">
					<h1>Регистрация Соискателя</h1>
				  	<form name="MyForm" action="registration_sos.php" enctype="multipart/form-data" onsubmit="return validate()" method="POST">
				  		<div class="col-lg-12 col-xs-12">
					    	<div class="col-md-6 col-xs-5 col-lg-7 col-sm-6">
					    		<br><br>
					    		<label class="lbl">Имя:</label><br>
					    		<label class="lbl">Фамилия:</label><br>
					    		<label class="lbl">Отчество:</label><br>
					    		<label class="lbl">Страна:</label><br>
					    		<label class="lbl">Город:</label><br>
					    		<label class="lbl">Дата рождения:</label><br>
					    		<label class="lbl">Эл.почта:</label><br>
					    		<label class="lbl">Логин:</label><br>
					    		<label class="lbl">Пароль:</label><br>
					    		<label class="lbl">Подтвердите пароль:</label><br>
					    		<label class="lbl">Тел.номер:</label><br>
					    	</div>
					    	<div class="col-md-6 col-xs-7 col-lg-5 col-sm-6">
					    		<br><br>
					    		<input class="inp" type="text" name="name" placeholder="Ваше имя">
					    		<input class="inp1" type="text" name="surname" placeholder="Ваше фамилия">
					    		<input class="inp1" type="text" name="dadname" placeholder="Ваше отчество">
						    	<select name="countries" class="inp1">
									<option value="n/a">Не выбрано</option>
									<option value="Казахстан">Казахстан</option>
									<option value="Россия">Россия</option>
									<option value="США">США</option>
									<option value="Китай">Китай</option>
									<option value="Туркменистан">Туркменистан</option>
								</select>
								<input class="inp1" type="text" name="city" placeholder="Город">
								<select class="inp_mini" name="day" style="float:left;">
									<option value="n/a">Не выбрано</option>
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
								<select class="inp_mini2" name="month">
									<option value="n/a">Не выбрано</option>
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
								<select class="inp_mini3" name="year"> 
									<option value="n/a">Не выбрано</option>
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
								</select>
								<input class="inp" type="text" name="email" placeholder="Эл.почта">
					    		<input class="inp1" type="text" name="login" placeholder="Логин">
					    		<input class="inp1" type="password" name="password" placeholder="Пароль" id="password">
					    		<input class="inp1" type="password" name="repassword" placeholder="Пароль" id="repass">
					    		<input class="inp1" type="text" name="tel_number" placeholder="Тел.номер">
					    	</div>
					    </div>
					    	<div class="col-md-6 col-xs-6 col-lg-7 col-sm-6">
					    		<br><br>
					    		<label class="lbl_h">Высшее образование</label><br>
					    		<label class="lbl">Уровень:</label><br>
					    		<label class="lbl">Название УЗ:</label><br>
					    		<label class="lbl">Факультет:</label><br>
					    		<label class="lbl">Специальность:</label><br>
					    		<label class="lbl">Год окончания:</label><br>
					    	</div>
					    	<div class="col-md-6 col-xs-6 col-lg-5 col-sm-6">
					    		<br><br><br><br><br>
					    		<select name="level" class="inp1">
									<option value="n/a">Не выбрано</option>
									<option value="Неоконченное высшее">Неоконченное высшее</option>
									<option value="Бакалавр">Бакалавр</option>
									<option value="Магистр">Магистр</option>
								</select>
								<input class="inp1" type="text" name="uzname" placeholder="Название УЗ">
								<input class="inp1" type="text" name="faculty" placeholder="Факультет">
								<input class="inp1" type="text" name="spec" placeholder="Специальность">
								<select name="finishYear" class="inp1">
									<option value="n/a">Не выбрано</option>
									<option value="2023">2023</option>
									<option value="2022">2022</option>
									<option value="2021">2021</option>
									<option value="2020">2020</option>
									<option value="2019">2019</option>
									<option value="2018">2018</option>
									<option value="2017">2017</option>
									<option value="2016">2016</option>
									<option value="2015">2015</option>
									<option value="2014">2014</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
									<option value="2009">2009</option>
									<option value="2008">2008</option>
									<option value="2007">2007</option>
									<option value="2006">2006</option>
									<option value="2005">2005</option>
									<option value="2004">2004</option>
									<option value="2003">2003</option>
									<option value="2002">2002</option>
									<option value="2001">2001</option>
									<option value="2000">2000</option>
									<option value="1999">1999</option>
									<option value="1998">1998</option>
									<option value="1997">1997</option>
									<option value="1996">1996</option>
									<option value="1995">1995</option>
									<option value="1994">1994</option>
									<option value="1993">1993</option>
								</select>
					    	</div>
					    <div class="col-lg-12 col-xs-12"></div> 
					    	<div class="col-md-6 col-xs-6 col-lg-7 col-sm-6">
					    		<br><br>
					    		<label class="lbl_h">Иностранные языки:</label><br>
					    		<label class="lbl">Родной язык:</label><br>
					    		<label class="lbl">Английский:</label><br>
					    		<label class="lbl">Русский:</label><br>
					    		<label class="lbl">Навыки:<br></label><br>
					    		<br><br><br><br><br><br>
					    		<label class="lbl">Опыт работы:</label><br><br><br>
					    		<label class="lbl">Фото:</label><br>
					    	</div>
					    	<div class="col-md-6 col-xs-6 col-lg-5 col-sm-6">
					    		<br><br><br><br><br>
					    		<input class="inp1" type="text" name="native" placeholder="Ваш родной язык">
					    		<select name="eng" class="inp1">
									<option value="n/a">Не выбрано</option>
									<option value="Свободно">Свободно</option>
									<option value="Со словарем">Со словарем</option>
								</select>
								<select name="ru" class="inp1">
									<option value="n/a">Не выбрано</option>
									<option value="Свободно">Свободно</option>
									<option value="Со словарем">Со словарем</option>
								</select>
								<input class="inp1" type="text" name="prog1">
								<input class="inp1" type="text" name="prog2">
								<input class="inp1" type="text" name="prog3">
								<textarea rows="3" cols="60" name="work" class="check"></textarea><br><br>
								<input type="file" name="fileToUpload" id="fileToUpload" style="font-size:20px;margin-left:16.5%;" required><br>
								<input type="submit" value="Зарегистроваться" class="inp1" onclick="Check()">
					    	</div>
					</form>
				</div>
			</div>
			<div class="col-md-3 col-xs-0 col-lg-3 col-sm-0"></div>
		</div>
		<div class="footer">
        <div class="col-md-2 col-sm-2 col-lg-2 col-xs-0"></div>
        <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
            <div class="foot">
                <ul>
                    <li>&copy;&nbsp;2016 Find Your Dream</li>
                    <li><a href="#" style="color:#fff;">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
	</div>
</body>
</html>
<script type="text/javascript">
	function Check(){
		var login = document.forms["MyForm"]["login"].value;
		$.ajax(
			"loginCheckone.php",{
				data:"login="+login,
				success: function(data){
					document.forms["MyForm"]["login"].style.backgroundColor=data;
				}
			}
		)
	}
</script>