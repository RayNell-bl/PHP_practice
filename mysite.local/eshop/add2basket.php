<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

	$id = clearInt($_GET['id']);
	$quantity = 1;
	add2Basket($id, $quantity);
	header('Location: catalog.php');
	exit;
?>
