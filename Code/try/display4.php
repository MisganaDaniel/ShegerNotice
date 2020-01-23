<?php
session_start();
if(!isset($_SESSION["username"]))
header("Location:administrator.php");

echo "Welcome to administrator page " .$_SESSION['username']. "<br>";
include "config.php";
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
<p><a href="logout.php"> Log-Out </a></p><br>
<?php 
$Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo "<br> &nbsp; $new";
?>
</header>
<nav style='margin:-50px 0 0 400; width:900px;'>
     <ul>
       <li><a href="new.php"> HOME </a></li>
       <li><a href="feadback.php"> FEADBACK </a></li>
       <li><a href ="display4.php"> SEARCH/UPDATE </a></li> 
       <li><a href ="../socialmedia/index.php"> FORUM </a></li> 
    </ul>
    </nav>

  	<style>

body{ background-image: url(pic/body.jpg);
      background-size:cover;
      background-position:center;
      background-repeat:no-repeat; 
	  font-family: Multicolore;
      color:white;}
	  
table{background:black; 
       color:white;
       font-family:arial;
	   opacity:0.9;
	   width:400px;
	   border-radius:15px; 
	   line-height:1.5em; }
table.l{ 
       float:left;
	  }
table.e{ 
       clear:both;
	   margin:10px;
	  }
table.r{
	    width:800px;
	   	margin:10px;
	  }
	   
table tr th{  font-family:Arial;
	font-size:15pt;}


table tr td select{
	color:grey;
	width: 240px;
	border:none;
	border-bottom: 1px solid #fff;
	background:black;
}
</style>
  </head>
<body>
<form method="POST" action="display4.php">
<table class="l" cellspacing=6 cellpadding=6>
<tr><th>Select the table you want to see</th></tr>
<tr><td><select name="format" required>
<Option>Select which table you want to see</option>
<option name="Aaudio">Advert - Audio</option><option name="Apicture">Advert - Picture</option>
<option name="Atext">Advert - Text</option><option name="Avideo">Advert - Video</option>
<option name="Naudio">Notice - Audio</option><option name="Npicture">Notice - Picture</option>
<option name="Ntext">Notice - Text</option><option name="Nvideo">Notice - Video</option></select></td></tr>
<tr><td><input type="submit" value="Search"/></td></tr>
<tr><th>Update Details Form</th></tr>
<tr><td><select name="forma">
<Option>Select which table you want to see</option>
<option name="Aaudio">Advert - Audio</option><option name="Apicture">Advert - Picture</option>
<option name="Atext">Advert - Text</option><option name="Avideo">Advert - Video</option>
<option name="Naudio">Notice - Audio</option><option name="Npicture">Notice - Picture</option>
<option name="Ntext">Notice - Text</option><option name="Nvideo">Notice - Video</option></select></td></tr>
<tr><td><input type="text" name="name" placeholder="Enter Company Name" /> </td></tr>
<tr><td><select name="category" maxlength="30">
<Option>-------Advert Category-------</option>
<option name="cin">Cinema</option><option name="music_f">Music_festival</option>
<option name="con">Concert</option><option name="music_a">Music_Album</option>
<option name="books">Books & Magazines</option><option name="sport_e">Sport_Events</option>
<option name="soft">Soft_Drink</option><option name="alc">Alcohol</option>
<option name="medical">Medical Center</option><option name="star_h">Star_Hotel</option>
<option name="hotel_s">Hotel & Spa</option><option name="bar">Bar</option><option name="res">Restaurant</option>
<option name="bank">Bank</option><option name="tour_t">Tour & Travel</option>
<Option>-------Notice Category-------</option>
<option name="tender">Tender</option><option name="jobs">Jobs Vacancy</option><option name="education">Education</option>
<option name="event">Events</option><option name="Etertainment">Entertainment</option><option name="Houserent">House Rent</option>

<option name="Carrent">Car Rent</option><option name="Equipmentrent">Equipment Rent</option>
<option name="Housesale">House Sale</option>
<option name="Carsale">Car Sale</option><option name="Equipmentsale">Equipment Sale</option>
<option name="Other">Other</option>
</select></td></tr>
<tr><td><select name="status" maxlength="10">
<Option>Do you want it to be displayed</option>
<option name="post">Post</option><option name="notpost">Not - Post</option></select></td></tr>

<tr><td><textarea  rows="8" cols="52" name="details" maxlength="1000" placeholder="Type Here The Details "></textarea><td></tr>
<tr><td><input type="text" name="pay" placeholder="Paid or Not Payed..." /> </td></tr>
<tr><td><input type="submit" value="Update"/></td></tr>
<tr><td>
<?php
$t="";
$name=isset($_POST['name'])? $_POST['name']:"";
$details=isset($_POST['details'])? $_POST['details']:"";
$category=isset($_POST['category'])? $_POST['category']:"";
$forg=isset($_POST['forma'])? $_POST['forma']:"";
$status=isset($_POST['status'])? $_POST['status']:"";
$pay=isset($_POST['pay'])? $_POST['pay']:"";
if($forg=="Advert - Audio"){
 $t = "advert_a";
}

if($forg=="Advert - Picture"){
 $t = "advert_p";
}

if($forg=="Advert - Text"){
 $t = "advert_t";
}

if($forg=="Advert - Video"){
 $t = "advert_v";
}
if($forg=="Notice - Audio"){
 $t = "notice_a";
}

if($forg=="Notice - Picture"){
 $t = "notice_p";
}

if($forg=="Notice - Text"){
 $t = "notice_t";
}

if($forg=="Notice - Video"){
 $t = "notice_v";
}
if($name!=null and $details!=null and $forg!=null and $category!=null and $status!=null and $pay!=null)
{
$sql=mysql_query("UPDATE $t SET category='$category', details='$details', status='$status', paid='$pay' WHERE company='$name'");
if(mysql_affected_rows()!=0)
echo "Your details was updated successfully!";	
else
echo"Your details was not updated !";
}	
else
	echo" ";
?>
</td></tr>
</table>
<table class=r style='border-raduis:15px 15px 0px 0px;'>
<tr><th>Company</th><th>Format</th><th>Category</th><th>File</th><th>Download</th><th>Details</th><th>Status</th><th>Payment</th></tr>
<?php
$t="";
$video="";
$forg=isset($_POST['format'])? $_POST['format']:"";
if($forg=="Advert - Audio"){
 $t = "advert_a";
}

if($forg=="Advert - Picture"){
 $t = "advert_p";
}

if($forg=="Advert - Text"){
 $t = "advert_t";
}

if($forg=="Advert - Video"){
 $t = "advert_v";
}
if($forg=="Notice - Audio"){
 $t = "notice_a";
}

if($forg=="Notice - Picture"){
 $t = "notice_p";
}

if($forg=="Notice - Text"){
 $t = "notice_t";
}

if($forg=="Notice - Video"){
 $t = "notice_v";
}
  $sql=mysql_query("select *from $t");

$v="";

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
             echo" <td>".$r['paid']."</td>";
      	     echo "</tr>";
}
echo "</table>";
}
else
echo " <tr><td align=center colspan=5>There is no Record in $t table!</td></tr></table>";
?> 

</form>
</body>
</html>




