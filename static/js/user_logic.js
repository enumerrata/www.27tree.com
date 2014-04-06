

function ImgPreLoad(){
    this._img = new Image();
    this.load = function (src){
        this._img.src = src;
    }
}

function plusFriend(evt){
    if(undefined !== evt){
        dojo.xhrPost({
            url : "/user/postc/plusFriendApp.php",
            postData : "target=" + $(evt).attr('rel').toString(),
            load : function(res){
                var s = String2Json(res);
                if(s['s'] == 1){
                    $(evt).html('&radic;&nbsp;添加好友请求成功');
                } else {
                    $(evt).html('&ne;&nbsp;好友请求失败');
                }
            }
        });
    }
}

function FriendAppCommand(evt,param,fuid,dyId){
    if(undefined != evt){
        dojo.xhrPost({
            url : "/user/postc/plusFriend_command.php",
            postData : "acc=" + param + "&fuid=" + fuid + "&dyId=" + dyId,
            load : function(res){
                var s = String2Json(res);
                if(s['s'] == 1){
                    $(evt.parentNode.parentNode).html("<div class=\"hTip\">添加好友成功！</div>");
                } else {
                    $(evt).html('&ne;&nbsp;添加好友失败');
                }
            }
        });
    }
}

function sendShuoShuo(evt){
    if(undefined !== evt && false !== ss_ready){
        var opt = new Object();
        opt.content = ss_perfix(dojo.byId('shuoshuoTx').innerHTML);
        opt.tc_val_code = dojo.byId('tc-val').value;
        opt.param_with_ush = 1;

        var _loading = loadingWapper('sn-editor');

        $.post("/user/postc/addShuoshuo.php",opt,function(res){
            var s = String2Json(res);
            if(s['s'] == '1'){
                $(_loading).remove();
                var tpl = dojo.toDom(templates_replace(TMP_SS,{
                    uid:1,
                    usn:decodeURI(getCookie('username')),
                    ctr:opt.content,
                    ush:s['ush']
                }));
                dojo.byId('shuoshuoTx').innerHTML = "";
                $('#uc-dy-list').prepend(tpl);
                $(tpl).hide().slideDown(350);
            }else {
            // 错误处理
            }
        });
    }
}

function ss_perfix(_s){
    return _s.replace(/<div>(.*)<\/div>/g,
        function(key, xs) {
            return "<br>" + xs;
        });
}

function ss_count(evt){
    var _h;
    if(evt.nodeType != undefined && evt.nodeType == 1){
        _h = evt.innerHTML;
    } else {
        var _n = evt.srcElement || evt.target;
        _h = _n.innerHTML;
    }
    _h = _h.replace(/<[^>|img].*?>/g,'');
    var pl = ss_input_limit - _h.length;
    if(pl >= 0){
        ss_ready = _h.length != 0;
        $('#ss-nc').removeClass('cRed').html(pl);
        dojo.byId('ss-ovs').innerHTML = '&#36824;&#21487;&#20197;&#36755;&#20837;';
    } else {
        $('#ss-nc').addClass('cRed').html(-pl);
        dojo.byId('ss-ovs').innerHTML = '&#24050;&#32463;&#36229;&#36807;&#20102;';
        ss_ready = false;
    }
}

function ss_handle_prase(node){
    setTimeout(function(){
        // prase 事件触发于元素内容改变之前
        debug(node.innerHTML);
        node.innerHTML = node.innerText;
    }, 4); //or 4
}
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
    //debug(_n);
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

function loadUserinfo() {
    // 加载个人信息
    $.post("/user/data/userinfo-post.php",{
        mod:"get"
    },function($_jsondata) {
        var $json = String2Json($_jsondata);
        //init Data
        if($json['ages']!="")     $("#age").val($json['ages']);
        if($json['qqnumber']!="") $("#qqnumber").val($json['qq']);
        if($json['lang'] !== null){
            lang = $json['lang'].split("|");
            dojo.byId("langsubmit").value = $json['lang'];
        }
        if($json['inc']!="") $("#inc").val($json['inc']);
        if($json['conv']!="") $("#self-info").val($json['conv']);
        var langanode = dojo.query(".lga");
        for(var i=0;i<langanode.length;i++) {
            if(inarray(langanode[i].innerHTML,lang)) {
                toggle_lang_style(langanode[i],false);
            }
        }
        $.each($("#job-list option"),function(index,node) {
            if(node.value == $json['job']) {
                node.parentNode.selectedIndex=index;
            }
        });
        if($json['address'] !== null){
            address=$json['address'].split("/");
            nods = $("#pro-list option");
            $.each(nods,function(index,node) {
                if(node.value == address[0])  {
                    node.parentNode.selectedIndex=index;
                    togger_city(node.value);
                    $.each($("#city-list option"),function(index,node) {
                        if(node.value == address[1]) {
                            node.parentNode.selectedIndex=index;
                            return;
                        }
                    });
                    return;
                }
            });
        }
    });
}

function validate_handle(bool,mode,node){
    var field = node.parentNode;
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

function add_foll(_target,_n){
    if(isInteger(_target)){
        var post_data = new Object();
        post_data.md = 'tc';
        post_data.uid = getCookie('_uid');
        post_data.target = _target;
        post_data.tcval = dojo.byId('tc-val').value;
        dojo.xhrPost({
            url : '/user/postc/add/add_following.php',
            postData : dojo.objectToQuery(post_data),
            load:function(res){
                var R = String2Json(res);
                debug(R);
                debug(_n);
                if(R.s == 1){
                    _n.innerHTML = '关注成功';
                } else {
                    _n.innerHTML = '你已是粉丝';
                }
            }
        });
    }
}

function del_foll(_target,_n){
    if(isInteger(_target)){
        var post_data = new Object();
        post_data.uid = getCookie('_uid');
        post_data.target = _target;
        post_data.tcval = dojo.byId('tc-val').value;
        dojo.xhrPost({
            url : '/user/postc/del/del_following.php',
            postData : dojo.objectToQuery(post_data),
            load:function(res){
                debug(res);
                var R = String2Json(res);
                if(R.s == 1){
                    // success !
                    $(_n.parentNode.parentNode.parentNode).remove();
                } else {
                    _n.innerHTML = '操作失败';
                }
            }
        });
    }
}

function index_emotion_click(){
    // 表情调出
    $('#sn-ed-bmm').css('display','table-cell');
    $('#sn-ed-inin').css('padding-left','5px').css('padding-right','3px'); // -2
    require(["dojo/dom-attr"], function(domAttr){
        var snEmWapp = $('#sn-en-wapp');
        if(snEmWapp.html() == ''){
            var curPos = 0;
            for(var i=1;i<=32;i++){
                var background_pos = 'background-position:0 ' + curPos + 'px;';
                var node = dojo.toDom('<a class="sn-en-items" style="'+background_pos+'" data-mid="'+i+'"></a>');
                curPos -= 32;
                snEmWapp.append(node);
            }
            dojo.query('.sn-en-items').onclick(function(){
                node = this;
                var mid = domAttr.get(node, "data-mid", i);
                var src = "http://itsrcs.b0.upaiyun.com/img/yolks/"+mid+".png_32x";
                var Img = dojo.toDom("<img src=\""+src+"\" align=\"absmiddle\"/>");
                var edit = $('#shuoshuoTx');
                edit.append(Img);
                ss_count(edit[0]);
            });
        }
    });
}

function index_picture_click(){

}

function index_emotion_close(){
    $('#sn-ed-bmm').hide();
    $('#sn-ed-inin').css('padding','0 4px');
}

function ac_commtc(){
    var p = $(this).parent().parent();
    var tcmom = $(this).attr('data-tcmom');
    $(this).remove();
    var editor = $('<div><div class="tccmm-wapp tccmm-wapp-ho"><div class="editct" contenteditable="true"></div></div><div class="tccmm-btn"><a class="Gbtn" data-tcmom="'+tcmom+'">发表</a></div></div>')
    $('.dy-i-r',p).append(editor);
    $('.editct',editor).focus().blur(function(e){
        var node = $(this);
        window.setTimeout(function(){
            var evn = $(ClickStack.pop());
            if(evn.parent().hasClass('tccmm-btn')){
            ;//in
            } else {
                var tccm = $('<div class="tccmm-wapp" data-tcmom="'+tcmom+'"><span>我也说一句</span></div>');
                $('.tccmm-wapp').click(ac_commtc);
                tccm.click(ac_commtc);
                node.parent().parent().parent().append(tccm);
                node.parent().parent().remove();
            }
        }, 100);
    });

    $('.Gbtn',editor).click(function(){
        var editor = $('.editct',$(this).parent().parent());
        if(''!=editor.text()){
            $.post('/user/api/comm/comm_tc.php',{
                tcmom : $(this).attr('data-tcmom'),
                content : editor.text()
            },function(res){
                var R = String2Json(res);
                if(R.s == 1){
                    var top = editor.parent().parent().parent();
                    var alert = $('<div class="or-alert"><span>评论成功</span></div>');
                    editor.parent().parent().remove();
                    top.append(alert);
                    threadRun(function(){alert.remove();},1000);
                } else {
                    
                }
            });
        } else return;
    });
    return;
    outterClick(editor,function(node){
        var tccm = $('<div class="tccmm-wapp" data-tid="{$dy_list[dyi].artid}"><span>我也说一句</span></div>');
        $('.tccmm-wapp').click(ac_commtc);
        //tccm.click(ac_commtc);
        node.parent().append(tccm);
        node.remove();
    });
}

function outterClick(_n,_e){
    if(window.outterClickEventList.length == 0) return;
    if(!window.outterClickEventList) window.outterClickEventList = [];
    var _ev = {
        node:_n,
        callback:_e,
        first:true
    };
    if(!window.outterClickEventList[_ev]) window.outterClickEventList.push(_ev);
    $(document).click(function(e) {
        e = window.event || e;
        var obj = $(e.srcElement || e.target)[0];
        var len = window.outterClickEventList.length;
        for(var i=0;i<len;i++){
            if(window.outterClickEventList[i].node !== obj && !isFather(window.outterClickEventList[i].node,obj)){
                if(!window.outterClickEventList[i].first)
                    window.outterClickEventList[i].callback(window.outterClickEventList[i].node);
                else window.outterClickEventList[i].first = false;
            }
        }
    });
}

function isFather(p, c2){
    var c = c2;
    while(c.parentNode){
        c = c.parentNode;
        if(c == p)
            return true;
    }
    return false;
}