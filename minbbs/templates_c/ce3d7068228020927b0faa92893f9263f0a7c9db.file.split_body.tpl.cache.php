<?php /* Smarty version Smarty-3.1.12, created on 2014-01-15 17:19:48
         compiled from "E:\_web\27tree\minbbs\templates\index\split_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2876352d652b4aa1306-27765267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce3d7068228020927b0faa92893f9263f0a7c9db' => 
    array (
      0 => 'E:\\_web\\27tree\\minbbs\\templates\\index\\split_body.tpl',
      1 => 1369445250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2876352d652b4aa1306-27765267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'EDITOR' => 0,
    'REMARK' => 0,
    'Pages' => 0,
    'P_DATA' => 0,
    'guss_path' => 0,
    'HOT_DATA' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d652b4b45423_64377760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d652b4b45423_64377760')) {function content_52d652b4b45423_64377760($_smarty_tpl) {?>

<div class="ps-left" style="width:750px;float:left;z-index:0;position:relative;">

    <!--编辑器-->
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['EDITOR']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <!--编辑器-->
    <!-- 帖子列表 -->
    <div class="ps-items Shadow" id="ps-post-list">
        <div class="or-alert">
            <span><?php echo $_smarty_tpl->tpl_vars['REMARK']->value;?>
</span>
        </div>
        <!--页码 start-->
        <div class="sp-page-wapp" id="pg-top"><?php echo $_smarty_tpl->tpl_vars['Pages']->value;?>
</div>
        <!--页码 end-->
        <div id="ps-list">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['name'] = 'index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['P_DATA']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total']);
?><div class="ps-list-items"><a class="headwapper" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['P_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['uid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['P_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['ush'];?>
" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['P_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['P_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['title'];?>
</a></span><span class="Gray">由 <a href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['P_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['P_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['usn'];?>
</a> 发布于 <?php echo $_smarty_tpl->tpl_vars['P_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['datetime'];?>
</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;"><?php echo $_smarty_tpl->tpl_vars['P_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['readi'];?>
</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;"><?php echo $_smarty_tpl->tpl_vars['P_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['commi'];?>
</b>回复</span></div></div><div class="clear"></div></div><?php endfor; endif; ?>
            <div class="clear"></div>
        </div>
        <!--页码 start-->
        <div class="sp-page-wapp"><?php echo $_smarty_tpl->tpl_vars['Pages']->value;?>
</div>
        <!--页码 end-->
    </div>
</div>
<div class="ps-right" style="margin-left:760px;">

    

    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['guss_path']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    <div class="ps-items borderR5">
        <span class="RedBar">
            <span class="RedBar-in">热门主题</span>
        </span>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['name'] = 'index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['HOT_DATA']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total']);
?><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['HOT_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['uid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['HOT_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['ush'];?>
" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="<?php echo $_smarty_tpl->tpl_vars['HOT_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['HOT_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['title'];?>
</a></div><span class="Gray"><?php echo $_smarty_tpl->tpl_vars['HOT_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['commi'];?>
 / <?php echo $_smarty_tpl->tpl_vars['HOT_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['readi'];?>
</span></div></div><?php endfor; endif; ?>
    </div>
</div>
<div class="clear"></div>
</div>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['stat_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</body>
</html><?php }} ?>