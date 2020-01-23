<HTML>
<HEAD>
 <TITLE>User Docoments!!</TITLE>
</HEAD>
<BODY bgcolor="#E0FFFF">
<body>
<table align="center" border="0">
<tr><td>
<p align="center">
<?php
include("config.php");
 mysql_select_db("shegernotice",$con);
session_start();
if($_SERVER["REQUEST_METHOD"] != "POST")
{
 ?>
<form method="POST" action="logi.php">
      User Name<br><input type="text" size="20" name="username"> <br>
      Password <br><input type="password" size="20" name="password"><br>
      <input type="Submit" value="Login">
</form>
<?php
  }
  else
  {
  mysql_select_db("shegernotice",$con);
        $username=addslashes($_POST['username']);
        $password=addslashes($_POST['password']);
      $sql="SELECT * FROM admin WHERE username='$username' and password='$password'";
      $result=mysql_query($sql);
      $row=mysql_fetch_array($result);
      $active=$row['active'];
      $count=mysql_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count==1){
        session_register("username");
        $_SESSION['username']=$username;
		echo "<font color='blue'>Welcome: <i><u>".$_SESSION['username']."</u></i></font>";
?>
  <table align="center"border="0">
  <tr>
     <hr color="green">
      <table border="0" align="center">
        <tr>
          <td><a href="add.php" target="body">Register</a></td>
          <td class="options"></td>
        </tr>
        <tr>
          <td><a href="delete.php" target="body">Delete</a></td>
          <td class="options"></td>
        </tr>
        <tr>
          <td><a href="modify.php" target="body">Modify</a></td>
          <td class="options"></td>
        </tr>
         <tr>
          <td><a href="studreport.php" target="body">Report</a></td>
          <td class="options"></td>
        </tr>
		<tr>
          <td><a href="search_form.php" target="body">Search</a></td>
          <td class="options"></td>
        </tr>
		<tr>
          <td><a href="signout.php">Sign Out</a></td>
          <td class="options"></td>
        </tr>
      </table>
     </p>
  </tr>
</table>
<?php
}
else
{
      header("location:logi.php");
}
}
?>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>
</BODY>
</HTML>