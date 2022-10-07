function login()
	{
		var uname = document.getElementById("user").value;
		var pwd = document.getElementById("pwd").value;
		var filter = /^([a-zA-Z0-9!$%^&*@#?/])/;
		if(uname =='')
		{
			alert("please enter user name.");
		}
		else if(pwd=='')
		{
        	alert("enter the password");
		}
		else if(!filter.test(pwd))
		{
			alert("Enter valid password");
		}
		else if(pwd.length < 6 || pwd.length > 6)
		{
			alert("Password min and max length is 6.");
		}
		else
		{
			alert('Thank You for Login');
			window.location = "homepage.php";
		}
	}