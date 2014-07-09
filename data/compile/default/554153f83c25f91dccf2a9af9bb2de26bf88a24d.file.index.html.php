<?php /* Smarty version Smarty-3.1.10, created on 2014-07-08 17:30:36
         compiled from "D:\phpfind\WWW\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1157553ba5d13626b92-41303033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '554153f83c25f91dccf2a9af9bb2de26bf88a24d' => 
    array (
      0 => 'D:\\phpfind\\WWW\\themes\\default\\index.html',
      1 => 1404717387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1157553ba5d13626b92-41303033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_53ba5d15506172_44216085',
  'variables' => 
  array (
    'site_title' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
    'site_root' => 0,
    'cfg' => 0,
    'best' => 0,
    'quick' => 0,
    'new' => 0,
    'art' => 0,
    'hot' => 0,
    'instat' => 0,
    'outstat' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ba5d15506172_44216085')) {function content_53ba5d15506172_44216085($_smarty_tpl) {?><!DOCTYPE HTML>
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
<script type="text/javascript">var sitepath = '<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
'; var rewrite = '<?php echo $_smarty_tpl->tpl_vars['cfg']->value['link_struct'];?>
';</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/common.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="blank10"></div>
    <div id="homebox">
    	<div class="homebest clearfix">
        	<ul class="bestlist">
            	<?php  $_smarty_tpl->tpl_vars['best'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['best']->_loop = false;
 $_from = get_websites(0,7,false,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['best']->key => $_smarty_tpl->tpl_vars['best']->value){
$_smarty_tpl->tpl_vars['best']->_loop = true;
?>
            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_pic'];?>
" width="110" height="90" alt="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
" /><strong><?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
</strong></a></li>
				<?php } ?>
        	</ul>
    	</div>
        <div class="blank10"></div>
		<div id="cols1">
        	<div  class="topsite" style="margin-right: 10px;">
				<div class="stitle"><h2>快速审核</h2></div>
                <ul class="toplist">
					<?php  $_smarty_tpl->tpl_vars['quick'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quick']->_loop = false;
 $_from = get_websites(0,10,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['quick_website']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['quick']->key => $_smarty_tpl->tpl_vars['quick']->value){
$_smarty_tpl->tpl_vars['quick']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['quick_website']['iteration']++;
?>
					<li><span><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['quick_website']['iteration'];?>
.</span><a class="length120" href="<?php echo $_smarty_tpl->tpl_vars['quick']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['quick']->value['web_name'];?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['quick']->value['web_name'];?>
</a>- <em><a href="<?php echo $_smarty_tpl->tpl_vars['quick']->value['web_link'];?>
" target="_blank" onclick="clickout(<?php echo $_smarty_tpl->tpl_vars['quick']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['quick']->value['web_url'];?>
</a></em></li>
                   	<?php } ?>
               	</ul>
            </div>
			<div class="topsite" >
				<div class="stitle"><h2>最新收录</h2></div>
                <ul class="toplist">
					<?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = get_websites(0,10); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['new_website']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value){
$_smarty_tpl->tpl_vars['new']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['new_website']['iteration']++;
?>
					<li><span><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['new_website']['iteration'];?>
.</span><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['new']->value['web_name'];?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['new']->value['web_name'];?>
</a>-
					<em><a><?php echo $_smarty_tpl->tpl_vars['quick']->value['web_url'];?>
</a></em></li>
                   	<?php } ?>
               	</ul>
            </div>
			<div class="rightbox">
				<div class="stitle"><h2>站长资讯</h2></div>
                <ul class="toplist">
					<?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = get_articles(0,10,false); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value){
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
                	<li><span>></span><a href="<?php echo $_smarty_tpl->tpl_vars['art']->value['art_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['art']->value['art_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['art']->value['art_title'];?>
</a></li>
                    <?php } ?>
                </ul>
            </div>
			<div class="clearfix"></div>
        </div>
		<div class="blank10"></div>
		<div class="homebest clearfix">
        	<ul class="bestlist">
            	<?php  $_smarty_tpl->tpl_vars['hot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hot']->_loop = false;
 $_from = get_websites(0,7,false,false,'views'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hot']->key => $_smarty_tpl->tpl_vars['hot']->value){
$_smarty_tpl->tpl_vars['hot']->_loop = true;
?>
            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['hot']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['hot']->value['web_name'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['hot']->value['web_pic'];?>
" width="110" height="90" alt="<?php echo $_smarty_tpl->tpl_vars['hot']->value['web_name'];?>
" /><strong><?php echo $_smarty_tpl->tpl_vars['hot']->value['web_name'];?>
</strong></a></li>
				<?php } ?>
        	</ul>
        </div>
        <div class="blank10"></div>
		
    </div>
	<div class="links">
		<h3>最新入站</h3>
		<div class="links_tx01">
			<ul class="s_clear">
          	<?php  $_smarty_tpl->tpl_vars['instat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['instat']->_loop = false;
 $_from = get_websites(0,10,false,false,'instat'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['instat']->key => $_smarty_tpl->tpl_vars['instat']->value){
$_smarty_tpl->tpl_vars['instat']->_loop = true;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['instat']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['instat']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['instat']->value['web_name'];?>
</a></li>
            <?php } ?>
			</ul>
		</div>
	</div>
	<div class="links">
		<h3>最新点出</h3>
		<div class="links_tx01">
			<ul class="s_clear">
          	<?php  $_smarty_tpl->tpl_vars['outstat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['outstat']->_loop = false;
 $_from = get_websites(0,10,false,false,'outstat'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['outstat']->key => $_smarty_tpl->tpl_vars['outstat']->value){
$_smarty_tpl->tpl_vars['outstat']->_loop = true;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['outstat']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['outstat']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['outstat']->value['web_name'];?>
</a></li>
            <?php } ?>
			</ul>
		</div>
	</div>
	<div class="links">
		<h3>友情链接</h3>
		<div class="links_tx01">
			<ul class="s_clear">
			<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = get_links(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['link_url'];?>
" target="_blank" title=""><?php echo $_smarty_tpl->tpl_vars['link']->value['link_name'];?>
</a></li>
			<?php } ?>
			</ul>
		</div>
	</div>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>