function validate(){
	var name = document.forms["MyForm"]["name"].value;
	var surname = document.forms["MyForm"]["surname"].value;
	var dadname = document.forms["MyForm"]["dadname"].value;
	var countries = document.forms["MyForm"]["countries"].value;
	var city = document.forms["MyForm"]["city"].value;
	var day = document.forms["MyForm"]["day"].value;
	var month = document.forms["MyForm"]["month"].value;
	var year = document.forms["MyForm"]["year"].value;
	var email = document.forms["MyForm"]["email"].value;	
	var pass = document.forms["MyForm"]["password"].value;
	var repass = document.forms["MyForm"]["repassword"].value;
	var tel_number = document.forms["MyForm"]["tel_number"].value;
	var level = document.forms["MyForm"]["level"].value;
	var uzname = document.forms["MyForm"]["uzname"].value;
	var faculty = document.forms["MyForm"]["faculty"].value;
	var spec = document.forms["MyForm"]["spec"].value;
	var finishYear = document.forms["MyForm"]["finishYear"].value;
	var native1 =  document.forms["MyForm"]["native"].value;
	var eng = document.forms["MyForm"]["eng"].value;
	var ru = document.forms["MyForm"]["ru"].value;
	var prog1 = document.forms["MyForm"]["prog1"].value;
	var prog2 = document.forms["MyForm"]["prog2"].value;
	var prog3 = document.forms["MyForm"]["prog3"].value;
	var work = document.forms["MyForm"]["work"].value;

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
	if(countries == null || countries == 'n/a'){
		document.forms["MyForm"]["countries"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["countries"].value = '';
	}
	if(city == null || city == ''){
		document.forms["MyForm"]["city"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["city"].placeholder = 'Заполните это поле...';
	}
	if(day == null || day == 'n/a'){
		document.forms["MyForm"]["day"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["day"].value = '';	
	}
	if(month == null || month == 'n/a'){
		document.forms["MyForm"]["month"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["month"].value = '';	
	}
	if(year == null || year == 'n/a'){
		document.forms["MyForm"]["year"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["year"].value = '';	
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
	if(level == null || level == 'n/a'){
		document.forms["MyForm"]["level"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["level"].value = '';
	}
	if(uzname == null || uzname == ''){
		document.forms["MyForm"]["uzname"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["uzname"].placeholder = 'Заполните это поле...';
	}
	if(faculty == null || faculty == ''){
		document.forms["MyForm"]["faculty"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["faculty"].placeholder = 'Заполните это поле...';
	}
	if(spec == null || spec == ''){
		document.forms["MyForm"]["spec"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["spec"].placeholder = 'Заполните это поле...';
	}
	if(finishYear == null || finishYear == 'n/a'){
		document.forms["MyForm"]["finishYear"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["finishYear"].value = '';
	}
	if(native1 == null || native1 == ''){
		document.forms["MyForm"]["native"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["native"].placeholder = 'Заполните это поле...';
	}
	if(eng == null || eng == 'n/a'){
		document.forms["MyForm"]["eng"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["eng"].value = '';
	}
	if(ru == null || ru == 'n/a'){
		document.forms["MyForm"]["ru"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["ru"].value = '';
	}
	if(prog1 == null || prog1 == ''){
		document.forms["MyForm"]["prog1"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["prog1"].placeholder = 'Заполните это поле...';
	}
	if(prog2 == null || prog2 == ''){
		document.forms["MyForm"]["prog2"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["prog2"].placeholder = 'Заполните это поле...';
	}
	if(prog3 == null || prog3 == ''){
		document.forms["MyForm"]["prog3"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["prog3"].placeholder = 'Заполните это поле...';
	}
	if(work == null || work == ''){
		document.forms["MyForm"]["work"].style.backgroundColor = '#ffcccc';
		document.forms["MyForm"]["work"].placeholder = 'Заполните это поле...';
		return false;
	}
}