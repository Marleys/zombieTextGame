<!-- Fight button // gameFight.php -->
<script>

	$(function() {
		$("#button1").click(function() {
			$("#general")

				.load("gameFight.php");
		});
	});

</script>

<!-- Run button // gameFlight.php -->
<script>

	$(function() {
		$("#button2").click(function() {
			$("#general")

				.load("gameRun.php");
		});
	});

</script>




<?php
require "functions.php";
require "values.php";
require 'core/init.php';
$user 		= $users->userdata($_SESSION['id']);
$username 	= $user['username'];
$points = $_SESSION['points'];
echo "<div id='points'><h2>Points: $points</h2></div>";
shuffleScenarios($scenarios);

?>

<!-- Action buttons -->
<ul>
<li><a href="#" id="button1"><img src="graphics/gun.png" onmouseover="this.src='graphics/gun2.png'" onmouseout="this.src='graphics/gun.png'"></a></li>
<li><a href="#" id="button2"><img src="graphics/run.png" onmouseover="this.src='graphics/run2.png'" onmouseout="this.src='graphics/run.png'"></a></li>
</ul>
