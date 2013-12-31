<?php
    
    extract($_POST, EXTR_PREFIX_SAME, "post");

    #Check if the dog can't be around others
    if(isset($aggressive) && ($service == "doggie_daycare")) {
        echo "I'm sorry but we don't take agressive dogs for our doggie daycare :( <br/>";
        echo "May we suggest trying In-home sitting?";
    }
    #Check for shots if they want boarding
    else if (!isset($shots) && ($service == "boarding")) {
        echo "Dogs need to be up to date on their shots for boarding<br/>";
        echo "Once your dog is up to date we would be happy to take them!";
    }
    #Return a response if they want any other service
    else {
        #Enforce a name to be entered
        if ($name != "") {
            echo "<h3>".$name." is all set!</h3>";
            echo "You are scheduled for: <b>".str_replace('_', ' ', $service)."</b><br/>";

            #Include request if set
            if ($request != "") {
                echo "<br/>We also have your special request: <br/>";
                echo $request;
                echo "<br/><br/>";
            }

            echo "We look forward to working with you!";
        }
        else {
            echo "We need a name for your dog!";
        }
    } 

?>