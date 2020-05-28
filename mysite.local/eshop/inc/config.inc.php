<?php
$DB_HOST = 'localhost';
$DB_LOGIN = 'root';
$DB_PASSWORD = 'root';
$DB_NAME = 'eshop';
$ORDERS_LOG = 'orders.log';
$basket = array();
$count = 0;
$link = mysqli_connect($DB_HOST, $DB_LOGIN, $DB_PASSWORD, $DB_NAME) 
or die('ERROR');

mysqli_select_db($link, "eshop");

basketInit();
if( !$link){
	echo 'Ошибка: '
		. mysqli_connect_errno()
		. ': '
		. mysqli_connect_error();
}
?>