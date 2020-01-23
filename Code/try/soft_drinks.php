<?php
include("header.php");
include "config.php";
include ("nav.php");
include ("asideleft.php");
include ("asideright.php");
?> 
<section> 
<h2 align=center>Soft Drinks</h2>
<div class="container"> 
<?php
$sql=mysql_query("SELECT file,details,status from advert_v where category='Soft_Drink' and status='Post'");
if(mysql_affected_rows()!=0)
{
  while($r=mysql_fetch_assoc($sql))
  {
    echo"<div class='box'>";
    echo"<video width=290 height=305 src='".$r['file']."' poster='".$r['details']."' controls>";
    echo"</video></div>";
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