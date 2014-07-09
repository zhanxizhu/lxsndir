<?php /* Smarty version Smarty-3.1.10, created on 2013-11-02 15:28:56
         compiled from "C:\HostingSpaces\c7hqazdl\lxsn.net\wwwroot\themes\member\favorite.html" */ ?>
<?php /*%%SmartyHeaderCode:15955274a9b8ae8f81-94546560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3297b34725bc6603d3a673eff6c417adc3f2d8ab' => 
    array (
      0 => 'C:\\HostingSpaces\\c7hqazdl\\lxsn.net\\wwwroot\\themes\\member\\favorite.html',
      1 => 1373376118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15955274a9b8ae8f81-94546560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagename' => 0,
    'action' => 0,
    'favorites' => 0,
    'row' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5274a9b8d0d686_47873411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274a9b8d0d686_47873411')) {function content_5274a9b8d0d686_47873411($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <div class="content">
            	<div class="title"><?php echo $_smarty_tpl->tpl_vars['pagename']->value;?>
</div>
                <div class="body">
        			<?php if ($_smarty_tpl->tpl_vars['action']->value=='list'){?>
        			<div id="listbox">
						<table width="100%" border="0" cellspacing="1" cellpadding="0">
							<tr>
								<th>ID</th>
								<th>网站名称</th>
								<th>收藏次数</th>
								<th>收藏时间</th>
								<th>操作选项</th>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favorites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fav_id'];?>
</td>
								<td class="textleft"><?php echo $_smarty_tpl->tpl_vars['row']->value['web_name'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['web_fnum'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fav_time'];?>
</td>
								<td><a href="?mod=favorite&act=del&fid=<?php echo $_smarty_tpl->tpl_vars['row']->value['fav_id'];?>
" onClick="return confirm('确认执行此操作吗？');">删除</a></td>
							</tr>
							<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
							<tr><td colspan="5">您还未收藏任何网站！</td></tr>
							<?php } ?>
						</table>
					</div>
        			<div id="showpage" class="clearfix"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
        			<?php }?>
                </div>
            </div>
            
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>