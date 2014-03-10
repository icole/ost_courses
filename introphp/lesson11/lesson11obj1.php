<?
    $current_time = time();
    $holiday = mktime(0, 0, 0, 7, 4, 2014);
    #Calculate the remaining total seconds
    $diff_total = $holiday - $current_time;
    #Convert the remaining seconds to days and hours
    $days = $diff_total / (60 * 60 * 24);
    $hours = ($diff_total % (60 * 60 * 24)) / (60 * 60);
    echo "There are <strong>".(int)$days."</strong> days, <strong>".(int)$hours."</strong> hours until July 4th";
?>