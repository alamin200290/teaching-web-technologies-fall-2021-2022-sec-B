<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home page</title>
</head>
<body>
		Your Profile pic:
		<img src="upload/<?=$_SESSION['myimage']?>"  width='100px' height='100px'>
</body>
</html>