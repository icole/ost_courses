<?
	//Loops through the first array and prints out all the keys which are the days
	function print_day_headers($week_schedule) {
		while (list($key, $value) = each($week_schedule)) {
			echo "<th>";
			echo $key;
			echo "</th>";
		}
	}

	//Creates a column, then loops through each day and prints out the full schedule
	function print_daily_schedule($day_schedule) {
		echo "<td>";
		while (list($key, $value) = each($day_schedule)) {
			echo "<pre>";
			echo $key.": ".$value;
			echo "</pre>";		
		}
		echo "</td>";
	}

	//Define schedule array
	$schedule = array(  "Sunday" => array( "9 A.M" => "Work",
									   "10 A.M" => "Work",
									   "11 A.M" => "Read",
									   "12 P.M" => "Lunch",
									   "1 P.M" => "Exercise",
									   "2 P.M" => "Work",
									   "3 P.M" => "Work",
									   "4 P.M" => "Read",
									   "5 P.M" => "Work"),
						"Monday" => array( "9 A.M" => "Work",
									   "10 A.M" => "Work",
									   "11 A.M" => "Read",
									   "12 P.M" => "Lunch",
									   "1 P.M" => "Exercise",
									   "2 P.M" => "Work",
									   "3 P.M" => "Work",
									   "4 P.M" => "Read",
									   "5 P.M" => "Work"),
						"Tuesday" => array( "9 A.M" => "Work",
									   "10 A.M" => "Work",
									   "11 A.M" => "Read",
									   "12 P.M" => "Lunch",
									   "1 P.M" => "Exercise",
									   "2 P.M" => "Work",
									   "3 P.M" => "Work",
									   "4 P.M" => "Read",
									   "5 P.M" => "Work"),
						"Wednesday" => array( "9 A.M" => "Work",
									   "10 A.M" => "Work",
									   "11 A.M" => "Read",
									   "12 P.M" => "Lunch",
									   "1 P.M" => "Exercise",
									   "2 P.M" => "Work",
									   "3 P.M" => "Work",
									   "4 P.M" => "Read",
									   "5 P.M" => "Work"),
						"Thursday" => array( "9 A.M" => "Work",
									   "10 A.M" => "Work",
									   "11 A.M" => "Read",
									   "12 P.M" => "Lunch",
									   "1 P.M" => "Exercise",
									   "2 P.M" => "Work",
									   "3 P.M" => "Work",
									   "4 P.M" => "Read",
									   "5 P.M" => "Work"),
						"Friday" => array( "9 A.M" => "Work",
									   "10 A.M" => "Work",
									   "11 A.M" => "Read",
									   "12 P.M" => "Lunch",
									   "1 P.M" => "Exercise",
									   "2 P.M" => "Work",
									   "3 P.M" => "Work",
									   "4 P.M" => "Read",
									   "5 P.M" => "Work"),
						"Saturday" => array( "9 A.M" => "Work",
									   "10 A.M" => "Work",
									   "11 A.M" => "Read",
									   "12 P.M" => "Lunch",
									   "1 P.M" => "Exercise",
									   "2 P.M" => "Work",
									   "3 P.M" => "Work",
									   "4 P.M" => "Read",
									   "5 P.M" => "Work"));

	echo "<h1>Weekly Schedule</h1>";

	//Put all contents in a table to make it a little easier
	echo "<table>";

	//First row with all headers of the days
	echo "<tr>";
	print_day_headers($schedule);
	echo "</tr>";

	//Second row with a daily schedule in each column under the header of the day
	echo "<tr>";
	while (list($key, $value) = each($schedule)) {
		print_daily_schedule($value);		
	}
	echo "</tr>";

	echo "</table>";

?>