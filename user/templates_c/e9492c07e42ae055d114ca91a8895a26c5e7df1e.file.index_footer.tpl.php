<?php /* Smarty version Smarty-3.1.12, created on 2013-02-12 09:54:37
         compiled from ".\templates\split\index_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30710511630a4971f09-45944701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9492c07e42ae055d114ca91a8895a26c5e7df1e' => 
    array (
      0 => '.\\templates\\split\\index_footer.tpl',
      1 => 1360634075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30710511630a4971f09-45944701',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511630a49d2cc7_46196431',
  'variables' => 
  array (
    'conf' => 0,
    'hot_posts_list' => 0,
    'newest_Qa_list' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511630a49d2cc7_46196431')) {function content_511630a49d2cc7_46196431($_smarty_tpl) {?><!--break_point--></div>
<!--@Main_body-->
<div style="margin-left:839px;padding-top:25px;">
    <div style="background:url('/img/br_r.png') repeat-y #fefefe;border:1px solid #ddd;border-left:none;padding:10px;">

        <!--AD 198 x 120 
        <div style="border:1px solid #ccc;" class="bottom10">
            <img src="/img/ad-178-120.png" width="198px" height="120px"/>
        </div>
        <!--@AD 198 x 120 -->

        <div class="uc-btn-wapper bottom10 Shadow">
            <a class="uc-btn" href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/submit_blog.html">
                <span style="padding:7px 0px;padding-left:40px;display:inline-block;background:url('/user/sources/img/pencil.png') left center no-repeat;">发表博文</span>
            </a>
        </div>

        <div class="uc-btn-wapper bottom10 Shadow">
            <a class="uc-btn" href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/index.html">
                <span style="padding:7px 0px;padding-left:40px;display:inline-block;background:url('/user/sources/img/settings.png') left center no-repeat;">管理面板</span>
            </a>
        </div>

        <div class="bottom10">
            <span class="RedBar">
                <span class="RedBar-in" style="padding-left:20px;background:url('/user/sources/img/Magic Wand.png') left 3px no-repeat;">社区热点</span>
            </span>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pi']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hot_posts_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['name'] = 'pi';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pi']['total']);
?>
                <a class="sn-hot-items Elipsis" href="<?php echo $_smarty_tpl->tpl_vars['hot_posts_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pi']['index']]['href'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['hot_posts_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pi']['index']]['title'];?>
</a>
            <?php endfor; endif; ?>
        </div>

        <div class="bottom10">
            <span class="RedBar">
                <span class="RedBar-in" style="padding-left:20px;background:url('/user/sources/img/help.png') left 3px no-repeat;">最新问答</span>
            </span>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['qi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['qi']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newest_Qa_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['name'] = 'qi';
$_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['qi']['total']);
?>
                <a class="sn-hot-items Elipsis" href="<?php echo $_smarty_tpl->tpl_vars['newest_Qa_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['qi']['index']]['href'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['newest_Qa_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['qi']['index']]['title'];?>
</a>
            <?php endfor; endif; ?>
        </div>

        <div class="bottom10">
            <span class="RedBar">
                <span class="RedBar-in" style="padding-left:20px;background:url('/user/sources/img/Yellow Lego.png') left 3px no-repeat;">社区应用</span>
            </span>
            <a href="/user/ucApp/hold_18/" style="padding:2px;padding-left:37px;height:32px;line-height:32px;font-size:14px;background:url('/user/sources/img/design-bump.png') left center no-repeat;display:block;">
                是男人就坚持18秒
            </a>
        </div>
    </div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PATH']->value['stat_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>