



<html>
<div align="center" class="container" id="main-content">

	  <div class = "container">
		<form name="R"  action="/oldal/be.php" onsubmit="return Ro()" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" method="post" enctype="multipart/form-data">
		            <div class="row">
                      <div class="col-sm-12 form-group">
				            Felhasználó név:<br>
				            <input type="text" name="username" id="username" value="<?php echo $username; ?>" />
                        <span class="help-block"><?php echo $username_err; ?></span><br>
				          </div>   
		            </div> 
                   <div class="row">
		                <div class="col-sm-12 form-group">
				            Jelszó:<br>
				            <input type="password" name="password" id="password" value="<?php echo $password; ?>" />
                        <span class="help-block"><?php echo $password_err; ?></span><br><br>
				          </div>   
		            </div> 
		             <div class="row">
                      <div class="col-sm-12 form-group">
                        <button type="submit" class="btn btn-lg btn-success btn-block" name="Login" value="Login">Bejelentkezés </button>
					      </div>   
		             </div> 
		      </div>  
       </form> 
       <p>Nem vagy tag? Regisztrálj! <a href="/index.php?oldal=regisztracio">Regisztálás</a>.</p> 
       </div>
   </div>  
      
          	 
</html>
<script> 
function Ro()                                    
{ 
    var uname = document.forms["R"]["username"];   
    var password = document.forms["R"]["password"];    
   
    if (uname.value == "")                                  
    { 
        window.alert("Kérjük adja meg az usernevét!"); 
        uname.focus(); 
        return false; 
    } 
    if (password.value == "")                        
    { 
        window.alert("Kérjük adjon meg jelszót"); 
        password.focus(); 
        return false; 
    } 
    return true; 
}</script> 