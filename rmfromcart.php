<?php
	session_start();
	
	foreach (array_keys($_SESSION['cart'], $_GET['id']) as $key) {
    unset($_SESSION['cart'][$key]);
	}
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>
