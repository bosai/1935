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
	if($_GET['id']){
		$id = $_GET['id'];
		$datas = $database->select("{$prefix}basic","*",["belong" => $belong,"id" => $id]);
	}else{
		$datas = $database->select("{$prefix}basic", "*",["belong" => $belong]);
	}
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
	if($_GET['id']){
		$id = $_GET['id'];
		$datas = $database->select("{$prefix}news","*",["belong" => $belong,"id" => $id]);
	}elseif($_GET['cat_id']){
		$cat_id = $_GET['cat_id'];
		$datas = $database->select("{$prefix}news","*",["cat_id" => $cat_id,"belong" => $belong]);
	}else{
		$datas = $database->select("{$prefix}news", "*",["belong" => $belong]);
	}
	break;
case "list_news_class":
	$datas = $database->select("{$prefix}news_class", "*",["belong" => $belong]);
	break;
case "list_product":
	if($_GET['cat_id']){
		$cat_id = $_GET['cat_id'];
		$datas = $database->select("{$prefix}product", "*",["belong" => $belong,"cat_id" => $cat_id]);
	}elseif($_GET['id']){
		$id = $_GET['id'];
		$datas = $database->select("{$prefix}product", "*",["belong" => $belong,"id" => $id]);
	}else{
		$datas = $database->select("{$prefix}product", "*",["belong" => $belong]);
	}
	break;
case "list_product_class":
	$datas = $database->select("{$prefix}product_class", "*",["belong" => $belong]);
	break;
case "create_news":
	$new_title = trim($_POST['newtitle']);
	$new_pic = trim($_POST['pic']);
	$new_content = trim($_POST['content']);
	$cat_id = $_POST['cat_id'];
	$new_add_time = time();
	$new_people = trim($_POST['people']);
	$new_sort = intval($_POST['new_sort']);
	$new_last_release = time();
	if($new_title && $new_pic && $new_content && $new_add_time && $new_people 
	&& $new_sort && $news_last_release){
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
case "create_news_class":
	$name = trim($_POST['name']);
	$last_release = time();
	if($name && $last_release){
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
	$recommend = trim($arr['recommend']);
	$pic = trim($arr['pic']);
	if($name && $introduct && $advantage && $model &&  && $recommend && $pic){
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
	if($_POST['id']){
		$arr = $_POST;
		$id = $arr['id'];
		$arr['sic_last_release'] = time();
		unset($arr['id']);
		$update_id = $database->update("{$prefix}basic",$arr,["id" => $id]);
		if($update_id){
			$datas = array("status"=>"1","msg"=>"修改成功");
		}else{
			$datas = array("status"=>"0","msg"=>"修改失败");
		}
	}
	break;
case "update_about":
	if($_POST['id']){
		$arr = $_POST;
		$id = $arr['id'];
		unset($arr['id']);
		$arr['out_last_release'] = time();
		$update_id = $database->update("{$prefix}about",$arr,["id" => $id]);
		if($update_id){
			$datas = array("status"=>"1","msg"=>"修改成功");
		}else{
			$datas = array("status"=>"0","msg"=>"修改失败");
		}
	}
	break;
case "update_contact":
	if($_POST['id']){
		$arr = $_POST;
		$id = $arr['id'];
		unset($arr['id']);
		$arr['art_last_release'] = time();
		$update_id = $database->update("{$prefix}contact",$arr,["id" => $id]);
		if($update_id){
			$datas = array("status"=>"1","msg"=>"修改成功");
		}else{
			$datas = array("status"=>"0","msg"=>"修改失败");
		}
	}
	break;
case "update_news":
	if($_POST['id']){
		$arr = $_POST;
		$id = $arr['id'];
		unset($arr['id']);
		$arr['news_last_release'] = time();
		$update_id = $database->update("{$prefix}news",$arr,["id" => $id]);
		if($update_id){
			$datas = array("status"=>"1","msg"=>"修改成功");
		}else{
			$datas = array("status"=>"0","msg"=>"修改失败");
		}
	}
	break;
case "update_news_class":
	if($_POST['id']){
		$arr = $_POST;
		$id = $arr['id'];
		unset($arr['id']);
		$arr['last_release'] = time();
		$update_id = $database->update("{$prefix}news_class",$arr,["id" => $id]);
		if($update_id){
			$datas = array("status"=>"1","msg"=>"修改成功");
		}else{
			$datas = array("status"=>"0","msg"=>"修改失败");
		}
	}
	break;
case "update_product_class":
	if($_POST['id']){
		$arr = $_POST;
		$id = $arr['id'];
		unset($arr['id']);
		$arr['last_release'] = time();
		$update_id = $database->update("{$prefix}product_class",$arr,["id" => $id]);
		if($update_id){
			$datas = array("status"=>"1","msg"=>"修改成功");
		}else{
			$datas = array("status"=>"0","msg"=>"修改失败");
		}
	}
	break;
case "update_product":
	if($_POST['id']){
		$arr = $_POST;
		$id = $arr['id'];
		unset($arr['id']);
		$arr['pro_last_release'] = time();
		unset($arr['old_pic']);
		$update_id = $database->update("{$prefix}product",$arr,["id" => $id]);
		if($update_id){
			$datas = array("status"=>"1","msg"=>"修改成功");
		}else{
			$datas = array("status"=>"0","msg"=>"修改失败");
		}
	}
	break;
default:
	$datas=array("status"=>0,"msg"=>"No Action");
}
include 'common/check_empty.php';
?>




