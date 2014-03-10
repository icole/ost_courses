<?
    echo "<html><body>";
    echo "<h2>June</h2>";
    echo "<table border='1'>";
    $done  = FALSE;
    $days = 0;
    $day_names = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    #Calculate the time for the first of the month of my birthaday
    $tracked_day = mktime(0, 0, 0, 6, 1, 2014);
    do {
        echo "<tr>";
        #Loop through the days of the week
        for($count=0;$count<=6;$count++) {
            echo "<td width='100px' height='100px'>";
            #Print the day of the month only if it falls in June
            if (($day_names[$count] == date("l", $tracked_day)) && (date("F", $tracked_day) == "June")) {
                echo date("j", $tracked_day);
                #Print birthday if the day is correct
                if (date("j", $tracked_day) == "17") {
                    echo "<br />";
                    echo "My Birthday!!!";
                }
                #Increment by one day
                $tracked_day = $tracked_day + (24* 60 * 60);
            }
            echo "</td>";
            $days++;
        }
        echo "</tr>";    
        if ($days > 30) {
            $done = TRUE;
            break;
        }
    } while (!$done);
    echo "</table>";
?>