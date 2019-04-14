
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="oldal/kapcsolat_kapcsolat.tpl.php" method="post">

    <div align="center" class="row">
    <div class="col-md-6 col-md-offset-3">
        <h2>Kapcsolat</h2>
        <p>
            Küldjön nekünk üzenetet és amilyen gyorsan tudunk, válaszolunk!
        </p>
        <form role="form" method="post" id="reused_form">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">
                        Név:</label>
                    <input type="text" class="form-control" id="firstname" name="nev"  maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                    <input type="text" class="form-control" id="email" name="email"
                    maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="name">
                        Üzenet:</label>
                    <textarea class="form-control" type="textarea" id="message" name="uzenet" placeholder="Ide írja az üzenetét!" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
                        <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Küldés! </button>
                </div>
            </div>

        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Az üzenetet sikeresen elküldtük!</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Hiba</h3>
                    Sajnálatos hiba lépet fel az üzenet küldése során!

        </div>
    </div>
</div>


    </form>
   
	<!--<a href="profil.php"> Vissza a saját profilra</a>-->
	<br><br>
	<a href="oldal/uzenetek.php" target="_blank">Beérkezett üzenetek</a>
  </body>
</html>
