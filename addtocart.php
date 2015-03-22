<?php
	session_start();
	
	if (empty($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}
	
	$item = array('name' => $_POST['name'], 'size' => $_POST['size'], 'price' => (float)$_POST['price']);
	
	array_push($_SESSION['cart'], $item);
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>
