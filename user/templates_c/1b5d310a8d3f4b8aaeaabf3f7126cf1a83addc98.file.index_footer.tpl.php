<?php /* Smarty version Smarty-3.1.12, created on 2013-05-07 21:10:54
         compiled from "/www/users/itsrcs.com/user/templates/split/index_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1069560761510c92cecfd019-99226473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b5d310a8d3f4b8aaeaabf3f7126cf1a83addc98' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/split/index_footer.tpl',
      1 => 1367932221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1069560761510c92cecfd019-99226473',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c92ced2a4b5_48638198',
  'variables' => 
  array (
    'top_data' => 0,
    'conf' => 0,
    'usr_sugg' => 0,
    'hot_posts_list' => 0,
    'newest_Qa_list' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c92ced2a4b5_48638198')) {function content_510c92ced2a4b5_48638198($_smarty_tpl) {?><!--break_point-->
<div id="main_right">
    <div id="main_right-in">
        <div class="bottom10">
            <div id="usr-head-wapp">
                <div id="usr-head-l">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['top_data']->value['ush'];?>
" id="uc-ush" class="block borderR5 Shadow" alt="<?php echo $_smarty_tpl->tpl_vars['top_data']->value['usn'];?>
的个人头像" width="100px" height="100px"/>
                    <a id="usr-h-btn" href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/alter_head.html"></a>
                </div>
                <div id="usr-head-r">
                    <span class="sn-field Elipsis" id="sn-usn"><?php echo $_smarty_tpl->tpl_vars['top_data']->value['usn'];?>
</span>
                    <span class="sn-field" id="sn-us-foll">关注 <a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/follows.html"><?php echo $_smarty_tpl->tpl_vars['top_data']->value['count']['foll'];?>
</a></span>
                    <span class="sn-field" id="sn-us-fans">粉丝 <a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/fans.html"><?php echo $_smarty_tpl->tpl_vars['top_data']->value['count']['fans'];?>
</a></span>
                    <span class="sn-field" id="sn-us-toca">吐槽 <a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/mytc.html"><?php echo $_smarty_tpl->tpl_vars['top_data']->value['count']['toca'];?>
</a></span>
                </div>
            </div>
            <div class="borderR3 expbar-w">
                <div class="expbar-m"><?php echo $_smarty_tpl->tpl_vars['top_data']->value['count']['expc'];?>
</div>
                <div class="expbar-i borderR3"></div>
            </div>
        </div>

        <a class="next-cp ucBtn borderR3" href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/submit_blog.html">
            <span style="padding-left:40px;display:inline-block;background:url('/user/sources/img/edit.png') left center no-repeat;">发表博文</span>
        </a>

        <a class="next-cp ucBtn borderR3" href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/alter_head.html">
            <span style="padding-left:40px;display:inline-block;background:url('/user/sources/img/wallpapers.png') left center no-repeat;">修改头像</span>
        </a>

        <div class="bottom10">
            <span class="RedBar">
                <span class="RedBar-in">程序员们</span>
            </span>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['usi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['usr_sugg']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['name'] = 'usi';
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['usi']['total']);
?>
                <div class="usg-wapp">
                    <a class="headwapper" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['usr_sugg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usi']['index']]['uid'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['usr_sugg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usi']['index']]['ush'];?>
" height="36px" width="36px"/>
                    </a>
                    <div class="usg-right">
                        <div class="Elipsis usg-right-il">
                            <a href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['usr_sugg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usi']['index']]['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['usr_sugg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usi']['index']]['usn'];?>
</a><br>
                            <span><?php echo $_smarty_tpl->tpl_vars['usr_sugg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usi']['index']]['job'];?>
</span>
                        </div>
                        <div class="usg-right-ir">
                            <a href="javascript:;" class="Gbtn addfoll-btn borderR3" rel="<?php echo $_smarty_tpl->tpl_vars['usr_sugg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['usi']['index']]['uid'];?>
">加关注</a>
                        </div>
                    </div>
                </div>
            <?php endfor; endif; ?>
        </div>

        <div class="bottom10">
            <span class="RedBar">
                <span class="RedBar-in">社区热点</span>
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
                <span class="RedBar-in">最新问答</span>
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
    </div>
</div>
<div class="clear"></div></div>
<!--@Main_body-->
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PATH']->value['stat_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>