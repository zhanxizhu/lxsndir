<?php /* Smarty version Smarty-3.1.10, created on 2014-02-26 18:24:40
         compiled from "E:\HostingSpaces\c7hqazdl\lxsn.net\wwwroot\themes\member\reset_mail.html" */ ?>
<?php /*%%SmartyHeaderCode:29994530dc0e86a6991-73407266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c67b393d80c159467ca531ea3a853bea1c90365d' => 
    array (
      0 => 'E:\\HostingSpaces\\c7hqazdl\\lxsn.net\\wwwroot\\themes\\member\\reset_mail.html',
      1 => 1373376120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29994530dc0e86a6991-73407266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_email' => 0,
    'post_time' => 0,
    'reset_link' => 0,
    'site_url' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_530dc0e8767565_30538182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530dc0e8767565_30538182')) {function content_530dc0e8767565_30538182($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<style type="text/css">
html {word-wrap: break-word;}
body {font: 14px arial, verdana, sans-serif; line-height: 25px; margin: 0; padding: 8px 10px;}
pre {
	white-space: pre-wrap;
	white-space: -moz-pre-wrap; 
	white-space: -pre-wrap;
	white-space: -o-pre-wrap;
	word-wrap: break-word;
}
</style>
</head>

<body>
<table cellpadding="0" cellspacing="0" width="100%" style="font-family: verdana, arial; margin: 0 auto; width: 700px;">
	<tr>
		<td style="background: #08c; color: #fff; font: bold 14px normal; line-height: 35px;">&nbsp;&nbsp;重置密码!</td>
	</tr>
	<tr>
		<td style="border: solid 1px #ccc; font-size: 13px; line-height: 180%; padding: 20px;">
<strong><?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
</strong> 您好：<br><br>您在 <?php echo $_smarty_tpl->tpl_vars['post_time']->value;?>
 提交了找回密码的申请，如果您确定该申请，请点击以下链接：<br>
<a href="<?php echo $_smarty_tpl->tpl_vars['reset_link']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['reset_link']->value;?>
</a><br><font color="#999999">(如果无法点击该URL链接地址，请将它复制并粘帖到浏览器的地址输入框，然后单击回车即可)</font></td>
  </tr>
	<tr>
		<td style="background: #333; color: #fff; font-size: 12px; line-height: 180%; padding: 10px;">请注意：此邮件系&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" target="_blank" style="color: #fff;"><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</a>&nbsp;自动发送，请勿直接回复。<br>如果此邮件不是您请求的，请忽略并删除！</td>
	</tr>
</table>
</body>
</html><?php }} ?>