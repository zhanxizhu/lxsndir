<?php
require('common.php');
if (!isset($action)) $action = 'index';
$tempfile = 'admin.html';

if ($action == 'index') {
	$smarty->display('admin.html');
}elseif($action == 'top') {
	$tempfile='index_top.html';
	$smarty->assign('site_root', str_replace('\\', '/', dirname(HF_ROOT)));
	$smarty->display($tempfile);
}elseif($action == 'menu') {
	$tempfile='index_menu.html';
	$smarty->display($tempfile);
}
?>