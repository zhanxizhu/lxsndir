<?php /* Smarty version Smarty-3.1.10, created on 2014-07-08 17:30:38
         compiled from "D:\phpfind\WWW\themes\default\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2463253ba5d1584dfb8-54991259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '068bc24630dbfa4fb25a4a96f6cb1814b9405a9f' => 
    array (
      0 => 'D:\\phpfind\\WWW\\themes\\default\\footer.html',
      1 => 1404555901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2463253ba5d1584dfb8-54991259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_53ba5d15b3fee6_78220115',
  'variables' => 
  array (
    'item' => 0,
    'cfg' => 0,
    'site_url' => 0,
    'site_copyright' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ba5d15b3fee6_78220115')) {function content_53ba5d15b3fee6_78220115($_smarty_tpl) {?><div class="blank10"></div>
<div id="footer">
    <div id="footer_top">
        <p class="good_link">
            <a href="?mod=webdir">网站目录</a> |
			<a href="?mod=update">最新收录</a> |
			<a href="?mod=archives">数据归档</a> |
			<a href="?mod=top">网站排行</a> |
			<a href="?mod=category">分类列表</a> | 
			<a href="?mod=article">软文资讯</a> | 
			<a href="?mod=weblink">友链交换</a> | 
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = get_pages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['page_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['page_name'];?>
</a> | 
			<?php } ?>
			<a href="?mod=feedback">留言反馈</a>|
			<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['cfg']->value['admin_email'];?>
">联系我们</a> |
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
sitemap.xml">sitemap</a>
        </p>
    </div>
    <div class="copyright">
        <p id="copyright">
            <?php echo $_smarty_tpl->tpl_vars['site_copyright']->value;?>

        </p>
    </div>
</div><?php }} ?>