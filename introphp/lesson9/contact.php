<?php

    extract($_POST, EXTR_PREFIX_SAME, "post");

    echo "<h3>Thank you!</h3>";
    echo "Here is a copy of your request:<br/><br/>";

    echo "Name: ".$name."<br/>";
    echo "Email: ".$email."<br/>";
    echo "Type of Request: ".$whoami."<br/>";
    echo "Subject: ".$subject."<br/>";
    echo "Message: ".$message."<br/>";
    echo "How you heard about us: ".$found."<br/>";

    for ($i = 1; $i <= 2; $i++) {
       $element_name = "update".$i;
       echo $element_name.": ";
       echo $$element_name;
       echo "<br/>";
    }

?>