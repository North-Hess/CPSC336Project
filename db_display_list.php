<?php
include('db_connection.php');
$conn = OpenCon();
	echo "connected successfully";

$SQL = SELECT * FROM inventory;
$SQL1 = USE inventory;
$SQL2 = SHOW TABLES;

$result = mysql_query($SQL);
$result1 = mysql_query($SQL1);
$result2 = mysql_query($SQL2);

CloseCon($conn);
?>


