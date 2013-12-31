<?

function mantra($the_sound) {

   for ($chant = 1; $chant <= 10; $chant++) {
       echo $the_sound . "... "; 
   }
   echo $chant;
  

}
function Mood_Chant($my_mood) {

   if ($my_mood == "happy") {
   
      mantra("OM");       
   
   }
   else if ($my_mood == "sad") {
   
     mantra("okay");        
   
   }
   else if ($my_mood == "angry") {
   
     mantra("mississippi");
   
   }
   else if ($my_mood == "indifferent") {
   
      mantra("Wake up");       
   
   }
   else {
   
      mantra("Try harder");
   }
}

$my_mood = $_GET["my_mood"];

Mood_Chant($my_mood);   

?>