<?php /* Smarty version Smarty-3.1.10, created on 2014-07-08 17:30:43
         compiled from "D:\phpfind\WWW\themes\default\right.html" */ ?>
<?php /*%%SmartyHeaderCode:97353bbba436dc541-32659318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db2c3dd7facd1ee963d2e1b6c23d16ae32720f7b' => 
    array (
      0 => 'D:\\phpfind\\WWW\\themes\\default\\right.html',
      1 => 1397876844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97353bbba436dc541-32659318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'art' => 0,
    'best' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_53bbba43b7bfd3_14608100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bbba43b7bfd3_14608100')) {function content_53bbba43b7bfd3_14608100($_smarty_tpl) {?><!-- <div class="ad250x250"><?php echo get_adcode(7);?>
</div>
<div class="blank10"></div> -->
<div id="bestart">
	<div class="stitle"><h2>推荐资讯</h2></div>
	<ul class="artlist_b">
		<?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = get_articles(0,10); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value){
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['art']->value['art_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['art_title'];?>
</a></li>
		<?php } ?>
	</ul>
</div>
<div class="blank10"></div>
<div id="bestweb" class="mag">
	<div class="stitle"><h2>推荐站点</h2></div>
	<ul class="weblist_b">
		<?php  $_smarty_tpl->tpl_vars['best'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['best']->_loop = false;
 $_from = get_websites(0,6,false,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['best']->key => $_smarty_tpl->tpl_vars['best']->value){
$_smarty_tpl->tpl_vars['best']->_loop = true;
?>
		<li><strong><a href="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
</strong></b><p><?php echo $_smarty_tpl->tpl_vars['best']->value['web_intro'];?>
</p><address><a href="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_furl'];?>
" target="_blank" class="visit" onclick="clickout(<?php echo $_smarty_tpl->tpl_vars['best']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['best']->value['web_url'];?>
</a></address></li>
		<?php } ?>
	</ul>
</div><?php }} ?>