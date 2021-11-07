<?php 
	
	require_once('../model/usersModel.php');

	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$id = $_REQUEST['id'];
	$user = ['id'=>$id, 'username'=>$username, 'password'=>$password, 'email'=> $email];

	$status = editUser($user);

	if($status){
		header('location: ../views/userlist.php');
	}else{
		header('location: ../views/edit.php?id='.$id);
	}
?>