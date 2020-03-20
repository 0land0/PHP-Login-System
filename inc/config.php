
<?php 
	//Don't load if __CONFIG__ is not defined
	if(!defined('__CONFIG__')) {
	exit('You do not have a config file');

	//Config contents:

	//Include DB.php
	include_once "/classes/DB.php";
	include_once "/php_login/ajax/register.php";

	$con = DB::getConnection();
	$con = new DB();
} ?>