<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Simple User Login Form Flat Responsive widget Template :: w3layouts</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple User Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, SonyErricsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> 
<link rel="stylesheet" href="css/login.css" type="text/css" media="all">
</head>
<body>
<div class="container">
<h1>aiyou网登录</h1>
     <div class="contact-form">
	 <div class="signin">
         <form method="post" action="index.php?r=login/do_login">
	     <input type="text" class="user" name="u_name" id="u_name"/>67776
		 <input type="password" class="pass" id="u_pwd" name="u_pwd"/><br>
         <input type="submit" value="登录" onclick="return fun()"/>					
		 <p>如果您还没有密码,请<a href="index.php?r=register/register" style="color:red">免费注册</a></p>  
         </form>
	 </div>
	 </div> 
</div>
<div class="footer">
     <p>Copyright &copy; 2015 Simple User Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
</body>
</html>
<script>
     function fun(){
     	var u_name = document.getElementById("u_name").value;
     	var u_pwd = document.getElementById("u_pwd").value;
         if(u_name=="" || u_pwd==""){
         	alert("用户名密码缺一不可");
         	return false;
         }
     }
</script>