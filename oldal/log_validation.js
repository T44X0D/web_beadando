function validateLogForm() {

  var username = document.forms["log_form"]["username"].value;
  var jelszo = document.forms["log_form"]["jelszo"].value;
    
  if (username == "" ) {
    alert("Felhasználónév nincs kitöltve");
    return false;
  }
 
 if (jelszo == "" ) {
    alert("Jelszó nincs kitöltve");
    return false;
  }

}
