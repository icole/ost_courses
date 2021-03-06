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
$entree = $_GET["entree"];
//Define the price here so if there is no entry I can reset the price to 0
$entree_price = 9.99;
//Conditional statements that check the entree and set the beverage name
//and price accordingly
switch($entree) {
case "Steak": 
  $drink = "Beer";
  $drink_price = 3.99;
  break;
case "Salmon":
  $drink = "White Wine";
  $drink_price = 5.99;
  break;
case "BBQ Pork":
  $drink = "Whiskey";
  $drink_price = 4.99;
  break;
case "Chicken":
  $drink = "Soda";
  $drink_price = 1.99;
  break;
default:
  $drink = "Water";
  $drink_price = 0;
  $entree = "No Entree";
  $entree_price = 0;
}
$dessert = "Chocolate Cake";

//Definitions for course prices
$appetizer_price = 6.99;
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
  <!--Fixed the function since the other was just round to 2, not always showing 2-->
  <tr>
    <td class="subtotal"><b>Subtotal:</b></td>
    <td id="price" class="subtotal"><? echo sprintf("%01.2f", $subtotal) ?></td>
  </tr>
  <tr>
    <td><b>Tax</b></td>
    <td id="price"><? echo sprintf("%01.2f", $tax) ?></td>
  </tr>
  <tr>
    <td><b>Tip</b></td>
    <td id="price"><? echo sprintf("%01.2f", $tip) ?></td>
  </tr>
  <tr>
    <td><b>Total</b></td>
    <td id="price"><? echo sprintf("%01.2f", $total) ?></td>
  </tr>
</table>
</html>