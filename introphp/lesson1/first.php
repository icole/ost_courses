<ol style="font-size:16px;">
 <li> PHP is a server-side language, with HTML embedding. </li>
 <br/>
For instance:
<ul>
<? 
 //PHP code
 echo "<li style='color:blue;'> This PHP code is INSIDE the PHP delimiters</li>"; 
?>
 <li style="color:green;"> This HTML code is OUTSIDE the PHP delimiters</li>
</ul>
</ol>

<ol style="font-size:16px;">
 <li> PHP is part of the LAMP stack.</li>  
<?

$lamp_l = "Linux";
$lamp_a = "Apache";
$lamp_m = "MySQL";
$lamp_p = "PHP";

?>

<?

/* Here are some imaginary numbers for a possible salary package associated with the skills we're learning in this course 
(play along!): */

$base_salary = 158470; //whoa. we hit the jackpot
$bonus = 25815.25;
$benefits = 0.2; //percentage of total
$time_off = 6476; //in dollars

$benefits = "To be determined"; /* You just changed the value of $benefits
                                       from a float to a string! */                                
?>

<br/>


<ul>
 

<li> My Base Salary might be: <? echo $base_salary; ?> </li>
 
<li> My Bonus might be: <? echo $bonus; ?> </li>
 
<li> My Benefits might be: <? echo $benefits; ?> </li>
 
<li> My Time Off might be worth: <? echo $time_off; ?> </li>

<li> My Base Salary plus Bonus would total:  <? echo $base_salary + $bonus; ?></li>

</ul>

</ol>