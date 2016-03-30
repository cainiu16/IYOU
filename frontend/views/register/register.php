<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paper Stack</title>
<link rel="stylesheet" type="text/css" href="css/register.css" />
<link rel="stylesheet" type="text/css" href="css/registerbody.css"/> 
</head>
<body>
<div class="container">
	<section id="content">
		<form action="index.php?r=register/do_register" method="post" omsubmit="return fun()">
			<h1>新用户注册</h1>
			<!-- <div>
				<input type="text" placeholder="邮箱" required="" id="email" name="m_email"/>
			</div> -->
			<div>
				<input type="text" placeholder="用户名" required="" id="username" name="m_name"/>
			</div>
			<div>
				<input type="password" placeholder="密码" required="" id="pwd" name="m_pad"/>
			</div>
			<div>
				<input type="password" placeholder="确认密码" required="" id="pad" name="m_pwd"/><span id="s_m_pwd"></span>
			</div>
			 <div class="">
				<span class="help-block u-errormessage" id="js-server-helpinfo">&nbsp;</span>			</div> 
			<div>
				<!-- <input type="submit" value="Log in" /> -->
				<input type="submit" value="注册" class="btn btn-primary" id="js-btn-login" onclick="fun1()"/>
				   <a href="index.php?r=login/login">如果您已有账号,直接登录</a>
				<!-- <a href="#">Register</a> -->
			</div>
		</form><!-- form -->
		 
	</section><!-- content -->
</div>
<!-- container -->
</body>
</html>
<script>
          function fun1(){
          	//接收密码的值
          	 var pwd = document.getElementById("pwd").value;
          	//接收确认密码的值
          	 var pad = document.getElementById("pad").value;
          	 if(pwd!=pad){
          	    document.getElementById("s_m_pwd").innerHTML="<font color='red'><br>密码和确认密码不一致</font>";
          	    return false;
          	 }else{
          	 	document.getElementById("s_m_pwd").innerHTML="<font color='red'><br>密码和确认密码一致</font>";
          	    return true;
          	 }
          }
          function fun(){
          	if(fun1){
          		return true;
          	}else{
          		return false;
          	}
          }
</script>
=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
	<link rel="stylesheet" href="css/register.css">
</head> 
<body>

     <div class="biaodan">

    	<form>
	<table>
      <tr>
          <td>用户名:</td>
          <td><input type="text" name=""></td>
      </tr>
      <tr>
          <td>邮箱:</td>
          <td><input type="text" name=""></td>
          </td>
      </tr>
      <tr>
          <td>密码:</td>
          <td><input type="password" name=""></td>
          </td>
      </tr>
      <tr>
          <td>确认密码:</td>
          <td><input type="password" name=""></td>
          </td>
      </tr>
      <tr>
          <td><input type="submit" value="注册"></td>
          <td><input type="reset" value="重置"></td>
          </td>
      </tr>
      </table>
	</form>
  </div>
</body>
</html>
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
