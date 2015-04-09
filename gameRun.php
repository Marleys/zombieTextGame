<script>

	$(function() {
		$("#button").click(function() {
			$("#general")

				.load("gameOn.php");
		});
	});

</script>
		<!-- End script section -->

<?php
require "functions.php";
require "values.php";
require 'core/init.php';
$points = $_SESSION['points'];
echo "<div id='points'><h2>Points: $points</h2></div>";


running($run, $dead);



?>
