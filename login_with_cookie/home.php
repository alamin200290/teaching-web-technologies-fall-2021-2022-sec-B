<?php
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome home!</h1>
	<a href="logout.php">Logout</a>
</body>
</html>


<?php
 
 }else{
 	header('location: login.html');
 }

?>