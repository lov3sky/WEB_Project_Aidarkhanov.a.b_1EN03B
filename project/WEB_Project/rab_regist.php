<html>
<head>
	<title>Регистрация Работодателя | Find Your Dream | Найди свою работу</title>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/rab_regist.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <style type="text/css">
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
    <script src="js/jquery-2.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/regValidationRAB.js"></script>
    <script type="text/javascript">
</script>
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
			<div class="col-md-3 col-xs-0 col-lg-3 col-sm-3"></div>
			<div class="col-md-6 col-xs-12 col-lg-6 col-sm-6">
				<div class="reg_tab">
					<h1>Регистрация Работодателя</h1>
					<form name="MyForm" action="registration_rab.php" enctype="multipart/form-data" onsubmit="return validateForm()" method="POST">
				    	<div class="col-lg-12 col-xs-12">
					    	<div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
					    		<br><br>
					    		<label class="lbl">Имя:</label><br>
					    		<label class="lbl">Фамилия:</label><br>
					    		<label class="lbl">Отчество:</label><br>
					    		<label class="lbl">Пол:</label><br>
					    		<label class="lbl">Страна:</label><br>
					    		<label class="lbl">Эл.почта:</label><br>
					    		<label class="lbl">Логин:</label><br>
					    		<label class="lbl">Пароль:</label><br>
					    		<label class="lbl">Подтвердите пароль:</label><br>
					    		<label class="lbl">Тел.номер:</label><br>
					    	</div>
					    	<div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
					    		<br><br>
					    		<input class="inp" type="text" name="name" placeholder="Ваше имя" >
					    		<input class="inp1" type="text" name="surname" placeholder="Ваше фамилия" >
					    		<input class="inp1" type="text" name="dadname" placeholder="Ваше отчество" >
					    		<select name="gender" class="inp1" >
									<option value="n/a">Не выбрано</option>
									<option value="male">Мужской</option>
									<option value="female">Женский</option>
								</select>
						    	<input class="inp1" type="text" name="countries" placeholder="Ваша страна...">
								<input class="inp" type="text" name="email" placeholder="Эл.почта" >	
					    		<input class="inp1" type="text" name="login" placeholder="Логин" >
					    		<input class="inp1" type="password" name="password" placeholder="Пароль" >
					    		<input class="inp1" type="password" name="repassword" placeholder="Пароль" >
					    		<input class="inp1" type="text" name="tel_number" placeholder="Тел.номер" >
					    	</div>
					    </div>
					    <div class="col-lg-12 col-xs-12">
					    	<div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
					    		<label class="lbl">Тип компании:</label><br>
					    		<label class="lbl">Название:</label><br>
					    		<label class="lbl">Сайт:</label><br>
					    		<label class="lbl">Кол.сотрудников:</label><br>
					    		<label class="lbl">Город:</label><br>
					    		<label class="lbl">Ваше фото:</label><br>
					    		<label class="lbl">Описание компании:</label>
					    		<br><br><br><br><br>
					    		<label class="lbl">Адрес компании:</label><br>
					    		<label class="lbl">ФИО заместителя:</label>
					    	</div>
					    	<div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
					    		<select name="comtype" class="inp1" >
									<option value="n/a">Не выбрано</option>
									<option value="ООО">ООО</option>
									<option value="ПАО">ПАО</option>
									<option value="АО">АО</option>
									<option value="ОАО">ОАО</option>
									<option value="ЗАО">ЗАО</option>
									<option value="ИП">ИП</option>
									<option value="Фонд">Фонд</option>
									<option value="Другое">Другое</option>
								</select>
								<input class="inp1" type="text" name="Comname" placeholder="Название компании" >
								<input class="inp1" type="text" name="site" placeholder="Сайт компании" >
								<select name="count" class="inp1" >
									<option value="n/a">Не выбрано</option>
									<option value="Менее 50 сотрудников">Менее 50 сотрудников</option>
									<option value="от 51 до 100 сотрудников">от 51 до 100 сотрудников</option>
									<option value="от 101 до 1000 сотрудников">от 101 до 1000 сотрудников</option>
									<option value="от 1001 до 10000 сотрудников">от 1001 до 10000 сотрудников</option>
								</select>
								<input class="inp1" type="text" name="city" placeholder="Город" ><br>
								<input type="file" name="fileToUpload" id="fileToUpload" style="font-size:20px;float:right;margin:5px 0px 25px 0px;" required>
								<textarea name="description" placeholder="Опишите вашу компанию" ></textarea><br>
								<input class="inp1" type="text" name="address" placeholder="Адрес вашей компании" ><br>
								<input class="inp1" type="text" name="firstBoss" placeholder="ФИО заместителя" ><br>
								<input type="submit" value="Зарегистроваться" class="inp1" onclick="Check()" id="submit"><br>
					    	</div>
					    </div>
					</form>
				</div>
			</div>
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
			"loginCheck.php",{
				data:"login="+login,
				success: function(data){
					document.forms["MyForm"]["login"].style.backgroundColor=data;
				}
			}
		)
	}
</script>