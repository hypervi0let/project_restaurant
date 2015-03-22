<?php
session_start();

function checkCartForItem($addItem, $itemSize, $cartItems) {
     if (is_array($cartItems)){
          foreach($cartItems as $key => $items) {
              if($items['name'] === $addItem && $items['size'] === $itemSize) 
                  return $key;
          }
     }
     return false;
}


if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$item = array(
    'name' => $_POST['name'],
    'size' => $_POST['size'],
    'price' => $_POST['price'],
    'qty' => $_POST['qty']
);

$addItem = $_POST['name'];
$itemSize = $_POST['size'];

$itemExists = checkCartForItem($addItem, $itemSize, $_SESSION['cart']);

if ($itemExists !== false){
     $_SESSION['cart'][$itemExists]['qty']++;
}
else {
	array_push($_SESSION['cart'], $item);
}

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
?>
