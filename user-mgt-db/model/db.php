<?php 

	$host = "localhost";
	$dbuser = "root";
	$dbpassword = '';
	$dbname = 'webtech';

	function getConnection(){
		global $host;
		global $dbuser;
		global $dbpassword;
		global $dbname;

		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}

?>