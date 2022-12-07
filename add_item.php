<?php

require_once 'db_connection.php';


if(isset($_POST['ItemID']))
{
	$SQL = "INSERT INTO inventory VALUES ('".$_POST['ItemID']."','".$_POST['ItemName']."','".$_POST['ItemQuantity']."');";
	mysqli_query($conn, $SQL);
}

header("Location: add_item.html");
?>
