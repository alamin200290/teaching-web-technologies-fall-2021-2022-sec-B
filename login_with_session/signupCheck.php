<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != ""){
			if($password != ""){
				if($email != ""){
					//store info
					//$_SESSION['username'] = $username;
					//$_SESSION['password'] = $password;
					$user = ['username'=>$username, 'password'=>$password];
					
					$_SESSION['user'] = $user;

					header('location: login.html');
				}else{
					echo "invalid email...";
				}
			}else{
				echo "invalid password...";
			}
		}else{
			echo "invalid username...";
		}
	}

	

?>