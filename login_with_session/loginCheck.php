<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
	
		if($username != ""){
			if($password != ""){
				
				if($_SESSION['user']['username'] == $username && $_SESSION['user']['password'] == $password){
					$_SESSION['flag'] = "true";
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