<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
          <!--/ Codrops top bar -->
            <header>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="index.php?r=login/do_login" autocomplete="on" method="post"> 
                                <h1>欢迎进入登录页面</h1> 
                                <p> 
                                    <label for="username" class="uname" >你的用户名:</label>
                                    <input id="username" name="u_name" required="required" type="text" id="u_name"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd">你的密码:</label>
                                    <input id="u_pwd" name="u_pwd" required="required" type="password"/> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">七天免登陆</label>
								</p>
                                
                                  <a href="index.php?r=register/register">
                                <p class="login button"> 
                                    <input type="submit" value="登录" onclick="fun()"/> 
								</p>
                                <p class="change_link">
									  <img src="images/qq.png">
									   <img src="images/qq.png">
									    <img src="images/qq.png">
								</p>
                            </form>
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