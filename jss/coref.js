window.usr_bar = null;
﻿$(function() {
    usr_bar_init();
});

function fix_edit_p(ct){
    return ct.replace(/<p>\n\s+<br \/>\n<\/p>/g,'<br>');
}

var Select = function(param){
    /**
     * @author koodo@qq.com
     * _name 表单隐藏值
     * node 父对象ID
     * data Object 列表对象
     */
    var self = this;
    this._name = param.name;
    this._list = param.data;
    this._parent = $('#'+param.node);
    this._lnode  = null;
    this.selected = {};
    this.currentValue = null;

    this.getValue = function(){
        return self.currentValue;
    }

    this.getSelectData = function(){
        return self.selected;
    }

    this.show = function(){
        self._lnode.css({
            display:'block',
            left:this._parent[0].offsetLeft,
            top:this._parent[0].offsetTop + this._parent.height(),
            width:param.width+'px'
        });
    }

    this.unload = function(){
        this._parent.removeClass('sd-select-pressed').removeClass('sd-select-hover');
        this._lnode.css({
            display:'none'
        });
    }

    this.BARclickListent = function(e){
        if(!$(this).hasClass('sd-select-pressed')){
            $(this).addClass('sd-select-pressed');
            self.show();
        } else {
            $(this).removeClass('sd-select-pressed');
            self.unload();
        }
    }

    this.ULclickListen = function(){
        self.currentValue = $(this).attr('data-value');
        $('.sd-select-caption',self._parent).html($(this).html());
        $('input:hidden',self._parent).val(self.currentValue);
        self.unload();
    }

    this.hoverListen = function(){
        if(!$(this).hasClass('sd-select-pressed'))
            $(this).toggleClass('sd-select-hover');
    }

    this.init = function(){
        var fi = null,_bd = [],_pd = [],i=0;
        _bd.push('<div class="sd-select-UL">');

        if(Object.prototype.toString.call(this._list) !== '[object Array]'){
            for(var k in this._list){
                if(!fi) fi = k;
                i++;
                _bd.push('<div data-value="'+this._list[k]+'">'+k+'</div>');
            }
        } else {
            var l = this._list.length,j=0;
            for(;j<l;j++){
                if(!fi) fi = this._list[j];
                i++;
                _bd.push('<div data-value="'+this._list[j]+'">'+this._list[j]+'</div>');
            }
        }
        _pd.push('<input type="hidden" name="'+this._name+'" value="'+fi+'" />');
        _bd.push('</div>');
        _bd = $(_bd.join(''));

        param.llong = param.llong == null ? 5 : param.llong;

        _bd.height((i <= param.llong ? i : param.llong) * 30);


        this._lnode = _bd;

        _pd.push('<div class="sd-select-caption">'+fi+'</div>');
        _pd.push('<div class="sd-select-dropdown"></div>');

        self.currentValue = this._list[fi];
        this._parent.width(param.width + 'px');
        this._parent.parent().append(_bd);
        this._parent.append($(_pd.join('')));
        this._parent.addClass('fscrollbar').addClass('sd-select');
        $('div',this._lnode).click(this.ULclickListen);
        this._parent.click(this.BARclickListent);
        this._parent.hover(this.hoverListen,this.hoverListen);
    }

    this.init();
}

var ToggleButton = function(param){
    this._name = param.name;
    this._parent = $('#'+param.id);
    this._data = param.data;
    this.current = null;

    var self = this;

    this.getValue = function(){
        return self.current;
    }

    this.clickListen = function(){
        $(this).removeClass('toggle-btn-hover');
        $('.toggle-current').removeClass('toggle-current');
        $(this).addClass('toggle-current');
        self.current = $(this).attr('data-value');
        $('input:hidden',self._parent[0]).val(self.current);
    }

    this.hoverListen = function(){
        if(!$(this).hasClass('toggle-current'))
            $(this).toggleClass('toggle-btn-hover');
    }

    this.init = function(){
        var _bd = [];
        var fi = false;
        for(var k in this._data){
            if(!fi){
                fi = true;
                self.current = this._data[k];
                _bd.push('<input type="hidden" name="'+self._name+'" value="'+self.current+'" />');
                _bd.push('<a class="toggle-left toggle-current" href="javascript:;" data-value="'+self.current+'">'+k+'</a>');
            } else {
                _bd.push('<a class="toggle-right" href="javascript:;" data-value="'+this._data[k]+'">'+k+'</a>');
                break;
            }
        }
        self._parent.addClass('toggle').append($(_bd.join('')));
        $('a',self._parent).hover(this.hoverListen,this.hoverListen);
        $('a',self._parent).click(this.clickListen);
    }
    this.init();
}

function usr_bar_init(){
    usr_bar = $('#top-menu-bar')[0];
    if(undefined != usr_bar){
        //检测到usrbar
        function _final(_v){
            if(_v){
                var uid = parseInt(getCookie('_uid'));
                var tpl = [
                '/user/' + uid,
                '/user/' + uid + '/admin/submit_blog.html',
                '/user/' + uid + '/admin/alter_head.html'
                ];

                $('#gb-ucc').attr('href',tpl[0]);
                $('#gb-usm').attr('href',tpl[1]);
                $('#gb-usa').attr('href',tpl[2]);

                $('#gb-usn').html(usn);
                $('#gb-log,#gb-reg').remove();
                //$('.tsearch-wapp').css('margin-right','0');

                $('#top-menu-bar').addClass('top-bm').mouseover(function(){
                    $(this).addClass('top-menu-hover');
                    $('#top-menu').css('display','block');
                    $('#gb-arr').css('background-image','url(\'/img/arrd-2.png\')');
                });

                $('#top-menu-wapp').css('width',parseInt($('#top-menu-bar').width()) + 18 + 'px'); // (8 + 1) * 2

                $('#top-menu').mouseout(function(){
                    $('#top-menu-bar').removeClass('top-menu-hover');
                    $(this).css('display','none');
                    $('#gb-arr').css('background-image','url(\'/img/arrd-1.png\')');
                });

                $('#gb-ext').click(function(){
                    $(this).addClass('top-menu-btn-loaing').html('');
                    delCookie('username');
                    delCookie('_uid');
                    delCookie('fky');
                    delCookie('relogin','/account/');
                    window.location.href = window.location.href;
                });
            } else {

            }
        }

        function Auth_validate(callback){
            $.post('/user/postc/check/auth_check.php',function(re){
                var R = String2Json(re);
                callback(R.s == 1);
            });
        }

        if(usercheck()){
            //已登录,检查缓存头
            var usn = decodeURI(getCookie('username'));
            var cache_head = getCookie('usr_cache') == 'o,n' ? true : false;
            if(cache_head){
                //缓存有效
                _final(1);
            } else {
                //缓存过期 进行验证
                Auth_validate(function(check){
                    if(check){
                        _final(1);
                    } else {
                        if(window.location.pathname != '/account/login/') window.location.href = '/account/login/';
                    }
                });
            }

        } else {
            _final(0);
        }
    }
}

function loadEditCl(evt){
    var ex = $(".commAddOnCast")[0];
    var lev = parseInt($("a[@rel]",evt).attr("rel").replace("$",""));
    var index = parseInt($("a[@index]",evt).attr("index"));
    setCookie("lev",lev,360);
    setCookie("index",index,360);
    if(lev == '2'){
        if($("a[@relUID]",evt).attr("relUID") == getCookie("_uid") || $("a[@relUSN]",evt).attr("relUSN") == getCookie("username")) return;
        setCookie('toUID',parseInt($("a[@relUID]",evt).attr("relUID")),360);
        setCookie('toUSN',$("a[@relUSN]",evt).attr("relUSN"),360);
    }
    if(undefined !== ex){
        $(evt.parentNode).find("em.editside").append(ex);
        $(ex).find("textarea")[0].focus();
    } else {
        var _n = null;
        if($){
            _n = $(TMPLATES_commCaster);
            $(evt.parentNode).find("em.editside").append(_n);
            _n.find("textarea")[0].focus();
            //点击事件绑定
            _n.find(".concbtn").click(function(){
                //debug($(ex).find("textarea")[0]);
                //var self = $(this)[0];
                var p = {};
                p.fuid = getCookie("_uid") == "" ? -1 : parseInt(getCookie("_uid"));
                p.fun = getCookie("username");
                p.lev = getCookie("lev");
                p.id  = $("#COMMID").attr("rel");
                p.targetType = $("#COMMTYPE").attr("rel");
                p.content = $(".commAddOnCast textarea").val().html_specialchars_rawTextArea();
                p.index = parseInt(getCookie("index"));
                if(p.lev == '2'){
                    p.touid = getCookie("toUID");
                    p.tousn = getCookie("toUSN");
                }
                $.post("/not/COMM/postc.php",
                    p,function(data){
                        //参数传递不知道怎么实现，暂时用cookie了。
                        var bk = String2Json(data);
                        var templates = $(TMPLATES_Grobal_comm_listIn);
                        templates.find("#ct-hi").attr("src",bk['head-img'] + "_32x");
                        var usn = getCookie("_uid") == "" ? "游客" : "<a href=\"/user/"+getCookie("_uid")+"\">" + decodeURI(getCookie("username")) + "</a>";
                        if(getCookie("lev") == '2')
                            templates.find(".Elipsis").html(getCookie("toUID") == "" ? "@游客//" : "<a href=\"/user/"+getCookie("_uid")+"\">@" + decodeURI(getCookie("toUSN")) + "</a>//");
                        templates.find("#ct-dt").html("刚刚");
                        templates.find("#ct-un").html(usn);
                        templates.find(".ct-t").html($(".commAddOnCast textarea").val());
                        $.each($(".comment-list"),function(index,_node){
                            if(index.toString() == getCookie("index")){
                                $(_node).find("div.comment-content-in").append(templates);
                                $(".commAddOnCast").slideUp();
                                delCookie("lev");
                                delCookie("toUID");
                                delCookie("toUSN");
                                delCookie("index");
                            }
                        });
                    });
            });
        } else {
            debug("$ required");
        }
    }
}

function IntRange(n,m,s){
    return parseInt(s) <= m && parseInt(s) >= n;
}

function loadingWapper(_node_id){
    _node_id = "#" + _node_id;
    $(_node_id).css('position','relative');
    var _loading_node = $('<div class="_loading-wapper" style="position:absolute;top:0;left:0;right:0;bottom:0;background:url(\'/img/spiner.gif\') center #FFF no-repeat;opacity:0.4;"></div>');
    $(_node_id).append(_loading_node);
    return _loading_node;
}

function dojo_sda_fadeOut(t,n){
    dojo.fadeOut({
        node:n,
        duration:t
    }).play();
    threadRun(function(){
        n.style.display = 'none';
    }, t);
}

function String2Json(s){
    return eval("("+s+")");
}

function free(t){
    t=null;
}

function debug(m) {
    if(console)
        console.log(m);
}

function loadKindEditor(n,o,c){
    var l = "<link rel='stylesheet' type='text/css' href='/mod/kd/themes/default/default.css' />"
    + "<script charset='utf-8' src='/mod/kd/lang/zh_CN.js'></script>"
    + "<script charset='utf-8' src='/mod/kd/plugins/code/prettify.js'></script>";
    var e = null;
    var a = [
    ['bold','italic','insertorderedlist','emoticons','forecolor','insertunorderedlist','formatblock','preview','quickformat','hr','flash', 'code', 'l', 'image','justifyleft', 'justifycenter', 'justifyright', 'fontsize', 'fullscreen'],
    ['bold','italic','insertorderedlist','emoticons','forecolor','insertunorderedlist','formatblock','code', 'l','link','preview','quickformat','image','fontsize', 'fullscreen']
    ];
    var items = typeof(o.items) != 'undefined' ? a[o.items] : a[0];
    $.getScript('/mod/kd/kindeditor-min.js', function() {
        $("body").append($(l));
        KindEditor.basePath = '/mod/kd/';
        e = KindEditor.create("#" + n,{
            newlineTag : 'p',
            height : typeof(o.height) != 'undefined' ? o.height : "180px",
            pasteType : 1,
            cssPath : ['/mod/kd/plugins/code/prettify.css'],
            pluginsPath : "/mod/kd/plugins/",
            items : items
        });
        c(e);
    });
}

function stopBubble(e) {
    if ( e && e.stopPropagation )
        e.stopPropagation();
    else
        window.event.cancelBubble = true;
}
function stopDefault(e) {
    if ( e && e.preventDefault )
        e.preventDefault();
    else
        window.event.returnValue = false;
    return false;
}

function selectC(curr)
{
    var stypes = document.getElementById("stype_s");
    $("#stype_s option").not(".sl_"+curr).css("display","none");
    $(".sl_"+curr).css("display","inline");
    stypes.options[firstindex(curr)].selected = true;
}

function selectS(curr)
{
    var stypes = document.getElementById("type_s");
    $.each($("#type_s option"),function(index){
        if($(this).val() == curr){
            stypes.options[index].selected = true;
        }
    });
}

function firstindex(curr)
{
    var _return;
    $.each($("#stype_s option"),function(index){
        if($(this).attr("class") == "sl_"+curr){
            _return = index;
            return false;//跳出闭包循环
        // return true break 等价 continue
        }
    });
    return _return;
}

function loadacc()
{
    var str = "";
    if(getCookie("readacctitle")!="" && getCookie("readaccurl")!="")
    {
        var acctitle = getCookie("readacctitle").split(",");
        var accurl   = getCookie("readaccurl").split(",");
        for(var node in acctitle)
        {
            if(!acctitle.hasOwnProperty(node)) continue;
            if(node==0) continue;
            if(node==acctitle.length-1)
            {
                str += "<li style='border:none;'><a href='"+decodeURIComponent(accurl[node])+"'>"+decodeURIComponent(acctitle[node])+"</a></li>";
            } else str += "<li><a href='"+decodeURIComponent(accurl[node])+"'>"+decodeURIComponent(acctitle[node])+"</a></li>";
        }
        if(acctitle.length>=5) $(".readhistory").append($("<a href=\"javascript:void(0);').show(500);return false;\" style=\"float:right;\">&dArr;显示更多历史记录</a><div class=\"clear\"></div>"));
        $(".readhistory").find("a").click(function(){
            $(this).fadeOut(500);
            $('.readhistory ul li:gt(3)').show(500);
        });
        $(".readhistory").find("ul").html(str);
        $(".readhistory ul li:gt(3)").hide();
    }
}

function getCookie(k) {
    if (document.cookie.length > 0) {
        c = document.cookie.indexOf(k + "=");
        if (c != -1) {
            c = c + k.length + 1;
            c_end = document.cookie.indexOf(";", c);
            if (c_end == -1) c_end = document.cookie.length;
            return unescape(document.cookie.substring(c, c_end));
        }
    }
    return "";
}

function threadRun(f,t) {
    if(window.setTimeout)
        window.setTimeout(f, t);
    else f();
}

function setCookie(c, v, e) {
    var exdate = new Date();
    exdate.setSeconds(exdate.getSeconds() + e);
    document.cookie = c + "=" + escape(v) + ((e == null) ? "": "; expires=" + exdate.toGMTString()+"; path=/");
}

function delCookie(n,p) {
    var date = new Date();
    var path = undefined == p ? '/' : p;
    date.setTime(date.getTime() - 10000);
    document.cookie = n + "=a; expires=" + date.toGMTString() + "; path=" + path;
}

function usercheck(){
    var c = getCookie('username');
    var u = getCookie('_uid');
    if ((c != null && c != "") || (u != null && u != "")){
        return true;
    } else return false;
}

Array.prototype.remove = function(dx) {
    if(isNaN(dx)||dx>this.length){
        return;
    }
    for(var i=0,n=0;i<this.length;i++) {
        if(this[i]!=this[dx])
        {
            this[n++]=this[i]
        }
    }
    if(this.length !== 0)this.length = this.length - 1;
}

String.prototype.html_specialchars_rawTextArea = function() {
    var str = this;
    str = str.replace(/&lt;/g, '&ld;');
    str = str.replace(/&gt;/g, '&gd;');
    str = str.replace(/&nbsp;/g, '&ms;');
    str = str.replace(/</g, '&amp;lt;');
    str = str.replace(/>/g, '&amp;gt;');
    str = str.replace(/&nbsp;/g, '&amp;nbsp;');
    str = str.replace(/[' ']/g, '&amp;nbsp;');
    //str = str.replace(/\|/g, '&brvbar;');
    str = str.replace(/\\/g,"_%5c_");
    return str;
}

String.prototype.html_specialchars = function() {
    var str = this;
    /*
    str = str.replace(/&amp;lt;/g,'&amp;ld;');
    str = str.replace(/&amp;gt;/g,'&amp;gd;');
    str = str.replace(/&lt;/g,'&amp;lt;');
    str = str.replace(/&gt;/g,'&amp;gt;');
    str = str.replace(/</g, '&ld;');
    str = str.replace(/>/g, '&gd;');
    str = str.replace(/&amp;nbsp;/g, '&amp;ms;');
    str = str.replace(/&nbsp;/g, '&amp;nbsp;');
    str = str.replace(/[' ']/g, '&amp;nbsp;');
    //str = str.replace(/\|/g, '&brvbar;');
    str = str.replace(/\\/g,"_%5c_");
*/
    return str;
}

String.prototype.html_specialchars_final = function() {
    var str = this;
    str = str.replace(/&lt;/g, "<");
    str = str.replace(/&gt;/g, ">");
    str = str.replace(/&amp;lt;/g, "&lt;");
    str = str.replace(/&amp;gt;/g, "&gt;");
    str = str.replace("&gd;", "&amp;gt;");
    str = str.replace("&ld;", "&amp;gt;");
    str = str.replace(/\\"/g, '"');
    str = str.replace("&nbsp;", " ");
    str = str.replace(/&amp;nbsp;/g, " ");
    str = str.replace("&ms;", "&amp;nbsp;");
    str = str.replace(/\_%5c\_/g,"\\");
    return str;
}

String.prototype.html_specialchars_back = function() {
    var str = this;
    /*str = str.replace(/&brvbar;/g, '\|');
    str = str.replace(/&nbsp;/g, ' ');
    str = str.replace(/&amp;nbsp;/g, '&nbsp;');
    str = str.replace(/&gt;/g, '>');
    str = str.replace(/&lt;/g, '<');
    str = str.replace(/&amp;gt;/g,'&gt;');
    str = str.replace(/&amp;lt;/g,'&lt;');
    str = str.replace(/&amp;ld;/g,'&amp;lt;');
    str = str.replace(/&amp;gd;/g,'&amp;gt;');
    //<pre code>*/
    str = str.replace(/\\"/g,'"');
    str = str.replace(/&amp;nbsp;/g, ' ');
    str = str.replace(/&amp;ms;/g, '&amp;nbsp;');
    str = str.replace(/&gt;/g, '>');
    str = str.replace(/&lt;/g, '<');
    str = str.replace(/&amp;ld;/g,'&amp;lt;');
    str = str.replace(/&amp;gd;/g,'&amp;gt;');
    return str;
}
//Hex_session
function Hex_session() {
    this.uid = getCookie('_uid');
    this.username = getCookie('username');
}
Hex_session.prototype = {
    constructor: Hex_session,
    onerror: function(error) {
        debug(error);
    },

    callback: function(data) {},

    check: function() {
        var self = this;
        if (!checkBoth(self.uid, self.username)) {
            self.onerror("user-login-error||visitor");
        }
        $.ajax({
            url: "/mod/session/validate_cookie.php",
            type: "post",
            data: {
                uid: self.uid,
                username: self.username
            },
            success: function(datsa) {
                alert('x');
                self.callback(datsa);
            }
        });
    }
};

function checkBoth(f,l) {
    if (f == "" || l == "") {
        return false;
    }
    return true;
}

function getClientWidth() {
    var doc = window.document;
    var clientWidth = window.innerWidth || doc.documentElement.clientWidth || doc.body.clientWidth;
    return clientWidth;
}

function getClientHeight() {
    var clientHeight = window.innerHeight || doc.documentElement.clientHeight || doc.body.clientHeight;
    return clientHeight;
}

function goTop(acceleration, time) {
    acceleration = acceleration || 0.1;
    time = time || 5;

    var x1 = 0;
    var y1 = 0;
    var x2 = 0;
    var y2 = 0;
    var x3 = 0;
    var y3 = 0;

    if (document.documentElement) {
        x1 = document.documentElement.scrollLeft || 0;
        y1 = document.documentElement.scrollTop || 0;
    }
    if (document.body) {
        x2 = document.body.scrollLeft || 0;
        y2 = document.body.scrollTop || 0;
    }
    var x3 = window.scrollX || 0;
    var y3 = window.scrollY || 0;
    var x = Math.max(x1, Math.max(x2, x3));
    var y = Math.max(y1, Math.max(y2, y3));
    var speed = 1 + acceleration;
    window.scrollTo(Math.floor(x / speed), Math.floor(y / speed));
    if(x > 0 || y > 0) {
        var invokeFunction = "goTop(" + acceleration + ", " + time + ")";
        window.setTimeout(invokeFunction, time);
    }
}

function validate_username_check(v)
{
    return /^[\u0391-\uFFE5\w]+$/.test(v);
}

function validate_normal_string_check(v){
    return /^[\u0391-\uFFE5\w-_{}、，。：！？,.:!? ']+$/.test(v);
}

function selectchange(pro_data)
{
    $.get("./data/city.xml",function(list_data)
    {
        document.getElementById("city-list").options.length=0;
        var x = list_data.getElementsByTagName('pro');
        for (var i=0;i<x.length;i++)
            if(x[i].attributes.getNamedItem("p-name").nodeValue==pro_data)
            {
                var xs = x[i].getElementsByTagName('c-name');
                for(var j=0;j<xs.length;j++)
                    document.getElementById("city-list").options.add(new Option(xs[j].childNodes[0].nodeValue,xs[j].childNodes[0].nodeValue));
                return;
            }
        x = null;
    });
}

function isIP(strIP) {
    if (isNull(strIP)) return false;
    var re = /^(\d+)\.(\d+)\.(\d+)\.(\d+)$/g
    if (re.test(strIP)) {
        if (RegExp.$1 < 256 && RegExp.$2 < 256 && RegExp.$3 < 256 && RegExp.$4 < 256) return true;
    }
    return false;
}

function isNull(s) {
    if (str == "") return true;
    return /^[ ]+$/.test(s);
}

function isInteger(s) {
    return /^[-]{0,1}[0-9]{1,}$/.test(s);
}

function checkMobile(s) {
    return /^[1][0-9][0-9]{9}$/.test(s);
}

function isEmail(b) {
    return /^[-_A-Za-z0-9]+@([_A-Za-z0-9]+\.)+[A-Za-z0-9]{2,3}$/.test(b);
}

Date.prototype.format = function(format) {
    var o = {
        "M+" : this.getMonth()+1, //month
        "d+" : this.getDate(),    //day
        "h+" : this.getHours(),   //hour
        "m+" : this.getMinutes(), //minute
        "s+" : this.getSeconds(), //second
        "q+" : Math.floor((this.getMonth()+3)/3),  //quarter
        "S" : this.getMilliseconds() //millisecond
    }
    if(/(y+)/.test(format)) format=format.replace(RegExp.$1,
        (this.getFullYear()+"").substr(4 - RegExp.$1.length));
    for(var k in o)if(new RegExp("("+ k +")").test(format))
        format = format.replace(RegExp.$1,
            RegExp.$1.length==1 ? o[k] :
            ("00"+ o[k]).substr((""+ o[k]).length));
    return format;
}

function inarray(o, a) {
    if(typeof o == 'string') {
        for(var i in a) {
            if(a[i] == o && a.hasOwnProperty(i)) {
                return true;
            }
        }
    }
    return false;
}

function f_activeFix(){
    if($){
        if($.browser.webkit || $.browser.safari) {
            $(".filePrew").css("display","block");
        } else if($.browser.mozilla || $.browser.msie){
            $("#fileToUploadwapp").click(function(){
                $(".filePrew").click();
            });
        }
    }
}

function DateTime2Date(d){
    return d.replace(/ \d{2}:\d{2}:\d{2}/g,'');
}

function slideDownBinding(bindfun){
    $(window).bind("scroll", function (event) {
        var top = document.documentElement.scrollTop + document.body.scrollTop;
        var textheight = $(document).height();
        if (textheight - top - $(window).height() <= 100) {
            bindfun();
            event.stopPropagation();
        }
    });
}

function generPasswordX(_rawPassword,_rawUsername){
    return hex_md5(hex_md5(_rawPassword)+_rawUsername);
}

function getpasswordStrong(s){
    //返回0/1/2/3分别代表无效/差/一般/强
    if(s.length < 6){
        return 0;
    }
    var l = 0;
    if (s.match(/[a-z]/ig)){
        l++;
    }
    if (s.match(/[0-9]/ig)){
        l++;
    }
    if (s.match(/(.[^a-z0-9])/ig)){
        l++;
    }
    if (s.length < 6 && l > 0){
        l--;
    }
    return l
}

function trigger_click(_node){
    if(_node.onclick){
        _node.onclick();
    } else if(_node.click){
        _node.click();
    }
}

function templates_replace(_string, _key_array) {
    //模板替换
    function getHashValue(_hashKey) {
        return typeof _key_array[_hashKey] !== 'undefined' ? _key_array[_hashKey] : '';
    }
    return _string.replace(/\$\{([^\s\:\}]+)(?:\:([^\s\:\}]+))?\}/g,
        function(key, xs) {
            return getHashValue(xs);
        });
}

function Search(_k){
    if(_k != '')
        window.open("http://www.itsrcs.com/search/?q=" + _k);
}

function search_enter(e){
    if(e.keyCode == 13){
        Search($('#search-inp').val());
    }
}

function mousePosition(ev){
    ev=ev || window.event;
    if(ev.pageX || ev.pageY){
        return {
            x:ev.pageX,
            y:ev.pageY
        };
    }
    return {
        x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,
        y:ev.clientY + document.body.scrollTop  - document.body.clientTop
    };
}