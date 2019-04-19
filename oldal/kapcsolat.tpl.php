<?php
if(isset($_POST['submit'])){

  $nev=trim($_POST["nev"]);
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
<body>
<div align="center" class="container" id="main-content">
<?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>
<form name="RegForm" action="oldal/kapcsolat_kapcsolat.tpl.php" onsubmit="return UZENET()" method="post">

<h2>Kapcsolat</h2>
        <p>
            Küldjön nekünk üzenetet és amilyen gyorsan tudunk, válaszolunk!
        </p>
        <div class="row">
                <div class="col-sm-12 form-group">
                 Teljes név: <input type="text" name="nev">
</div>
</div>
<div class="row">
                <div class="col-sm-12 form-group">
    E-mail cím: <input type="text" name="email">
    </div>
</div>
<div class="row">
                <div class="col-sm-12 form-group">
                Üzenet:     <textarea class="form-control" type="textarea" id="uzenet" name="uzenet" placeholder="Ide írja az üzenetét!" maxlength="6000" rows="7"></textarea>
    </div>
</div>
    <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Küldés! </button>
                </div>
            </div>

    </form>   
	
	<br><br>
	<a href="oldal/uzenetek.php" target="_blank">Beérkezett üzenetek</a>
</div>
</body>

<script> 
function UZENET()                                    
{ 
    var name = document.forms["RegForm"]["nev"];               
    var email = document.forms["RegForm"]["email"];    
   
    if (name.value == "")                                  
    { 
        window.alert("Kérjük adja meg a nevét!"); 
        name.focus(); 
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
   
    return true; 
}</script> 




