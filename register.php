<?php 
	//Allow the config
	define('__CONFIG__', true);
	//Reguire the config
	require_once "inc/config.php";
	?>

<!DOCTYPE html>
<head>

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/css/uikit.min.css" />
	<title>Register</title>
	<script src="jquery-3.4.1.min"></script>
</head>
<body>
	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/js/uikit-icons.min.js"></script>

	<form class="uk-form-stacked js-register">
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Register</legend>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-input" type="email" name="Email" required='required' placeholder='Email Here'> Email</label>
        </div>

 		<div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-input" type="password" name="Password" required='required' placeholder='Password Here'> Password</label>
        </div>

        <div class="uk-margin uk-alert uk-alert-danger js-error" style='display:none;'>
        </div>

        <div class='uk-margin'>
        	<button class="uk-button uk-button-default" type="submit">Register</button>
        </div>

    </fieldset>
</form>
	<script src="/php_login/assets/js/main.js"></script>
</body>