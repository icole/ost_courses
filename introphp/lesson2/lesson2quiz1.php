<?php
#below are the product details
$product_name = "Area Rug";
$description = "8x10 area rug, \"eggplant\" chenille";
$price = 250.00;
$rebate = 50;
$shipping = 15; //$15 flat shipping rate
$tax_rate = 0.08;
?>
Thank you for your purchase. Product details follow:<br>

<b><? echo $product_name; ?></b>: <? echo $description; ?>
<br>
Base Price: <? echo $price; ?><br>
Rebate: $<? echo $rebate; ?><br>
Subtotal: $<? 
 $subtotal = $price - $rebate;
 echo $subtotal; 
?><br>
Tax @ 8%: $<? 
 /* tax is calculated after rebate is applied. */
 $tax = ($price - $rebate) * $tax_rate;
 echo $tax; 
?><br>
Shipping: $<? echo $shipping; ?><br>
<b>Total: $<? echo ($price - $rebate) + $tax + $shipping; ?></b>