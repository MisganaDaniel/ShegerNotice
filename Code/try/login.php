<?php
session_start();
include 'config.php';
;
$user =isset($_POST['username'])?$_POST['username']:"";
$pass =md5(isset($_POST['password'])?$_POST['password']:"");
if($user != null and $pass != null)
{
$sql=mysql_query("SELECT * from register where username='$user' and password='$pass'");
if(mysql_affected_rows()!=0)
 {
   while($r=mysql_fetch_assoc($sql))
{
  $_SESSION["username"]=$user;
       header("location:profile.php");
   }
 }
else
echo ".... Wrong Username or Password ....";
}
else
  echo"";

?>
<?php
echo "<b>";
echo "&nbsp; Welcome to";
echo "</b>";
?>
<!Doctype html>
<html lang="en">
<head><link rel="icon" href="pic/icon.png" />
<meta charset="utf-8" />
<title>ShegerNotice.com</title>
<link rel="stylesheet" href="css.css" type="text/css">
<script type="text/javascript" src="jscript.js"></script>
<style>
.loginbox{
  margin-top:140px;
  width: 350px;
  height: 420px;
  background: #000;
  color: #fff;
  opacity:0.9;
  border-radius:10px 10px 10px 10px; 
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding:70px 30px;

}

.avatar{
  width: 100px;
  height: 100px;
  margin:-120px 0 0 100px;
  border-radius: 50%;

}

.loginbox p{
  margin: 0;
  padding: 0;
  text-align:; center;
  font-size: 18px;
}

.loginbox input{
  width:100% ;
  margin-bottom: 20px;
  
}

.loginbox input[type="text"], input[type="password"]
{
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 14px;
}
.loginbox input[type="submit"]
{
  border: none;
  outline: none;
  height: 40px;
  background: white;
  color: black;
  font-size: 18px;
  border-radius: 20px;
}

.loginbox input[type="submit"]:hover
{
  cursor: pointer;
  background: lime;
  color: #000;
}

.loginbox a{
  text-decoration: none;
  font-size: 12px;
  line-height: 20px;
  color: darkgrey;

}

.loginbox a:hover
{
  color:lime;

}
</style>
</head>
<body>
<header>
<a href="index.php"><h1><font color=green>Sheg</font><font color=yellow>erNo</font><font color=red>tice</font></h1></a>
<p><a href="register.php"> Register </a>| 
<a href = 'login.php'>Login</a></p><br>
<?php 
$Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo "<br> &nbsp; $new";
?>
</header>
<?php include "nav.php" ?>
<body>
<div class="loginbox">
<img src="pic/up.png" class="avatar">
<h1>Login Here</h1>
<form method="POST" action="login.php">
<p>Username</p>
<input type="text" name="username" placeholder="Enter Username">
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password">
<input type="submit"  value="Login">
<!---<b><a href="forget_password.php">Forgot Your Password? </a><br>-->
<a href="register.php">Don't Have An Account </a></b>
</form>
</div> 
</body>
</html>
