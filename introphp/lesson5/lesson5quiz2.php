<B>Checkout</B><br>
Below is a summary of the products you wish to purchase, along with totals:
<?php
$grand_total = 0;
?><ul><?

function calculate_subtotal($price, $shipping) {
  #tax rate is constant
  $tax = 0.08;
  $total_price += $price;
  $total_tax += $tax * $price;
  $total_shipping += $shipping * $price; 
  $sub_total = ($price + $total_tax + $total_shipping);
  return $sub_total;

}

$product = "Candle Holder";
$price = 11.95;
$shipping = 0; //free shipping 
echo "<li>".$product.": $".$price;

//tally totals
//Adding the sub total returned from the function to the grand total
$grand_total += calculate_subtotal($price, $shipping);

$product = "Coffee Table";
$price = 99.50;
$shipping = 0.10; //shipping as a percentage of price
echo "<li>".$product.": $".$price;

//tally totals
//Adding the sub total returned from the function to the grand total
$grand_total += calculate_subtotal($price, $shipping);

$product = "Floor Lamp";
$price = 44.99;
$shipping = 0.10; //shipping as a percentage of price
echo "<li>".$product.": $".$price;

//tally totals
//Adding the sub total returned from the function to the grand total
$grand_total += calculate_subtotal($price, $shipping);
?>
</ul>
<hr>
<br>
<B>Total (including tax and shipping): $<? echo number_format($grand_total, 2); ?></B>