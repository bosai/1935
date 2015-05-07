<?php
$client = get_client_ip();
$allow_ips = file_get_contents('../config/allow_ip.conf');
$check_allow = is_safe_ip($client,$allow_ips);
if($check_allow!=TRUE){
	$result=array("status"=>-2,"msg"=>"The IP address {$client} is not allowed.");
	array_json($result,1);
	exit;
}
?>