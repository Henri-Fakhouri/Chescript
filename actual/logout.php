<?php 
				session_start();
				if ($_SESSION['online'] == true) {
					$_SESSION['online'] = false;
					session_destroy();
					header('Location: login.php');
				} else {
					header('Location: login.php');
				}

?>	
				
