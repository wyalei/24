<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
date_default_timezone_set('prc');
include_once("system/system.inc.php");
require("system/system.inc.php");  						//包含配置文件


$query = "insert into tb_form(formid,commo_id,commo_name,commo_num,agoprice,fold,total,vendee,taker,address,tel,code,pay_method,del_method,formtime,state)values('1494667723','6','aaa','1','3099.6','9','3099.6','user0','sdfsa','asdfasg','1232322322','332222','银行转账','平邮','2017-05-13 17:28:43',0)";


$InsertSQL = $admindb->ExecSQL($sql,$conn);   

echo "sql: " . $query;

if(false == $InsertSQL){
	echo "add failed";
}else{
	echo "add success";
	// $updsql = "update tb_user set consume='".$tmptt."',shopping='' where name = '".$_POST['uid']."'";
	// $updrst = $admindb->ExecSQL($updsql,$conn);
	// echo "<script>top.opener.location.href='index.php';</script>";
	// echo "<script>open('forminfo.php?fid=$formid','_blank','width=750 height=650',false);window.close();</script>";

}
?>