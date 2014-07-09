<?php /* Smarty version Smarty-3.1.10, created on 2014-03-15 22:34:23
         compiled from "E:\HostingSpaces\c7hqazdl\dd.lxsn.net\wwwroot\themes\member\claim.html" */ ?>
<?php /*%%SmartyHeaderCode:32696532464efbb3ec3-81422810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a7945fc84c36d7760a19c5a766db492e228be52' => 
    array (
      0 => 'E:\\HostingSpaces\\c7hqazdl\\dd.lxsn.net\\wwwroot\\themes\\member\\claim.html',
      1 => 1370230602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32696532464efbb3ec3-81422810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'token' => 0,
    'siteurl' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_532464efc7fe35_80644328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532464efc7fe35_80644328')) {function content_532464efc7fe35_80644328($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<div id="claimbox">
            	<?php if ($_smarty_tpl->tpl_vars['action']->value=='one'){?>
            	<dl class="step">
                	<dt>1. 网站认领</dt>
                    <dd>
                    	<form name="myform" method="post" action="">
                        	<input type="text" name="domain" id="domain" size="50" class="ipt" />
                            <input type="hidden" name="do" id="do" value="next" />
                            <input type="submit" class="btn" value="下一步" /> 如：www.xy889.com
                        </form>
                    </dd>
                </dl>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['action']->value=='two'){?>
                <dl class="step">
                	<dt>2. 网站验证</dt>
                    <dd>
                    	<form name="myform" method="post" action="">
						<table width="100%" border="0" cellspacing="1" cellpadding="1">
							<tr>
								<th width="20%"><input type="radio" name="vtype" id="vtype_file" value="file" checked="checked" /><label for="vtype_file">方法一（推荐）</label><br />将 HTML 文件上传到您的服务器<br />如果您可以将新文件上传到自己的网站，则选择此项。</th>
								<td><strong>操作说明：</strong><br />1. 新建空白网页，复制下面的字符串，将其粘贴至空白网页并保存，命名为35dir-site-verification.html<br /><div style="background: #ffc; border: dashed 1px #f30; color: #080; padding: 5px;"><?php echo $_smarty_tpl->tpl_vars['token']->value;?>
</div>2. 将该文件上传到 <?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
<br />3. 通过在浏览器中访问 <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
35dir-site-verification.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
35dir-site-verification.html</a>，确认上传成功。<br />4. 点击下面的“验证”。<br />为保持已进行过验证的状态，即使成功通过了验证也请不要删除该 HTML 文件。</td>
							</tr>
							<tr>
								<th><input type="radio" name="vtype" id="vtype_meta" value="meta" /><label for="vtype_meta">方法二</label><br />向您网站的首页添加元标记<br />如果您可以修改自己网站的 HTML 编码，则可以使用此选项。</th>
								<td><strong>操作说明：</strong>
  <p><strong>1. 复制</strong>下面的元标记，将其粘贴至您网站的首页。它应该位于第一个 &lt;body&gt; 部分之前的 &lt;head&gt;   部分中。</p>
  <div style="background: #ffc; border: dashed 1px #f30; color: #080; padding: 5px;">&lt;meta name=&quot;35dir-site-verification&quot;   content=&quot;<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&quot; /&gt;</div>
  <strong>使用示例</strong><br />
  <div style="background: #ffc; border: dashed 1px #f30; padding: 5px;">&lt;html&gt;
      <div>&lt;head&gt;
          <div><strong>&lt;meta name=&quot;35dir-site-verification&quot;   content=&quot;<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&quot; /&gt;</strong><div>&lt;title&gt; 我的标题 &lt;/title&gt;</div></div>
        &lt;/head&gt; <br />
        &lt;body&gt;
          <div>网页内容</div>
        &lt;/body&gt;</div>
    &lt;/html&gt;</div>
  <p id="follows-meta-example"><strong>2. 点击</strong>下面的“验证”。</p>
  <p>为保持已进行过验证的状态，即使成功通过了验证也请不要删除该元标记。</p>
								</td>
							</tr>
							<tr>
								<td colspan="3" align="center">
                                <input type="hidden" name="domain" id="domain" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" />
                                <input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
                                <input type="hidden" name="do" id="do" value="verify" />
                                <input type="submit" class="btn" value="立即验证" />
                                </td>
							</tr>
						</table>
                        </form>
					</dd>
				</dl>
                <?php }?>
			</div>
            
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>