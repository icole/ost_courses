<?
    $str = $_GET["input_string"];
    #Matches the first non vowels and puts them in a capture group
    preg_match("/^([^aeiou]*)([a-z]*)/", $str, $matches);
    #Takes the non vowel beginning of the string and adds the ay
    $ending = $matches[1] . "ay";
    $beginning = $matches[2];
    #Generates a new string with the ay portion at the end
    $new_string = $beginning . $ending;
    print($new_string);
?>