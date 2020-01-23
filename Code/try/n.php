elseif ($format=="text")
{
	$table = "advert_text";
}
else
{
	$table = "advert_video";
}



echo"<table  align=center cellspacing=10 cellpadding=10>";
 echo"<tr><th>Advert Audio</th></tr>";

$sql=mysql_query("select * from advert_a");
if(mysql_affected_rows()!=0)
{
while($r=mysql_fetch_assoc($sql))
{
  echo"<tr><td>Company &nbsp;  -> ".$r['company']."<br>";
 echo"Format &nbsp;  -> ".$r['format']."<br>";
 echo"File &nbsp;  -> <input type='file' name='file' download />".$r['file']."<br>";
 echo"Policy &nbsp;  -> ".$r['policy']."<br>";
}}
else
	echo"there is no record";
?>
</td></tr></form></table></form>




<html>
  <head></head>
<body>

<form method=POST action=display1.php>
<table cellpadding=10 cellspacing=10><tr>
<?php
$sql=mysql_query("select * from advert_p");
if(mysql_affected_rows()!=0)
{
while($r=mysql_fetch_assoc($sql))

 echo"
 <td>{$r['comp']}</td>
 <td>{$r['expire']}</td>
 <td>{$r['file']}</td>
 <td>{$r['size']}</td>
 <td>
 <a download href=\"file/{$r['file']}\">Download this file</a>
 </td>
 </tr>
 </table>";
}
else
	echo"there is no record";
?>
</body>
</html>