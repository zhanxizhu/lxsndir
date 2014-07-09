<?php /* Smarty version Smarty-3.1.10, created on 2014-03-03 16:22:32
         compiled from "D:\MiniServer\www\htdocs\themes\member\website.html" */ ?>
<?php /*%%SmartyHeaderCode:1709453143bc8e99a81-19105647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f26ec2104dfd7c37c5ceacd3a8979675f1936e1b' => 
    array (
      0 => 'D:\\MiniServer\\www\\htdocs\\themes\\member\\website.html',
      1 => 1373767846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1709453143bc8e99a81-19105647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagename' => 0,
    'action' => 0,
    'websites' => 0,
    'web' => 0,
    'showpage' => 0,
    'cfg' => 0,
    'category_option' => 0,
    'do' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_53143bc9618158_71790318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53143bc9618158_71790318')) {function content_53143bc9618158_71790318($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
								<th>网站名称</th>
								<th>网站地址</th>
								<th>属性状态</th>
								<th>提交时间</th>
								<th>操作选项</th>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['web'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['web']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['websites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['web']->key => $_smarty_tpl->tpl_vars['web']->value){
$_smarty_tpl->tpl_vars['web']->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['web']->value['cate_name'];?>
</td>
								<td class="textleft"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_name'];?>
</td>
								<td class="textleft"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_url'];?>
</td>
								<td style="color: #FF0000;"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_status'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_ctime'];?>
</td>
								<td><a href="?mod=website&act=edit&wid=<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
">修改</a></td>
							</tr>
							<?php }
if (!$_smarty_tpl->tpl_vars['web']->_loop) {
?>
							<tr><td colspan="7">您还未提交任何站点！</td></tr>
							<?php } ?>
						</table>
					</div>
        			<div id="showpage" class="clearfix"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
        			<?php }?>
        
        			<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'||$_smarty_tpl->tpl_vars['action']->value=='edit'){?>
        			<?php if ($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_submit']=='yes'){?>
        			<div id="formbox">
						<div style="border: dashed 1px #f30; padding: 10px;">
							【网站声明】：请在贵站首页做上本站链接（ 关键字：<font class="red"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['check_link_name'];?>
</font>&nbsp;&nbsp;&nbsp;&nbsp;网址：<font class="red"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['check_link_url'];?>
</font>，<b class="red">注：VIP与快审用户除外</b>）！
							
						</div>
						<form name="myfrom" id="myfrom" method="post" action="?mod=website">
        				<ul>
        					<li><strong>选择分类：</strong><select name="cate_id"><?php echo $_smarty_tpl->tpl_vars['category_option']->value;?>
</select></li>
        					<li><strong>网站名称：</strong><input type="text" name="web_name" id="web_name" class="ipt" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_name'];?>
" /><span class="tips">注：不超过10个汉字</span></li>
            				<li><strong>网站域名：</strong><input type="text" name="web_url" id="web_url" class="ipt" size="50" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_url'];?>
" onblur="checkurl(this.value)" /><input type="button" class="btn" id="meta_btn" value="抓取Meta" onclick="getmeta()"><span class="tips">例: www.xy889.com</span></li>
            				<li><strong>TAG标签：</strong><input type="text" name="web_tags" id="web_tags" class="ipt" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_tags'];?>
" onBlur="javascript:this.value=this.value.replace(/，/ig,',');" /></li>
            				<li><strong>网站简介：</strong><textarea name="web_intro" id="web_intro" cols="50" rows="6" class="ipt"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_intro'];?>
</textarea></li>
							<li><strong>服务器IP：</strong><input name="web_ip" type="text" class="ipt" id="web_ip" size="30" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_ip'];?>
" readonly /><input type="button" class="btn" id="data_btn" value="获取数据" onclick="getdata()"></li>
							<li><strong>PageRank：</strong><input name="web_grank" type="text" class="ipt" id="web_grank" size="10" maxlength="2" value="<?php echo !$_smarty_tpl->tpl_vars['web']->value['web_grank'] ? '0' : $_smarty_tpl->tpl_vars['web']->value['web_grank'];?>
" readonly /></li>
                            <li><strong>BaiduRank：</strong><input name="web_brank" type="text" class="ipt" id="web_brank" size="10" maxlength="2" value="<?php echo !$_smarty_tpl->tpl_vars['web']->value['web_brank'] ? '0' : $_smarty_tpl->tpl_vars['web']->value['web_brank'];?>
" readonly /></li>
                			<li><strong>SogouRank：</strong><input name="web_srank" type="text" class="ipt" id="web_srank" size="10" maxlength="2" value="<?php echo !$_smarty_tpl->tpl_vars['web']->value['web_srank'] ? '0' : $_smarty_tpl->tpl_vars['web']->value['web_srank'];?>
" readonly /></li>
							<li><strong>AlexaRank：</strong><input name="web_arank" type="text" class="ipt" id="web_arank" size="10" maxlength="10" value="<?php echo !$_smarty_tpl->tpl_vars['web']->value['web_arank'] ? '0' : $_smarty_tpl->tpl_vars['web']->value['web_arank'];?>
" readonly /></li>
							<li><strong>&nbsp;</strong><input type="hidden" name="web_id" id="web_id" value="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
"><input type="hidden" name="web_pic" id="web_pic" value="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_pic'];?>
"><input type="hidden" name="do" id="do" value="<?php echo $_smarty_tpl->tpl_vars['do']->value;?>
"><input type="submit" class="btn" value="提 交"> <input type="reset" class="btn" value="重 填"></li>
        				</ul>
        				</form>
    				</div>
        			<?php }else{ ?>
        			<div style="background: #ffc; border: dashed 1px #f30; color: #f00; padding: 20px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['submit_close_reason'];?>
</div>
        			<?php }?>
					<?php }?>
                </div>
            </div>
            
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>