<?php 
require("system.smarty.inc.php");
require("system.class.inc.php");

$connobj = new ConnDB("mysql", "127.0.0.1:3306", "root", "mymac8", "db_database20");
$conn = $connobj->GetConnId();
$admindb = new AdminDB();
$seppage = new SepPage();
$usefun = new UseFun();
$smarty = new SmartyProject();
function unhtml($params){
	extract($params);
	$text = $content;
	global $usefun;
	return $usefun->UnHtml($text);
	var_export(22);
}
$smarty->register_function('unhtml', 'unHtml1');
?>