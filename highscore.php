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
require 'core/init.php';
require 'values.php';
$general->logged_out_protect();

$user 		= $users->userdata($_SESSION['id']);
$username 	= $user['username'];
$points 	= $_SESSION['points'];

?>

<?php
$d = rand(0,2);
echo "<h5>$dead[$d]</h5><br>";
echo "<h4>Your final score was: $points</h4>";

?>
<h3 id="high">Highscores:</h3>
<?php
if (isset($points)) {
#store highscore in db
$query = "INSERT INTO highscore
		(user, points) VALUES
		('$username', $points)";

try {
	$db->exec($query);
}

catch (PDOException $e) {
	echo "<p>fuck ($e)</p>";
}}

else {
}

#get highscores and display in descending order and set display limit to 10
$query= "SELECT * FROM highscore ORDER BY points DESC LIMIT 10";

try {
	$scores=$db->query($query);
	
} 
catch (PDOException $e) {
	echo "ijasngag it fucked up ($e)";
}
$i = 1;

foreach ($scores as $score) {
	echo "<table><tr>";
	echo "<td>".$i++."."."</td>"."<td>".$score['user']."</td>"."<td>".$score['points']."</td>";
	echo "</tr></table>";
}
?>

<?php
#reset points // no reload cheating
$_SESSION['points'] = '';

?>
<!-- Replay button -->
	<ul>
		<li><a href="#" id="button"><img src="graphics/game.png" onmouseover="this.src='graphics/game2.png'" onmouseout="this.src='graphics/game.png'"></a></li>
	</ul>
