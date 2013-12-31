<?php
#pre tags keep the asterisks more uniformly spaced
echo "<pre>";
#loop for the top of the T
for ($row = 0; $row < 2; $row++) {
 for ($column = 0; $column < 21; $column++) {
   echo "*";
 } 
 echo "\n"; //the newline character starts the next row
}
#Loop for the bottom of the T
for ($row = 0; $row < 10; $row++) {
 for ($column = 0; $column < 21; $column++) {
 if ($column == 9 || $column == 10) {
 echo "*";
 } 
 else echo " ";
 }
 echo "\n"; //the newline character starts the next row
}
echo "</pre>";
?>