<?

  require("./template_top.inc");

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
      echo "<a href='download.php'><button type=\"button\">Download Now!</button></a>";
    }
  }
  elseif ($windows_check) {
    if (substr($ip, 0, 3) == "202") {
      echo "<b>You are not authorized!</b>";
    }
    else {
      echo "<button type=\"button\">Download Now!</button>";
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