<?

  #Consolidated printing of the new form for downloading
  function print_download_form($error, $email) {
    if ($error && !$email) {
      echo "<b>Please include your email address.</b><br />";
    }
    echo "<form action='download.php' method='GET'>";
    echo "<input type='text' name='email' value='".$email."' placeholder='email' size='25'>";
    echo "<br />";
    echo "<br />";
    echo "<input type='submit' value='Download Now!'>";
    echo "</form>";
  }

  require("./template_top.inc");

  if ($_GET['error'] == "1") {
     $error_code = 1;  //this means that there's been an error and we need to notify the customer
  } else {
     $error_code = 0;
  }

  $user_data = $_SERVER['HTTP_USER_AGENT'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $ie_link = "http://windows.microsoft.com/en-us/internet-explorer/download-ie";
  $firefox_link = "http://www.mozilla.org/en-US/firefox/new/";


  $mac_check = strpos($user_data, 'Macintosh') && strpos($user_data, 'Firefox');
  $windows_check = strpos($user_data, 'Windows') &&  (strpos($user_data, 'Firefox') || strpos($user_data, 'Trident'));

  if ($mac_check) {
    if (substr($ip, 0, 3) == "202") {
      echo "<b>You are not authorized!</b>";
    }
    else {
      if ($_COOKIE['download']) {
        echo "You have already downloaded this file";
      }
      else {
        print_download_form($error_code, $_GET['email']);
      }
    }
  }
  elseif ($windows_check) {
    if (substr($ip, 0, 3) == "202") {
      echo "<b>You are not authorized!</b>";
    }
    else {
      if ($_COOKIE['download']) {
        echo "You have already downloaded this file";
      }
      else {
        print_download_form($error_code, $_GET['email']);
      }
    }
  }
  else {
    if (strpos($user_data, 'Macintosh')) {
      echo "Your browser is not supported.\n";
      echo "Please use <a href=\"".$firefox_link."\">Firefox</a>";
    }
    elseif (strpos($user_data, 'Windows')) {
      echo "Your browser is not supported.\n";
      echo "Please use either <a href=\"".$ie_link."\">IE</a> or <a href=\"".$firefox_link."\">Firefox</a>";
    }
    else {
      echo "Your OS is not support. Please use either Windows of Mac OS";
    }
  }

  require("./template_bottom.inc");

?>