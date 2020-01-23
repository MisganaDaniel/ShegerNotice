<?php
session_start();
include("header4.php");
include("config.php");
include("nav1.php");
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
<form class="loginbox" method="post" action="payment.php" >
<table align=center cellpadding=6 cellspacing=6>
<tr><td ><a href=""><img src="pic/p.png"/></a></td></tr>
<tr><td ><h2>Payment</h2></td></tr>
<tr><td><input type="text" maxlength="50" name="fname" placeholder="Enter Your First Name Or Your Company name" required></td></tr>
<tr><td><input type="text" maxlength="50" name="pname" placeholder="Payer's name" required></td></tr>
<tr><td><input type="text" maxlength="50" name="aname" placeholder="Advertisement Agent" required></td></tr>
<tr><td><input type="date" name="duration" placeholder="YY/MM/DD" required></td></tr>
<tr><td><input type="text" name="amount" placeholder="Enter the Amount" required></td></tr>
<tr><td><input type="text" maxlength="25" name="address" placeholder="Enter Your Address" required></td></tr>
<tr><td><input type="text"  name="email" placeholder="Enter your Email" required></td></tr>
<tr><td><input type="text" maxlength="25" name="phone" placeholder="Enter Your phone number" required></td></tr>

<tr><td><select name="payment" required>
<Option>Select Your Payment Method</option>
<option name="cbe">CBE Mobile Banking</option>
<option name="incash">In cash</option>
</select></td></tr>
<tr><td><input type="text" name="tran" placeholder="Enter Transaction number" required></td></tr>
<tr><td><input type="submit" value="SUBMIT"></td></tr>
<tr align=center><td>

<?php
$fname=isset($_POST['fname'])? $_POST['fname']:"";
$pname=isset($_POST['pname'])? $_POST['pname']:"";
$aname=isset($_POST['aname'])? $_POST['aname']:"";
$dur=isset($_POST['duration'])? $_POST['duration']:"";
$amount=isset($_POST['amount'])? $_POST['amount']:"";
$address=isset($_POST['address'])? $_POST['address']:"";
$email=isset($_POST['email'])? $_POST['email']:"";
$phone=isset($_POST['phone'])? $_POST['phone']:"";
$pay=isset($_POST['payment'])? $_POST['payment']:"";
$tr=isset($_POST['tran'])? $_POST['tran']:"";

if($fname!=null and $pname!=null and $aname!=null and $dur!=null and $amount!=null and $address!=null and $email!=null and $phone!=null and $pay!=null and $tr!=null)
{

$sql=mysql_query("INSERT INTO payment (company_name, payers_name, to_whom, amount, duration, address, email,phone_num, payment_means,transaction) VALUES ('$fname', '$pname', '$aname', '$amount', '$dur', '$address', '$email', '$phone', '$pay' ,'$tr')");
if($r=mysql_affected_rows()!=0)
echo " It was sent successfully!";	
else
echo"It was not sent!";
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