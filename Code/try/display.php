<?php
include "config.php";
?>
<html>
  <head>
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
	   margin:10px;
	  }
table.e{ 
       clear:both;
	   margin:10px;
	  }
table.r{
	   	margin:20px 0 0 -100px;
	  }
	   
table tr th{  font-family:conquest;
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
<form method="POST" action="display.php">
<table class="l" cellspacing=6 cellpadding=6>
<tr><th>Select the table you want to see</th></tr>
<tr><td><select name="format" maxlength="8" required>
<Option>Select which table you want to see</option>
<option name="audio">Advert - Audio</option><option name="picture">Advert - Picture</option>
<option name="text">Advert - Text</option><option name="video">Advert - Video</option></select></td></tr>
<tr><td><input type="submit" value="Search"/></td></tr>
</table>
<table class=r cellspacing=10 cellpadding=10>
<tr><th>Company</th><th>Form</th><th>File</th><th>Policy</th><th>Details</th></tr>


<?php
$table="";
$format=isset($_POST['format'])? $_POST['format']:"";
if($format=="Advert - Audio"){
 $table = "advert_a";
}

if($format=="Advert - Picture"){
 $table = "advert_p";
}

if($format=="Advert - Text"){
 $table = "advert_t";
}

if($format=="Advert - Video"){
 $table = "advert_v";
}
  $sql=mysql_query("select *from $table");
if(mysql_affected_rows()!=0)
{	
while($r=@mysql_fetch_assoc($sql))
{
echo "<tr>";
foreach($r as $key=>$value)
echo "<td>$value</td>";
echo "</tr>";
}
echo "</table>";
}
else
echo " there is no Record!";
?> 
<br><br><br>
<table class="e" cellspacing=6 cellpadding=6>
<tr><th>Update Details Form</th></tr>
<tr><td><select name="forma" maxlength="8">
<Option>Select which table you want to see</option>
<option name="audio">Advert - Audio</option><option name="picture">Advert - Picture</option>
<option name="text">Advert - Text</option><option name="video">Advert - Video</option></select></td></tr>
<tr><td><input type="text" name="name" placeholder="Enter Company Name" /> </td></tr>
<tr><td><textarea  rows="8" cols="52" name="details" maxlength="500" placeholder="Type Here The Details "></textarea><td></tr>
<tr><td><input type="submit" value="Update"/></td></tr>
<tr><td>
<?php
$t="";
$name=isset($_POST['name'])? $_POST['name']:"";
$details=isset($_POST['details'])? $_POST['details']:"";
$forg=isset($_POST['forma'])? $_POST['forma']:"";
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
if($name!=null and $details!=null and $forg!=null)
{
$sql=mysql_query("UPDATE $t SET details='$details' WHERE company='$name'");
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
</form>
</body>
</html>




