<?php /* Smarty version Smarty-3.1.12, created on 2013-05-03 11:35:23
         compiled from "/www/users/itsrcs.com/user/templates/split/rm/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2070277009510c92cecf4319-65550690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b17d2516b2d7cf9a0af2e03b27d930e005f09352' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/split/rm/index.tpl',
      1 => 1367551982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2070277009510c92cecf4319-65550690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c92cecfa179_87468114',
  'variables' => 
  array (
    'dy_list' => 0,
    'show_loadmore_btn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c92cecfa179_87468114')) {function content_510c92cecfa179_87468114($_smarty_tpl) {?><!--Main_body-->
<div id="main_body">
    <!--editor-->
    <div id="sn-editor">
        <!--ed-tip-->
        <div>
            <div style="float:left;width:175px;height:27px;">
                <img src="/user/sources/img/usr-tuc.png" width="175px" height="27px"/>
            </div>
            <div style="float:right;height:27px;line-height:27px;color:#808080;">
                发言请不要过于鸡冻，<span id="ss-ovs">还可以输入</span> <span id="ss-nc">120</span> 字
            </div>
            <div class="clear"></div>
        </div>
        <!--@ed-tip-->
        <!--ed-input-->
        <div id="sn-ed-inp-wapp">
            <div contenteditable="true" id="shuoshuoTx" onpaste="ss_handle_prase(this);" oncontextmenu="javascript:window.event.returnValue=false;"></div>
        </div>
        <!--@ed-input-->
        <!--ed-act-->
        <div id="sn-ed-bar">
            <div id="sn-ed-in">
                <div id="sn-ed-inin" class="borderR5">
                    <a href="javascript:;" id="uc-tc-emo"></a>
                    <div id="sn-ed-bmm" class="borderR5 Shadow">
                        <div class="snbal"></div><div class="snbai"></div>
                        <div style="height:30px;background:#fafafa;text-align:right;border-bottom:1px solid #ccc;border-top-left-radius:5px;border-top-right-radius:5px;">
                            <a id="sn-en-close" href="javascript:;"></a>
                        </div>
                        <div id="sn-en-wapp"></div>
                    </div>
                    <!--<a href="javascript:;" id="uc-tc-pic"></a>-->
                </div>
            </div>
            <a href="javascript:;" id="etc-btn" class="Gbtn" title="马上吐槽吧！">走你</a>
        </div>
        <!--@ed-act-->
    </div>
    <!--@editor-->

    <!--Dy_list-->
    <div style="border-top:1px dashed #ddd;margin-top:5px;padding-top:5px;">

        
        <div id="uc-dy-list"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value;?>
</div>

        <?php if ($_smarty_tpl->tpl_vars['show_loadmore_btn']->value==true){?>
            
            <a class="Gbtn" href="javascript:;" id="uc-loadmore-btn">加载更多</a>
        <?php }?>

    </div>
    <!--@Dy_list-->
</div><?php }} ?>