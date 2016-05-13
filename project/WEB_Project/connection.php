<?php 
	$con = new mysqli("localhost","root","","webproject");
	$con->set_charset("UTF-8");
	if(!$con){
		die($con->error);
	}
 ?>