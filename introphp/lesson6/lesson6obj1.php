<?
	//Define schedule array
	$schedule = array( "9 A.M" => "Work",
					   "10 A.M" => "Work",
					   "11 A.M" => "Read",
					   "12 P.M" => "Lunch",
					   "1 P.M" => "Exercise",
					   "2 P.M" => "Work",
					   "3 P.M" => "Work",
					   "4 P.M" => "Read",
					   "5 P.M" => "Work");

	echo "<h1>Daily Schedule</h1>";

	//Iterate through array and assign key and values to be
	//printed out in a list format
	while (list($key, $value) = each($schedule)) {
		echo "<pre>";
		echo $key.": ".$value;
		echo "</pre>";		
	}

?>