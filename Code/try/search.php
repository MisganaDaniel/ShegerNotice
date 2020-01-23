<?php
include("config.php");
include("header.php");
include ("nav.php");
include ("asideleft.php");
include ("asideright.php");
?>
<section>
<h2>Result</h2>
<div class="container" style='overflow-y:scroll; width:822px; height:800px;'>
<?php

$search=isset($_POST['search'])? $_POST['search']:"";
$v="";

if ($search!= null)
{
 $sql=mysql_query("SELECT * FROM advert_p WHERE company LIKE '%$search%' OR details LIKE '%$search%'");

if(mysql_affected_rows()!=0)
  {	
   while($r=@mysql_fetch_assoc($sql))
    {
       echo"<div class='box'>";
       echo"<img width=200 height=200 src='".$r['file']."'>";
       echo"<div class='details'>";
       echo"<div class='content'>";
       echo"<h2>".$r['category']."</h2>";
       echo"<p>".$r['details']."</p>";
       echo"</div></div></div>";
    }
  }

  $sql1=mysql_query("SELECT * FROM advert_v WHERE company LIKE'%$search%'");

  if(mysql_affected_rows()!=0)
   { 
     while($r=mysql_fetch_assoc($sql1))
      {
       echo"<div class='box'>";
       echo"<video width=290 height=305 src='".$r['file']."' poster='".$r['details']."' controls>";
       echo"</video></div>";
      }

   }

  $sql2=mysql_query("SELECT * FROM notice_p WHERE company LIKE '%$search%' OR category LIKE '%$search%'");

  if(mysql_affected_rows()!=0)
   { 
     while($r=mysql_fetch_assoc($sql2))
      {
       echo"<div class='box'>";
       echo"<img width=200 height=200 src='".$r['file']."'>";
       echo"</div>";
      }

   }
}

?>
</div>
</section>
<?php
include ("footer.php");
?>
