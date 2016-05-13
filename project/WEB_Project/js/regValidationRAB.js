function validateForm(){
	var name = document.forms["MyForm"]["name"].value;
	var surname = document.forms["MyForm"]["surname"].value;
	var dadname = document.forms["MyForm"]["dadname"].value;
	var gender = document.forms["MyForm"]["gender"].value;
	var countries = document.forms["MyForm"]["countries"].value;
	var email = document.forms["MyForm"]["email"].value;	
	var pass = document.forms["MyForm"]["password"].value;
	var repass = document.forms["MyForm"]["repassword"].value;
	var tel_number = document.forms["MyForm"]["tel_number"].value;
	var comtype = document.forms["MyForm"]["comtype"].value;
	var Comname = document.forms["MyForm"]["Comname"].value;
	var site = document.forms["MyForm"]["site"].value;
	var count = document.forms["MyForm"]["count"].value;
	var city = document.forms["MyForm"]["city"].value;
	var description = document.forms["MyForm"]["description"].value;
	var address = document.forms["MyForm"]["address"].value;
	var firstBoss = document.forms["MyForm"]["firstBoss"].value;

	var vEmail = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,26}\.)?[a-z]{2,6}$/i;
	var vPassword = /^[a-zA-Z0-9]{6,40}$/i;
	var vPhone = /^[0-9]{6,14}$/;

	if(name == null || name == ''){
		document.forms["MyForm"]["name"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["name"].placeholder = 'Заполните это поле...';	
	}
	if(surname == null || surname == ''){
		document.forms["MyForm"]["surname"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["surname"].placeholder = 'Заполните это поле...';
	}
	if(dadname == null || dadname == ''){
		document.forms["MyForm"]["dadname"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["dadname"].placeholder = 'Заполните это поле...';
	}
	if(gender == null || gender == 'n/a'){
		document.forms["MyForm"]["gender"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["gender"].value = '';	
	}
	if(countries == null || countries == ''){
		document.forms["MyForm"]["countries"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["countries"].placeholder = 'Заполните это поле...';
	}
	if(email == null || email == ''){
		if(email.search(vEmail) == -1){
			document.forms["MyForm"]["email"].style.backgroundColor = '#ffcccc';
			document.forms["MyForm"]["email"].placeholder = 'Заполните это поле...';
		}
	}
	if(pass == null || pass == '' || repass == null || repass == ''){
		if(pass.search(vPassword) == -1)
			document.forms["MyForm"]["password"].style.backgroundColor = '#ffcccc';
			document.forms["MyForm"]["repassword"].style.backgroundColor = '#ffcccc';
	}
	if(pass != repass){
		document.forms["MyForm"]["password"].style.backgroundColor = 'red';
		document.forms["MyForm"]["repassword"].style.backgroundColor = 'red';
	}
	if(tel_number == null || tel_number == ''){
		if(tel_number.search(vPhone) == -1){
			document.forms["MyForm"]["tel_number"].style.backgroundColor = '#ffcccc';
			document.forms["MyForm"]["tel_number"].placeholder = 'Заполните это поле...';
		}
	}
	if(comtype == null || comtype == 'n/a'){
		document.forms["MyForm"]["comtype"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["comtype"].value = '';	
	}
	if(Comname == null || Comname == ''){
		document.forms["MyForm"]["Comname"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["Comname"].placeholder = 'Заполните это поле...';
	}
	if(site == null || site == ''){
		document.forms["MyForm"]["site"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["site"].placeholder = 'Заполните это поле...';
	}
	if(count == null || count == 'n/a'){
		document.forms["MyForm"]["count"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["count"].value = '';	
	}
	if(city == null || city == ''){
		document.forms["MyForm"]["city"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["city"].placeholder = 'Заполните это поле...';
	}
	if(description == null || description == ''){
		document.forms["MyForm"]["description"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["description"].placeholder = 'Заполните это поле...';
	}
	if(address == null || address == ''){
		document.forms["MyForm"]["address"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["address"].placeholder = 'Заполните это поле...';
	}
	if(firstBoss == null || firstBoss == ''){
		document.forms["MyForm"]["firstBoss"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["firstBoss"].placeholder = 'Заполните это поле...';
		$("#submit").prop('disabled', false);
		return false;
	}
}
