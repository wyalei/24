<?php 
	// define('SMARTY_DIR', '/Users/wangyalei/Sites/w3cschool/Smarty.23/libs/');
	// require(SMARTY_DIR . 'Smarty.class.php');
	// $smarty = new Smarty();

	// $smarty->template_dir = '/Users/wangyalei/Sites/w3cschool/guestbook/templates/';
	// $smarty->compile_dir = '/Users/wangyalei/Sites/w3cschool/guestbook/templates_c/';
	// $smarty->config_dir = '/Users/wangyalei/Sites/w3cschool/guestbook/configs/';
	// $smarty->cache_dir = '/Users/wangyalei/Sites/w3cschool/guestbook/cache/';

	// echo "get data done--------<br/>";
	// $smarty->assign('name', 'ned');
	// $smarty->display('index.tpl');

	require('system.smarty.inc.php');
	$smarty = new SmartyProject();
	$smarty->assign('name', 'good222555');
	// $smarty->display('index.tpl');
	// $smarty->display('index2.html');

	// $smarty->assign('Contacts', 
	// 	array('fax'=>'13126562961',
	// 		  'email'=>'wangyalei@zhangyue.com',
	// 		  'phone'=>array('home'=>'1233444',
	// 		  				 'cell'=>'34455555')
	// 		  )
	// 	);
	
	// $smarty->assign('articleTitle', 'next x-men film, x3, delay.');
	$smarty->display('index.tpl');


?>