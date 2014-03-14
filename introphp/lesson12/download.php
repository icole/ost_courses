<?php

$filepath = "./dog-top-hat.jpg";
if (file_exists($filepath)) {
   header("Content-Type: application/force-download");
   header("Content-Disposition:filename=\"dog-top-hat.jpg\"");
   $fd = fopen($filepath,'rb');
   fpassthru($fd);
   fclose($fd);
}

?>