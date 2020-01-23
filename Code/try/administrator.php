<?php
session_start();
include 'config.php';
$user =isset($_POST['username'])?$_POST['username']:"";
$pass =isset($_POST['password'])?$_POST['password']:"";
if($user != null and $pass != null)
{
$sql=mysql_query("SELECT * from admin where username='$user' and password='$pass'");
if(mysql_affected_rows()!=0)
 {
   while($r=mysql_fetch_assoc($sql))
{
	$_SESSION['username']=$user;
       header("location:new.php");
   }
 }
else
echo ".... Wrong Username or Password ....";
}
else
	echo"";


?>

<html>
<head>
<title>Administrator-Login</title>
<link rel="stylesheet" type="text/css" href="login-style.css">
</head>
<body>
<div class="loginbox">
<img src="pic/l.png" class="avatar">
<h1>Administrator Login</h1>
<form method="post" action="administrator.php" enctype="multipart/form-data" autocomplete="off">
<p>Username</p>
<input type="text" name="username" placeholder="Enter Username" required>
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password" required>
<input type="submit" value="Login">
</form>
</div> 
</body>
</html>