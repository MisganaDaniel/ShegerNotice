<?php
include "config.php";
?>
<html>
  <head></head>
<body>

<form method="POST" action="download.php">
<table>
<?php
$sql=mysql_query("select * from advert_p");
if(mysql_affected_rows()!=0)
{
while($r=mysql_fetch_assoc($sql))
	echo"<tr><td><img width=200 height=200 src=\"{$r['file']}\"></td><td><a download href=\"{$r['file']}\">Download this file</a></td></tr>";
}
else
	echo"there is no record";
?> 
</table>
</body>
</html>