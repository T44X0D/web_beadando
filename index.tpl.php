<html>
<head>
<meta name="" />
<title>Szent István Katolikus Óvoda és Általános Iskola Kétsoprony</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div id="container">
  <div class="jumbotron">
	  <img src="img/logo.png">
	  <h1>Szent István Katolikus Óvoda és Általános Iskola Kétsoprony</h1>
  </div>
  <div id="navbar">
    <ul class="nav nav-pills">
    <?php foreach ($oldalak as $url => $oldal) { ?>
    <li<?php echo (($oldal == $keres) ? ' class="aktiv"' : '') ?>>
    <a class="nav-link" href="<?php echo ($url == '/') ? '.' : ('?oldal=' . $oldal['fajl'])?>"><?php echo $oldal['szoveg'] ?></a>
    </li>

    <?php } ?>
    <div class="kereso_navbar" align="right">
        <form action="https://google.com/search" method="get">
        <input type="hidden" name="sitesearch" value="http://t44x0d.szakdolgozat.net" />
        <input type="text" name="googlekereso" placeholder="Kereső.." />
        </form>
      </div>
      <?php
	    if($_SESSION['Login']) echo $username;
	    else echo "";
	?> 
    </ul>
  </div>

  <div id="content">
    <?php
    include("oldal/{$keres['fajl']}.tpl.php");
    ?> 
  </div>
 
</div>
</body>
<footer>
<div align="center" id="footer">T44X0D &copy; <?php print date("Y");?>  <a href="http://www.sztistvan-ketsoprony.hu/">Az iskola eredeti honlapja</a></div>
</footer>
</html>
