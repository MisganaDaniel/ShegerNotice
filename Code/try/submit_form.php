<?php
session_start();
include("header4.php");
include("config.php");
include("nav1.php");
?>
<style>

body{ background-image: url(pic/body.jpg);
      background-size:cover;
      background-position:center;
      background-repeat:no-repeat; 
	  font-family: Multicolore;
      color:white;}
	  
table{ background:black; 
       color:white;
       font-family:conquest;
	   width:400px;
	   opacity:0.9;
	   border-radius:15px;
	   padding:20px;
	   margin:70px auto;
	   line-height:1.5em;}
	   
table tr th{font-size:20pt;}

table tr td textarea{
	background:none;
	border:1px solid white;
	color:white;
}

table tr td img{ 
	             width: 100px;
	             height: 100px;
	             margin:-79px 0 0 115px;
	             border-radius: 50%; }

table tr td.l{font-family:arial;
              font-size:13.5pt;}
table tr td input[type="text"]{
	border:none;
	border-bottom: 1px solid #fff;
	background:none;
	outline: none;
	color:white;
	height: 20px;
	font-size: 14px;
}
table tr td input,table tr td select{
	width:100%;
	text-align: left;
	margin-bottom: 12px;
}

table tr td input[type="submit"]
{
	border: none;
	outline: none;
	height: 35px;
	font-family:Conquest;
	text-align: center;
	background: white;
	color: black;
	font-size: 18px;
	border-radius: 20px;
}

table tr td input[type="submit"]:hover
{
	cursor: pointer;
	background: lime;
	color: #000;
}

table tr td a{
	text-decoration: none;
	font-size: 14px;
	line-height: 30px;
	color: white;

}

table tr td a:hover
{
	color: lime;
}

</style>
<form method="POST" action="submit_form.php">
<table  cellpadding="10" cellspacing="10">
<tr><td><img src="pic/lo.png"/></td></tr>
<tr><th>Submit Advert/Notice</th></tr>
<tr><td><input type="text" name="name" size="50" maxlength="25" placeholder="Enter Your Company name" required/></td></tr>
<tr><td><select name="format" maxlength="7" placeholder="Select the Format" required>
<Option>Select Format</option>
<option name="Aaudio">Advert-Audio</option><option name="Apicture">Advert-Picture</option>
<option name="Atext">Advert-Text</option><option name="Avideo">Advert-Video</option>
<option name="Naudio">Notice-Audio</option><option name="Npicture">Notice-Picture</option>
<option name="Ntext">Notice-Text</option><option name="Nvideo">Notice-Video</option></select></td></tr>
<tr><td><select name="category" maxlength="30" required>
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
<option name="event">Events</option><option name="Etertainment">Entertainment</option>
<option name="Houserent">House Rent</option>

<option name="Carrent">Car Rent</option><option name="Equipmentrent">Equipment Rent</option>
<option name="Housesale">House Sale</option>
<option name="Carsale">Car Sale</option><option name="Equipmentsale">Equipment Sale</option>
<option name="Other">Other</option>
</select></td></tr>
<tr><td><input type="file" name="file" size="30" placeholder="Upload Your File" required/></td></tr>
<tr><td>&nbsp; <input type="submit" value="SUBMIT"/></td></tr>
<tr align="center"><td>
<?php
$table="";
$name=isset($_POST['name'])? $_POST['name']:"";
$format=isset($_POST['format'])? $_POST['format']:"";
$category=isset($_POST['category'])? $_POST['category']:"";
$file=isset($_POST['file'])? $_POST['file']:"";
$details="";
$status="";
if($format=="Advert-Audio"){
 $table = "advert_a";
}

if($format=="Advert-Picture"){
 $table = "advert_p";
}

if($format=="Advert-Text"){
 $table = "advert_t";
}

if($format=="Advert-Video"){
 $table = "advert_v";
}
if($format=="Notice-Audio"){
 $table = "notice_a";
}

if($format=="Notice-Picture"){
 $table = "notice_p";
}

if($format=="Notice-Text"){
 $table = "notice_t";
}

if($format=="Notice-Video"){
 $table = "notice_v";
}
if($name!=null and $format!=null and $file!=null and $category!=null)
{
$sql=mysql_query("INSERT INTO $table VALUES('$name','$format','$category','$file','$details','$status')");
if(mysql_affected_rows()!=0)
echo "Your Submission was done successfully!";	
else
echo"Your Submission was not done successfully!";
}	
else
	echo" ";