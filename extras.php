<table id="menutable">
<thead>
	<tr>
		<th>Extras</th>
		<th>Small</th>
		<th>Large</th>
		</tr>
		</thead>
		<tbody>
<?php
$dom = simplexml_load_file("menu.xml");
foreach ($dom->xpath("/menu/extras/item") as $menu) {
    
    $name    = $menu->name;
    $s_price = $menu->s_price;
    $l_price = $menu->l_price;
    print "<tr>";
    print "<td>";
    print $name;
    print "</td>";
    print "<td>";
    print "<form method='post' action='addtocart.php'>";
    print "<input type='hidden' value='$name' name='name'>";
    print "<input type='hidden' value='Small' name='size'>";
    print "<input type='hidden' value='$s_price' name='price'>";
    print "<input type='hidden' value='1' name='qty'>";
    print "<input type='submit' value='" . "&pound;" . "$s_price'>";
    print "</form>";
    print "</td>";
    print "<td>";
    print "<form method='post' action='addtocart.php'>";
    print "<input type='hidden' value='$name' name='name'>";
    print "<input type='hidden' value='Large' name='size'>";
    print "<input type='hidden' value='$l_price' name='price'>";
    print "<input type='hidden' value='1' name='qty'>";
    print "<input type='submit' value='" . "&pound;" . "$l_price'>";
    print "</form>";
    print "</td>";
    print "</tr>";
    
}
?>
   </tbody>
</table>
