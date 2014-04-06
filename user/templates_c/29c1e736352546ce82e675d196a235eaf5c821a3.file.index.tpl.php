<?php /* Smarty version Smarty-3.1.12, created on 2013-05-03 15:42:09
         compiled from "../templates/vistc/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:417298973515e64e9169ac0-78896334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29c1e736352546ce82e675d196a235eaf5c821a3' => 
    array (
      0 => '../templates/vistc/index.tpl',
      1 => 1367551984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '417298973515e64e9169ac0-78896334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515e64e91dde71_04356287',
  'variables' => 
  array (
    'tc_data' => 0,
    'PATH' => 0,
    'commi' => 0,
    'tcmom' => 0,
    'my_data' => 0,
    'comm_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515e64e91dde71_04356287')) {function content_515e64e91dde71_04356287($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['tc_data']->value['usn'];?>
 的吐槽</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/user/vistc/main.css?v=v" />
        <script src="/jss/dojo/dojo.js"></script>
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/user/vistc/main.js"></script>
    </head>
    <body>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PATH']->value['nav_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="sdCenter Shadow borderR5" style="width:708px;border:1px solid #ccc;background:#fdfdfd;padding:30px;">
            <div style="float:left;width:400px;border-left:1px solid #ccc;background:#fdfdfd;margin-left:40px;margin-top:40px;">
                <input type="hidden" id="commi" value="<?php echo $_smarty_tpl->tpl_vars['commi']->value;?>
" />
                <input type="hidden" id="tcmom" value="<?php echo $_smarty_tpl->tpl_vars['tcmom']->value;?>
" />
                <div class="tc-wapp">
                    <div class="Shadow tc-head">
                        <a href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['tc_data']->value['uid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tc_data']->value['usn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tc_data']->value['ush'];?>
" width=80px height=80px alt="<?php echo $_smarty_tpl->tpl_vars['tc_data']->value['usn'];?>
"/></a>
                    </div>
                    <div class="tc-content">
                        <?php echo $_smarty_tpl->tpl_vars['tc_data']->value['content'];?>

                        <div class="tc-dt"><a href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['tc_data']->value['uid'];?>
" ><?php echo $_smarty_tpl->tpl_vars['tc_data']->value['usn'];?>
</a> >> <?php echo $_smarty_tpl->tpl_vars['tc_data']->value['datetime'];?>
</div>
                    </div>
                </div>

                <div class="tc-swapp" id="comm_editor">
                    <div class="Shadow tc-shead">
                        <a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['my_data']->value['ush'];?>
" width=50px height=50px/></a>
                    </div>
                    <div class="tc-scontent" style="margin-left:10px;">
                        <div style="margin-bottom:5px;">
                            <div id="tc-editor" data-lock="1" contenteditable="true" style="min-height:25px;border:1px solid transparent;outline:none;text-indent:0;color:#888;">说几句吧...</div>
                        </div>
                        <a class="next-cp" id="tc-cm-btn" href="javascript:;">发表评论</a>
                    </div>
                </div>

                <!-- commlist -->
                <div id="comm_list_wapper"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ci'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comm_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['name'] = 'ci';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['total']);
?><div class="tc-swapp"><div class="Shadow tc-shead"><a href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['comm_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['uid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['comm_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['usn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['comm_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['ush'];?>
" width=50px height=50px/></a></div><div class="tc-scontent"><?php echo $_smarty_tpl->tpl_vars['comm_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['content'];?>
<div class="tc-dt"><a href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['comm_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['uid'];?>
" ><?php echo $_smarty_tpl->tpl_vars['comm_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['usn'];?>
</a> >> <?php echo $_smarty_tpl->tpl_vars['comm_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['datetime'];?>
</div></div></div><?php endfor; endif; ?></div>
                <!-- @commlist -->

            </div>
            <div class="clear"></div>
        </div>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
    </body>
</html><?php }} ?>