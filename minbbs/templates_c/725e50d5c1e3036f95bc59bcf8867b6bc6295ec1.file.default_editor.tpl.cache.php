<?php /* Smarty version Smarty-3.1.12, created on 2013-05-25 09:38:27
         compiled from "/www/users/itsrcs.com/minbbs/templates/index/editor/default_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194868539351a01613859090-23786491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '725e50d5c1e3036f95bc59bcf8867b6bc6295ec1' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/index/editor/default_editor.tpl',
      1 => 1363576552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194868539351a01613859090-23786491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'INDEX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a016138c8057_57361932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a016138c8057_57361932')) {function content_51a016138c8057_57361932($_smarty_tpl) {?><div class="ps-items" id="ps-sm-wapper">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
" id="sid"/>
    <span class="sdText" style="margin-bottom:10px;">
        <input type="text" value="" id="post-sm-title" placeholder="请输入标题"/>
    </span>
    <textarea id="ps-editor" style="width:99.8%;display:none;margin-bottom:10px;"></textarea>
    <a class="next-cp" style="margin-top:10px;" href="javascript:;" id="ps-submit-btn">马上发表</a>
</div><?php }} ?>