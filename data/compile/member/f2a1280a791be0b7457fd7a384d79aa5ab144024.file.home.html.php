<?php /* Smarty version Smarty-3.1.10, created on 2014-03-03 16:20:38
         compiled from "D:\MiniServer\www\htdocs\themes\member\home.html" */ ?>
<?php /*%%SmartyHeaderCode:3044753143b56ebdb80-83075040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2a1280a791be0b7457fd7a384d79aa5ab144024' => 
    array (
      0 => 'D:\\MiniServer\\www\\htdocs\\themes\\member\\home.html',
      1 => 1370230606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3044753143b56ebdb80-83075040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagename' => 0,
    'cfg' => 0,
    'myself' => 0,
    'site_name' => 0,
    'mystat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_53143b5717f603_30932296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53143b5717f603_30932296')) {function content_53143b5717f603_30932296($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="content">
		<div class="title"><?php echo $_smarty_tpl->tpl_vars['pagename']->value;?>
</div>
		<div class="body">
			<div class="notice"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_notice'];?>
</div>
			<div class="userinfo">
				<h3>您好，<?php echo $_smarty_tpl->tpl_vars['myself']->value['nick_name'];?>
，欢迎登录<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
管理中心！</h3>
				<ol>
					<li>1. 您现在的会员等级是 <strong><?php echo $_smarty_tpl->tpl_vars['myself']->value['user_type'];?>
</strong>，注册于 <?php echo $_smarty_tpl->tpl_vars['myself']->value['join_time'];?>
</li>
					<li>2. 目前您共提交 <strong><?php echo $_smarty_tpl->tpl_vars['mystat']->value['website'];?>
</strong> 个站点，<a href="?mod=website&act=add">继续提交>></a></li>
					<li>3. 目前您共发布 <strong><?php echo $_smarty_tpl->tpl_vars['mystat']->value['article'];?>
</strong> 篇文章，<a href="?mod=article&act=add">继续发布>></a></li>
					<li>4. 目前您共发布 <strong><?php echo $_smarty_tpl->tpl_vars['mystat']->value['weblink'];?>
</strong> 个链接，<a href="?mod=weblink&act=add">继续发布>></a></li>
					<li>5. 目前您共收藏 <strong><?php echo $_smarty_tpl->tpl_vars['mystat']->value['favorite'];?>
</strong> 个网站</li>
				</ol>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>