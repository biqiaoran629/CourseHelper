
function registerUser(){
	var name = document.forms["register"]["name"].value;
	var email = document.forms["register"]["email"].value;
	var password = document.forms["register"]["password"].value;
	var passwordverify = document.forms["register"]["passwordverify"].value;

	if(password != passwordverify){
		alert("Please verify your password");
		return false;
	}


	var objRegExp  = /^[A-Za-z\u00C0-\u00ff]+$/;
	 if(!objRegExp.test(name.charAt(0))){
        alert("Please enter a letter as your first character in name field!");
        return false;
	}		

	var lastD = isNaN(email.charAt(email.length -1));
	if(!lastD){
        alert("The last digit of your email cannot be a number!");
		return false;
    }
    var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {				
				alert(xmlhttp.responseText);
			}
		}
		xmlhttp.open("GET","register_user.php?name="+name+"&email="+email+"&password="+password, true);
		xmlhttp.send();

		return false;

}

function loginUser(){
	var email = document.forms["login"]["email"].value;
	var password = document.forms["login"]["password"].value;

	 var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				location.reload();	
				if(xmlhttp.responseText == ''){
				window.location.href = 'courses.php';
				}else{				
				alert(xmlhttp.responseText);
			}
			}
		}
		xmlhttp.open("GET","login_user.php?email="+email+"&password="+password, true);
		xmlhttp.send();

		return false;


}