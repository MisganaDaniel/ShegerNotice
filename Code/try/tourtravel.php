<?php
include("header.php");
include "config.php";
include ("nav.php");
include ("asideleft.php");
include ("asideright.php");
?> 
<section> 
<h2 align=center>Tour & Travel</h2>
<div class="container"> 
<?php
$sql=mysql_query("SELECT file,details,status from advert_p where category='Tour & Travel' and status='Post'");
if(mysql_affected_rows()!=0)
{
  while($r=mysql_fetch_assoc($sql))
  {
    echo"<div class='box'>";
    echo"<img src='".$r['file']."'>";
    echo"<div class='details'>";
    echo"<div class='content'>";
    echo"<h2>Tour & Travel</h2>";
    echo"<p>".$r['details']."</p>";
    echo"</div></div></div>";
  }
}
else
	echo"there is no record";
?>
</div>
<p><br><br><br><br></p>
<p><br><br></p>
</section>
<?php
include"footer.php";
?>