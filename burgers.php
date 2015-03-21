<table>
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

          print "<tr>";
          print "<td>";
          print $menu->name;
          print "</td>";
          print "<td>";
          print "<a href='addtocart.php?id=" .  $menu->name . "'>"  . "&pound;" . $menu->price . "</a>";
          print "</td>";
          print "</tr>";

      }
   ?>
  </tbody>
</table>
