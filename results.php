<?php
	// get the user number
	$userMin = intval($_POST["userMin"]);
  $userMax = intval($_POST["userMax"]);

  // initialize the counter to userMin
	$counter = $userMin;
	// initalize numbers as an empty string
	$numbers = "";

	// use a while loop to display the numbers from the user min up to the user max
	while ($counter <= $userMax) {
		// build the string of numbers with a line break each time
		$numbers = $numbers . $counter . "<br>";
		// increment the counter
		$counter++;
	}

	echo "$numbers";
?>