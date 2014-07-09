<?php /* Smarty version Smarty-3.1.10, created on 2013-11-02 15:28:59
         compiled from "C:\HostingSpaces\c7hqazdl\lxsn.net\wwwroot\themes\member\article.html" */ ?>
<?php /*%%SmartyHeaderCode:186255274a9bbc43d88-13431801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2cecf05d2b151e22a317de8d4e00055a6018175' => 
    array (
      0 => 'C:\\HostingSpaces\\c7hqazdl\\lxsn.net\\wwwroot\\themes\\member\\article.html',
      1 => 1373469970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186255274a9bbc43d88-13431801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagename' => 0,
    'action' => 0,
    'articles' => 0,
    'row' => 0,
    'showpage' => 0,
    'category_option' => 0,
    'do' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5274a9bbd37985_53142275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274a9bbd37985_53142275')) {function content_5274a9bbd37985_53142275($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
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
								<th>文章标题</th>
								<th>属性状态</th>
								<th>发布时间</th>
								<th>操作选项</th>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</td>
								<td class="textleft"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_title'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['art_attr'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['art_ctime'];?>
</td>
								<td><a href="?mod=article&act=edit&aid=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
">修改</a></td>
							</tr>
							<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
							<tr><td colspan="6">您还未发布任何文章！</td></tr>
							<?php } ?>
						</table>
					</div>
        			<div id="showpage" class="clearfix"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
        			<?php }?>
        
        			<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'||$_smarty_tpl->tpl_vars['action']->value=='edit'){?>
        			<div id="formbox">
						<form name="myfrom" id="myfrom" method="post" action="?mod=article">
        				<ul>
        					<li><strong>选择分类：</strong><select name="cate_id"><?php echo $_smarty_tpl->tpl_vars['category_option']->value;?>
</select></li>
        					<li><strong>文章标题：</strong><input name="art_title" type="text" class="ipt" id="art_title" size="50" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_title'];?>
" /></li>
            				<li><strong>TAG标签：</strong><input name="art_tags" type="text" class="ipt" id="art_tags" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_tags'];?>
" onBlur="javascript:this.value=this.value.replace(/，/ig,',');" /></li>
            				<li><strong>内容来源：</strong><input name="copy_from" type="text" class="ipt" id="copy_from" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['copy_from'];?>
" /></li>
							<li><strong>来源地址：</strong><input name="copy_url" type="text" class="ipt" id="copy_url" size="50" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['copy_url'];?>
" /></li>
							<li><strong>内容摘要：</strong><textarea name="art_intro" cols="50" rows="5" class="ipt" id="art_intro"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_intro'];?>
</textarea></li>
                			<li><strong>文章内容：</strong>
							
<script type="text/javascript">
							var editor;
							KindEditor.ready(function(K) {
							editor = K.create('textarea[name="art_content"]', {
								resizeType : 1,
								allowPreviewEmoticons : false,
								allowImageUpload : true,
								uploadJson : '?mod=upload&act=upload',
								items : [
									'source', '|', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
									'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
									'insertunorderedlist', '|', 'emoticons', 'image', 'link', '|', 'fullscreen']
								});
							});
                    		</script>
                    		<textarea name="art_content" id="art_content" cols="50" rows="6" class="ipt" style="width: 530px; height: 400px; visibility: hidden;"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_content'];?>
</textarea></li>
            				<li><strong>&nbsp;</strong><input type="hidden" name="art_id" id="art_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
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