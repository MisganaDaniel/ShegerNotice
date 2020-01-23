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
    
echo "Welcome to Adminstrator Page ".$r['name']."<br>";
    echo "Job: " .$r['title']."<br>";
?>
<!Doctype html>
<html lang="en">
<head><link rel="icon" href="pic/icon.png" />
<meta charset="utf-8" />
<title>ShegerNotice</title>
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
<form name = "searchform" id = "formsearch"> 
<input type = "text" id = "searchtextbox">
<button id = "submit" type = "submit"><img src ="pic/search.png" alt="search logo" width=19></button>
</form>
</header>
<nav style='margin:-20px 0 0 400; width:900px;'>
     <ul>
       <li><a href="index.php"> HOME </a></li>
       <li><a href="contact.php"> FEADBACK </a></li>
       <li><a href ="display4.php"> SEARCH/UPDATE </a></li> 
       <li><a href="News.php"> NEWS </a></li>
       <li><a href ="Forum.php"> FORUM </a></li> 
    </ul>
    </nav>
<?php
        }
 }
else
echo ".... Wrong Username or Password ....";
}
else
	echo"";


?>