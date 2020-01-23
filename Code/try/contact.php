<?php
include "header5.php";
include "config.php";
include "nav.php";
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
	             margin:-79px 0 0 155px;
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
table tr td input{
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
<form method="POST" action="contact.php">
<table  cellpadding="10" cellspacing="10">
<tr><td ><img src="pic/lo.png"/></td></tr>
<tr><th>CONTACT FORM</th></tr>
<tr><td class="l">Contact us today, and get reply with in 24 hours!</td></tr>
<tr><td><p><input type="text" name="name" size="50" maxlength="25" placeholder="Enter Your Name" required/></p>
<p><input type="text" name="email" size="50" maxlength="25" placeholder="Enter Your Email" required/></p>
<p><textarea  rows="8" cols="52" name="message" maxlength="500" placeholder="Type here Any Message... " required></textarea></p>
&nbsp <input type="submit" value="SUBMIT" /></td></tr>
<tr><td>
<?php
$name=isset($_POST['name'])? $_POST['name']:"";
$email=isset($_POST['email'])? $_POST['email']:"";
$message=isset($_POST['message'])? $_POST['message']:"";
if($name!=null and $email!=null and $message!=null)
{
$sql=mysql_query("INSERT INTO contact VALUES('$name','$email','$message')");
if(mysql_affected_rows()!=0)
echo "Your message was send successfully!";	
else
echo"Your message was not sent!";
}	
else
	echo" ";
?>
</td></tr>
</table>
</form>
