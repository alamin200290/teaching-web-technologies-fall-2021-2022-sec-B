<?php

	session_start();
	//session_destroy();
	unset($_SESSION['flag']);
	
	header('location: login.html');

?>