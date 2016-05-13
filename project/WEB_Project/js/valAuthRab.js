function valAuthOne(){
	var login = document.forms["formOne"]["login"].value;
	var password = document.forms["formOne"]["password"].value;
	$.ajax(
		"authCheck.php",{
			data:"login="+login+"&"+"password="+password,
			success: function(data){
				
			}	
		}
	)
}