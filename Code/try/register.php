<?php
include "header1.php";
include "config.php";
include "nav.php";
?>
<style>
body
{
	margin: 0;
	padding: 0;
	background-image:url("pic/body.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	background-position:center;
	font-family: Multicolore;

}

table{
    width: 400px;
	border-radius:10px; 
	background: #000;
	padding:20px;
	text-align: center;
	color: white;
	font-size:14pt;
	opacity:0.9;
	margin:80px 0 0 450px;
}

table tr td img{ 
	             width: 100px;
	             height: 100px;
	             margin:-79px 0 0 2px;
	             border-radius: 50%; }

table tr td{
	text-align:center;
}

table tr td select, table tr td input[type="date"]{
	color:grey;
	width: 350px;
	border:none;
	border-bottom: 1px solid #fff;
	background:black;
}

table tr td input{
	width:100%;
	text-align: left;
	margin-bottom: 12px;}

table tr td input[type="text"], input[type="password"], input[type="date"]{
	border:none;
	border-bottom: 1px solid #fff;
	background:none;
	outline: none;
	color:white;
	height: 20px;
	font-size: 14px;}

table tr td input[type="submit"]
{
	border: none;
	outline: none;
	height: 35px;
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

table tr td a{ text-decoration: none;
			   font-size: 14px;
			   line-height: 30px;
	           color: white; }

table tr td a:hover{ color: lime;}

</style>
</head>
<body>
<form class="loginbox" method="post" action="register.php" >
<table align=center cellpadding=6 cellspacing=6>
<tr><td ><a href=""><img src="pic/p.png"/></a></td></tr>
<tr><td ><h2>Register</h2></td></tr>
<tr><td><input type="text" maxlength="100" name="fname" placeholder="Enter Your First Name Or Your Company name" required></td></tr>
<tr><td><input type="date" name="birthdate" required></td></tr>
<tr><td><select name="gender" maxlength="8" placeholder="Select Your Gender" required>
<Option>Select Gender</option>
<option name="Male">Male</option>
<option name="Female">Female</option>
</select></td></tr>
<tr><td><input type="text" maxlength="40" name="email" placeholder="Enter your Email" required></td></tr>
<tr><td><input type="text" maxlength="50" name="username" placeholder="Enter Your Username" required></td></tr>
<tr><td><input type="password" maxlength="50" name="password" placeholder="Enter Your Password" required></td></tr>
<tr><td><input type="password" maxlength="50" name="confirmpassword" placeholder="Confirm Your Password" required></td></tr>
<tr><td><input type="submit" value="REGISTER"></td></tr>
<tr><td><a href="login.php">Have an account?</a></td></tr>
<tr align=center><td>

<?php
$id="";
$fname=isset($_POST['fname'])? $_POST['fname']:"";
$birth=isset($_POST['birthdate'])? $_POST['birthdate']:"";
$gender=isset($_POST['gender'])? $_POST['gender']:"";
$email=isset($_POST['email'])? $_POST['email']:"";
$username=isset($_POST['username'])? $_POST['username']:"";
$password = md5(isset($_POST['password'])? $_POST['password']:""); //hashed
$rpassword=md5(isset($_POST['confirmpassword'])? $_POST['confirmpassword']:"");

if($fname!=null and $birth!=null and $gender!=null and $email!=null and $username!=null and $password!=null and $rpassword!=null)
{
if($password == $rpassword)
{
$sql=mysql_query("INSERT INTO register (user_id, name, bdate, gender, username, password, repassword, email) VALUES ('$id','$fname','$birth','$gender','$username','$password','$rpassword','$email')");
if($r=mysql_affected_rows()!=0)
echo " It was sent successfully!";	
else
echo"It was not sent!";
}
else
echo "The two passwords do not match.";
}
else
	echo "";
?>	
</td>
</tr>
</table>
</form>
</body>
</html>