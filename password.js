

var password = prompt("Введите пароль администратора:", "");
if (password == null) window.location = "index.html";
else if (password.toLowerCase() == "admin")  
      window.location = "workDB.html";
else 
{
	alert("Пароль введен неверно");
	 window.location = "index.html";

}
