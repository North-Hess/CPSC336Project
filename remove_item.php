<?php

require_once 'db_connection.php';

if(isset($_POST['ItemID']))
{
	$SQL = "DELETE FROM inventory WHERE item_id = '".$_POST['ItemID']."';";
	mysqli_query($conn, $SQL);
}

header("Location: remove_item.html");
?>
