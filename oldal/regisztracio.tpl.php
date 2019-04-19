
<?php
if(isset($_POST['submit'])){

  $nev=trim($_POST["username"]);
  $email=trim($_POST["email"]);

  if($nev =="") {
    $errorMsg=  "error : You did not enter a name.";
    $code= "1" ;
  }
  elseif($email == ""){
    $errorMsg=  "error : You did not enter a email.";
    $code= "3";
} //check for valid email 
elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
  $errorMsg= 'error : You did not enter a valid email.';
  $code= "3";
}
else{
  echo "Success";

}

}
?>
<html>
<body>
<div align="center" class="container" id="main-content">
<?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>

<form name="Re" action="oldal/regisztracio_kapcsolat.tpl.php" onsubmit="return R()" method="post" >	

<div class="row">
                <div class="col-sm-12 form-group">
Felhasználó név:<br>
<input type="text" name="username" /><br>
</div>
</div>
<div class="row">
                <div class="col-sm-12 form-group">
Vezetéknév:<br>
<input type="text" name="vezeteknev" /><br>
</div>
</div>
<div class="row">
                <div class="col-sm-12 form-group">
Keresztnév:<br>
<input type="text" name="keresztnev" /><br>
</div>
</div>
<div class="row">
                <div class="col-sm-12 form-group">
Email cím:<br>
<input type="text" name="email" /><br>
</div>
</div>
<div class="row">
                <div class="col-sm-12 form-group">
Jelszó:<br>
<input type="password" name="password" /><br>
</div>
</div>
<div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Regisztráció! </button>
                </div>
            </div>
            <p>Már tag vagy? Lépj be! <a href="/index.php?oldal=bejelentkezes">Bejelentkezés</a>.</p>
</form>
</div>
</body>
</html>

<script> 
function R()                                    
{ 
    var uname = document.forms["Re"]["username"];   
    var vezeteknev = document.forms["Re"]["vezeteknev"];  
    var keresztnev = document.forms["Re"]["keresztnev"];              
    var email = document.forms["Re"]["email"];  
    var password = document.forms["Re"]["password"];    
   
    if (uname.value == "")                                  
    { 
        window.alert("Kérjük adja meg az usernevét!"); 
        uname.focus(); 
        return false; 
    } 
    if (vezeteknev.value == "")                                  
    { 
        window.alert("Kérjük adja meg a vezetéknevét!"); 
        vezeteknev.focus(); 
        return false; 
    }   
    if (keresztnev.value == "") 
    { 
        window.alert("Kérjük adja meg a keresztnevét!"); 
        keresztnev.focus(); 
        return false; 
    }  
    if (email.value == "")                                   
    { 
        window.alert("Kérjük adjon meg valós email címet!"); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Kérjük adjon meg valós email címet!"); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Kérjük adjon meg valós email címet!"); 
        email.focus(); 
        return false; 
    } 
    if (password.value == "")                        
    { 
        window.alert("Kérjük adjon meg jelszót"); 
        password.focus(); 
        return false; 
    } 
   window.alert("Sikres regisztáció!");
    return true; 
}</script> 
