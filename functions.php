<?php
function shuffleScenarios($scenarios) {
	# Get the points or create a base value
	if (isset($_SESSION['points'])){
	$points = $_SESSION['points'];
	} else {
		$points = 0;
	}
	
	# Randomize value to pick value in array
	$y = rand(0,24);						
	
	# Display scenario
	echo "<p>";
	echo $scenarios[$y]['Scenario'];
	echo "</p>";

	# elseif statement to add level of difficulty
	if ($scenarios[$y]['Value'] == 1) {
		$value = "1";
	}

	elseif ($scenarios[$y]['Value'] == 2) {
		$value = "2";
	}

	elseif ($scenarios[$y]['Value'] == 3) {
		$value = "3";
	}

	# Store the variable to use in array 
	$_SESSION['difficulty'] = $value;


}
?>

<?php
function fighting($fight, $dead) {
	# Get the difficulty level
	$difficulty = $_SESSION['difficulty'];
	$points = $_SESSION['points'];
	# Randomize the outcome
		$y = rand(0,19);
		# Randomize the response
			$f = rand(0,4);
				$d = rand(0,2);

	# Pick the right difficulty level
			# Level 1 = 5% death chance
	echo "<p>";
	if ($difficulty == 1) {
		if ($y == 18) {
			$liveAndDie = 0;
		} else{
			echo $fight[$f];
			$liveAndDie = 1;
		}
			# Level 2 = 10% death chance
	} elseif ($difficulty == 2) {
		if ($y == 18 || $y == 1) {
			$liveAndDie = 0;
		} else {
			echo $fight[$f];
			$liveAndDie = 1;
		}
			# Level 2 = 20% death chance
	} elseif ($difficulty == 3) {
		if ($y == 18 || $y == 1 || $y == 10 || $y == 7) {
			$liveAndDie = 0;
		} else {
			echo $fight[$f];
			$liveAndDie = 1;
		}
	}
	echo "</p>";

	# Continue game and store points if $liveAndDie = true else save to leaderboard and destroy session

	if ($liveAndDie == 1) {
		$_SESSION['points'] = $points + 1;
		echo "<uL><li><a href='#' id='button'>> ONWARDS <</a></li></uL>";

	} else {
		header('Location: highscore.php');
		
	}


}

?>

<?php
function running($run, $dead) {
	# Get the difficulty level
	$difficulty = $_SESSION['difficulty'];
	$points = $_SESSION['points'];
	# Randomize the outcome
		$y = rand(0,19);
		# Randomize the response
			$f = rand(0,4);
				$d = rand(0,2);

	# Pick the right difficulty level
			# Level 1 = 5% death chance
	echo "<p>";
	if ($difficulty == 1) {
		if ($y == 18) {
			$liveAndDie = 0;
		} else{
			echo $run[$f];
			$liveAndDie = 1;
		}
			# Level 2 = 10% death chance
	} elseif ($difficulty == 2) {
		if ($y == 18 || $y == 1) {
			$liveAndDie = 0;
		} else {
			echo $run[$f];
			$liveAndDie = 1;
		}
			# Level 3 = 15% death chance
			# If the player figures out which scenarios are the hardest
			# there's a little bit advantage running away
	} elseif ($difficulty == 3) {
		if ($y == 18 || $y == 1 || $y == 10) {
			$liveAndDie = 0;
		} else {
			echo $run[$f];
			$liveAndDie = 1;
		}
	}
	echo "</p>";

	# Continue game and store points if $liveAndDie = true else save to leaderboard and destroy session

	if ($liveAndDie == 1) {
		$_SESSION['points'] = $points + 1;
		echo "<uL><li><a href='#' id='button'>> ONWARDS <</a></li></uL>";

	} else {
		header('Location: highscore.php');
		
	}


}



?>