<?php
$output=array_json($datas,0);
if($output=='[]'){
	$result=array("status"=>-1,"msg"=>"No return value");
	array_json($result,1);
	exit;
}else{
	print_r($output);
}
?>