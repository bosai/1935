<?php
require '../config/default.php';
require '../lib/function.php';	
require '../lib/class.php';	
error_reporting(E_ALL & ~E_NOTICE);
#$head=new header;
#$head->json();
$safe=new safe;
#$safe->ip();
$safe->token();
global $belong;

switch ($_GET['act'])
{
case "list_about":
	$datas = $database->select("{$prefix}about", "*",["belong" => $belong]);
	break;
case "list_basic":
	$datas = $database->select("{$prefix}basic", "*",["belong" => $belong]);
	break;
case "list_contact":
	$datas = $database->select("{$prefix}contact", "*",["belong" => $belong]);
	break;
case "list_log":
	$datas = $database->select("{$prefix}log", "*",["belong" => $belong]);
	break;
case "list_message":
	$datas = $database->select("{$prefix}message", "*",["belong" => $belong]);
	break;
case "list_news":
	$datas = $database->select("{$prefix}news", "*",["belong" => $belong]);
	break;
case "list_news_class":
	$datas = $database->select("{$prefix}news_class", "*",["belong" => $belong]);
	break;
case "list_product":
	$datas = $database->select("{$prefix}product_class", "*",["belong" => $belong]);
	break;
case "list_product_class":
	$datas = $database->select("{$prefix}product_class", "*",["belong" => $belong]);
	break;
case "create_news":
	$new_title = trim($_POST['newtitle']);
	$new_pic = trim($_POST['pic']);
	$new_content = trim($_POST['content']);
	$new_add_time = time();
	$new_people = trim($_POST['people']);
	$is_display = intval($_POST['is_display']);
	$new_sort = intval($_POST['new_sort']);
	$new_last_release = time();
	if($new_title && $new_pic && $new_content && $new_add_time && $new_people 
	&& $is_display && $new_sort && $news_last_release){
		$arr = $_POST;
		$arr['new_add_time'] = $new_add_time;
		$arr['new_last_release'] = $new_last_release;
		$arr['belong'] = $belong;
		$create_id = $database->insert("{$prefix}news",$arr);
		if($create_id!=0){
			$datas = array("status"=>"1","msg"=>"添加成功");
		}else{
			$datas = array("status"=>"0","msg"=>"添加失败");
		}
	}else{
		$error = array("status"=>-3,"msg"=>"您填写的信息有误。");exit;
	}
	break;
case "update_news":
	$id = $_GET['id'];
	
case "create_news_class":
	$name = trim($_POST['name']);
	$is_display = trim($_POST['is_display']);
	$last_release = time();
	if($name && $is_display && $last_release){
		$arr = $_POST;
		$arr['last_release'] = $last_release;
		$arr['belong'] = $belong;
		$create_id = $database->insert("{$prefix}news_class",$arr);
		if($create_id !=0){
			$datas = array("status"=>"1","msg"=>"添加成功");
		}else{
			$datas = array("status"=>"0","msg"=>"添加失败");
		}
	}else{
		$error = array("status"=>-3,"msg"=>"您填写的信息有误。");exit;
	}
	break;
case "create_message":
	$arr = $_POST;
	$mes_name = trim($arr['mes_name']);
	$mes_phone = intval($arr['mes_phone']);
	$mes_email = trim($arr['mes_email']);
	$mes_content = trim($arr['mes_content']);
	if($mes_name && $mes_phone && $mes_email && $mes_content){
		$arr['belong'] = $belong;
		$create_id = database->insert("{$prefix}message",$arr);
		if($create_id !=0){
			$datas = array("status"=>"1","msg"=>"添加成功");
		}else{
			$datas = array("status"=>"0","msg"=>"添加失败");
		}
	}else{
		$error = array("status"=>-3,"msg"=>"您填写的信息有误。");exit;
	}
	break;
case "create_basic":
	$arr = $_POST;
	$arr['belong'] = $belong;
	$create_id = $database->insert("{$prefix}basic",$arr);
	if($create_id != 0){
		$datas = array("status"=>"1","msg"=>"添加成功");
	}else{
		$datas = array("status"=>"0","msg"=>"添加失败");
	}
	break;
case "create_about":
	$arr = $_POST;
	$out_content = trim($arr['out_content']);
	$out_people = trim($arr['out_people']);
	if($out_content && $out_people){
		$arr['out_add_time'] = time();
		$arr['out_last_release'] = time();
		$arr['belong'] = $belong;
		$create_id = $database->insert("{$prefix}about",$arr);
		if($create_id !=0){
			$datas = array("status"=>"1","msg"=>"添加成功");
		}else{
			$datas = array("status"=>"0","msg"=>"添加失败");
		}
	}else{
		$error = array("status"=>-3,"msg"=>"您填写的信息有误。");exit;
	}
	break;
case "create_contact":
	$arr = $_POST;
	$act_title = trim($arr['act_title']);
	$act_content = trim($arr['act_content']);
	$act_map_coordinate = trim($arr['act_map_coordinate']);
	$act_map_title = trim($arr['act_map_title']);
	$act_map_content = trim($arr['act_map_content']);
	if($act_content && $act_content && $act_map_coordinate && $act_map_content && $act_map_title){
		$arr['art_last_release'] = time();
		$arr['belong'] = $belong;
		$create_id = $database->insert("{$prefix}contact",$arr);
		if($create_id !=0){
			$datas = array("status"=>"1","msg"=>"添加成功");
		}else{
			$datas = array("status"=>"0","msg"=>"添加失败");
		}
	}else{
		$error = array("status"=>-3,"msg"=>"您填写的信息有误。");exit;
	}
	break;
case "create_product":
	$arr = $_POST;
	$name = trim($arr['name']);
	$introduct = trim($arr['introduct']);
	$advantage = trim($arr['advantage']);
	$model = trim($arr['model']);
	$is_display = trim($arr['is_display']);
	$recommend = trim($arr['recommend']);
	$pic = trim($arr['pic']);
	if($name && $introduct && $advantage && $model && $is_display && $recommend && $pic){
		$arr['pro_add_time'] = time();
		$arr['belong'] = $belong;
		$arr['pro_last_release'] = time();
		$create_id = $database->insert("{$prefix}product",$arr);
		if($create_id !=0){
			$datas = array("status"=>"1","msg"=>"添加成功");
		}else{
			$datas = array("status"=>"0","msg"=>"添加失败");
		}
	}else{
		$error = array("status"=>-3,"msg"=>"您填写的信息有误。");exit;
	}
	if($act_content && $act_content && $act_map_coordinate && $act_map_content && $act_map_title){
		$arr['art_last_release'] = time();
		$arr['belong'] = $belong;
		$create_id = $database->insert("{$prefix}contact",$arr);
		if($create_id !=0){
			$datas = array("status"=>"1","msg"=>"添加成功");
		}else{
			$datas = array("status"=>"0","msg"=>"添加失败");
		}
	}else{
		$error = array("status"=>-3,"msg"=>"您填写的信息有误。");exit;
	}
	break;
case "create_product_class":
	$arr = $_POST;
	$pic = $arr['pic'];
	$name = $arr['name'];
	if($pic && $name){
		$arr['last_release'] = time();
		$arr['belong'] = $belong;
		$create_id = $database->insert("{$prefix}product_class",$arr);
		$info= $arr['path'];
		$path = $info.'-'.$create_id;
		$upd=$database->update("{$prefix}product_class",["path"=>$path]);
		if($create_id && $upd){
			$datas = array("status"=>"1","msg"=>"添加成功");
		}else{
			$database->delete("{$prefix}product_class","id = ".$create_id);
			$datas = array("status"=>"0","msg"=>"添加失败");
		}
	}else{
		$error = array("status"=>-3,"msg"=>"您填写的信息有误。");exit;
	}
	break;
case "create_modular":
	$arr = $_POST;
	if($arr['name']){
		$arr['s_belong'] = $belong;
		$create_id = $database->insert("{$prefix}modular",$arr);
		if($create_id){
			$datas = array("status"=>"1","msg"=>"添加成功");
		}else{
			$datas = array("status"=>"0","msg"=>"添加失败");
		}
	}else{
		$error = array("status"=>-3,"msg"=>"您填写的信息有误。");exit;
	}
case "update_basic":
	$id = $_GET['id'];
	
	$arr = $_POST;
	$update_id = $database->update("{$prefix}basic",$arr);
	if($update_id){
		$datas = array("status"=>"1","msg"=>"修改成功");
	}else{
		$datas = array("status"=>"0","msg"=>"修改失败");
	}
	break;
default:
	$datas=array("status"=>0,"msg"=>"No Action");
}
include 'common/check_empty.php';
?>




