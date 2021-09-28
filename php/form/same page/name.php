<?php

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['myname'];

		if($name == ""){
			echo "Null value ...";
		}else{
			echo "Your name is: ". $name;
		}	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>NAME</legend>
			Name: <input type="text" name="myname" value="">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>