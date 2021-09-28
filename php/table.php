<?php
	
	$product = [
		['id'=>1, 'name'=>'ABC', 'price'=> 40],
		['id'=>2, 'name'=>'ABC', 'price'=> 50],
		['id'=>3, 'name'=>'ABC', 'price'=> 60],
		['id'=>4, 'name'=>'ABC', 'price'=> 70]
	];

	echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>PRICE</td>
			</tr>";

	foreach ($product as $p) {
		echo "<tr>
				<td>".$p['id']."</td>
				<td>{$p['name']}</td>
				<td>{$p['price']}</td>
			</tr>";
	}

	echo "</table>";
?>