$(function() {
    if($.browser.msie){
    //alert('x');
    }
    $('body').ajaxStart(function() {
        var loadingnode = $("<div class='loading-div'></div>");
        loadingnode.css('left', getClientWidth() / 2 - 104 + "px");
        loadingnode.appendTo($('body'));
        loadingnode = null;
    }).ajaxStop(function() {
        $('.loading-div').remove();
    });
//loadcookietohead();
});

function IntRange(r1,r2,str){
    return parseInt(str) <= r2 && parseInt(str) >= r1;
}

function dojo_sda_fadeOut(timeout,node){
    dojo.fadeOut({
        node:node,
        duration:timeout
    }).play();
    threadRun(function(){
        node.style.display = 'none';
    }, timeout);
}

function String2Json(string)
{
    return eval("("+string+")");
}

function free(_target)
{
    _target = null;
}

function debug(_message)
{
    console.log(_message);
}

function loadKindEditor(_node,options,callback){
    var link = "<link rel='stylesheet' type='text/css' href='/mod/kd/themes/default/default.css' />"
    + "<script charset='utf-8' src='/mod/kd/lang/zh_CN.js'></script>"
    + "<script charset='utf-8' src='/mod/kd/plugins/code/prettify.js'></script>";
    var editor = null;
    $.getScript('/mod/kd/kindeditor-min.js', function() {
        $("body").append($(link));
        KindEditor.basePath = '/mod/kd/';
        editor = KindEditor.create("#" + _node,{
            height : typeof options.height != undefined ? options.height : "180px",
            pasteType : 1,
            cssPath : ['/mod/kd/plugins/code/prettify.css'],
            pluginsPath : "/mod/kd/plugins/",
            items : ['bold','italic','insertorderedlist','emoticons','insertunorderedlist','preview','quickformat','hr','source', 'code', 'link', 'image','justifyleft', 'justifycenter', 'justifyright', 'fontsize', 'fullscreen']
        });
        callback(editor);
    });
}

function stopBubble(e) {
    //如果提供了事件对象，则这是一个非IE浏览器
    if ( e && e.stopPropagation )
        //因此它支持W3C的stopPropagation()方法
        e.stopPropagation();
    else
        //否则，我们需要使用IE的方式来取消事件冒泡
        window.event.cancelBubble = true;
}
//阻止浏览器的默认行为
function stopDefault(e) {
    //阻止默认浏览器动作(W3C)
    if ( e && e.preventDefault )
        e.preventDefault();
    //IE中阻止函数器默认动作的方式
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

function delart(artid)
{
    $.ajax({
        url : "/mod/art/delart.php",
        type: "post",
        data: {
            uid: getCookie("_uid"),
            dellist : artid
        },
        success: function(state_data)
        {
            var sd = eval("(" + state_data + ")");
            /**
           * @return success: 's' = 1, 'e' = 0;
           * @return haft_falied,full_falied 's' = 0, 'e' = error_art_list
           * @return uid_falied 's' = 0, 'e' ='_1';
           * @return dellist_falied 's' = 0, 'e' ='_2';
           */
            if(sd['s']=='1' && sd['e']=='0'){
                window.location.href=document.referrer;
            } else if(sd['s']=='0' && sd['e']=='_1'){
                alert("\u767b录状态异常，请重新登录！");
                forcelog();
            } else if(sd['s']=='0' && sd['e']=='_2'){
            //@ TODO: dellist:handle
            } else {
                alert("\u5220除失败！");
            //@ TODO: haft_falied,full_falied:handle
            }
        }
    });
}

function pages_ref(num)
{
    ul.not('.curr').addClass('hide-li');
    if(num>=5 && num<=length-5)
    {
        for(var i=0;i<=5;i++)
        {
            ul.eq(num+i).removeClass('hide-li');
            if(num-i>=0) ul.eq(num-i).removeClass('hide-li');
        }
    } else if(num<5)
{
        ul.slice(0, 11).removeClass('hide-li');
    } else if(num>length-5)
{
        ul.slice(length-11, length-2).removeClass('hide-li');
    }
}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) c_end = document.cookie.length;
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}

function threadRun(fun,timeout)
{
    if(window.setTimeout)
        window.setTimeout(fun, timeout);
    else fun();
}

function logout() {
    delCookie('username');
    delCookie('_uid');
    $(".log-item").slideUp(500);
    $("#logsugg").fadeIn(2000);
}

function setCookie(c_name, value, expiredays) {
    var exdate = new Date();
    exdate.setSeconds(exdate.getSeconds() + expiredays);
    document.cookie = c_name + "=" + escape(value) + ((expiredays == null) ? "": "; expires=" + exdate.toGMTString()+"; path=/");
}

function delCookie(name) {
    var date = new Date();
    date.setTime(date.getTime() - 10000);
    document.cookie = name + "=a; expires=" + date.toGMTString() + "; path=/";
}

function usercheck(){
    var cookie_username = getCookie('username');
    var uid = getCookie('_uid');
    if ((cookie_username != null && cookie_username != "") || (uid != null && uid != "")){
        return true;
    } else return false;
}

function check_login() {
    var cookie_username = getCookie('username');
    if (cookie_username != null && cookie_username != "") {
        return true;
    } else {
        alert('\u60a8还没有登录，请先登录！');
        location.href = "/log";
        return false;
    }
}

function loadcookietohead() {
    var cookie_username = getCookie('username');
    if (cookie_username != null && cookie_username != "") {
        $('#namea').html(cookie_username);
        $('#namea').attr('href', $('#namea').attr('href') + cookie_username + "&uid=" + getCookie('_uid'));
        $('#center_a').attr('href', $('#center_a').attr('href') + cookie_username + "&uid=" + getCookie('_uid'));
    }
}

Array.prototype.remove=function(dx)
{
    if(isNaN(dx)||dx>this.length){
        return false;
    }
    for(var i=0,n=0;i<this.length;i++)
    {
        if(this[i]!=this[dx])
        {
            this[n++]=this[i]
        }
    }
    this.length-=1
}

String.prototype.html_specialchars_rawTextArea = function() {
    var str = this;
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
    str = str.replace(/&lt;/g,'&amp;lt;');
    str = str.replace(/&gt;/g,'&amp;gt;');
    str = str.replace(/</g, '&lt;');
    str = str.replace(/>/g, '&gt;');
    str = str.replace(/&nbsp;/g, '&amp;nbsp;');
    str = str.replace(/[' ']/g, '&nbsp;');
    //str = str.replace(/\|/g, '&brvbar;');
    str = str.replace(/\\/g,"_%5c_");
    return str;
}

String.prototype.html_specialchars_final = function() {
    var str = this;
    str = str.replace(/&lt;/g, "<");
    str = str.replace(/&gt;/g, ">");
    str = str.replace(/&amp;lt;/g, "&lt;");
    str = str.replace(/&amp;gt;/g, "&gt;");
    str = str.replace(/\\"/g, '"');
    str = str.replace(/&amp;nbsp;/g, " ");
    str = str.replace(/\_%5c\_/g,"\\");
    return str;
}

String.prototype.html_specialchars_back = function() {
    var str = this;
    str = str.replace(/&brvbar;/g, '\|');
    str = str.replace(/&nbsp;/g, ' ');
    str = str.replace(/&amp;nbsp;/g, '&nbsp;');
    str = str.replace(/&gt;/g, '>');
    str = str.replace(/&lt;/g, '<');
    str = str.replace(/&amp;gt;/g,'&gt;');
    str = str.replace(/&amp;lt;/g,'&lt;');
    //<pre code>
    str = str.replace(/\\"/g,'"');
    return str;
}

String.prototype.getCutIndex = function(num)
{
    var node = $(this);
//@todo
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
                self.callback(datsa);
            }
        });
    }
};

function checkBoth(str1,str2) {
    if (str1 == "" || str2 == "") {
        return false;
    }
    return true;
}

function forcelog() {
    location.href = "/log";
}

function getClientWidth() {
    var doc = window.document;
    var clientWidth = window.innerWidth
    /*W3C*/
    || doc.documentElement.clientWidth
    /*std IE*/
    || doc.body.clientWidth
    /*IE quirk mode*/
    ;
    return clientWidth;
}

function getClientHeight() {
    var clientHeight = window.innerHeight || doc.documentElement.clientHeight || doc.body.clientHeight;
    return clientHeight;
}

function readAcc(title,url)
{
    var arr = getCookie("readacctitle");
    var urlac = getCookie("readaccurl");
    var maxnum=15;
    if(arr.indexOf(title)!=-1 && urlac.indexOf(url)!=-1)
        return false;
    var title_c = arr.split(",");
    if(title_c.length==maxnum+1)
    {
        title_c.shift();
    }
    title_c.push(title);
    arr = title_c.join(",");
    setCookie("readacctitle",arr,600);
    //alert(decodeURI(arr));
    arr=null;

    var url_c = urlac.split(",");
    if(url_c.length==maxnum+1)
    {
        url_c.shift();
    }
    url_c.push(url);
    urlac = url_c.join(",");
    setCookie("readaccurl",urlac,1800);
    return true;
}

function arrayToJson(o)
{
    var r = [];
    if (typeof o == "string") return "\"" + o.replace(/([\'\"\\])/g, "\\$1").replace(/(\n)/g, "\\n").replace(/(\r)/g, "\\r").replace(/(\t)/g, "\\t") + "\"";
    if (typeof o == "object")
    {
        if (!o.sort)
        {
            for (var i in o)
                r.push(i + ":" + arrayToJson(o[i]));
            if (!!document.all && !/^\n?function\s*toString\(\)\s*\{\n?\s*\[native code\]\n?\s*\}\n?\s*$/.test(o.toString))
            {
                r.push("toString:" + o.toString.toString());
            }
            r = "{" + r.join() + "}";
        } else {
            for (var i = 0; i < o.length; i++)
            {
                r.push(arrayToJson(o[i]));
            }
            r = "[" + r.join() + "]";
        }
        return r;
    }
    return o.toString();
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

function validate_username_check(value)
{
    return /^[\u0391-\uFFE5\w]+$/.test(value);
}

function validate_normal_string_check(value)
{
    return /^[\u0391-\uFFE5\w-_{}、，。：！？,.:!? ']+$/.test(value);
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
    var re = /^(\d+)\.(\d+)\.(\d+)\.(\d+)$/g //匹配IP地址的正则表达式
    if (re.test(strIP)) {
        if (RegExp.$1 < 256 && RegExp.$2 < 256 && RegExp.$3 < 256 && RegExp.$4 < 256) return true;
    }
    return false;
}

function isNull(str) {
    if (str == "") return true;
    var regu = "^[ ]+$";
    var re = new RegExp(regu);
    return re.test(str);
}

function isInteger(str) {
    var regu = /^[-]{0,1}[0-9]{1,}$/;
    return regu.test(str);
}

function checkMobile(s) {
    var regu = /^[1][0-9][0-9]{9}$/;
    var re = new RegExp(regu);
    if (re.test(s)) {
        return true;
    } else {
        return false;
    }
}

function isEmail(str) {
    var myReg = /^[-_A-Za-z0-9]+@([_A-Za-z0-9]+\.)+[A-Za-z0-9]{2,3}$/;
    if (myReg.test(str)) return true;
    return false;
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

function f_activeFix(){
    if($){
        if($.browser.webkit || $.browser.safari) {
            $("#fileToUpload").css("display","block");
        } else if($.browser.mozilla || $.browser.msie){
            $("#fileToUploadwapp").click(function(){
                $("#fileToUpload").click();
            });
        }
    }
}

function DateTime2Date(Datetime){
    return Datetime.replace(/ \d{2}:\d{2}:\d{2}/g,'');
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

function Upslide(n_clist,duration){
    if($.browser.msie) return false;
    if(n_clist){
        var n_first = n_clist[0];
        var length = n_clist.length;
        var max_height = 0;
        var a_height = new Array();
        if(length == 1) return false;
        $.each(n_clist, function(index,_node){
            if(index==length-1) return;
            a_height.push(_node.offsetHeight);
            max_height = max_height + _node.offsetHeight;
        });
        var currentHeight = 0;
        var plus = true;
        var i = 0;
        setInterval(function(){
            //debug("i="+i+",cu"+currentHeight);
            if(plus)
                currentHeight = currentHeight + a_height[i++];
            else
                currentHeight = currentHeight - a_height[--i];
            $(n_first).animate({
                marginTop:"-" + currentHeight + "px"
            },duration);
            if(currentHeight == max_height)plus = false;
            else if(currentHeight == 0)plus = true;
        },duration + 1500);
        return true;
    } else {
        return false;
    }
}

function Search(_var){
    window.open("/search/?q=" + _var);
}

function Serialize(obj){
    switch(obj.constructor){
        case Object:
            var str = "{";
            for(var o in obj){
                str += o + ":" + Serialize(obj[o]) +",";
            }
            if(str.substr(str.length-1) == ",")
                str = str.substr(0,str.length -1);
            return str + "}";
            break;
        case Array:
            var str = "[";
            for(var o in obj){
                str += Serialize(obj[o]) +",";
            }
            if(str.substr(str.length-1) == ",")
                str = str.substr(0,str.length -1);
            return str + "]";
            break;
        case Boolean:
            return "\"" + obj.toString() + "\"";
            break;
        case Date:
            return "\"" + obj.toString() + "\"";
            break;
        case Function:
            break;
        case Number:
            return "\"" + obj.toString() + "\"";
            break;
        case String:
            return "\"" + obj.toString() + "\"";
            break;
    }
    return false;
}

function generPasswordX(_rawPassword,_rawUsername){
    return hex_md5(hex_md5(_rawPassword)+_rawUsername);
}