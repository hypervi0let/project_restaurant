<?php
session_start();

$key = $_GET['id'];
unset($_SESSION['cart'][$key]);


header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
?>
