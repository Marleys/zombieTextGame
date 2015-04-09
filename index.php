<?php 
require 'core/init.php';
$general->logged_in_protect();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Login and registration</title>
</head>
<body>	
	<div id="container">
		<div id="header">
			<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
			</div><!-- #menu -->
		</div><!-- #header -->

<div id="title">
	<h1 id="zombies">ZOMBIES</h1><h1 id="death">DEATH</h1>
</div><!-- #title -->
<div id="general">
	<h3>Welcome to the worlds most boring zombie game</h3>
	<p>This is a part of a PHP course at Malmö högskola.<br>
	To play, register an account and then you'll recieve an activation code.
	Activate the account and you're good to go. Login if you've already got one.
	The game is text based so don't get too excited. Each turn you will get a scenario and then two options to survive.
	But don't get too comfortable, sooner or later you will die.</p>
</div><!-- #general -->
</div><!-- #container -->
</body>
</html>