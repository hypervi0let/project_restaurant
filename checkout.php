<?php
session_start();


if (!empty($_SESSION['cart'])) {
	print "<p>Thank you for your order.</p>";
	print "<p>Your card will be billed for &pound;" . number_format((float) $_SESSION['total'], 2, '.', '') . "</p>";
	session_destroy();
	// exit;
}
else {
	print "<p>Your cart is empty, <a href='" . $_SERVER['HTTP_REFERER'] . "'>go back?</a>";
	
}
?>
