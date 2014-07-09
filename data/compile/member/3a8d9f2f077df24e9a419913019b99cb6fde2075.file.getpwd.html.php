<?php /* Smarty version Smarty-3.1.10, created on 2014-01-03 17:51:13
         compiled from "E:\HostingSpaces\c7hqazdl\lxsn.net\wwwroot\themes\member\getpwd.html" */ ?>
<?php /*%%SmartyHeaderCode:43152c6881156fe29-60249826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a8d9f2f077df24e9a419913019b99cb6fde2075' => 
    array (
      0 => 'E:\\HostingSpaces\\c7hqazdl\\lxsn.net\\wwwroot\\themes\\member\\getpwd.html',
      1 => 1373376118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43152c6881156fe29-60249826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
    'site_root' => 0,
    'cfg' => 0,
    'site_url' => 0,
    'site_copyright' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_52c6881162a989_00299593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6881162a989_00299593')) {function content_52c6881162a989_00299593($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['site_keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
">
<script type="text/javascript">var sitepath = '<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
'; var rewrite = '<?php echo $_smarty_tpl->tpl_vars['cfg']->value['is_enabled_rewrite'];?>
';</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/common.js"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
themes/member/skin/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
themes/member/skin/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
    <div id="header">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="logo"></a>
        <div id="toplink"><a href="?mod=login">登录账户</a> | <a href="?mod=register">我要注册</a></div>
    </div>
    <div id="combox" class="clearfix">
        <div id="regform">
        	<h2>找回密码</h2>
        	<form name="myform" method="post" action="">
        	<ul>
            	<li><label><font color="#FF0000">*</font> 电子邮箱：</label><input type="text" name="email" size="50" maxlength="50" class="ipt" /><p>只有通过邮箱验证的账号才能找回密码</p></li>
                <li><label><font color="#FF0000">*</font> 验 证 码：</label><input type="text" name="code" size="10" maxlength="6" class="ipt" onFocus="refreshimg('mycode');" /><span id="mycode"></span><p>点击输入框即可显示验证码</p></li>
                <li><label>&nbsp;</label><input type="submit" value="发送密码重置邮件" class="btn" /><input type="hidden" name="action" value="send" /></li>
            </ul>
            </form>
            <div class="textinfo">
            	<strong>未收到密码找回邮件怎么办？</strong> <br />没有收到密码找回邮件，有可能因为延迟导致的，请稍候查收，也可以再次发送。 
			</div>
		</div>
    </div>
    <div id="footer" class="clearfix">
    	<?php echo $_smarty_tpl->tpl_vars['site_copyright']->value;?>

    </div>
</div>
</body>
</html><?php }} ?>