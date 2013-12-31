<?
   $Captain_Crunch = $_GET["crunch_price"];
   $Frosted_Flakes = 4;
   $Fruit_Loops = $_GET["loops_price"];
   $Oatmeal = 2;
   $my_cash = $_GET["cash_money"];
   
   $total = $Captain_Crunch + $Frosted_Flakes;
   
 
      if ($total < $my_cash) {
      echo "I'll buy both Captain Crunch and Frosted Flakes!";
      }
      else if ($Captain_Crunch < $my_cash ) {
      echo "I'll buy Captain Crunch.";
      }
      else if ($Captain_Crunch > $my_cash && $Fruit_Loops < $my_cash ){ 
         echo "I'll buy some Fruit Loops.";
      }
      else {
         echo "Forget it, I'm going home.";
      }
      
?>