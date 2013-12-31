<html>
<head>
<style>
  #price {
    text-align: right;
  }
  .subtotal {
    border-top: 1px solid black;
  }
</style>
</head>

<?

//Definitions for course items
$appetizer = "Hot Wings";
$drink = "Beer";
$entree = "Bacon Cheeseburger";
$dessert = "Chocolate Cake";

//Definitions for course prices
$appetizer_price = 6.99;
$drink_price = 3.99;
$entree_price = 9.99;
$dessert_price = 2.99;

//Calculate subtotal by adding all of the courses
$subtotal = $appetizer_price + $drink_price + $entree_price + $dessert_price;

//Calculate tax as percentage of subtotal
$tax = $subtotal * 0.08;

//Calculate tip as percentage of subtotal
$tip = $subtotal * 0.15;

//Calculate total by adding the tax and tip to the subtotal
$total = $subtotal + $tax + $tip

?>

<h1>Receipt for Dinner</h1>

<table>
  <tr>
    <td><? echo $appetizer ?></td>
    <td id="price"><? echo $appetizer_price ?></td>
  </tr>
  <tr>
    <td><? echo $drink ?></td>
    <td id="price"><? echo $drink_price ?></td>
  </tr>
  <tr>
    <td><? echo $entree ?></td>
    <td id="price"><? echo $entree_price ?></td>
  </tr>
  <tr>
    <td><? echo $dessert ?></td>
    <td id="price"><? echo $dessert_price ?></td>
  </tr>
  <tr>
    <td class="subtotal"><b>Subtotal:</b></td>
    <td id="price" class="subtotal"><? echo $subtotal ?></td>
  </tr>
  <!--I found a function that rounds the percentages to only 2 decimal places-->
  <tr>
    <td><b>Tax</b></td>
    <td id="price"><? echo round($tax,2) ?></td>
  </tr>
  <tr>
    <td><b>Tip</b></td>
    <td id="price"><? echo round($tip,2) ?></td>
  </tr>
  <tr>
    <td><b>Total</b></td>
    <td id="price"><? echo round($total,2) ?></td>
  </tr>
</table>
</html>