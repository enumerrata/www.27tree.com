<!--Main_body-->
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

        {* 动态列表 *}
        <div id="uc-dy-list">{$dy_list}</div>

        {if $show_loadmore_btn == true}
            {* 加载更多动态按钮 *}
            <a class="Gbtn" href="javascript:;" id="uc-loadmore-btn">加载更多</a>
        {/if}

    </div>
    <!--@Dy_list-->
</div>