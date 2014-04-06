<?php /* Smarty version Smarty-3.1.12, created on 2013-05-05 21:35:32
         compiled from "/www/users/itsrcs.com/user/templates/split/am/submit_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:871491519511b0828332485-66592411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0da3e4f9eb4af1e0857a5003f7a7543ca15d139' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/split/am/submit_blog.tpl',
      1 => 1367760920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '871491519511b0828332485-66592411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511b082839d157_08704358',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511b082839d157_08704358')) {function content_511b082839d157_08704358($_smarty_tpl) {?><div id="main_body">
    <div id="rm-smblog-wapp">
        <span class="sdText">
            <input type="text" value="" id="rm-title-sm" placeholder="输入文章标题..."/>
        </span>
        <div style="margin-top:10px;">
            <div id="sd-select-i" style="float:left"></div>
            <div style="display:inline-block;margin-left:5px;">
                <div id="toggle-i"></div>
            </div>
        </div>
        <div style="margin-top:5px;" class="bottom10">
            <textarea autocomplete="none" id="text_sub" style="width:99.8%">编辑器加载中...</textarea>
        </div>
        <a class="next-cp borderR5" href="javascript:;" id="rm-blog-sm-btn" style="color:green;">马上发表</a>
    </div>
    <div class="borderR5 Shadow" id="rm-smblog-wapp-su">
        <div id="r-sws-tip"></div>
        <h1 id="r-sws-title"></h1>
        <p id="r-sws-ctx"></p>
        <a class="s-pages-i borderR5" id="r-sws-link">查看完整文章</a><a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/index.html" class="s-pages-i borderR5">返回个人主页</a>
    </div>
</div><?php }} ?>