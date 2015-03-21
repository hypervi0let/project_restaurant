<?php
	session_start();
	
	if (empty($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}
	
	array_push($_SESSION['cart'], $_GET['id']);
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>
