<?php
//access the global array called $_POST to get the values from the text fields
echo '<head>
      <title>Receipt</title>
      <link href="style.css" rel="stylesheet" type="text/css" />
      <link href="../../styles/style.css" rel="stylesheet" type="text/css" />
      </head>';

$tusks = $_POST["tusks"];
$pelts = $_POST["pelts"];
$claws = $_POST["claws"];
$shipping = $_POST["shipping"];
$email = $_POST["email"];
$password = $_POST["password"];

$price = 0;

echo "<h1> Welcome " . $email . "! <h1><br>";
echo "<h3> Thank you for your purchase and agreeing to let us sell your email and password(" . $password . ") to our colleagues! <h3><br>";
echo "<h3> Here is your reciept: <h3><br>";

echo "<table>";
echo "<tr><th> </th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Siberian Tiger Tusks</th><td>" . $tusks . "</td><td>$350.00</td><td>$" . ($tusks * 350) . "</td></tr>";
$price += $tusks * 350;
echo "<tr><th>Wooly Mammoth Pelts</th><td>" . $pelts . "</td><td>$470.00</td><td>$" . ($pelts * 470) . "</td></tr>";
$price += $pelts * 470;
echo "<tr><th>Giant Sloth Claws</th><td>" . $claws . "</td><td>$110.00</td><td>$" . ($claws * 110) . "</td></tr>";
$price += $claws * 110;
$shippingPrice = 0;
if ($shipping == "3 Day"){
  $shippingPrice = 5;
}
else if ($shipping == "Overnight"){
  $shippingPrice = 50;
}
echo '<tr><th>Shipping</th><th colspan="2">' . $shipping . '</th><th>$' . $shippingPrice . "</th></tr>";
$price += $shippingPrice;
echo '<tr><th colspan="3">Total Cost</th><th>$' . $price . '</th></tr>';
echo '</table>'

?>
