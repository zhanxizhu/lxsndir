<?php /* Smarty version Smarty-3.1.10, created on 2014-03-03 16:23:09
         compiled from "D:\MiniServer\www\htdocs\themes\member\msgbox.html" */ ?>
<?php /*%%SmartyHeaderCode:1138553143bedc869e0-63387223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '480230e574d309d39ea02f182cb258a9427518fb' => 
    array (
      0 => 'D:\\MiniServer\\www\\htdocs\\themes\\member\\msgbox.html',
      1 => 1370230606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1138553143bedc869e0-63387223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_53143bedd5d369_74693297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53143bedd5d369_74693297')) {function content_53143bedd5d369_74693297($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
* {margin: 0px; padding: 0px;}
body {background: #fff; font: 12px/23px Verdana, Arial, Helvetica, sans-serif;}
a {color: #3b85c4; text-decoration: none;}
a:hover {color: #f30; text-decoration: underline;}
.msgbox {border: solid 3px #3a90d7; margin: 80px auto 0px auto; width: 400px;}
.title {background: #3a90d7; color: #fff; font: bold 12px normal; padding: 7px;}
.content {background: #fff; color: #f30; padding: 15px 10px;}
.link {background: #ecf7ff; border-top: solid 1px #d4ecff; color: #3b85c4; line-height: 20px; padding: 3px; text-align: center;}
</style>
</head>

<body>
<div class="msgbox">
	<h2 class="title">系统提示！</h2>
    <div class="content"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
    <div class="link"><strong>系统 <span id="seconds" style="color: #f60;">2</span> 秒后将自动跳转</strong><br /><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">如果您的浏览器没有自动跳转，请点击这里...</a></div>
</div>
<script type="text/javascript">
var i = 2;
var retime = setInterval(function() {
	i = i - 1;
	if (i < 0){
		window.location.href= '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
		window.clearInterval(retime);
		return;
	}
	document.getElementById("seconds").innerHTML = i;
}, 1000);
</script>
</body>
</html><?php }} ?>