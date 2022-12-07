<?php
require_once "db_connection.php";
?>
<!DOCTYPE html>

<html lang="en">
<head>

<title>Inventory</title>
<link href="336_FP.css" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Inventory">
</head>
<body>

<header>
	<h1><a href="index.html"> Inventory</a></h1>
</header>

<nav>
	<ul>
		<li><a href="index.html">Home</a></li>

		<li><a href="add_item.html">Add Item</a></li>

		<li><a href="remove_item.html">Remove Item</a></li>

		<li><a href="display_item_list.php">Display Item List</a></li>
	</ul>

</nav>

<main>

<table>
	<tr>
		<th>Item ID</th>
		<th>Item Name</th>
		<th>Item Quantity</th>
	</tr>
	<?php
	$query = "SELECT * FROM inventory";
	$query_result = mysqli_query($conn, $query);

	while($item = mysqli_fetch_assoc($query_result)) {
	echo '<tr><td style="padding:15px;color:black">'.$item['item_id'].'</td>';
	echo '<td style="color:black;text-align:center">'.$item['item_name'].'</td>';
	echo '<td style="color:black;text-align:right">'.$item['item_quantity'].'</td></tr>'; 
}
	?>

</table>

</main>
<br><br><br>
<footer>Copyright &copy; CPSC 336 Inventory System<br>

</footer>
</body>
</html>

