<?php
session_start();
 
require_once('/bejelentkezo_kapcsolat.php');
 
//if user is logged in redirect to myaccount page
if (isset($_SESSION['id'])) {
    header('Location: /index.php?oldal=profil');
}
 
$error_message = '';
if (isset($_POST['submit'])) {
 
    extract($_POST);
 
    if (!empty($email) && !empty($password)) {
        $sql = "SELECT id, status FROM users WHERE email = '".$conn->real_escape_string($email)."' AND password = '".md5($conn->real_escape_string($password))."'";
        $result = $conn->query($sql);
 
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if($row['status']) {
                $_SESSION['id'] = $row['id'];
                header('Location: /index.php?oldal=profil');
            } else {
                $error_message = 'Your account is not active yet.';
            }
        } else {
            $error_message = 'Incorrect email or password.';
        }
    }
}
?>


<html>
<body>
<div align="center" class="container" id="main-content">
	  <div class = "container">
		<form action="" method="post">
            <div class="form-group" method="post" enctype="multipart/form-data">
		<div class="row">
                <div class="col-sm-12 form-group">
				Felhasználó név:<br>
				<input type="text" name="username" id="username" value=""<?php echo $username; ?> /><br>
				</div>   
		 </div> 
		 <div class="col-sm-12 form-group">
				Jelszó:<br>
				<input type="password" name="password" id="password" value="" /><br><br>
				</div>   
		 </div> 
		 <div class="row">
		 
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-success btn-block" value="Login">Bejelentkezés </button>
										</div>   
		 </div> 
		 <p>Nem vagy tag? Regisztrálj! <a href="/index.php?oldal=regisztracio">Regisztálás</a>.</p>
			</form>
		 </div>   
		 </div>    	 
</body>
</html>
