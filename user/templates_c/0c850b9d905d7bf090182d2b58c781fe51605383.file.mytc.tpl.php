<?php /* Smarty version Smarty-3.1.12, created on 2013-05-03 11:33:34
         compiled from "/www/users/itsrcs.com/user/templates/split/rm/mytc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43338543510d19308b19f8-72303036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c850b9d905d7bf090182d2b58c781fe51605383' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/split/rm/mytc.tpl',
      1 => 1367551983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43338543510d19308b19f8-72303036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510d19309117a0_13234247',
  'variables' => 
  array (
    'ss_list' => 0,
    'top_data' => 0,
    'conf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510d19309117a0_13234247')) {function content_510d19309117a0_13234247($_smarty_tpl) {?><div id="main_body">
    <span class="RedBar">
        <span class="RedBar-in">我的吐槽</span>
    </span>
    <div style="margin-top:10px;">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['si'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['si']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['name'] = 'si';
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ss_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total']);
?>
            <div style="margin-bottom:10px;padding:5px;">
                <a class="headwapper">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['top_data']->value['ush'];?>
" width="45px" height="45px"/>
                </a>
                <div class="borderR5 Shadow" style="border:1px solid #ccc;background:#FFF;color:#444;margin-left:65px;padding:10px;position:relative;">
                    <l></l><m></m>
                    <div style="font-size:14px;">
                        <a style="color:#946652;" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['top_data']->value['usn'];?>
</a>  <?php echo $_smarty_tpl->tpl_vars['ss_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['content'];?>

                    </div>
                    <div style="border-top:1px dashed #ddd;margin-top:5px;padding-top:5px;"><a href="javascript:;">删除</a> | <?php echo $_smarty_tpl->tpl_vars['ss_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['datetime'];?>
</div>
                </div>
                <div class="clear"></div>
            </div>
        <?php endfor; endif; ?>
    </div>
</div><?php }} ?>