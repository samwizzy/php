<?php
	// header("Access-Control-Allow-Origin: *");
 //    header('Access-Control-Allow-Credentials: true');
 //    header('Access-Control-Max-Age: 86400');

	$data = array(
		array('id' => 1, 'name' => 'samuel', 'state'=>'Lagos'),
		array('id' => 2, 'name' => 'bred', 'state'=>'Abia'),
		array('id' => 3, 'name' => 'lukas', 'state'=>'Osun'),
		array('id' => 4, 'name' => 'samson', 'state'=>'Abuja'),
		array('id' => 5, 'name' => 'friday', 'state'=>'Kano'),
		array('id' => 6, 'name' => 'femi', 'state'=>'Delta'),
		array('id' => 7, 'name' => 'brian', 'state'=>'Lagos'),
		array('id' => 8, 'name' => 'fred', 'state'=>'Bayelsa'),
		array('id' => 9, 'name' => 'wilson', 'state'=>'Anambra'),
		array('id' => 10, 'name' => 'daniel', 'state'=>'Rivers'),
	);

	$json = json_encode($data);
	print_r($json)
?>