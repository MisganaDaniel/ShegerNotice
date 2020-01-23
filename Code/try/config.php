<?php
$host = "localhost";
$user = "root";
$pw = "";
$dbname= "shegernotice";
$con = mysql_connect($host,$user,$pw) or die ("unable to connect to mysql database:".mysql_error());
mysql_select_db($dbname);
?>