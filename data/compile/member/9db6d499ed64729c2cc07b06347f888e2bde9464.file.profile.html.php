<?php /* Smarty version Smarty-3.1.10, created on 2014-01-15 10:17:37
         compiled from "E:\HostingSpaces\c7hqazdl\lxsn.net\wwwroot\themes\member\profile.html" */ ?>
<?php /*%%SmartyHeaderCode:1090852d5efc1900da6-71042604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9db6d499ed64729c2cc07b06347f888e2bde9464' => 
    array (
      0 => 'E:\\HostingSpaces\\c7hqazdl\\lxsn.net\\wwwroot\\themes\\member\\profile.html',
      1 => 1373376118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090852d5efc1900da6-71042604',
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
  'unifunc' => 'content_52d5efc1a48e36_39787116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d5efc1a48e36_39787116')) {function content_52d5efc1a48e36_39787116($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <div class="content">
            	<div class="title"><?php echo $_smarty_tpl->tpl_vars['pagename']->value;?>
</div>
                <div class="body">
					<div id="formbox">
						<form name="myfrom" id="myfrom" method="post" action="">
        				<ul>
        					<li><strong>登录帐号：</strong><?php echo $_smarty_tpl->tpl_vars['myself']->value['user_email'];?>
</li>
            				<li><strong>昵 称：</strong><input type="text" name="nick_name" id="nick_name" class="ipt" size="30" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['myself']->value['nick_name'];?>
" /></li>
            				<li><strong>QQ号码：</strong><input type="text" name="user_qq" id="user_qq" class="ipt" size="30" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['myself']->value['user_qq'];?>
" /></li>
            				<li><strong>注册时间：</strong><?php echo $_smarty_tpl->tpl_vars['myself']->value['join_time'];?>
</li>
            				<li><strong>最后登录时间：</strong><?php echo $_smarty_tpl->tpl_vars['myself']->value['login_time'];?>
</li>
            				<li><strong>最后登录IP：</strong><?php echo $_smarty_tpl->tpl_vars['myself']->value['login_ip'];?>
</li>
            				<li><strong>登录次数：</strong><?php echo $_smarty_tpl->tpl_vars['myself']->value['login_count'];?>
 次</li>
            				<li><strong>&nbsp;</strong><input type="hidden" name="do" id="do" value="save"><input type="submit" name="submit" class="btn" value="提 交"> <input type="reset" name="reset" class="btn" value="重 填"></li>
        				</ul>
        				</form>
    				</div>
                </div>
			</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>