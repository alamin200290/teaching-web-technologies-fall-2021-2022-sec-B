<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
	
		if($username != ""){
			if($password != ""){
				

				if($_COOKIE['username'] == $username && $_COOKIE['password'] == $password){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: home.php');
				}else{
					echo "invalid username/password...";
				}

			}else{
				echo "invalid password...";
			}
		}else{
			echo "invalid username...";
		}
	}

?>