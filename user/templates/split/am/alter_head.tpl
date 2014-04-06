{strip}
    <div id="main_body">
        <span class="RedBar">
            <span class="RedBar-in">修改个人头像</span>
            <span class="Gray RedBar-in-mr">点击图片马上更换默认头像</span>
        </span>

        <div id="alert-bar" class="borderR5">请在下面裁剪图片</div>

        <div class="uc-btn-wapper">
            <a class="Gbtn" href="javascript:;" id="am-head-sw"><span id="am-head-ultip">上传自定义头像</span></a>
        </div>

        <div class="uc-btn-wapper" style="display:none;">
            <a class="next-cp" href="javascript:;" id="am-head-sm">点我选择一张本地图片</a>
        </div>

        <div id="al-head-lbar"></div>

        <div id="al-head-list">
            {$head_list}
            <div class="clear"></div>
        </div>

        <div id="al-head-pl" style="display:none;">
            <div>
                <img id="am-imgpre" src="/user/sources/img/uc_ush_upload_bg.png" width="100%" name="src" class="Shadow block" style="margin:0 auto;" />
            </div>
            <form id="cropdata">
                <input type="hidden" size="10" id="x1" name="x" value="0" readonly="readonly"/>
                <!-- 起始位置的y坐标 -->
                <input type="hidden" size="10" id="y1" name="y" value="0" readonly="readonly"/>
                <!-- 宽 -->
                <input type="hidden" size="10" id="w" name="w" value="120" readonly="readonly"/>
                <!-- 高 -->
                <input type="hidden" size="10" id="h" name="h" value="120" readonly="readonly"/>
                <input type="hidden" size="10" id="al-imgn" name="al-imgn" readonly="readonly"/>
                <input type="hidden" size="10" id="al-src" name="al-src" readonly="readonly"/>
                <input type="hidden" size="10" id="al-scale" name="al-scale" readonly="readonly"/>
                </from>
                <div class="uc-btn-wapper" style="margin-top:5px;display:none;">
                    <a class="uc-btn" href="javascript:;" id="am-head-save">确认裁剪并保存</a>
                </div>
        </div>
    </div>
{/strip}