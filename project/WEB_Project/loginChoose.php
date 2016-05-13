<html>
<head>
	<meta charset="UTF-8">
	<title>Пожалуиста, выберите авторизацию.</title>
	<link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery-2.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/valAuthRab.js"></script>
    <script type="text/javascript" src="js/moveObj.js"></script>
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
    	  	<div class="choice">
                <div style="width:100%;float:left; height:150px;"></div>
                <div class="col-lg-12 col-xs-12">
                    <h1 id="choose">Выберите, пожалуйста, вид авторизации</h1>
                    <div style="width:100%;float:left; height:100px;"></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3 col-xs-6">
                        <button id="open1">Работодатель</button><br><br>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 col-xs-6">
                        <button id="open2">Соискатель</button><br><br>
                    </div>
                </div>
                <div style="width:100%;float:left; height:100px;"></div>
    	  		<div class="col-lg-12 col-xs-12">
        	  		<form name="formOne" method="POST" action="checkLoginRab.php">	
                        <div class="boss" id="rab">
                            <div class="col-lg-12">
                                <label>Логин:</label><br>
                                <input type="text" name="login" placeholder="Ваш логин..." required><br>
                                <label>Пароль:</label><br>
                                <input type="password" name="password" placeholder="Ваш пароль..." required><br>
                                <input type="submit" value="Войти"><br>
                            </div>
        	  			</div>
                    </form>
                    <form method="POST" action="checkLoginSOS.php">
                        <div class="emp" id="sos">
                            <div class="col-lg-12">
                                <label>Логин:</label><br>
                                <input type="text" name="login" placeholder="Ваш логин..." required><br>
                                <label>Пароль:</label><br>
                                <input type="password" name="password" placeholder="Ваш пароль..." required><br>
                                <input type="submit" value="Войти" id="submit">
                            </div>
                        </div>
                    </form>
    	  		</div>
    	  	</div>
	    </div>
	</div>
    <div class="footer">
        <div class="col-md-2 col-sm-2 col-lg-2 col-xs-0"></div>
        <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
            <div class="foot">
                <ul>
                    <li>&copy;&nbsp;2016 Find Your Dream</li>
                    <li><a href="#" style="color:black;">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>