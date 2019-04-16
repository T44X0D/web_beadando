<html>
<body>
<div align="center" class="container" id="main-content">
<form iname="RegForm" d="reg" action="oldal/regisztracio_kapcsolat.php" onsubmit="return REG()" method="post" enctype="multipart/form-data">	
<div class="row">
                <div class="col-sm-12 form-group">
Felhasználó név:<br>
<input type="text" name="username" id="username" value="" /><br>


<div class="row">
                <div class="col-sm-12 form-group">
Vezetéknév:<br>
<input type="text" name="vezeteknev" id="vezeteknev" value="" /><br>
</div>
</div>
<div class="row">
                <div class="col-sm-12 form-group">
Keresztnév:<br>
<input type="text" name="keresztnev" id="keresztnev" value="" /><br>
</div>
</div>
<div class="row">
                <div class="col-sm-12 form-group">
Email cím:<br>
<input type="text" name="email" id="email" value="" /><br>
</div>
</div>
<div class="row">
                <div class="col-sm-12 form-group">
Jelszó:<br>
<input type="password" name="password" id="password" value="" /><br>
</div>
</div>
<div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Regisztráció </button>
                </div>
            </div>
</form>
</div>
</body>
</html>

<script> 
function REG()                                    
{ 
    var username = document.forms["RegForm"]["username"];   
    var vezeteknev = document.forms["RegForm"]["vezeteknev"];  
    var keresznev = document.forms["RegForm"]["keresztnev"];              
    var email = document.forms["RegForm"]["email"];  
    var jelszo = document.forms["RegForm"]["jelszo"];    
   
    if (name.value == "")                                  
    { 
        window.alert("Kérjük adja meg az usernevét!"); 
        name.focus(); 
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
        return flase; 
    } 
   
    return true; 
}</script> 
