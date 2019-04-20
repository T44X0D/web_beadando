	<?php 
		session_start();
		
		if(session_destroy()) {
			unset($_SESSION['Login']);
			header("Location: ../index.php");
		}			
	?>