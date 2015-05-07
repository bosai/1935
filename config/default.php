<?php
require 'medoo.min.php';
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => '1935',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'charset' => 'utf8',
 
	'port' => 3306
]);
?>