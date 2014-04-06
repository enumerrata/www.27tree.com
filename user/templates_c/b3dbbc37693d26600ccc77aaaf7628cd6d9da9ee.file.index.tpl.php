<?php /* Smarty version Smarty-3.1.12, created on 2013-02-11 17:48:01
         compiled from "D:\inetpub\www\user\templates\split\rm\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20330511610cb73e5b3-96728183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3dbbc37693d26600ccc77aaaf7628cd6d9da9ee' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\split\\rm\\index.tpl',
      1 => 1360576076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20330511610cb73e5b3-96728183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511610cb759ab4_30307651',
  'variables' => 
  array (
    'dy_list' => 0,
    'show_loadmore_btn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511610cb759ab4_30307651')) {function content_511610cb759ab4_30307651($_smarty_tpl) {?><!--Main_body-->
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
        <div id="sn-ed-inp-wapp" class="borderR3">
            <div contenteditable="true" id="shuoshuoTx" class="borderR3" onpaste="ss_handle_prase(this);" oncontextmenu="javascript:window.event.returnValue=false;"></div>
        </div>
        <!--@ed-input-->
        <!--ed-act-->
        <div style="margin-top:8px;height:36px;">
            <div style="float:right;width:80px;border:1px solid #ccc;height:30px;background:#fff;" class="borderR3">
                <a href="javascript:;" id="etc-btn" class="etc-btn-dis" title="马上吐槽吧！">发表</a>
            </div>
        </div>
        <!--@ed-act-->
    </div>
    <!--@editor-->

    <!--Dy_list-->
    <div style="border-top:1px dashed #ddd;margin-top:5px;padding-top:5px;">
        
        
        <div id="uc-dy-list"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value;?>
</div>

        <?php if ($_smarty_tpl->tpl_vars['show_loadmore_btn']->value==true){?>
            
            <div class="uc-btn-wapper">
                <a class="uc-btn" href="javascript:;" id="uc-loadmore-btn">加载更多</a>
            </div>
        <?php }?>

    </div>
    <!--@Dy_list-->
</div><?php }} ?>