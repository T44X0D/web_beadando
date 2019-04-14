<?php
require('bejelentkezo_kapcsolat.php');
function SignIn()
{

session_start();   //starting the session for user profile page

$username  = mysql_real_escape_string(strip_tags($_POST['username']));
$password = mysql_real_escape_string(md5($_POST['password']));
echo $username;
echo $password;
$query = mysql_query("SELECT * FROM felhasznalok WHERE username='$username'") or die(mysql_error());
echo $query;
// If result matched $myusername and $mypassword, table row must be 1 row
$row = mysql_fetch_array($query,  MYSQL_BOTH) or die(mysql_error());
echo $row[0];
echo $row[1];
echo $row[2];
$count = mysql_num_rows($query);
echo $count;    

  if($count == 1)
{
    $_SESSION['login_user']=$username;
    header("location: profil.tpl.php");
    echo "Sikeres bejelentkezés";

}
else
{
    echo "Rossz felhasználónév vagy jelszó";
}

}
if(isset($_POST['submit']))
{
SignIn();
}
?>
<html>
<head>
<!--<script type="text/javascript" src="contents/log_validation.js"></script>-->
</head>
<body>
      <h2></h2> 
	  <div class = "container">
		<form id="SignIn" action="" method="post" enctype="multipart/form-data"><!--onsubmit="return validateLogForm()"--> 	
				Felhasználó név:<br>
				<input type="text" name="username" id="username" value="" /><br>
				Jelszó:<br>
				<input type="password" name="password" id="password" value="" /><br><br>				
				<input type="submit" value="Bejelentkezés" name="submit" id="submit">
			</form>
		 </div>      	 
</body>
</html>
