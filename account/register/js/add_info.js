var lang = new Array();

dojo.addOnLoad(function(){
    var img_cache = new Image();
    img_cache.src = '/img/loading_19_13.gif?b=b';
    dojo.query(".lga").onclick(function() {
        var str = $(this).html();
        if(inarray(str,lang)) {
            toggle_lang_style($(this),true);
            lang.remove(dojo.indexOf(lang,str));
        } else if(!inarray(str,lang)) {
            toggle_lang_style($(this),false);
            lang.push(str);
        }
        dojo.byId("langsubmit").value = lang.join("|");
    });

    require(["dojo/_base/array","dojo/query","dojo/dom-attr"], function(array, query, domAttr){
        dojo.xhrGet({
            url : "/account/data/city.xml",
            load : function(_xml){
                city_xml = dojo.toDom(_xml);
                free(_xml);
                var pronode = dojo.byId("pro-list");
                var citynode = dojo.byId("city-list");
                var _str = "";
                pronode.options.length = 0;
                citynode.options.length = 0;
                array.forEach(
                    query("pro",city_xml),
                    function(province){
                        var _str_city = "";
                        _str = _str + "<option value=\""+domAttr.get(province, "p-name")+"\">"+ domAttr.get(province, "p-name") +"</option>";
                        if(domAttr.get(province, "p-name") != "北京") return;
                        array.forEach(
                            query("c-name",province),
                            function(city){
                                _str_city = _str_city + "<option>"+ city.innerHTML +"</option>";
                            });
                        citynode.appendChild(dojo.toDom(_str_city));
                    });
                pronode.appendChild(dojo.toDom(_str));
            }
        });
    });

    dojo.query('#add-info-btn').onclick(function(evt){
        var btn = evt.srcElement || evt.currentTarget || evt.target;
        //var low = loadingWapper('am-if-wapp');
        $(this).html('<span class="add-fol-su"></span>');
        dojo.xhrPost({
            url : "/user/data/userinfo-post.php",
            postData : dojo.formToQuery(dojo.byId("am-if-log-form")),
            load : function(data){
                window.location.href='/account/register/foll';
            }
        });
    });

    var s_sex = new Select({
        name : 'sex',
        node : 'select-sex',
        data : ['男' , '女' , '保密'],
        width : 70
    });
    var s_jobs = new Select({
        name : 'job',
        node : 'select-job',
        data : [
        '软件工程师',
        '系统分析师',
        '系统设计师',
        '软件测试工程师',
        '系统管理工程师',
        '数据库管理工程师',
        '售前技术工程师',
        '需求分析工程师',
        'WEB开发工程师',
        '程序美工',
        '网站营维工程师',
        '网站架构工程师',
        '手机应用软件开发工程师',
        '手机游戏开发工程师',
        'WAP开发工程师',
        '在校大学生',
        '其他领域人员',
        '无业游民',],
        width : 200,
        llong : 10
    });
});

function togger_city(province){
    require(["dojo/_base/array", "dojo/query", "dojo/dom-attr"], function(array, query , domAttr){
        var citynode = dojo.byId("city-list");
        citynode.options.length = 0;
        var _str_city = "";
        array.forEach(
            query("pro",city_xml),
            function(pro){
                if(domAttr.get(pro, "p-name") == province){
                    array.forEach(
                        query("c-name",pro),
                        function(city){
                            _str_city = _str_city + "<option>"+ city.innerHTML +"</option>";
                        });
                    citynode.appendChild(dojo.toDom(_str_city));
                }
            });
    });
}

function toggle_lang_style(_n,o){
    if(o){
        $(_n).css({
            "border-color":"#ccc",
            'background':'#f3f3f3'
        });
        $(_n).removeClass('Shadow');
    } else {
        $(_n).css({
            "border-color":"#900",
            'background':'#fff'
        });
        $(_n).addClass('Shadow');
    }
}

function validate_handle(bool,mode,node){
    var field = node.parentNode.parentNode;
    var tipfield = dojo.query(".validate-span",field)[0];
    switch(mode){
        case 'qq':
            if(!bool) tipfield.innerHTML = "请输入正确的QQ号码";
            else tipfield .innerHTML = "";
            break;
        case 'ages':
            if(!bool) tipfield.innerHTML = "请输入正确的年龄";
            else tipfield .innerHTML = "";
            break;
        case 'inc':
            if(!bool) tipfield.innerHTML = "请不要输入非法符号";
            else tipfield .innerHTML = "";
            break;
    }
}

function validate_userinfo(node,mode) {
    switch(mode){
        case 'qq':
            validate_handle(/^[1-9]\d{5,11}$/g.test(node.value),mode,node);
            break;
        case 'ages':
            validate_handle(IntRange(0,120,node.value),mode,node);
            break;
        case 'inc':
            validate_handle(/^[\u0391-\uFFE5\w]+$/g.test(node.value),mode,node);
    }
}
