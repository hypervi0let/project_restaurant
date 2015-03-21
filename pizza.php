<table>
	<thead>
		<tr>
			<th>Pizzas</th>
			<th>Small</th>
			<th>Large</th>
		</tr>
	</thead>
	<tbody>
   <?php
      $dom = simplexml_load_file("menu.xml");
      foreach ($dom->xpath("/menu/pizza/item") as $menu)
      {
				
          print "<tr>";
          print "<td>";
          print $menu->name;
          print "</td>";
          print "<td>";
          print "<a href='addtocart.php?id=" .  $menu->name . "'>"  . "&pound;" . $menu->s_price . "</a>";
          print "</td>";
          print "<td>";
          print "<a href='addtocart.php?id=" .  $menu->name . "'>"  . "&pound;" . $menu->l_price . "</a>";
          print "</td>";
          print "</tr>";

      }
   ?>
   </tbody>
</table>
