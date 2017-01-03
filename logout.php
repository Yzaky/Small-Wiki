<?php if ($_GET["logout"]==1 AND $_SESSION['id']) { session_destroy();
		
			$message="You have been logged out. Have a nice day!";
			
		}
		?>