<?php

// Initialize the session
session_start();
 

 
// Include config file
require_once "kapcsolat.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT ID, username, password FROM felhasznalok WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $hashed_password){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["Login"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: /oldal/profil.tpl.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.$hashed_password $hashed_password = $password";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>



<html>
<div align="center" class="container" id="main-content">

	  <div class = "container">
		<form name="R"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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