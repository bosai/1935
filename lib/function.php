<?php
/**
* 获取客户端IP地址
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
// IP地址合法验证
$long = sprintf("%u",ip2long($ip));
$ip = $long ? array($ip, $long) : array('0.0.0.0', 0);
return $ip[$type];
}

/**
* 安全IP检测，支持IP段检测
*/
function is_safe_ip($ip="",$ips=""){ 
if(!$ip) $ip = get_client_ip(); //获取客户端IP
if($ips){
if(is_string($ips)){ 
$ips = explode(",", $ips);
}
}else{ 
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

/**
* Array数组转Json数组
*/
function array_json($content,$display){
	$ct=json_encode($content);
	if($display==1){print($ct);}else{return $ct;}
}


/**
* 可逆向加解密算法
*/
function encrypt($data, $key)
{
 $key = md5($key);
    $x  = 0;
    $len = strlen($data);
    $l  = strlen($key);
    for ($i = 0; $i < $len; $i++)
    {
        if ($x == $l) 
        {
         $x = 0;
        }
        $char .= $key{$x};
        $x++;
    }
    for ($i = 0; $i < $len; $i++)
    {
        $str .= chr(ord($data{$i}) + (ord($char{$i})) % 256);
    }
    return base64_encode($str);
}

function decrypt($data, $key)
{
 $key = md5($key);
    $x = 0;
    $data = base64_decode($data);
    $len = strlen($data);
    $l = strlen($key);
    for ($i = 0; $i < $len; $i++)
    {
        if ($x == $l) 
        {
         $x = 0;
        }
        $char .= substr($key, $x, 1);
        $x++;
    }
    for ($i = 0; $i < $len; $i++)
    {
        if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1)))
        {
            $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
        }
        else
        {
            $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
        }
    }
    return $str;
}

function object_array($array){
  if(is_object($array)){
    $array = (array)$array;
  }
  if(is_array($array)){
    foreach($array as $key=>$value){
      $array[$key] = object_array($value);
    }
  }
  return $array;
} 
?>