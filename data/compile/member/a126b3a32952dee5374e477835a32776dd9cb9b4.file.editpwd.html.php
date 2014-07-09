<?php /* Smarty version Smarty-3.1.10, created on 2014-03-16 09:25:39
         compiled from "E:\HostingSpaces\c7hqazdl\dd.lxsn.net\wwwroot\themes\member\editpwd.html" */ ?>
<?php /*%%SmartyHeaderCode:283135324fd931734e6-79854457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a126b3a32952dee5374e477835a32776dd9cb9b4' => 
    array (
      0 => 'E:\\HostingSpaces\\c7hqazdl\\dd.lxsn.net\\wwwroot\\themes\\member\\editpwd.html',
      1 => 1370230604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283135324fd931734e6-79854457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagename' => 0,
    'myself' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5324fd93218d23_17426281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5324fd93218d23_17426281')) {function content_5324fd93218d23_17426281($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <div class="content">
            	<div class="title"><?php echo $_smarty_tpl->tpl_vars['pagename']->value;?>
</div>
                <div class="body">
					<div id="formbox">
						<form name="myfrom" id="myfrom" method="post" action="">
        				<ul>
        					<li><strong>登录帐号：</strong><?php echo $_smarty_tpl->tpl_vars['myself']->value['user_email'];?>
</li>
        					<li><strong>原始密码：</strong><input type="password" name="old_pass" id="old_pass" class="ipt" size="30" maxlength="30" /></li>
            				<li><strong>新 密 码：</strong><input type="password" name="new_pass" id="new_pass" class="ipt" size="30" maxlength="30" /></li>
            				<li><strong>确认密码：</strong><input type="password" name="new_pass1" id="new_pass1" class="ipt" size="30" maxlength="30" /></li>
            				<li><strong>&nbsp;</strong><input type="hidden" name="do" id="do" value="save"><input type="submit" name="submit" class="btn" value="提 交"> <input type="reset" name="reset" class="btn" value="重 填"></li>
        				</ul>
        				</form>
    				</div>
                </div>
			</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>