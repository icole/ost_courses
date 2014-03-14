<?  
    function mail_message($name, $email) {
         #get template contents, and replace variables with data
         $email_message = file_get_contents("./invite_template.txt");
         $email_message = str_replace("#NAME#", $name, $email_message);
         #construct the email headers 
         $from = "partyinviter@foobar.com";
         $email_subject = "Party Invite";

         $headers  = "From: " . $from . "\r\n";
         $headers .= 'MIME-Version: 1.0' . "\n";  //these headers will allow our HTML tags to be displayed in the email
         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";   
         
         #now mail
         #For some reason the mail() function mails even to invalid emails.
         #My assumption was based on the objective this would not be the case.
         #I found this built in PHP function that validates emails to work as well.s
         if(filter_var($email, FILTER_VALIDATE_EMAIL) && mail($email, $email_subject, $email_message, $headers)) {
            echo "Invite to ".$email." sent<br/>";
         }
         else {
            echo "Invite to ".$email." not sent!<br/>";
         }
        
      }

    for($count=0;$count<=9;$count++) {
        mail_message($_GET["name".$count], $_GET["email".$count]);
    }
?>