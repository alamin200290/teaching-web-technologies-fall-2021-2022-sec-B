<?php

	$name = "alamin";
	/*$id = 11;
	$cgpa = 2.5;*/

	/*$student = array(1, "alamin", 2.5);
	$student = [1, "alamin", 2.5];
	$student = ['id'=>1, 'name'=>'alamin', 'cgpa'=>.5];

	$student[0];
	$student['id'];*/

	/*$students = [
		[1, "alamin", 2.5],
		[2, "alamin", 2.5],
		[3, "alamin", 2.5]
	];

	$students = [
		['id'=>1, 'name'=>'alamin', 'cgpa'=>.5],
		['id'=>2, 'name'=>'alamin', 'cgpa'=>.5],
		['id'=>3, 'name'=>'alamin', 'cgpa'=>.5]
	];*/

	$students = [
		's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>.5],
		's2'=>['id'=>2, 'name'=>'alamin', 'cgpa'=>.5],
		's3'=>['id'=>3, 'name'=>'alamin', 'cgpa'=>.5]
	];

	//print($students['s3']['cgpa']); 
	//echo $students['s3']['cgpa'];
	
	/*if(){

	}else{

	}*/

	/*for ($i=0; $i < ; $i++) { 
		// code...
	}*/

	/*foreach ($students as $std) {
		echo $std['cgpa']. " ";	
	}*/

	/*function sum(){
		return 1+5;
	}

	echo sum();*/

	for ($i=0; $i < 10 ; $i++) { 
		echo "<b> This is my name: </b> <br/>".$name. "<br>";
	}
	
?>