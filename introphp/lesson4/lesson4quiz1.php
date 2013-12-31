<?php
$move = 0;
$color = "red";
$turns = 0;
while ($move <= 10) {
 if ($turns > 100) {
 #oops, infinite loop!
 echo "Abort!";
 break;
 }
 else if ($move < 4 && $turns < 2) {
 $move += 3;
 $color = "green";
 }
 else if ($move == 8 AND $color == "red") {
 $move--;
 $color = "yellow";
 }
 else if ($color == "yellow" XOR $move == 7) {
 $move++;
 $color = "blue";
 }
 else {
 $move += 2;
 $color = "red";
 }
 $turns++;
 echo $move;
 echo $color;
 echo "\n";
} 
?>