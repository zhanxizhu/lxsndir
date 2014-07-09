<?php /* Smarty version Smarty-3.1.10, created on 2014-07-08 17:30:42
         compiled from "D:\phpfind\WWW\themes\default\artinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:2069653bbba42958dc9-41283490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1de5927cf0685946a729a5e0401c534af0219ed2' => 
    array (
      0 => 'D:\\phpfind\\WWW\\themes\\default\\artinfo.html',
      1 => 1397876844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2069653bbba42958dc9-41283490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
    'site_root' => 0,
    'art' => 0,
    'site_url' => 0,
    'site_name' => 0,
    'prev' => 0,
    'next' => 0,
    'related_article' => 0,
    'rel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_53bbba43467630_80443021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bbba43467630_80443021')) {function content_53bbba43467630_80443021($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['site_keywords']->value;?>
" />
<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
themes/default/skin/style.css" rel="stylesheet" type="text/css" />
<?php echo $_smarty_tpl->getSubTemplate ("script.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div id="mainbox" class="clearfix">
    	<div id="mainbox-left">
        	<div id="artinfo">
            	<h1 class="atitle"><?php echo $_smarty_tpl->tpl_vars['art']->value['art_title'];?>
</h1>
				<div class="aattr">来源：<a href="<?php echo $_smarty_tpl->tpl_vars['art']->value['copy_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['art']->value['copy_from'];?>
</a>　浏览：<?php echo $_smarty_tpl->tpl_vars['art']->value['art_views'];?>
次　时间：<?php echo $_smarty_tpl->tpl_vars['art']->value['art_ctime'];?>
</div>
				<div class="content"><?php echo $_smarty_tpl->tpl_vars['art']->value['art_content'];?>

<br/>
<p>
转载请注明出处：<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</a><br/>
本文永久地址：<script>document.write(location.href)</script>
</p>
</div>
                <ul class="prevnext">
                	<li>上一篇： <?php if (!empty($_smarty_tpl->tpl_vars['prev']->value)){?><a href="<?php echo $_smarty_tpl->tpl_vars['prev']->value['art_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['prev']->value['art_title'];?>
</a><?php }else{ ?>没有了<?php }?></li>
                    <li>下一篇： <?php if (!empty($_smarty_tpl->tpl_vars['next']->value)){?><a href="<?php echo $_smarty_tpl->tpl_vars['next']->value['art_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['next']->value['art_title'];?>
</a><?php }else{ ?>没有了<?php }?></li>
                </ul>
            </div>
            <div class="blank10"></div>
			<div id="relsite" class="clearfix">
				<div class="stitle"><h2>同类资讯【你喜欢】</h2></div>
				<ul class="srellist">
              		<?php  $_smarty_tpl->tpl_vars['rel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rel']->key => $_smarty_tpl->tpl_vars['rel']->value){
$_smarty_tpl->tpl_vars['rel']->_loop = true;
?>
               		<li><div class="bh30"><b><a href="<?php echo $_smarty_tpl->tpl_vars['rel']->value['art_link'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['rel']->value['art_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['rel']->value['art_title'];?>
</a></b></div>
					<div class="fileintro"><?php echo $_smarty_tpl->tpl_vars['rel']->value['art_intro'];?>
</div>
					<span>发布时间：<?php echo $_smarty_tpl->tpl_vars['rel']->value['art_ctime'];?>
</span></li>
               		<?php } ?>
              	</ul>
			</div>
        </div>
        <div id="mainbox-right">
        	<?php echo $_smarty_tpl->getSubTemplate ("right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>