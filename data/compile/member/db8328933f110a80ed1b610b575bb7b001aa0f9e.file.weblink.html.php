<?php /* Smarty version Smarty-3.1.10, created on 2014-01-04 10:02:33
         compiled from "E:\HostingSpaces\c7hqazdl\lxsn.net\wwwroot\themes\member\weblink.html" */ ?>
<?php /*%%SmartyHeaderCode:1050052c76bb922f581-02227721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db8328933f110a80ed1b610b575bb7b001aa0f9e' => 
    array (
      0 => 'E:\\HostingSpaces\\c7hqazdl\\lxsn.net\\wwwroot\\themes\\member\\weblink.html',
      1 => 1373376120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1050052c76bb922f581-02227721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagename' => 0,
    'action' => 0,
    'weblinks' => 0,
    'row' => 0,
    'showpage' => 0,
    'weburl_option' => 0,
    'dealtype_radio' => 0,
    'linktype_radio' => 0,
    'linkpos_radio' => 0,
    'do' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_52c76bb93a3c45_53891942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c76bb93a3c45_53891942')) {function content_52c76bb93a3c45_53891942($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <div class="content">
            	<div class="title"><?php echo $_smarty_tpl->tpl_vars['pagename']->value;?>
</div>
                <div class="body">		
            		<?php if ($_smarty_tpl->tpl_vars['action']->value=='list'){?>
            		<div id="listbox">
            			<table width="100%" border="0" cellspacing="1" cellpadding="0">
            				<tr>
            					<th>ID</th>
            					<th>所属分类</th>
            					<th>链接名称</th>
            					<th>网站域名</th>
            					<th>链接状态</th>
            					<th>提交时间</th>
            					<th>操作选项</th>
            				</tr>
            				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weblinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            				<tr>
            					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['link_id'];?>
</td>
            					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</td>
            					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['link_name'];?>
</td>
            					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['web_url'];?>
</td>
            					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['link_status'];?>
</td>
            					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['link_time'];?>
</td>
            					<td><a href="?mod=weblink&act=edit&lid=<?php echo $_smarty_tpl->tpl_vars['row']->value['link_id'];?>
">修改</a> | <a href="?mod=weblink&act=del&lid=<?php echo $_smarty_tpl->tpl_vars['row']->value['link_id'];?>
" onClick="return confirm('确认执行此操作吗？');">删除</a></td>
            				</tr>
            				<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
            				<tr><td colspan="7">您还未发布任何链接！</td></tr>
            				<?php } ?>
            			</table>
            		</div>
					<div id="showpage" class="clearfix"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
					<?php }?>
        
        			<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'||$_smarty_tpl->tpl_vars['action']->value=='edit'){?>
        			<div id="formbox">
						<form name="myfrom" id="myfrom" method="post" action="?mod=weblink">
        				<ul>
        					<li><strong>选择站点：</strong><select name="web_id"><?php echo $_smarty_tpl->tpl_vars['weburl_option']->value;?>
</select></li>
        					<li><strong>交易类型：</strong><?php echo $_smarty_tpl->tpl_vars['dealtype_radio']->value;?>
</li>
                            <li><strong>链接名称：</strong><input type="text" name="link_name" id="link_name" class="ipt" size="30" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['link_name'];?>
" /><span class="tips">链接名称最多20个字符</span></li>
            				<li><strong>链接类型：</strong><?php echo $_smarty_tpl->tpl_vars['linktype_radio']->value;?>
</li>
                			<li><strong>链接位置：</strong><?php echo $_smarty_tpl->tpl_vars['linkpos_radio']->value;?>
</li>
                			<li><strong>链接价格：</strong><input type="text" name="link_price" id="link_price" class="ipt" size="10" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['link_price'];?>
" /> / 月<span class="tips">0为商谈</span></li>
                			<li><strong>要 求 一：</strong>对方网站百度收录必须超过 <input type="text" name="link_if1" id="link_if1" class="ipt" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['link_if1'];?>
" /> 条</li>
                			<li><strong>要 求 二：</strong>对方Google PageRank值>= <input type="text" name="link_if2" id="link_if2" class="ipt" size="10" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['link_if2'];?>
" /><span class="tips">PR值范围：1~9，0为不限</span></li>
                			<li><strong>要 求 三：</strong>对方首页在百度的快照时间不超过 <input type="text" name="link_if3" id="link_if3" class="ipt" size="10" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['link_if3'];?>
" /> 天</li>
                			<li><strong>要 求 四：</strong>对方首页外链不得超过 <input type="text" name="link_if4" id="link_if4" class="ipt" size="10" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['link_if4'];?>
" /> 个</li>
            				<li><strong>链接说明：</strong><textarea name="link_intro" id="link_intro" cols="50" rows="6" class="ipt"><?php echo $_smarty_tpl->tpl_vars['row']->value['link_intro'];?>
</textarea></li>
							<li><strong>过期时间：</strong><input type="text" name="link_days" id="link_days" class="ipt" size="10" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['link_days'];?>
" /> 天后过期<span class="tips">为0将长期有效</span></li>
            				<li><strong>&nbsp;</strong><input type="hidden" name="link_id" id="link_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['link_id'];?>
"><input type="hidden" name="do" id="do" value="<?php echo $_smarty_tpl->tpl_vars['do']->value;?>
"><input type="submit" class="btn" value="提 交"> <input type="reset" class="btn" value="重 填"></li>
        				</ul>
        				</form>
    				</div>
					<?php }?>
            	</div>
			</div>
            
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>