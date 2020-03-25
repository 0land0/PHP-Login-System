
<?php 
	//Don't load if __CONFIG__ is not defined
	if(!defined('__CONFIG__')) {
	exit('You do not have a config file');

	//Config contents:
	// Allow errors
	error_reporting(-1);
	ini_set('display_errors', 'On');

	//Include DB.php
	include_once "/classes/DB.php";
	include_once "/classes/Filter.php";

	$con = DB::getConnection();
	$con = new DB();
} ?>