<?php /* Smarty version Smarty-3.1.12, created on 2013-05-03 18:37:47
         compiled from "/www/users/itsrcs.com/user/templates/dy_s_i/DYTYPE_COMMBOOK.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2489088835183307b8104f1-82158598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b80435a8f58090adc0ed6ea3f86ac0da591f69b' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dy_s_i/DYTYPE_COMMBOOK.tpl',
      1 => 1367577446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2489088835183307b8104f1-82158598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5183307b845be8_33294543',
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5183307b845be8_33294543')) {function content_5183307b845be8_33294543($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="<?php if ($_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['fuid']){?>/user/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['fuid'];?>
<?php }else{ ?>javascript:;<?php }?>">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['usn'];?>
</b>
        <b class="dy-ac">评论了您分享的书 : </b><a href='<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_url'];?>
'>《<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_title'];?>
》</a>
        <br></span><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>

        <span class="dy-ac block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span>
    </div>
    <div class="clear"></div>
</span><?php }} ?>