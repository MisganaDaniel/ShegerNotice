<?php
echo "<font color=white><b>";
echo "&nbsp; Welcome to <br>";
echo "</b></font>";
?>
<!Doctype html>
<html lang="en">
<head><link rel="icon" href="pic/icon.png" />
<meta charset="utf-8" />
<title>ShegerNotice.com</title>
<link rel="stylesheet" href="contact-style.css" type="text/css">
<script type="text/javascript" src="jscript.js"></script>
</head>
<body>
<header>
<a href="index.php"><h1>Sheger Notice</h1></a>
<p><a href="register.php"> Register </a>| 
<a href = 'login.php'>Login</a></p><br>
<?php 
$Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo "<font color=white><br> &nbsp; $new </font>";
?>
</header>