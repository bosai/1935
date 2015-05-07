<?php
$data = file_get_contents('../config/allow_token.conf'); 
if($_GET['token']!=$data){
	$result=array("status"=>-2,"msg"=>"Token Error");
	array_json($result,1);
	exit;
}
?>