<?php
require('actions/users/login_borrowAction.php');
?>

<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Instant Borrow</title>

<!-- icons generatoed with https://favicomatic.com/ -->
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/images/icons/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/images/icons/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/images/icons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/images/icons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/images/icons/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="assets/images/icons/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="assets/images/icons/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="assets/images/icons/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="assets/images/icons/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="assets/images/icons/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<style>

.main {
	width: 540px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 13vh;
	height: 500px;
	border-radius: 0.325rem;
	box-shadow: 0px 0px 15px 2px rgba(92, 125, 209, 0.5);
}

.text {
	position: absolute;
	width: 400px;
	margin-top: 30px;
	margin-left: 70px;
	font-size: 0.9rem;
	font-weight: 500;
	color: #383838;
	text-align: left;
}

.input {
	width: calc(100% - 7px);
	height: 40px;
	background-color: #f7f7f7;
	margin-top: -10px;
	margin-bottom: 10px;
	border: 1px solid #00c4ff;
	border-radius: 0.125rem;
	transition: transform 0.2s;
	padding-left: 7px;
	font-size: 1.06rem;
}

.input:hover {
	outline: 1px solid #00c4ff;
	box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(0, 0, 0, 0.12);
	-ms-transform: scale(1.015); /* IE 9 */
	-webkit-transform: scale(1.015); /* Safari 3-8 */
	transform: scale(1.015); 
}

.input:focus {
	outline: 1px solid #00c4ff;
	background-color: rgba(0, 196, 255, 0.05);
	box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(0, 0, 0, 0.12);
}

.checkmark {
  height: 18px;
  width: 18px;
}


.login-button {
	margin-top: 50px;
	margin-bottom: 10px;
	width: 101.5%;
	height: 50px;
	background-color: #00c4ff;
	color: white;
	font-size: 1.18rem;
	font-weight: bold;
	border: 0;
	border-radius: 0.325rem;
	box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(0, 0, 0, 0.12);
	transition: transform 0.2s;
}

.login-button:hover {
	background-color: red;
	-ms-transform: scale(1.015); /* IE 9 */
	-webkit-transform: scale(1.015); /* Safari 3-8 */
	transform: scale(1.015); 
}

.under-container {
	margin-top: 30px;
	color: #383838;
	font-size: 0.92rem;
}

.error-message {
	color: red;
	text-align: left;
	font-size: 0.92rem;
}


</style>

</head>


<body style="margin: 0px; font-family: 'Poppins', sans-serif; text-align: center;">

<div class="main">
	<div class="text">
		<p style="font-size: 1.4rem; font-weight: 500;">Sign In to Borrow Money</p>
		<form method="post">
		<p style="margin-top: 40px;">Email</p>
		<input class="input" name="email" required autocomplete="off">
		<p style="margin-top: 20px;">Password</p>
		<input class="input" type="password" name="password" required>
		<input type="submit" class="login-button" name="login" value="login">
		 <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
		</form>
		
	</div>
</div>

<div class="under-container">
	<p>Don't have an account? <a href="signup-borrow.php" style="text-decoration: none; color: #00c4ff;">Sign Up</a></p>
</div>

</body>

</html>
