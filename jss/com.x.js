(function(){
    if(!window.t){
        window['t'] = {}
    }
    
    
    
    // -------------------------------@ VALIDATE
    window['t']['validate'] = {};

    function validate_username_check(value){
        return /^[\u0391-\uFFE5\w]+$/.test(value);
    }
    window['t']['validate']['username'] = validate_username_check;

    function validate_normal_string_check(value){
        return /^[\u0391-\uFFE5\w-_{}、，。：！？,.:!?']+$/.test(value);
    }
    window['t']['validate']['string'] = validate_normal_string_check;

    function isInteger(s) {
        return /^[-]{0,1}[0-9]{1,}$/.test(s);
    }
    window['t']['validate']['intger'] = isInteger;
    function checkMobile(s) {
        return /^[1][0-9][0-9]{9}$/.test(s);
    }
    window['t']['validate']['phone'] = checkMobile;
    function isEmail(b) {
        return /^[-_A-Za-z0-9]+@([_A-Za-z0-9]+\.)+[A-Za-z0-9]{2,3}$/.test(b);
    }
    window['t']['validate']['email'] = isEmail;
    // -------------------------------@ VALIDATE
    

    window['t']['json'] = {};//@注册json父级
    function String2Json(string){
        return eval("("+string+")");
    }
    window['t']['json']['String2Json'] = String2Json;

    function free(_target){
        _target = null;
    }
    window['t']['free'] = free;

    function debug(_message){
        console.log(_message);
    }
    window['t']['debug'] = debug;

    window['t']['cookie'] = {};//@注册cookie父级

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
    window['t']['cookie']['getCookie'] = getCookie;

    function setCookie(c_name, value, expiredays) {
        var exdate = new Date();
        exdate.setSeconds(exdate.getSeconds() + expiredays);
        document.cookie = c_name + "=" + escape(value) + ((expiredays == null) ? "": "; expires=" + exdate.toGMTString()+"; path=/");
    }
    window['t']['cookie']['setCookie'] = setCookie;

    function delCookie(name) {
        var date = new Date();
        date.setTime(date.getTime() - 10000);
        document.cookie = name + "=a; expires=" + date.toGMTString() + "; path=/";
    }
    window['t']['cookie']['delCookie'] = delCookie;

    function usercheck(){
        var cookie_username = getCookie('username');
        var uid = getCookie('_uid');
        if ((cookie_username != null && cookie_username != "") || (uid != null && uid != "")){
            return true;
        } else return false;
    }
    window['t']['cookie']['userCheck'] = usercheck;

    window['t']['thread'] = {};//@注册thread父级

    function threadRun(fun,timeout){
        if(window.setTimeout)
            window.setTimeout(fun, timeout);
        else fun();
    }
    window['t']['thread']['run'] = threadRun;
     
    /**
      * @SNS
      */
    window['t']['sns'] = {};
    function sns_AuthCheck(callback){
        $.post('/user/postc/check/auth_check.php',{},function(res){
            callback(t.json.String2Json(res));
        });
    }
    window['t']['sns']['AuthCheck'] = sns_AuthCheck;
     
    function sns_add_follow(_uid,_target,_md,_code,cb){
        if(!t.validate.intger(_uid) || !t.validate.intger(_target)){
            return false;   
        } else {
            _md = _md == 'oc' ? _md : _md = 'tc' ? _md : 'oc';
            var opt = {};
            opt.uid = _uid;
            opt.target = _target;
            opt.md = _md;
            if(_md == 'oc') opt.ocval = _code; else opt.tcval = _code;
            cb.before();
            $.post('/user/postc/add/add_following.php',opt,function(res){
                cb.load(t.json.String2Json(res));
            });
            return true;
        }
    }
    window['t']['sns']['add_foll'] = sns_add_follow;
})();

               /*var opts = {
                    lines: 25, // The number of lines to draw
                    length: 60, // The length of each line
                    width: 5, // The line thickness
                    radius: 20, // The radius of the inner circle
                    rotate: 5, // The rotation offset
                    color: '#000', // #rgb or #rrggbb
                    speed: 1, // Rounds per second
                    trail: 60, // Afterglow percentage
                    shadow: true, // Whether to render a shadow
                    hwaccel: true, // Whether to use hardware acceleration
                    className: 'spinner', // The CSS class to assign to the spinner
                    zIndex: 200000, // The z-index (defaults to 2000000000)
                    top: 'auto', // Top position relative to parent in px
                    left: 'auto' // Left position relative to parent in px
               };
               var target = document.getElementById('user-body');
               var spinner = new Spinner(opts).spin(dojo.query("#user-body")[0]);*/