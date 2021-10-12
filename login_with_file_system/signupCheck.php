<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != ""){
			if($password != ""){
				if($email != ""){
					
					/*
					setcookie('username', $username, time()+3600, '/');
					setcookie('password', $password, time()+3600, '/');
					setcookie('email', $email, time()+3600, '/');*/
/*
					$myfile = fopen('user.txt', 'w');
					$user = $username."|".$password."|".$email;
					fwrite($myfile, $user);
					fclose($myfile);*/

					$myfile = fopen('user.txt', 'a');
					$user = $username."|".$password."|".$email."\r\n";
					fwrite($myfile, $user);
					fclose($myfile);

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