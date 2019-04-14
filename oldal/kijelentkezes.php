<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
</head>
<body>
	<?php 
		session_start();
   
		if(session_destroy()) {
			header("Location: ../index.php");
		}			
	?>
</body>
</html>