<?php
session_start();
include("header4.php");
include("config.php");
include("nav1.php");
?>
<section style=' width:1345px; '>
<h2>Advert - Picture Submitted</h2>
<?php
 $sql=mysql_query("SELECT * FROM advert_p WHERE company='$name'");

$v="";
echo"<table class=r border=0 style=' border:1px dashed blue; border-raduis:15px 15px 0px 0px; width:1320px; text-align:center;'>
<tr bgcolor=blue><th >Company</th><th>Format</th><th>Category</th><th>File</th><th>Details</th><th>Status</th></tr>";
if(mysql_affected_rows()!=0)
{	
while($r=mysql_fetch_assoc($sql))
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
      	     echo" <td>".$r['details']."</td>";
             echo" <td>".$r['status']."</td>";
      	     echo "</tr>";
}
echo "</table>";
}
else
echo " <tr><td align=center colspan=5>There is no Record in notice_p table!</td></tr></table>";
echo"<br>";
?>
<?php
 $sql=mysql_query("SELECT * FROM advert_v WHERE company='$name'");
echo"<h2>Advert - Video Submitted</h2>";
$v="";
echo"<table class=r border=0 style=' border:1px dashed blue; border-raduis:15px 15px 0px 0px; width:1320px; text-align:center;'>
<tr bgcolor=blue><th >Company</th><th>Format</th><th>Category</th><th>File</th><th>Details</th><th>Status</th></tr>";
if(mysql_affected_rows()!=0)
{	
while($r=mysql_fetch_assoc($sql))
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
      	     echo" <td>".$r['details']."</td>";
             echo" <td>".$r['status']."</td>";
      	     echo "</tr>";
}
echo "</table>";
}
else
echo " <tr><td align=center colspan=5>There is no Record in notice_p table!</td></tr></table>";
echo"<br>";
?>
<?php
 $sql=mysql_query("SELECT * FROM notice_p WHERE company='$name'");
echo"<h2>Notice - Picture Submitted</h2>";
$v="";
echo"<table class=r border=0 style=' border:1px dashed blue; border-raduis:15px 15px 0px 0px; width:1320px; text-align:center;'>
<tr bgcolor=blue><th >Company</th><th>Format</th><th>Category</th><th>File</th><th>Details</th><th>Status</th></tr>";
if(mysql_affected_rows()!=0)
{	
while($r=mysql_fetch_assoc($sql))
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
      	     echo" <td>".$r['details']."</td>";
             echo" <td>".$r['status']."</td>";
      	     echo "</tr>";
}
echo "</table>";
}
else
echo " <tr><td align=center colspan=5>There is no Record in notice_p table!</td></tr></table>";
echo"<br>";
?>
</section>
<?php
include ("footer.php");
?>
