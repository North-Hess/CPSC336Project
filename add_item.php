<?php

if(isset($_POST['myadditem']))
{
	$SQL = "INSERT INTO inventory VALUES (ItemID, ItemName, ItemQuantity)";
	result = mysql_query($SQL);
}
?>
