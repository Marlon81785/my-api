<?php
	require('./cors.php');
	
	$json = file_get_contents('php://input');
	
	$obj = json_decode($json, true);
	
	require('./conn.php');

	pingBanco();


?>
