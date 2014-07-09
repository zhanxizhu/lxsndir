<?php /* Smarty version Smarty-3.1.10, created on 2014-07-08 17:30:37
         compiled from "D:\phpfind\WWW\themes\default\topbar.html" */ ?>
<?php /*%%SmartyHeaderCode:438753ba5d15529401-25944577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55c4db4a3e980543f029f21010c1ba7288d42f67' => 
    array (
      0 => 'D:\\phpfind\\WWW\\themes\\default\\topbar.html',
      1 => 1404550947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '438753ba5d15529401-25944577',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_53ba5d1560fbb9_51554083',
  'variables' => 
  array (
    'site_name' => 0,
    'stat' => 0,
    'login_status' => 1,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ba5d1560fbb9_51554083')) {function content_53ba5d1560fbb9_51554083($_smarty_tpl) {?><div id="topbg">
	<div id="topbar">
		<div id="topbar-left">
			您好，欢迎来到<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
！&nbsp;&nbsp;&nbsp;<strong>数据统计：</strong>85个主题，共<?php echo $_smarty_tpl->tpl_vars['stat']->value['website'];?>
个优秀站点，<?php echo $_smarty_tpl->tpl_vars['stat']->value['article'];?>
篇资讯
		</div>
    	<div id="topbar-right"><?php echo $_smarty_tpl->tpl_vars['login_status']->value;?>

			&nbsp;|&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" onclick="this.style.behavior=&#39;url(#default#homepage)&#39;;this.setHomePage(&#39;<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
&#39;);">设为主页</a> ｜ <a href="javascript:window.external.AddFavorite('<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
')">收藏本站</a>
			</div>
	</div>
</div>
<div class="clear"></div><?php }} ?>