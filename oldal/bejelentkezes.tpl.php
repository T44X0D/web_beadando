<?php
   include("bejelentkezo_kapcsolat.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM felhasznalok WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
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
		 
			
		 </div>   
		 </div>  
         <p>Nem vagy tag? Regisztrálj! <a href="/index.php?oldal=regisztracio">Regisztálás</a>.</p>
         </form>  	 
</body>
</html>
