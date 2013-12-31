<B>Checkout</B><br>
Below is a summary of the products you wish to purchase, along with totals:
<?php
$grand_total = 0;
?>	
<ul>
<?

function calculate_subtotal($price, $shipping) {
  #tax rate is constant
  $tax = 0.08;
  $total_price += $price;
  $total_tax += $tax * $price;
  $total_shipping += $shipping * $price; 
  $sub_total = ($price + $total_tax + $total_shipping);
  return $sub_total;

}

//Define a productsa array with the name as the key,
//and the value as an array for the price and shipping variables
$products = array( "Candle Holder" => array( "price" => 11.95,
											 "shipping" => 0),
				   "Coffee Table" => array( "price" => 99.50,
											"shipping" => 0.10),
				   "Floor Lamp" => array( "price" => 44.99,
										  "shipping" => 0.10));

//Loops through the products array

//I found out that since there are two loops the list variable
//names need to be unique other thise the second list() call will
//override the second
while (list($product, $values) = each($products)) {

	//Takes the products values array and loops through each
	//value creating a variable with the key value pair
	while (list($variable_name, $value) = each($values)) {
		$$variable_name = $value;
	}

	//Prints out the product name (which is defined from the array key)
	//and uses the newly defined $price variable from the above loop
	echo "<li>".$product.": $".$price;

	//tally totals
	//Adding the sub total returned from the function to the grand total
	$grand_total += calculate_subtotal($price, $shipping);
}

?>
</ul>
<hr>
<br>
<B>Total (including tax and shipping): $<? echo number_format($grand_total, 2); ?></B>