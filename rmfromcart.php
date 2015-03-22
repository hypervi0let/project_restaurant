<?php
session_start();

$key = $_GET['id'];

if ($_SESSION['cart'][$key]['qty'] > 1) {
	$_SESSION['cart'][$key]['qty']--;
}
else {
	unset($_SESSION['cart'][$key]);
}


header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
?>
