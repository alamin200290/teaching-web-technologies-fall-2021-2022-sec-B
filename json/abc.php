<?php 

	$json = json_decode($_REQUEST['data']);
	//print_r($json);
	//print_r($_REQUEST);
	//echo $json['name'];

	$data = ['name'=>'alamin', 'age'=>12, 'dept'=>'CS'];
	$json = json_encode($data);

	echo $json;
?>