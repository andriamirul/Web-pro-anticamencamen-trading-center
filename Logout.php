<?php
	session_start();
	session_destroy();
	//setcookie ("nama","");
	
	header('Refresh: 1; url=loginUTS.php');
?>