<?php
require '../config/default.php';
require '../lib/function.php';	
require '../lib/class.php';	
error_reporting(E_ALL & ~E_NOTICE);
#$head=new header;
#$head->json();
$safe=new safe;
#$safe->ip();
#$safe->token();

switch ($_GET['act'])
{
case "list_about":
	$datas = $database->select("{$prefix}about", "*");
	break;
case "list_basic":
	$datas = $database->select("{$prefix}basic", "*");
	break;
case "list_contact":
	$datas = $database->select("{$prefix}contact", "*");
	break;
case "list_log":
	$datas = $database->select("{$prefix}log", "*");
	break;
case "list_message":
	$datas = $database->select("{$prefix}message", "*");
	break;
case "list_news":
	$datas = $database->select("{$prefix}news", "*");
	break;
case "list_news_class":
	$datas = $database->select("{$prefix}news_class", "*");
	break;
case "list_product":
	$datas = $database->select("{$prefix}product_class", "*");
	break;
case "list_product_class":
	$datas = $database->select("{$prefix}product_class", "*");
	break;
default:
	$datas=array("status"=>0,"msg"=>"No Action");
	array_json($datas,1);
}
include 'common/check_empty.php';

?>