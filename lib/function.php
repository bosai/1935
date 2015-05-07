<?php
/**
* ��ȡ�ͻ���IP��ַ
* @param integer $type �������� 0 ����IP��ַ 1 ����IPV4��ַ����
* @param boolean $adv �Ƿ���и߼�ģʽ��ȡ���п��ܱ�αװ�� 
* @return mixed
*/
function get_client_ip($type = 0,$adv=false) {
$type = $type ? 1 : 0;
static $ip = NULL;
if ($ip !== NULL) return $ip[$type];
if($adv){
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
$arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
$pos = array_search('unknown',$arr);
if(false !== $pos) unset($arr[$pos]);
$ip = trim($arr[0]);
}elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
$ip = $_SERVER['HTTP_CLIENT_IP'];
}elseif (isset($_SERVER['REMOTE_ADDR'])) {
$ip = $_SERVER['REMOTE_ADDR'];
}
}elseif (isset($_SERVER['REMOTE_ADDR'])) {
$ip = $_SERVER['REMOTE_ADDR'];
}
// IP��ַ�Ϸ���֤
$long = sprintf("%u",ip2long($ip));
$ip = $long ? array($ip, $long) : array('0.0.0.0', 0);
return $ip[$type];
}

/**
* ��ȫIP��⣬֧��IP�μ��
* @param string $ip Ҫ����IP
* @param string|array $ips ������IP���ߺ�����IP
* @return boolean true �ڰ��������ߺ������У�������
*/
function is_safe_ip($ip="",$ips=""){ 
if(!$ip) $ip = get_client_ip(); //��ȡ�ͻ���IP
if($ips){
if(is_string($ips)){ //ip��"," ���������IP��192.168.1.13,123.23.23.44,193.134.*.*
$ips = explode(",", $ips);
}
}else{ //��ȡ��̨���� ������IP
$obj = new Setting();
$ips = explode(",", $obj->getConfig("whiteip")); 
}
if(in_array($ip, $ips)){
return true;
}
$ipregexp = implode('|', str_replace( array('*','.'), array('\d+','\.') ,$ips)); 
$rs = preg_match("/^(".$ipregexp.")$/", $ip); 
if($rs) return true;
return 0;
}

function array_json($content){
	print(json_encode($content));
}

function on_whitelist_ip(){
	require '/common/check_allow.php';
}
?>