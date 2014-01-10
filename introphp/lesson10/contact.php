<?php


  #We used the superglobal $_GET here 
  if (!($_GET['name'] && $_GET['email'] && $_GET['whoami'] 
        && $_GET['subject'] && $_GET['message'])) {

     #with the header() function, no output can come before it.
     #echo "Please make sure you've filled in all required information.";

     $query_string = $_SERVER['QUERY_STRING'];
   #add a flag called "error" to tell contact_form.php that something needs fixed
     $url = "http://".$_SERVER['HTTP_HOST']."/ost_courses/introphp/lesson10/contact_form.php?".$query_string."&error=1";;
     
     header("Location: ".$url);
     exit();
     
  }

  extract($_GET, EXTR_PREFIX_SAME, "get");

  #construct email message
  $email_message = "Name: ".$name;
  $email_message .= "\nEmail: ".$email;
  $email_message .= "\nType of Request: ".$whoami;
  $email_message .= "\nMessage: ".$message;
  $email_message .= "\nHow you heard about us: ".$found;
  $email_message .= "\nUser Agent: ".$_SERVER['HTTP_USER_AGENT'];
  $email_message .= "\nIP Address: ".$_SERVER['REMOTE_ADDR'];

  #contruct the email headers
  $to = "ian.cole@me.com";
  $from = $_GET['email'];
  $email_subject = $_GET['subject'];

  #now mail
  mail($to, $email_subject, $email_message, "From: ".$from);

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