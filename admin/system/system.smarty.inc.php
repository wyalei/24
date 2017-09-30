<?php
	define('SMARTY_DIR', '/Users/wangyalei/Sites/w3cschool/Smarty.23/libs/');
	require(SMARTY_DIR . 'Smarty.class.php');

	class SmartyProject extends Smarty{
		function __construct(){
			parent::__construct();

			$this->template_dir = './system/templates/';
			$this->compile_dir = './system/templates_c/';
			$this->config_dir = './system/configs/';
			$this->cache_dir = './system/cache/';

			// $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
			// $this->assign('app_name', 'guestbook');
		}

	}

?>