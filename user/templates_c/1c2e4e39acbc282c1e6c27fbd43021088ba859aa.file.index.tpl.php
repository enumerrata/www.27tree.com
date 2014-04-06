<?php /* Smarty version Smarty-3.1.12, created on 2014-01-15 18:20:09
         compiled from "E:\_web\27tree\user\templates\split\rm\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2766952d660d9a47c44-44530481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c2e4e39acbc282c1e6c27fbd43021088ba859aa' => 
    array (
      0 => 'E:\\_web\\27tree\\user\\templates\\split\\rm\\index.tpl',
      1 => 1367551982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2766952d660d9a47c44-44530481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
    'show_loadmore_btn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d660d9a57645_74344365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d660d9a57645_74344365')) {function content_52d660d9a57645_74344365($_smarty_tpl) {?><!--Main_body-->
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