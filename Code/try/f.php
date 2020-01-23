//define variabless and set to empty values
$fname_error = $lname_error = $gender_error =$birthdate_error = $email_error = $uname_error = $pword_error = $rpword_error = "";
$id = $fname = $lname = $gender = $email =$birthdate = $uname = $pword = $rpword = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if (empty($_POST["fname"])){
   $fname_error = "First Name is required";

	}else{
	$fname = test_input ($_POST["fname"]);
	//check if fname only contains letter and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$fname)){
	$fname_error = "Only letters and white space allowed";
	}
}

if (empty($_POST["lname"])){
   $lname_error = "Last Name is required";

	}else{
	$lname = test_input ($_POST["lname"]);
	//check if lname only contains letter and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$lname)){
	$lname_error = "Only letters and white space allowed";
	}
}
if (empty($_POST["gender"])){
   $gender_error = "Gender is required";

	}else{
	$gender = test_input ($_POST["gender"]);
	//check if gender only contains letter
	if (!preg_match("/^[a-zA-Z]*$/",$gender)){
	$lname_error = "Only letters allowed";
	}
}
if (empty($_POST["email"])){
   $email_error = "Email is required";

	}else{
	$email = test_input ($_POST["email"]);
	//check if email address is well formed
	if (!filter_var($email, FILTER_VALiDATE_EMAIL)){
	$email_error = "Invalid email format";
	}
}
if (empty($_POST["uname"])){
   $uname_error = "User Name is required";

	}else{
	$uname = test_input ($_POST["uname"]);
	//check if uname only contains letter and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$uname)){
	$uname_error = "Only letters and white space allowed";
	}
}
if (empty($_POST["birthdate"])){
   $birthdate_error = "Birthdate is required";

	}else{
	$birthdate = test_input ($_POST["birthdate"]);
	//check if birthdate only contains letter and whitespace
	if (!preg_match("/^[0-9/]*$/",$birthdate)){
	$birthdate_error = "Only numbers allowed";
	}
}
if (empty($_POST["pword"])){
   $pword_error = "Password is required";

	}else{
	$pword = test_input ($_POST["pword"]);
	//check if password only contains letter and number
	if (!preg_match("/^[a-zA-Z0-9]*$/",$pword)){
	$pword_error = "Only letters and numbers allowed";
	}
}
if (empty($_POST["rpword"])){
   $rpword_error = "Confirm Password is required";

	}else{
	$rpword = test_input ($_POST["rpword"]);
	//check if Confirm password does match
	if ($pword == $rpword){
	$uname_error = "Password does not match";
	}
}