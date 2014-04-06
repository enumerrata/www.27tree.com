<?php /* Smarty version Smarty-3.1.12, created on 2014-01-15 18:20:09
         compiled from "E:\_web\27tree\user\templates\dylist\DYTYPE_TC.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2742252d660d9970e95-76419216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'befea50aa24f22a43df70b3644bab7704eb58c42' => 
    array (
      0 => 'E:\\_web\\27tree\\user\\templates\\dylist\\DYTYPE_TC.tpl',
      1 => 1369239684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2742252d660d9970e95-76419216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d660d99c2f27_84071998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d660d99c2f27_84071998')) {function content_52d660d99c2f27_84071998($_smarty_tpl) {?><span class="dy-items" data-dt="tc">
    <a class="headwapper Shadow" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['uid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['musn'];?>
</b>
        <div><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>
</div>
        <div><span class="Dy-dt"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span></div>
        <?php if ($_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['comm']){?>
            <div class="tc-commlist">
                <div class="arr-top"></div>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['comm']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['name'] = 'cmmi';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cmmi']['total']);
?>
                    <div class="tc-commlist-items">
                        <a class="headwapper">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['cmmi']['index']]['ush'];?>
" height="32px" width="32px"/>
                        </a>
                        <div style="margin-left:40px;">
                            <b class="dy_usn inline-block"><a href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['cmmi']['index']]['uid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['cmmi']['index']]['usn'];?>
</a></b> : <?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['cmmi']['index']]['content'];?>

                            <div class="Dy-dt"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['cmmi']['index']]['datetime'];?>
</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php endfor; endif; ?>
            </div>
        <?php }?>
        <div class="tccmm-wapp" data-tcmom="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['artid'];?>
">
            <span>我也说一句</span>
        </div>
    </div>
    <div class="clear"></div>
</span><?php }} ?>