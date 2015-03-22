<table id="tablemenu">
	<thead>
		<tr>
			<th>Burgers</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>
   <?php
      $dom = simplexml_load_file("menu.xml");
      foreach ($dom->xpath("/menu/burgers/item") as $menu)
      {

      		$name = $menu->name;
					$price = $menu->price;
          print "<tr>";
          print "<td>";
          print $name;
          print "</td>";
          print "<td>";
          print "<form method='post' action='addtocart.php'>";
          print "<input type='hidden' value='$name' name='name'>";
          print "<input type='hidden' value='' name='size'>";
          print "<input type='hidden' value='$price' name='price'>";
          print "<input type='submit' value='" . "&pound;" . "$price'>";
          print "</form>";         
          print "</td>";
          print "</td>";
          print "</tr>";

      }
   ?>
  </tbody>
</table>
