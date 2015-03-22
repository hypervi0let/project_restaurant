<?php
session_start();
?>
<table id="carttable">
	<thead>
		<tr>
			<th>Item</th>
			<th align="right">Size</th>
			<th align="right">Qty</th>
			<th align="right">Price</th>
		</tr>
	</thead>
	
	<tbody>
<?php

$xml  = simplexml_load_file("menu.xml");
$sess = $_SESSION['cart'];
foreach ($sess as $key => $cart) {
    print "<tr>";
    print "<td id='cartname'>" . $cart['name'] . "</td>";
    print "<td>" . $cart['size'] . "</td>";
    print "<td>" . $cart['qty'] . "</td>";
    print "<td>" . "&pound;" . $cart['price'] . "</td>";
    print "<td>" . "<a href='rmfromcart.php?id=" . $key . "'>" . "[x]" . "</a>" . "</td>";
    print "</tr>";
}
$total = 0;
foreach ($sess as $cart) {
    $total = $total + $cart['price'] * $cart['qty'];
}
if ($total > 0) {
    print "<tr><td></td><td></td><td></td><td><br>Total: &pound;" . number_format((float) $total, 2, '.', '') . "</td></tr>";
}
?>
	</tbody>
</table>
<br>
<div id="cartbuttons">
<form action="clear.php" method="post">
	<input type="submit" value="Clear Cart">
</form>
<form action="checkout.php" method="post">
	<input type="submit" value="Checkout">
</form>
</div>
