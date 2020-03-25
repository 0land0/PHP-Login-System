<?php 
	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	header('Content-Type: application/json');
	// Always return json format


	$return = [];

	$email = Filter::String( $_POST['email'] );
	// Make sure the user does not exist
	$findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:$email) LIMIT 1");
	$findUser->bindParam(':email', $email, PDO::PARAM_STR);
	$findUser->execute();

	if($findUser->rowCount() == 1) {
		// User exists
		$return['error'] = "You already have an account";
	} else {
		// User does not exist, add them now

		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

		$addUser = $con->prepare("INSERT INTO users(LOWER(email), password) VALUES(:email, :password)");
		$addUser->bindParam(':email', $email, PDO::PARAM_STR);
		$addUser->bindParam(':password', $password, PDO::PARAM_STR);
		$addUser->execute();

		$user_id = $con->lastInsertId();

		$_SESSION['user_id'] = (int) $user_id;

		$return['redirect'] = "/dashboard.php?message=welcome";
	}

	// Make sure the user can be added AND is added

	// Return the proper information back to JavaScript to redirect us

	echo json_encode($return, JSON_PRETTY_PRINT); exit;

	} else {
		exit('Invalid URL');
	}
?>