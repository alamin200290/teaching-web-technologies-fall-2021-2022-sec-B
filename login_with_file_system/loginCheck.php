<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
	
		if($username != ""){
			if($password != ""){
			
				$myfile = fopen('user.txt', 'r');				
				$data = fread($myfile, filesize('user.txt'));
				//fgets();
				//feof();
				//while
				$myuser = explode('|', $data);
				if(trim($myuser[0]) == $username && trim($myuser[1]) == $password){
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