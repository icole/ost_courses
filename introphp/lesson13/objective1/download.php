<?php

    #Check to make sure email was passed in otherwise go back to form
    if (!($_GET['email'])) {

     $query_string = $_SERVER['QUERY_STRING'];
     #add a flag called "error" to tell contact_form.php that something needs fixed
     $url = "http://".$_SERVER['HTTP_HOST']."/ost_courses/introphp/lesson13/objective1/lesson13obj1.php?".$query_string."&error=1";;
     
     header("Location: ".$url);
     exit();
     
    }


    $filepath = "./dog-top-hat.jpg";
    if (file_exists($filepath)) {
        #Set a cookie for the download
        $mytime = time() + (7 * 24 * 60 * 60);
        setcookie("download",$_GET['email'],$mytime);
        header("Content-Type: application/force-download");
        header("Content-Disposition:filename=\"dog-top-hat.jpg\"");
        $fd = fopen($filepath,'rb');
        fpassthru($fd);
        fclose($fd);
    }

?>