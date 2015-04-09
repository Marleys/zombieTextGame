<?php 
require 'core/init.php';
$general->logged_out_protect();

$user 		= $users->userdata($_SESSION['id']);
$username 	= $user['username'];

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<title>ZombieDeath - Home</title>

			<!-- script section -->
<script>

	$(function() {
		$("#button").click(function() {
			$("#general")

				.load("gameOn.php");
		});
	});

</script>
		<!-- End script section -->
</head>

<body>	
<div id="container">
		<div id="header">
			<div id="menu">
				<ul>

					<li><a href="index.php">Home</a></li>
					<li><a href="logout.php">Logout</a></li>

				</ul>
			</div><!-- #menu -->
		</div><!-- #header -->
	<div id="title">
		<h1 id="zombies">ZOMBIES</h1><h1 id="death">DEATH</h1>
	</div><!-- #title -->

	<div id="general">
		<h3>Alright <?php echo $username ?>, are you ready to tear this up?</h3>
		<ul>
			<li><a href="#" id="button"><img src="graphics/game.png" onmouseover="this.src='graphics/game2.png'" onmouseout="this.src='graphics/game.png'"></a></li>
		</ul>
	</div><!-- #general -->
</div>
</body>
</html>