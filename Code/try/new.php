<?php
session_start();
include "config.php";
include "header3.php";
include "nav3.php";


?>	
<section style='width:1340px; opacity:0.9;'>
<h2>All Adverts and Notices</h2>
<?php
 $sql=mysql_query("select *from notice_p");

$v="";
echo"<table class=r border=0 style=' border:1px dashed blue; border-raduis:15px 15px 0px 0px; width:1320px; text-align:center;'>
<tr bgcolor=blue><th >Company</th><th>Format</th><th>Category</th><th>File</th><th>Download</th><th>Details</th><th>Status</th></tr>";
if(mysql_affected_rows()!=0)
{	
while($r=@mysql_fetch_assoc($sql))
{
  echo "<tr>";
             echo"<td>".$r['company']."</td>";
             echo"<td>".$r['format']."</td>";
             echo"<td>".$r['category']."</td>";
             $v=$r['format'];
             if ( $v =="Video" || $v =="Notice-Video" || $v =="Advert-Video" || $v =="Advert - Video" || $v =="Notice - Video"){
               $video="<video width=200 height=200 src=\"{$r['file']}\"  poster=\"{$r['details']}\"  controls></video>";}
             if ( $v =="Picture" || $v =="Notice-Pi"){
             	$video="<img width=200 height=200 src=\"{$r['file']}\">";}
             if ( $v =="Advert-Text" || $v =="Notice-Text" || $v =="Advert - Text" || $v =="Notice - Text" ){
             	$video==".$['file'].";}
             if ( $v =="Advert-Audio" || $v =="Notice-Audio" || $v =="Advert - Audio" || $v =="Notice - Audio" ){
             	$video="<audio src=\"{$r['file']}\"></audio>";}
      	     echo "<td>$video</td>";
      	     echo"<td><a download href=\"{$r['file']}\">Download</a></td>";
      	     echo" <td>".$r['details']."</td>";
             echo" <td>".$r['status']."</td>";
      	     echo "</tr>";
}
echo "</table>";
}
else
echo " <tr><td align=center colspan=5>There is no Record in $t table!</td></tr></table>";
echo"<br>";
 $sql=mysql_query("select *from advert_v");

$v="";
echo"<table class=r border=0 style=' border:1px dashed blue; border-raduis:15px 15px 0px 0px; width:1320px; text-align:center;'>
<tr bgcolor=blue><th>Company</th><th>Format</th><th>Category</th><th>File</th><th>Download</th><th>Details</th><th>Status</th></tr>";
if(mysql_affected_rows()!=0)
{	
while($r=@mysql_fetch_assoc($sql))
{
  echo "<tr>";
             echo"<td>".$r['company']."</td>";
             echo"<td>".$r['format']."</td>";
             echo"<td>".$r['category']."</td>";
             $v=$r['format'];
             if ( $v =="Video" || $v =="Notice-Video" || $v =="Advert-Video" || $v =="Advert - Video" || $v =="Notice - Video"){
               $video="<video width=200 height=200 src=\"{$r['file']}\"  poster=\"{$r['details']}\"  controls></video>";}
             if ( $v =="Picture" || $v =="Notice-Pi"){
             	$video="<img width=200 height=200 src=\"{$r['file']}\">";}
             if ( $v =="Advert-Text" || $v =="Notice-Text" || $v =="Advert - Text" || $v =="Notice - Text" ){
             	$video==".$['file'].";}
             if ( $v =="Advert-Audio" || $v =="Notice-Audio" || $v =="Advert - Audio" || $v =="Notice - Audio" ){
             	$video="<audio src=\"{$r['file']}\"></audio>";}
      	     echo "<td>$video</td>";
      	     echo"<td><a download href=\"{$r['file']}\">Download</a></td>";
      	     echo" <td>".$r['details']."</td>";
             echo" <td>".$r['status']."</td>";
      	     echo "</tr>";
}
echo "</table>";
}
else
echo " <tr><td align=center colspan=5>There is no Record in $t table!</td></tr></table>";
echo"<br>";
 $sql=mysql_query("select *from advert_p");

$v="";
echo"<table class=r border=0 style=' border:1px dashed blue; border-raduis:15px 15px 0px 0px; width:1320px; text-align:center;'>
<tr bgcolor=blue><th>Company</th><th>Format</th><th>Category</th><th>File</th><th>Download</th><th>Details</th><th>Status</th></tr>";
if(mysql_affected_rows()!=0)
{	
while($r=@mysql_fetch_assoc($sql))
{
  echo "<tr>";
             echo"<td>".$r['company']."</td>";
             echo"<td>".$r['format']."</td>";
             echo"<td>".$r['category']."</td>";
             $v=$r['format'];
             if ( $v =="Video" || $v =="Notice-Video" || $v =="Advert-Video" || $v =="Advert - Video" || $v =="Notice - Video"){
               $video="<video width=200 height=200 src=\"{$r['file']}\"  poster=\"{$r['details']}\"  controls></video>";}
             if ( $v =="Picture" || $v =="Notice-Pi"){
             	$video="<img width=200 height=200 src=\"{$r['file']}\">";}
             if ( $v =="Advert-Text" || $v =="Notice-Text" || $v =="Advert - Text" || $v =="Notice - Text" ){
             	$video==".$['file'].";}
             if ( $v =="Advert-Audio" || $v =="Notice-Audio" || $v =="Advert - Audio" || $v =="Notice - Audio" ){
             	$video="<audio src=\"{$r['file']}\"></audio>";}
      	     echo "<td>$video</td>";
      	     echo"<td><a download href=\"{$r['file']}\">Download</a></td>";
      	     echo" <td>".$r['details']."</td>";
             echo" <td>".$r['status']."</td>";
      	     echo "</tr>";
}
echo "</table>";
}
else
echo " <tr><td align=center colspan=5>There is no Record in $t table!</td></tr></table>";
?>

</section>

<?php
include "footer.php";
?>
