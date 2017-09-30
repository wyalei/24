<?php 
	require('system.smarty.inc.php');
	$smarty = new SmartyProject();
	$smarty->assign('name', 'admin 111');
	$smarty->display('index.tpl');
?>