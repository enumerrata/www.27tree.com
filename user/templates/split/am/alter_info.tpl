<div id="main_body">
    <span class="RedBar">
        <span class="RedBar-in">修改个人资料</span>
    </span>
    <div id="alert-bar" class="borderR5">个人资料修改成功</div>
    <div id="am-if-wapp" style="margin-top:10px;">
        <form id="am-if-log-form" action="#" method="post">
            <input type="hidden" value="change" name="mod" id="modx"/>
            <!--FORM_POST_DATA： 'sex','ages','job','prov','city','self-info','qqnumber' -->
            <div class="am-cii">
                <label for="sex" class="log-label">性别：</label>
                <select class="ex" name="sex">
                    <option>男</option>
                    <option>女</option>
                    <option>保密</option>
                </select>
            </div>
            <div class="am-cii validate-f">
                <label for="ages" class="log-label">年龄：</label>
                <input id="age" name="ages" type="text" onkeyup="validate_userinfo(this,'ages')"/>
                <span class="validate-span"></span>
            </div>
            <div class="am-cii validate-f">
                <label>qq：</label>
                <input id="qqnumber"
                       name="qqnumber"
                       type="text"
                       onkeyup="validate_userinfo(this,'qq')"/>
                <span class="validate-span"></span>
            </div>
            <div class="am-cii">
                <label>职业：</label>
                <select class="ex" name="job" id="job-list">
                    <option>软件工程师</option>
                    <option>系统分析师</option>
                    <option>系统设计师</option>
                    <option>软件测试工程师</option>
                    <option>系统管理工程师</option>
                    <option>数据库管理工程师</option>
                    <option>售前技术工程师</option>
                    <option>需求分析工程师</option>
                    <option>WEB开发工程师</option>
                    <option>程序美工</option>
                    <option>网站营维工程师</option>
                    <option>网站架构工程师</option>
                    <option>手机应用软件开发工程师</option>
                    <option>手机游戏开发工程师</option>
                    <option>WAP开发工程师</option>
                    <option>在校大学生</option>
                    <option>其他领域人员</option>
                    <option>无业游民</option>
                </select>
            </div>
            <div class="am-cii">
                <label>地址：</label>
                <select class="ex ex2" id="pro-list" onchange="togger_city(this.value)" name="prov">
                    <option disabled="true">加载中</option>
                </select>
                <select class="ex ex2" id="city-list" name="city">
                    <option disabled="true">加载中</option>
                </select>
            </div>
            <div class="am-cii">
                <label style="float:left;">技能：</label>
                <input type="hidden" name="lan" value="" id="langsubmit" />
                <div style="line-height:24px;font-size:14px;margin-left:49px;">
                    {$language_list}
                    <div class="clear"></div>
                </div>
            </div>
            <div class="am-cii validate-f">
                <label>任职：</label>
                <input id="inc"
                       name="inc"
                       type="text"
                       class="info-input"
                       onkeyup="validate_userinfo(this,'inc')"/>
                <span class="validate-span"></span>
            </div>
            <div class="uc-btn-wapper borderR5" id="ami-save-data-btn">
                <a class="next-cp borderR5" href="javascript:;" id="uc-loadmore-btn">保存个人资料</a>
            </div>
        </form>
    </div>
</div>