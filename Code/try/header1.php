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