
"use strict"
	
let s = 10;
let abc = ['alamin', 12, 3.6, 'CS'];
abc[0];

//alert("test");
console.log('this is another test...');
//document.write('this is a test...');

//let element = document.getElementsByTagName('h1')[0];
//let element = document.getElementById('head1');
//document.getElementByClassName();
//element.innerHTML = "alamin";


function f1(){
	let element = document.getElementById('head1');
	element.innerHTML = "alamin";
}

function f2(){
	let element = document.getElementById('name');
	//alert(element.value);
	//document.getElementById('head1').innerHTML = element.value;
	document.getElementById('head1').innerHTML= document.getElementById('name').value;
	//document.getElementById('name').value ="";

}

function validate(){
	let name = document.getElementById('name').value;
	if(name == ""){
		document.getElementById('head1').innerHTML = "Null data...";
	}else{
		document.getElementById('head1').innerHTML = "good to go...";
	}
}


function moveLeft(){
	let current = document.getElementById('box').style.left;
	abc = current.replace('px','');
	let update = parseInt(abc)+10;
	document.getElementById('box').style.left = update+"px";
}

function moveRight(){
	let current = document.getElementById('box').style.left;
	abc = current.replace('px','');
	let update = parseInt(abc)-10;
	document.getElementById('box').style.left = update+"px";
}