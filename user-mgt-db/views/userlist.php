<?php
	require_once('header.php');
	require_once('../model/usersModel.php');
	
	$result = getAllUsers();
	$count = mysqli_num_rows($result);

	/*for($i=1; $i<=$count; $i++){
		$data =mysqli_fetch_assoc($result);
		echo "<br/>";
		print_r($data);
	}*/

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User list</title>
</head>
<body>
	<center>
		<a href="home.php">Back</a>|
		<a href="../controller/logout.php">Logout</a>
	</center>
	<br>
	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>

		</tr>
		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['username']?></td>
					<td><?=$data['password']?></td>
					<td><?=$data['email']?></td>
					<td>
						<a href="edit.php">EDIT</a> |
						<a href="delete.php?id=1">DELETE</a> 
					</td>
				</tr>

		<?php } ?>

	</table>
</body>
</html>