<?php

	//print_r($_GET);
	//echo $_GET['myname'];
	
	//print_r($_POST);
	//echo $_POST['myname'];

	
	$name = $_REQUEST['myname'];

	if($name == ""){
		echo "Null value ...";
	}else{
		echo "Your name is: ". $name;
	}
?>