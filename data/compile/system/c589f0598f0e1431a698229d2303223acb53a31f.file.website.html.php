<?php /* Smarty version Smarty-3.1.10, created on 2014-07-07 15:54:33
         compiled from "D:\phpfind\WWW\themes\system\website.html" */ ?>
<?php /*%%SmartyHeaderCode:428153ba5239a75944-37946665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c589f0598f0e1431a698229d2303223acb53a31f' => 
    array (
      0 => 'D:\\phpfind\\WWW\\themes\\system\\website.html',
      1 => 1404549481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '428153ba5239a75944-37946665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'pagetitle' => 0,
    'fileurl' => 0,
    'keywords' => 0,
    'cate_id' => 0,
    'sort' => 0,
    'order' => 0,
    'key_url' => 0,
    'status' => 0,
    'category_option' => 0,
    'websites' => 0,
    'web' => 0,
    'showpage' => 0,
    'isbest' => 0,
    'ispay' => 0,
    'istop' => 0,
    'row' => 0,
    'h_action' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_53ba523ab7b898_95202793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ba523ab7b898_95202793')) {function content_53ba523ab7b898_95202793($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['action']->value=='list'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=add">+添加新站点</a></span></h3>
	<div class="listbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<div class="search">
			<input name="keywords" type="text" id="keywords" class="ipt" size="30" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
			<input type="submit" class="btn" value="搜索" />
        </div>
        </form>
                    
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<div class="toolbar">
			<select name="act" id="act" class="sel">
			<option value="del" style="color: #f00;">删除选定</option>
            <option value="move" style="color: #06c;">移动内容</option>
            <option value="attr" style="color: #f60;">属性设置</option>
			</select>
			<input type="submit" class="btn" value="应用" onClick="if(IsCheck('web_id[]')==false){alert('请指定您要操作的站点ID！');return false;}else{return confirm('确认执行此操作吗？');}">
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?status='+this.options[this.selectedIndex].value+'&cate_id=<?php echo $_smarty_tpl->tpl_vars['cate_id']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="0">所有状态</option>
			<option value="1" style="color: #333;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,1);?>
>拉黑</option>
			<option value="2" style="color: #f30;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,2);?>
>待审核</option>
			<option value="3" style="color: #080;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,3);?>
>已审核</option>
			</select>
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
&cate_id='+this.options[this.selectedIndex].value+'&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="0" selected>所有分类</option>
			<?php echo $_smarty_tpl->tpl_vars['category_option']->value;?>

			</select>
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
&cate_id=<?php echo $_smarty_tpl->tpl_vars['cate_id']->value;?>
&sort='+this.options[this.selectedIndex].value+'<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="1"<?php echo opt_selected($_smarty_tpl->tpl_vars['sort']->value,1);?>
>按提交时间排列</option>
			<option value="2"<?php echo opt_selected($_smarty_tpl->tpl_vars['sort']->value,2);?>
>按谷歌PR排列</option>
            <option value="3"<?php echo opt_selected($_smarty_tpl->tpl_vars['sort']->value,3);?>
>按百度PR排列</option>
			<option value="6"<?php echo opt_selected($_smarty_tpl->tpl_vars['sort']->value,6);?>
>按入站排列</option>
			<option value="7"<?php echo opt_selected($_smarty_tpl->tpl_vars['sort']->value,7);?>
>按出站排列</option>
			<option value="8"<?php echo opt_selected($_smarty_tpl->tpl_vars['sort']->value,8);?>
>按浏览排列</option>
			<option value="9"<?php echo opt_selected($_smarty_tpl->tpl_vars['sort']->value,9);?>
>按错误排列</option>
			</select>
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
&cate_id=<?php echo $_smarty_tpl->tpl_vars['cate_id']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&order='+this.options[this.selectedIndex].value+'<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="DESC"<?php echo opt_selected($_smarty_tpl->tpl_vars['order']->value,'DESC');?>
>降序</option>
			<option value="ASC"<?php echo opt_selected($_smarty_tpl->tpl_vars['order']->value,'ASC');?>
>升序</option>
			</select>
		</div>
		
    	<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th><input type="checkbox" id="ChkAll" onClick="CheckAll(this.form)"></th>
				<th>ID</th>
				<th>所属分类</th>
				<th>网站名称</th>
				<th>图片地址</th>
                <th>提交人</th>
				<th>状态</th>
				<th>审核</th>
				<th>链接</th>
				<th>收录时间</th>
				<th>操作选项</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['web'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['web']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['websites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['web']->key => $_smarty_tpl->tpl_vars['web']->value){
$_smarty_tpl->tpl_vars['web']->_loop = true;
?>
			<tr>
				<td><input name="web_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_cate'];?>
</td>
				<td class="ltext" width="350"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_name'];?>
</td>
				<td class="ltext"><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=down&web_id=<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
">修改</a>-><?php echo $_smarty_tpl->tpl_vars['web']->value['web_pic'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['web']->value['nick_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_attr'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['status'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['islink'];?>
</td>
				
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_ctime'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_operate'];?>
</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['web']->_loop) {
?>
			<tr><td colspan="14">无任何网站！</td></tr>
			<?php } ?>
		</table>
        </form>
        <div class="pagebox"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
    </div>
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['action']->value=='vip'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em></h3>
	<div class="listbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<div class="search">
			<input name="keywords" type="text" id="keywords" class="ipt" size="30" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
			<input type="submit" class="btn" value="搜索" />
        </div>
        </form>
                    
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<div class="toolbar">
			<select name="act" id="act" class="sel">
			<option value="del" style="color: #f00;">删除选定</option>
            <option value="move" style="color: #06c;">移动内容</option>
            <option value="attr" style="color: #f60;">属性设置</option>
			</select>
			<input type="submit" class="btn" value="应用" onClick="if(IsCheck('web_id[]')==false){alert('请指定您要操作的站点ID！');return false;}else{return confirm('确认执行此操作吗？');}">
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=vip&sort='+this.options[this.selectedIndex].value+'&isbest=<?php echo $_smarty_tpl->tpl_vars['isbest']->value;?>
&ispay=<?php echo $_smarty_tpl->tpl_vars['ispay']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="1"<?php echo opt_selected($_smarty_tpl->tpl_vars['sort']->value,1);?>
>按提交时间排列</option>
			<option value="2"<?php echo opt_selected($_smarty_tpl->tpl_vars['sort']->value,2);?>
>按用户排列</option>
			</select>
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=vip&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&order='+this.options[this.selectedIndex].value+'&isbest=<?php echo $_smarty_tpl->tpl_vars['isbest']->value;?>
&ispay=<?php echo $_smarty_tpl->tpl_vars['ispay']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="DESC"<?php echo opt_selected($_smarty_tpl->tpl_vars['order']->value,'DESC');?>
>降序</option>
			<option value="ASC"<?php echo opt_selected($_smarty_tpl->tpl_vars['order']->value,'ASC');?>
>升序</option>
			</select>
			
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=vip&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&isbest=<?php echo $_smarty_tpl->tpl_vars['isbest']->value;?>
&istop=<?php echo $_smarty_tpl->tpl_vars['istop']->value;?>
&ispay='+this.options[this.selectedIndex].value+'<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="0">是否付费</option>
			<option value="1" style="color: #f30;"<?php echo opt_selected($_smarty_tpl->tpl_vars['ispay']->value,1);?>
>未付费</option>
			<option value="2" style="color: #333;"<?php echo opt_selected($_smarty_tpl->tpl_vars['ispay']->value,2);?>
>付费</option>
			</select>
			
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=vip&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&isbest='+this.options[this.selectedIndex].value+'&istop=<?php echo $_smarty_tpl->tpl_vars['istop']->value;?>
&ispay=<?php echo $_smarty_tpl->tpl_vars['ispay']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="0">是否推荐</option>
			<option value="1" style="color: #f30;"<?php echo opt_selected($_smarty_tpl->tpl_vars['isbest']->value,1);?>
>不推荐</option>
			<option value="2" style="color: #333;"<?php echo opt_selected($_smarty_tpl->tpl_vars['isbest']->value,2);?>
>推荐</option>
			</select>
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=vip&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&istop='+this.options[this.selectedIndex].value+'&isbest=<?php echo $_smarty_tpl->tpl_vars['isbest']->value;?>
&ispay=<?php echo $_smarty_tpl->tpl_vars['ispay']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="0">是否置顶</option>
			<option value="1" style="color: #f30;"<?php echo opt_selected($_smarty_tpl->tpl_vars['isbest']->value,1);?>
>不置顶</option>
			<option value="2" style="color: #333;"<?php echo opt_selected($_smarty_tpl->tpl_vars['isbest']->value,2);?>
>置顶</option>
			</select>

		</div>
		
    	<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th><input type="checkbox" id="ChkAll" onClick="CheckAll(this.form)"></th>
				<th>ID</th>
				<th>用户Email</th>
				<th>网站名称</th>
                <th>付费</th>
				<!-- <th>置顶</th> -->
				<th>推荐</th>
				<th>置顶</th>
				<th>收录时间</th>
				<th>操作选项</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['web'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['web']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['websites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['web']->key => $_smarty_tpl->tpl_vars['web']->value){
$_smarty_tpl->tpl_vars['web']->_loop = true;
?>
			<tr>
				<td><input name="web_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['user_email'];?>
</td>
				<td class="ltext" width="450"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_ispay'];?>
</td>
				<!-- <td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_istop'];?>
</td> -->
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_isbest'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_istop'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_ctime'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_operate'];?>
</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['web']->_loop) {
?>
			<tr><td colspan="14">无任何网站！</td></tr>
			<?php } ?>
		</table>
        </form>
        <div class="pagebox"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
    </div>
    <?php }?>

	<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'||$_smarty_tpl->tpl_vars['action']->value=='edit'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">返回列表&raquo;</a></span></h3>
	<div class="formbox">
    	<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>所属分类：</th>
				<td><select name="cate_id" id="cate_id" class="sel"><?php echo $_smarty_tpl->tpl_vars['category_option']->value;?>
</select></td>
			</tr>
			<tr>
				<th>网站名称：</th>
				<td><input name="web_name" type="text" class="ipt" id="web_name" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['web_name'];?>
" /></td>
			</tr>
			<tr>
				<th>网站域名：</th>
				<td><input name="web_url" type="text" class="ipt" id="web_url" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['web_url'];?>
" /><input type="button" class="btn" id="meta_btn" value="抓取Meta" onclick="GetMeta()"><span class="tips">例: www.xy889.com</span></td>
			</tr>
			<tr>
				<th>TAG标签：</th>
				<td><input name="web_tags" type="text" class="ipt" id="web_tags" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['web_tags'];?>
" onBlur="javascript:this.value=this.value.replace(/，/ig,',');" /><span class="tips">多个标签用英文的“,”逗号隔开</span></td>
			</tr>
			<tr>
				<th valign="top">网站简介：</th>
				<td><textarea name="web_intro" cols="55" rows="4" class="ipt" id="web_intro"><?php echo $_smarty_tpl->tpl_vars['row']->value['web_intro'];?>
</textarea></td>
			</tr>
            <tr>
				<th>服务器IP：</th>
				<td><input name="web_ip" type="text" class="ipt" id="web_ip" size="30" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['web_ip'];?>
" /><input type="button" class="btn" id="data_btn" value="获取数据" onclick="GetData()"><span class="tips">例: 127.0.0.1</span></td>
			</tr>
 			<tr>
				<th>PageRank：</th>
				<td><input name="web_grank" type="text" class="ipt" id="web_grank" size="10" maxlength="1" value="<?php echo !$_smarty_tpl->tpl_vars['row']->value['web_grank'] ? '0' : $_smarty_tpl->tpl_vars['row']->value['web_grank'];?>
" /></td>
			</tr>
 			<tr>
				<th>BaiduRank：</th>
				<td><input name="web_brank" type="text" class="ipt" id="web_brank" size="10" maxlength="1" value="<?php echo !$_smarty_tpl->tpl_vars['row']->value['web_brank'] ? '0' : $_smarty_tpl->tpl_vars['row']->value['web_brank'];?>
" /></td>
			</tr>
 			<tr>
				<th>SogouRank：</th>
				<td><input name="web_srank" type="text" class="ipt" id="web_srank" size="10" maxlength="1" value="<?php echo !$_smarty_tpl->tpl_vars['row']->value['web_srank'] ? '0' : $_smarty_tpl->tpl_vars['row']->value['web_srank'];?>
" /></td>
			</tr>
 			<tr>
				<th>AlexaRank：</th>
				<td><input name="web_arank" type="text" class="ipt" id="web_arank" size="10" maxlength="10" value="<?php echo !$_smarty_tpl->tpl_vars['row']->value['web_arank'] ? '0' : $_smarty_tpl->tpl_vars['row']->value['web_arank'];?>
" /></td>
			</tr>
 			<tr>
				<th>点入次数：</th>
				<td><input name="web_instat" type="text" class="ipt" id="web_instat" size="10" maxlength="10" value="<?php echo !$_smarty_tpl->tpl_vars['row']->value['web_instat'] ? '0' : $_smarty_tpl->tpl_vars['row']->value['web_instat'];?>
" /> 次</td>
			</tr>
 			<tr>
				<th>点出次数：</th>
				<td><input name="web_outstat" type="text" class="ipt" id="web_outstat" size="10" maxlength="10" value="<?php echo !$_smarty_tpl->tpl_vars['row']->value['web_outstat'] ? '0' : $_smarty_tpl->tpl_vars['row']->value['web_outstat'];?>
" /> 次</td>
			</tr>
 			<tr>
				<th>浏览次数：</th>
				<td><input name="web_views" type="text" class="ipt" id="web_views" size="10" maxlength="10" value="<?php echo !$_smarty_tpl->tpl_vars['row']->value['web_views'] ? '0' : $_smarty_tpl->tpl_vars['row']->value['web_views'];?>
" /> 次</td>
			</tr>
			<tr>
				<th>错误次数：</th>
				<td><input name="web_errors" type="text" class="ipt" id="web_errors" size="10" maxlength="10" value="<?php echo !$_smarty_tpl->tpl_vars['row']->value['web_errors'] ? '0' : $_smarty_tpl->tpl_vars['row']->value['web_errors'];?>
" /> 次</td>
			</tr>
			<tr>
				<th>属性设置：</th>
				<td><input name="web_ispay" type="checkbox" id="web_ispay" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['ispay']->value,1);?>
 /><label for="web_ispay">付费</label>　<input name="web_istop" type="checkbox" id="web_istop" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['istop']->value,1);?>
 /><label for="web_istop">置顶</label>　<input name="web_isbest" type="checkbox" id="web_isbest" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['isbest']->value,1);?>
 /><label for="web_isbest">推荐</label></td>
			</tr>
			<tr>
				<th>审核状态：</th>
				<td><select name="web_status" id="web_status" class="sel"><option value="1" style="color: #333;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,1);?>
>黑名单</option><option value="2" style="color: #f30;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,2);?>
>待审核</option><option value="3" style="color: #080;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,3);?>
>已审核</option></select></td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'&&$_smarty_tpl->tpl_vars['row']->value['web_id']){?>
					<input name="web_id" type="hidden" id="web_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['web_id'];?>
">
					<?php }?>
					<input type="submit" class="btn" value="保 存">&nbsp;
					<input type="reset" class="btn" value="取 消" onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
';">
				</td>
			</tr>
		</table>
        </form>
	</div>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['action']->value=='move'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">返回列表&raquo;</a></span></h3>
	<div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th valign="top">已选定的内容：</th>
				<td><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['websites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
&act=edit&web_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['web_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['web_name'];?>
</a><input name="web_id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['web_id'];?>
"><br /><?php } ?></td>
			</tr>
			<tr>
				<th>将以上内容移动至：</th>
				<td><select name="cate_id" id="cate_id" class="sel"><?php echo $_smarty_tpl->tpl_vars['category_option']->value;?>
</select></td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<input type="submit" class="btn" value="保 存">&nbsp;
					<input type="reset" class="btn" value="取 消" onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
';">
				</td>
			</tr>
		</table>
		</form>
	</div>
	<?php }?>
    
	<?php if ($_smarty_tpl->tpl_vars['action']->value=='attr'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">返回列表&raquo;</a></span></h3>
	<div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th valign="top">已选定的内容：</th>
				<td><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['websites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['item']->value['web_id'];?>
 - <a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
&act=edit&web_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['web_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['web_name'];?>
</a><input name="web_id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['web_id'];?>
"><br /><?php } ?></td>
			</tr>
			<tr>
				<th>属性设置：</th>
				<td><input name="web_ispay" type="checkbox" id="web_ispay" value="1" /><label for="web_ispay">付费</label> <input name="web_istop" type="checkbox" id="web_istop" value="1" /><label for="web_istop">置顶</label>　<input name="web_isbest" type="checkbox" id="web_isbest" value="1" /><label for="web_isbest">推荐</label></td>
			</tr>
			<tr>
				<th>审核状态：</th>
				<td><select name="web_status" id="web_status" class="sel"><option value="1" style="color: #333;">黑名单</option><option value="2" style="color: #f30;">待审核</option><option value="3" selected="selected" style="color: #080;">已审核</option></select></td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td colspan="2">
				<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
				<input type="submit" class="btn" value="保 存">&nbsp;
				<input type="reset" class="btn" value="取 消" onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
';">
				</td>
			</tr>
		</table>
		</form>
	</div>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['action']->value=='friend'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=site&status=2">未审检测</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=site&status=3">已审核检测</a></span></h3>
	<div class="listbox"> 
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=friend">
		<div class="search">
			<input name="keywords" type="text" id="keywords" class="ipt" size="30" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
			<input type="submit" class="btn" value="搜索" />
        </div>
        </form>
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<div class="toolbar">
			<select name="act" id="act" class="sel">
            <option value="attr" style="color: #f60;">属性设置</option>
			</select>
			<input type="submit" class="btn" value="应用" onClick="if(IsCheck('web_id[]')==false){alert('请指定您要操作的站点ID！');return false;}else{return confirm('确认执行此操作吗？');}">
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=friend&status='+this.options[this.selectedIndex].value;}">
			<option value="2" style="color: #f30;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,2);?>
>待审核</option>
			<option value="3" style="color: #080;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,3);?>
>已审核</option>
			</select>
		</div>
		
    	<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th><input type="checkbox" id="ChkAll" onClick="CheckAll(this.form)"></th>
				<th>ID</th>
				<th>所属分类</th>
				<th>网站名称</th>
				<th>链接状态</th>
				<th>提交时间</th>
				<th>检测</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['web'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['web']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['websites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['web']->key => $_smarty_tpl->tpl_vars['web']->value){
$_smarty_tpl->tpl_vars['web']->_loop = true;
?>
			<tr>
				<td><input name="web_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_cate'];?>
</td>
				<td class="ltext" width="350"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_name'];?>
</td>
				<td><font color="#ff0000">未链接 </font></td>
				<td><?php echo $_smarty_tpl->tpl_vars['web']->value['web_ctime'];?>
</td>
				<td><a href="website.php?act=checksite&url=<?php echo $_smarty_tpl->tpl_vars['web']->value['web_url'];?>
">检测友链</a></span></td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['web']->_loop) {
?>
			<tr><td colspan="14">无任何网站！</td></tr>
			<?php } ?>
		</table>
        </form>
        <div class="pagebox"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['action']->value=='down'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">返回列表&raquo;</a></span></h3>
	<div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>网站名称：</th>
				<td><input name="web_name" type="text" class="ipt" id="web_name" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['web_name'];?>
" /></td>
			</tr>
			<tr>
				<th>网站域名：</th>
				<td><input name="web_url" type="text" class="ipt" id="web_url" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['web_url'];?>
" /></td>
			</tr>
			<tr>
				<th>网站截图：</th>
				<td><input name="web_pic" type="text" class="ipt" id="web_pic" size="50" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['web_pic'];?>
" /><input type="button" class="btn" id="img_btn" value="获取图片" onclick="GetScreen()"><span class="tips">注：网页缩略图</span></td>
			</tr>
			<tr><th valign="top">网站快照：</th>
			<td  valign="top">
				<img src="<?php echo empty($_smarty_tpl->tpl_vars['row']->value['web_pic']) ? '../public/images/nopic.gif' : $_smarty_tpl->tpl_vars['row']->value['web_pic'];?>
" name="web_img" id="web_img" width="120" height="100"/>
			</td></tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<input name="web_id" type="hidden" id="web_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['web_id'];?>
">
					<input type="submit" class="btn" value="保 存">&nbsp;
					<input type="reset" class="btn" value="取 消" onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
';">
				</td>
			</tr>
		</table>
		</form>
	</div>
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['action']->value=='wpic'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">返回列表&raquo;</a></span></h3>
	<div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>注意事项：</th>
				<td>下载远程图片（每天不超过150张），下载前请先进行预处理
				将占用一定的服务器资源，请避免在白天流量高峰期时段使用</td>
			<tr class="btnbox">
            	<th>付费站点：</th>
				<td colspan="2">
				<input type="button" class="btn" value="预处理" onClick="window.location.href='webpic.php?act=pre&type=pay';">&nbsp;
				<input type="button" class="btn" value="下载图片" onClick="window.location.href='webpic.php?act=down&type=pay';">&nbsp;
				
				</td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td colspan="2">
				<input type="button" class="btn" value="非付费站点预处理" onClick="window.location.href='webpic.php?act=pre&type=normal';">&nbsp;
				<input type="button" class="btn" value="非付费站点" onClick="window.location.href='webpic.php?act=down&type=normal';">&nbsp;
                <input type="button" class="btn" value="失效图片检测" onClick="window.location.href='webpic.php?act=check';">
				</td>
			</tr>
		</table>
		</form>
	</div>
    <?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>