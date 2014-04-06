<?php /* Smarty version Smarty-3.1.12, created on 2013-02-09 21:40:39
         compiled from "D:\inetpub\www\user\templates\split\am\submit_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14019511651d7e245c6-40114203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672199b3b42c99f6f1ca0f31ec5e5c5030654910' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\split\\am\\submit_blog.tpl',
      1 => 1360148132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14019511651d7e245c6-40114203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog_type' => 0,
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511651d7f20546_41119540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511651d7f20546_41119540')) {function content_511651d7f20546_41119540($_smarty_tpl) {?><div id="main_body">
    <span class="RedBar">
        <span class="RedBar-in">写博客</span>
    </span>
    <div id="rm-smblog-wapp">
        <span class="sdText">
            <input type="text" value="" id="rm-title-sm" placeholder="输入文章标题..."/>
        </span>
        <div style="margin-top:5px;">选择分类：
            <select style="font-size:14px;" id="rm-type-sm">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['bi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['blog_type']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['name'] = 'bi';
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['total']);
?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']!=$_smarty_tpl->getVariable('smarty')->value['section']['bi']['total']-1){?>
                        <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['bi']['index'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog_type']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']];?>
</option>
                    <?php }?>
                <?php endfor; endif; ?>
            </select>
        </div>
        <div style="margin-top:5px;">
            <!-- loadKindEditor('text_sub',/height:'400px'/); -->
            <textarea autocomplete="none" id="text_sub" style="width:99.8%">编辑器加载中...</textarea>
        </div>
        <div class="uc-btn-wapper Shadow borderR5" style="margin-top:10px;">
            <a class="uc-btn borderR5" href="javascript:;" id="rm-blog-sm-btn">马上发表</a>
        </div>
    </div>
    <div class="borderR5 Shadow" id="rm-smblog-wapp-su">
        <div id="r-sws-tip"></div>
        <h1 id="r-sws-title"></h1>
        <p id="r-sws-ctx"></p>
        <a class="s-pages-i borderR5" id="r-sws-link">查看完整文章</a><a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/index.html" class="s-pages-i borderR5">返回个人主页</a>
    </div>
</div><?php }} ?>