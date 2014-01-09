<?php


  #We used the superglobal $_GET here 
  if (!($_GET['name'] && $_GET['email'] && $_GET['whoami'] 
        && $_GET['subject'] && $_GET['message'])) {

     #with the header() function, no output can come before it.
     #echo "Please make sure you've filled in all required information.";

     
     $query_string = $_SERVER['QUERY_STRING'];
     $url = "http://".$_SERVER['HTTP_HOST']."/contact_form.php?".$query_string;
     
     header("Location: ".$url);
     exit();
     
  }

  extract($_GET, EXTR_PREFIX_SAME, "get");

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

  echo "You are currently working on ".$_SERVER['HTTP_USER_AGENT'];
  echo "<br/>The IP address of the computer you're working on is ".$_SERVER['HTTP_X_FORWARDED_FOR'];


?>