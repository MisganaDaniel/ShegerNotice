<?php
session_start();
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
<form method="post" action="admin login.php" enctype="multipart/form-data" autocomplete="off">
<p>Username</p>
<input type="text" name="username" placeholder="Enter Username" required>
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password" required>
<input type="submit" value="Login">
</form>
</div> 
</body>
</html>