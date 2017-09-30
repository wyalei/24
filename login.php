<?php
session_start();
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . "GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");

require("system/system.inc.php");  						//包含配置文件
if(empty($_SESSION['member'])){
	$smarty->assign("member","");
}else{
	$smarty->assign('member',$_SESSION['member']);
}
echo "member: " . $_SESSION['member'];
$smarty->display('login.tpl');
?>