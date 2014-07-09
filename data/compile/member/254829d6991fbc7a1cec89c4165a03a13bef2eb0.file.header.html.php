<?php /* Smarty version Smarty-3.1.10, created on 2013-08-12 10:45:05
         compiled from "C:\HostingSpaces\c7hqazdl\lxsn.net\wwwroot\themes\member\header.html" */ ?>
<?php /*%%SmartyHeaderCode:488352084c31c77681-11618633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '254829d6991fbc7a1cec89c4165a03a13bef2eb0' => 
    array (
      0 => 'C:\\HostingSpaces\\c7hqazdl\\lxsn.net\\wwwroot\\themes\\member\\header.html',
      1 => 1373376624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '488352084c31c77681-11618633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'site_root' => 0,
    'cfg' => 0,
    'site_url' => 0,
    'site_path' => 0,
    'site_rss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_52084c31da8186_60976296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52084c31da8186_60976296')) {function content_52084c31da8186_60976296($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">var sitepath = '<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
'; var rewrite = '<?php echo $_smarty_tpl->tpl_vars['cfg']->value['is_enabled_rewrite'];?>
';</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/common.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/editor/kindeditor-min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/editor/lang/zh_CN.js"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
themes/member/skin/member.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
    	<div id="topbox">
    		<a class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/images/logo.png"  height="83" width="290" alt="<?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
"/></a>
            <div id="sobox">
        	<form name="sofrm" class="sofrm" method="get" action="" onSubmit="return rewrite_search()">
            	<input name="mod" type="hidden" id="mod" value="search" />
                <input name="type" type="hidden" id="type" value="name" />
                <div id="selopt">
                	<div id="cursel">网站名称</div>
                    <ul id="options">
                    	<li><a href="javascript: void(0);" name="name">网站名称</a></li>
                        <li><a href="javascript: void(0);" name="url">网站地址</a></li>
                        <li><a href="javascript: void(0);" name="tags">TAG标签</a></li>
                        <li><a href="javascript: void(0);" name="intro">网站描述</a></li>
                    </ul>
                </div>
				<input name="query" type="text" class="sipt" id="query" onFocus="this.value='';" /><input type="submit" class="sbtn" value="搜 索" />
			</form>
			</div>
        </div>
        <div id="navbox">
			<ul class="navbar">
        		<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=index">网站首页</a></li><li class="navline"></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=webdir">网站目录</a></li><li class="navline"></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=article">站长资讯</a></li><li class="navline"></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=weblink">链接交换</a></li><li class="navline"></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=category">分类浏览</a></li><li class="navline"></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=update">最新收录</a></li><li class="navline"></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=archives">数据归档</a></li><li class="navline"></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=top">TOP排行榜</a></li><li class="navline"></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=feedback">意见反馈</a></li><li class="navline"></li>
        	</ul>
        </div>
    </div>
    <div class="sitepath"><?php echo $_smarty_tpl->tpl_vars['site_path']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['site_rss']->value;?>
</div>
    <div id="mainbox" class="clearfix">
    	<div id="mainbox-left">
        	<ul class="sidebar">
            	<h3>管理中心</h3>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=home" id="icon1">我的首页</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=website&act=add" id="icon1">提交网站</a></li>
       			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=website" id="icon2">网站管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=claim" id="icon3">网站认领</a></li>
       			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=article&act=add" id="icon4">在线投稿</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=article" id="icon6">我的投稿</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=weblink&act=add" id="icon5">发布链接</a></li>
       			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=weblink" id="icon5">链接管理</a></li>
       			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=favorite" id="icon7">我的收藏夹</a></li>
                <h3>系统管理</h3>
       			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=profile" id="icon8">个人资料</a></li>
       			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=editpwd" id="icon9">修改密码</a></li>
       			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=logout" id="icon10">安全退出</a></li>
            </ul>
        </div>
        <div id="mainbox-right"><?php }} ?>