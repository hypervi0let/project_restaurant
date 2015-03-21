<?php
	session_start();
?>
<form action="clear.php" method="post">
<input type="submit" value="Clear Cart" />
</form>
<table>
	<thead>
		<tr>
			<th>Cart</th>
		</tr>
	</thead>
	
	<tbody>
   <?php
   
   		$xmlmenu = simplexml_load_file("menu.xml");
      $sess = $_SESSION['cart'];
      foreach ($sess as $cart)
      {

          print "<tr>";
          print "<td>";
          print $cart;
          print "</td>";
          print "<td>";
          print "<a href='rmfromcart.php?id=" . $cart . "'>"  . "[x]" . "</a>";
          print "</td>";
          print "</tr>";
          

      }
		?>
   
	</tbody>
</table>


