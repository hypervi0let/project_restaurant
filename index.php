<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Frank's Fast Food</title>
</head>
	
<body>
	<div id="main">
	<nav>
		<h1 id="header">Frank's Fast Food</h1>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php?page=pizza">Pizza</a></li>
			<li><a href="index.php?page=burgers">Burgers</a></li>
			<li><a href="index.php?page=kebabs">Kebabs</a></li>
			<li><a href="index.php?page=extras">Extras</a></li>
			<li><a href="index.php?page=drinks">Drinks</a></li>
			<li><a href="index.php?page=cart">Cart</a></li>
		</ul>
	</nav>
		<div id="content">
				<?php
error_reporting(E_ALL ^ E_NOTICE);

$page  = $_GET['page'];
$pages = array(
    'pizza',
    'burgers',
    'kebabs',
    'extras',
    'drinks',
    'cart'
);
if (!empty($page)) {
    if (in_array($page, $pages)) {
        $page .= '.php';
        include($page);
    } else {
        echo 'Page not found. Return
        		<a href="index.php">home</a>';
    }
} else {
    include('home.php');
}
?>
		</div>
	
		<div id="cart">
			<?php
include('cart.php');
?>
		</div>
	</div>
</body>
</html>
