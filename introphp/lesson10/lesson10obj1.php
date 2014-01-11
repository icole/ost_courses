<?php


  #We used the superglobal $_GET here
  $email_matcher = "/^[A-Za-z0-9.]+@[A-Za-z.]+\.[A-Za-z]{2,6}$/";
  $valid_email = preg_match($email_matcher, $_GET['email']);
  if (!($_GET['name'] && $_GET['email'] && $valid_email)) {

     #with the header() function, no output can come before it.
     #echo "Please make sure you've filled in all required information.";

     $query_string = $_SERVER['QUERY_STRING'];

     $error = "1";

     if ($_GET['email'] && !($valid_email)) {
      $error = "2";
     }
     #add a flag called "error" to, set to 2 if email isn't valid
     $url = "http://".$_SERVER['HTTP_HOST'];
     $url .= "/ost_courses/introphp/lesson10/lesson10obj1_form.php?".$query_string."&error=".$error;
     
     echo $matches[0];
     header("Location: ".$url);
     exit();
     
  }

  extract($_GET, EXTR_PREFIX_SAME, "get");

  #construct email message
  $email_message .= "\nLogin: ".$email;
  #construct a random 9 character password
  $email_message .= "\nPassword: ".substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 9);

  #contruct the email headers
  $from = "ian.cole@me.com";
  $to = $_GET['email'];
  $email_subject = "User Sign Up For: ".$_GET['name'];

  #now mail
  mail($to, $email_subject, $email_message, "From: ".$from);

  echo "<h3>Thank you!</h3>";
  echo "Login info sent to <b>".$_GET['email']."</b>";

?>