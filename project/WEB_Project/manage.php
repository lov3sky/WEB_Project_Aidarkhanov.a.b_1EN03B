<?php 
    include "connection.php";
    session_start();
    if(!isset($_SESSION['type']) || $_SESSION['type']!=0){
        header("Location: index.php");
    }
    $query = "SELECT * FROM usersrab";
    $res = $con->query($query);
 ?>
<DOCTYPE! html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Управление сайтом | Find Your Dream | Найди свою работу</title>
	<link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/statistics.css">
    <script src="js/jquery-2.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .menu {
            width: 100%;
            min-height: 500px;
            border: 1px solid black;
            border-radius: 15px;
            margin-bottom: 20px;
        }
        ul {
            padding: 0px;
        }
        .menu ul li {
            list-style-type: none;
            border-bottom: 1px solid black;
            width: 100%;
            height: 100px;
            font-size: 35px;
            text-align: center;
            padding-top: 0px;
        }
        #userlist, #help{
            width: 100%;
            height: 100%;
            background-color: inherit;
            border-radius: 0px;
            text-decoration: underline;
        }
        #users, #hint{
            display: none;
        }
        #users table tr td{
            font-size: 25px;
        }
        #helppage{
            margin: 0 auto;
            width: 100%;
            min-height: 300px;
            border: 1px solid black;
            border-radius: 20px;
            background-color: snow;
            margin-bottom: 20px;
            display: none;
        }
        #helppage label {
            font-size: 33px;
            padding: 0px 10px 5px 20px;
            margin: 0px 10px 10px 30px;
            font-weight: 400;
            border-right: 1px solid black;
            border-left: 1px solid black;
            background-color: #fff;
        }
        #tech:hover{
            background-color: red;
            font-weight: bold;
            color:#fff;
        }

        #market:hover{
            background-color: cornflowerblue;
            font-weight: bold;
            color:#fff;
        }

        #work:hover{
            background-color: limegreen;
            font-weight: bold;
            color:#fff;
        }

        #helppage h1 {
            text-align: center;
            font-weight: bold;
        }
        .upperpage {
            width: 100%;
            height: 100px;
            border-bottom: 1px solid black;
            float: left;
            border-radius: 20px 20px 0px 0px;
        }
        #info1, #info2, #info3 {
            display: none;
        }
        #info1 tr td {
            background-color: red;
            color:#fff;
        }
        #info2 tr td {
            background-color: cornflowerblue;
            color:#fff;
        }
        #info3 tr td {
            background-color: limegreen;
            color:#fff;
        }
    </style>
</head>
<body>
	<div class="col-lg-12 col-xs-12">
		<div class="content">
            <nav>
    			<div class="col-lg-12 col-xs-12">
    				<div class="fydline">
    					<h1 id="cloud">Find Your Dream</h1>
    				</div>
    				<div id="header">
    					<div id="brand">
    						<h1><a href="index_adminRAB.php">ADMIN</a></h1>
    					</div>
                        <div id="login">
                            <h1><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;<?php echo $_SESSION['login']; ?></a></h1>
                            <div id="dropdown">
                                <ul>
                                    <li><a href="adminCabRab.php">Мой кабинет</a></li>
                                    <li><a href="logout.php">Выйти</a></li>
                                </ul>
                            </div>
                        </div>
    				</div>
    			</div>
            </nav>
            <div style="width:100%; height: 100px;float:left;"></div>
            <div class="col-lg-3 col-xs-12">
                <div class="menu">
                    <ul>
                        <li style="font-weight: bold;">Управление сайтом</li>
                        <li><button id="userlist">Список пользователей</button></li>
                        <li><button id="help">Обратная связь</button></li>
                        <li id="hint">Нажмите дважды на кнопку, чтобы закрыть.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-xs-12">
                <div id="users">
                    <table class="table table-striped">
                        <tr>
                            <td>ID:</td>
                            <td>Имя:</td>
                            <td>Фамилия:</td>
                            <td>Отечество:</td>
                            <td>Эл.почта:</td>
                            <td>Логин:</td>
                            <td>Тип:</td>
                        </tr>
                        <?php while($row = $res->fetch_array()){ ?>
                        <tr>
                            <td><?php echo intval($row['id'])-1; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['surname']; ?></td>
                            <td><?php echo $row['dadname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['login']; ?></td>
                            <td><?php
                                if($row['type'] == 0){
                                    echo "Админ";
                                }else if($row['type'] == 1){
                                    echo "Работодатель";
                                }
                            ?></td>
                        </tr>
                        <?php } ?>
                    </table> 
                </div>
                <div id="helppage">
                    <div class="upperpage">
                        <label id="tech">Техническая<br>поддержка</label>
                        <label id="market">Отдел маркетинга<br> и рекламы</label>
                        <label id="work">Отдел по работе<br> с соискателями</label>
                    </div>
                    <table class="table" style="font-size:25px;" id="info1">
                        <tr>
                            <th>ID:</th>
                            <th>ФИО:</h>
                            <th>Эл.почта:</th>
                            <th>Тема:</th>
                            <th>Описание:</th>
                        </tr> 
                        <?php 
                            $a1 = 'Техническая поддержка';
                            $a = "SELECT * FROM help WHERE choice='".$a1."' && type=1";
                            $b = $con->query($a);
                            while($c = $b->fetch_array()){
                        ?>  
                        <tr>
                            <td><?php echo $c['id']; ?></td>
                            <td><?php echo $c['name']; ?></td>
                            <td><?php echo $c['email']; ?></td>
                            <td><?php echo $c['theme']; ?></td>
                            <td><?php echo $c['description']; ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <table class="table" style="font-size:25px;" id="info2">
                        <tr>
                            <th>ID:</th>
                            <th>ФИО:</h>
                            <th>Эл.почта:</th>
                            <th>Тема:</th>
                            <th>Описание:</th>
                        </tr>
                        <?php 
                            $d = 'Отдел маркетинга и рекламы';
                            $e = "SELECT * FROM help WHERE choice='".$d."' && type=1";
                            $f = $con->query($e);
                            while($c1 = $f->fetch_array()){
                        ?>    
                        <tr>
                            <td><?php echo $c1['id']; ?></td>
                            <td><?php echo $c1['name']; ?></td>
                            <td><?php echo $c1['email']; ?></td>
                            <td><?php echo $c1['theme']; ?></td>
                            <td><?php echo $c1['description']; ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <table class="table" style="font-size:25px;" id="info3">
                        <tr>
                            <th>ID:</th>
                            <th>ФИО:</h>
                            <th>Эл.почта:</th>
                            <th>Тема:</th>
                            <th>Описание:</th>
                        </tr>  
                        <?php 
                            $g = 'Отдел по работе с соискателями';
                            $t = "SELECT * FROM help WHERE choice='".$g."' && type=1";
                            $h = $con->query($t);
                            while($c2 = $h->fetch_array()){
                        ?>  
                        <tr>
                            <td><?php echo $c2['id']; ?></td>
                            <td><?php echo $c2['name']; ?></td>
                            <td><?php echo $c2['email']; ?></td>
                            <td><?php echo $c2['theme']; ?></td>
                            <td><?php echo $c2['description']; ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $("#login").click(function(){
            $("#dropdown").slideToggle(400);
        });
        $("#userlist").click(function(){
            $("#users").show(500);
            $("#hint").show(500);
        });
        $("#userlist").dblclick(function(){
            $("#users").hide(500);
            $("#hint").hide(500);
        });
        $("#help").click(function(){
            $("#helppage").show(800);
            $("#hint").show(500);
            $(this).dblclick(function(){
                $("#helppage").hide(600);
                $("#hint").hide(500);
            });
        });
        $("#tech").click(function(){
            $("#info1").show(1000);
            $(this).dblclick(function(){
                $("#info1").hide(600);
            });
        });
        $("#market").click(function(){
            $("#info2").show(1000);
            $(this).dblclick(function(){
                $("#info2").hide(600);
            });
        });
        $("#work").click(function(){
            $("#info3").show(1000);
            $(this).dblclick(function(){
                $("#info3").hide(600);
            });
        });
    });
</script>