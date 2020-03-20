<?php 
	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	header('Content-Type: application/json');
	// Always return json format


	$return = [];

	// Make sure the user does not exist

	// Make sure the user can be added AND is added

	// Return the proper information back to JavaScript to redirect us

	$return['redirect'] = '/dashboard.php';

	echo json_encode($return, JSON_PRETTY_PRINT); exit;

	} else {
		exit('test');
	}
?>