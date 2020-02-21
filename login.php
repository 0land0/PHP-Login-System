<?php 
	//Allow the config
	define('__CONFIG__', true);
	//Reguire the config
	require_once "inc/config.php"; ?>

<!DOCTYPE html>
<head>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/css/uikit.min.css" />
	<title>Login</title>
<body>
	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/js/uikit-icons.min.js"></script>

	<form class="uk-form-stacked js-login">
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Login</legend>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-input" type="email" name="Email" required='required' placeholder='Email Here'> Email</label>
        </div>

 		<div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-input" type="password" name="Password" required='required' placeholder='Password Here'> Password</label>
        </div>

        <div class='uk-margin'>
        	<button class="uk-button uk-button-default" type="submit">Login</button>
        </div>

    </fieldset>
</form>

	<?php require_once "inc/footer.php"; ?>
</body>