<?php 
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != ""){
			if($password != ""){
				if($email != ""){
					
					$user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'type'=>'user'];
					$status = insertUser($user);
					if($status){
						header('location: ../views/login.html');						
					}else{
						echo "try again...";
					}

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