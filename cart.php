<?php
session_start();
?>
<div>
<form action="clear.php" method="post">
<input type="submit" value="Clear Cart" />
</form>
<table id="tablecart">
	<thead>
		<tr>
			<th>Cart</th>
		</tr>
	</thead>
	
	<tbody>
   <?php

$xml  = simplexml_load_file("menu.xml");
$sess = $_SESSION['cart'];
foreach ($sess as $key => $cart) {
    print "<tr>";
    print "<td id='cartname'>" . $cart['name'] . "</td>";
    print "<td class='cartothers'>" . $cart['size'] . "</td>";
    print "<td class='cartothers'>" . "&pound;" . $cart['price'] . "</td>";
    print "<td class='cartothers'>" . "<a href='rmfromcart.php?id=" . $key . "'>" . "[x]" . "</a>" . "</td>";
    print "</tr>";
}
$total = 0;
foreach ($sess as $cart) {
    $total = $total + $cart['price'];
}
if ($total > 0) {
    print "<td></td><td></td><td class='cartothers'><br>Total: &pound;" . number_format((float) $total, 2, '.', '') . "</td><td></td>";
}
?>
   
	</tbody>
</table>
</div>
