var lang = new Array();
var m_action = null;
var s_action = null;
var ss_ready = false;
var ss_input_limit = 120;
var TMP_SS = '<span class="dy-items"><a class="headwapper Shadow" href="/user/visit/${uid}"><img src="${ush}" width="45px" height="45px"></a><div class="dy-i-r"><b class="dy_usn"><a href="/user/visit/${uid}">${usn}</a></b> <span class="Gray">吐槽说：</span><div>${ctr}</div><span class="Gray block">刚刚</span></div><div class="clear"></div></span>';

dojo.addOnLoad(function(){

    m_action = dojo.byId('action').value;
    s_action = dojo.byId('sub_action').value;

    var img_preload = new ImgPreLoad();
    img_preload.load('/img/loading_19_13.gif');

    dojo.query('.left-nav-btn').onclick(function(evt){
        var T = evt.srcElement || evt.currentTarget;
        T.innerHTML = '<img src="/img/loading_19_13.gif" />';
    });

    var fun_hash = new Object();
    if(m_action == 'admin'){
        // admin >> S_ACTION works
        fun_hash = {
            index:m_index,
            submit_blog:m_submit_blog,
            alter_head:m_alter_head,
            alter_info:m_alter_info
        };
        fun_hash[s_action]();
    }
    else {
        fun_hash = {
            index:n_index,
            mytc:n_mytc,
            blogs:n_blogs,
            posts:n_posts,
            fans:n_fans,
            follows:n_follows
        };
        fun_hash[m_action]();
    }
    m_g();
});

function m_g(){
    dojo.query("#usr-head-wapp").onmouseover(function(){
        dojo.byId('usr-h-btn').style.display = 'block';
    }).onmouseout(function(){
        dojo.byId('usr-h-btn').style.display = 'none';
    });
    dojo.query(".addfoll-btn").onclick(function(e){
        var _n = e.currentTarget || e.target;
        var _u = parseInt(dojo.attr(_n,'rel'));
        t.sns.add_foll(parseInt(getCookie('_uid')),_u,'tc',dojo.byId('tc-val').value,{
            before : function(){
                $(_n).html('<img src="/img/loading_19_13.gif" align="absmiddle"/>');
            },
            load : function(R){
                if(R.s == 1){
                    $(_n).html('<img src="/user/sources/img/check.png" align="absmiddle"/>');
                } else {
                    $(_n).html('<img src="/user/sources/img/remove.png" align="absmiddle"/>');
                }
            }
        });
    });
    (function(){
        var count = $('.expbar-m').html().split(' / ');
        var pec = count[0] / count[1];
        var width = $('.expbar-w').width() * pec;
        //if(width<=77) $('.expbar-m').css('color','#111');
        $('.expbar-i').animate({
            width:width
        },300);
    })();
}

function m_alter_info(){
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

    dojo.query('#ami-save-data-btn').onclick(function(evt){
        var btn = evt.srcElement || evt.currentTarget || evt.target;
        var low = loadingWapper('am-if-wapp');

        dojo.xhrPost({
            url : "/user/data/userinfo-post.php",
            postData : dojo.formToQuery(dojo.byId("am-if-log-form")),
            load : function(data){
                var json = String2Json(data);
                switch(json['s']){
                    case 0:
                    case 1:
                        $('#alert-bar').show();
                        $(low).remove();
                        threadRun(function(){
                            $('#alert-bar').slideUp(300);
                        },1000);
                //btn.innerHTML = "修改成功!";
                }
            }
        });
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
                //加载用户资料
                loadUserinfo();
            }
        });
    });
}

function m_alter_head(){
    // 事件绑定
    dojo.query('div.am-df-hwp').onmouseover(function(evt){
        var node = evt.currentTarget || evt.target;
        dojo.style(node,'border','1px solid #900');
        dojo.style(dojo.query('a',node)[0],'display','block');
    }).onmouseout(function(evt){
        var node = evt.currentTarget || evt.target;
        if(!$(node).hasClass('cur-am-df')){
            dojo.style(node,'border','1px solid #FFF');
        }
        dojo.style(dojo.query('a',node)[0],'display','none');
    });

    dojo.query('a.am-df-btn').onclick(function(evt){
        var node = evt.secElement || evt.target;
        var img_name = $(node).attr('imgname');

        $('.cur-am-df > div').remove();

        $('.cur-am-df').removeClass('cur-am-df').css('border','1px solid #FFF');
        $(node.parentNode).addClass('cur-am-df');

        dojo.style(node.parentNode,'border','1px solid #900');

        dojo.xhrPost({
            url : '/user/postc/alterDefaultHeadimg.php',
            postData : dojo.objectToQuery({
                imgname:img_name
            }),
            load : function(rs){
                var R = String2Json(rs);
                if(R.s == 1){
                    var su_sign = dojo.toDom('<div class="am-su-si"></div>');
                    var newUsh = "/minbbs/default/headimg/" + img_name;
                    $(node.parentNode).append(su_sign);
                    $("#uc-ush").attr("src",newUsh);
                    setCookie('ush',newUsh,259200);
                    $('#ms-btn-ush img').attr('src',newUsh);
                } else {
                    alert('头像修改失败!');
                }
            }
        });
    });

    dojo.query('#am-head-sw').onclick(function(evt){
        var _n1 = evt.currentTarget || evt.target;
        dojo.style(_n1.parentNode,'display','none');
        dojo.style(dojo.byId('al-head-list'),'display','none');
        dojo.style(dojo.byId('al-head-pl'),'display','block');
        dojo.style(dojo.byId('am-head-sm').parentNode,'display','block');
        // load resources
        $.getScript('/jss/jUploader.min.js', function(){
            $.jUploader({
                button: 'am-head-sm', // 这里设置按钮id
                action: '/user/head-upload/uploadify.php',
                onUpload : function(){
                    $('#am-head-sm').parent().hide();
                    $('#al-head-lbar').show();
                },
                onComplete: function (_f, R) {
                    $('#al-head-lbar').hide();
                    $('#alert-bar').show();
                    if(R.s == 1){
                        // su
                        var scale = null;
                        $('#am-imgpre').attr('src',R.pic);
                        window.imgcrop = R.pic;
                        if(R.size['width'] >= 618){
                            $('#am-imgpre').attr('width','100%');
                            scale = R.size['width']/618;
                        } else {
                            $('#am-imgpre').attr('width',R.size['width']);
                            scale = 1;
                        }
                        dojo.byId('al-scale').value = scale;
                        dojo.byId('al-src').value = encodeURI(R.pic);
                        dojo.byId('al-imgn').value = R.imgn;
                        $('#am-head-save').parent().show();
                        // 图片上传成功 开始裁剪操作
                        $.getScript('/user/head-upload/jquery.Jcrop.min.js', function() {
                            $('#am-imgpre').Jcrop({
                                aspectRatio : 1/1,
                                maxSize:[350/scale,350/scale],
                                minSize:[100/scale,100/scale],
                                onChange:showCoords,
                                onSelect:showCoords,
                                onRelease:clearCoords
                            // showCoords clearCoords 在 jquery.Jcrop.min.js
                            });
                            dojo.query('#am-head-save').onclick(function(evt){
                                var post_data = dojo.formToObject('cropdata');
                                debug(post_data);
                                if(post_data.w == '0' || post_data.h == '0'){
                                    post_data.w = 100;
                                    post_data.h = 100;
                                }
                                post_data.uc_valicode = dojo.byId('tc-val').value;
                                dojo.xhrPost({
                                    url : '/user/postc/resize_and_save_ush.php',
                                    postData : dojo.objectToQuery(post_data),
                                    load : function(rs){
                                        var R = String2Json(rs);
                                        if(R.s == 1){
                                            // 自定义头像修改
                                            alert('头像修改成功!');
                                            window.location = '/user/' + getCookie('_uid') + '/index.html';
                                            setCookie('ush',R.newush,259200);
                                            $('#ms-btn-ush img').attr('src',R.newush);
                                        }
                                    }
                                });
                            });
                        });
                    } else {
                    // failed
                    }
                // response >> Json_obj
                }
            });
        })
    });
//dojo.query('#am-head-sw')[0].click();
}

function m_submit_blog(){
    require(["dojo/query","dojo/dom-attr","dojo/dom-style"], function(query, domAttr,domStyle){
        domStyle.set('main_right',{
            display : 'none'
        });
        domStyle.set('main_body',{
            'float' : 'none',
            'width' : 'auto'
        });
    });

    window.sa_editor = null;
    loadKindEditor('text_sub',{
        height:'510px',
        items : 1
    },function(editor){
        sa_editor = editor;
        sa_editor.html('');
    });

    var blog_type_select = new Select({
        name : 'blog_type',
        node : 'sd-select-i',
        data : {
            编程技术:0,
            新闻资讯:1,
            心情日记:2,
            职业生涯:3
        },
        width: 100
    });

    var raw_tb = new ToggleButton({
        name : 'raw_tb',
        id : 'toggle-i',
        data : {
            转载:0,
            原创:1
        }
    });

    // 按钮事件绑定

    dojo.query('#rm-blog-sm-btn').onclick(function(){
        if(getCookie(getCookie('_uid')+"_upload_block")=="_block"){
            // 发表时限
            alert('\u8bf7休息一会再发表文章吧！');
            return;
        }

        var post_data = new Object();
        post_data.content = fix_edit_p(sa_editor.html());
        post_data.title   = dojo.byId("rm-title-sm").value;
        post_data.type    = blog_type_select.getValue();
        post_data.origin  = raw_tb.getValue();
        post_data.tc_val_code = dojo.byId('tc-val').value;
        if(post_data.content =="" || post_data.title =="") return;

        // 开始数据传输
        var loading_wapp = loadingWapper('rm-smblog-wapp'); /*loading*/
        dojo.xhrPost({
            url : '/user/api/push/push_newBlog.php',
            postData : dojo.objectToQuery(post_data),
            load : function(data){
                $(loading_wapp).remove();/*loading_end*/
                debug(data);
                var R = String2Json(data);
                if(R.s == 1){
                    // su
                    $('#r-sws-link').attr('href',R.href);
                    dojo.byId('rm-smblog-wapp').style.display = 'none';
                    dojo.byId('r-sws-title').innerHTML = post_data.title;
                    dojo.byId('r-sws-ctx').innerHTML = sa_editor.html();
                    $('#rm-smblog-wapp-su').show();
                } else {
                    // fa
                    alert('对不起，发表失败，我们将尽快修复');
                }
            }
        });
    });
}

function m_index(){

}

function n_follows(){

}

function n_fans(){

}

function n_posts(){

}

function n_mytc(){

}

function n_blogs(){
    /**
 * 个人中心 博客管理模块
 */
    var _Lock = false;
    require(["dojo/query","dojo/dom-attr","dojo/dom-style"], function(query, domAttr,domStyle){

        query('.bg-editbtn').onclick(function(node){
            // edit
            var Btn = this;
            if(!_Lock && (_Lock = true)){
                var blogid     = parseInt(domAttr.get(this,'data-blogid'));
                var n_bgwapper = dojo.byId('bg-wapp-'+blogid);
                var n_title    = dojo.query('.bg-title',n_bgwapper)[0];
                var n_content  = dojo.byId('bg-content-'+blogid);
                var n_bgbar    = dojo.query('.bg-bar',dojo.byId('bg-wapp-'+blogid))[0];
                var tmp_node   = dojo.clone(n_bgwapper);

                Btn.innerHTML  = '<img align="center" style="margin-top:-2px;" src="/img/loading_19_13.gif" />';
                $(n_content).css('width','99.7%');
                loadKindEditor('bg-content-'+blogid,{
                    height:'350px'
                },function(editor){
                    n_title.innerHTML = '<span class="sdText sdTextMin" style="margin-bottom:5px;"><input type="text" id="805d62459b82c8e9" value="'+ n_title.innerText +'" /></span>';
                    $(n_bgwapper).append('<div style="display:table;width:100%;margin-top:5px;"><a class="next-cp" id="f7fbbc083dda18d6" href="javascript:;" style="width:50%;display:table-cell;height:22px;line-height:22px;font-size:13px;letter-spacing:3px;color:green;">保存</a>'
                        +'<a class="next-cp" id="f7fbbc083dda18d5" href="javascript:;" style="width:50%;display:table-cell;margin-left:5px;height:22px;line-height:22px;font-size:13px;letter-spacing:3px;">取消</a></div>');
                    $(n_bgbar).hide();

                    editor.html('Loading...');

                    dojo.xhrGet({
                        url : '/user/postc/get/get_blogContent.php?id=' + blogid,
                        load:function(bct){
                            _Lock = false;
                            editor.html(bct);
                            dojo.query('#f7fbbc083dda18d6').onclick(function(){
                                this.innerHTML = '<img align="center" style="margin-top:-3px;" src="/img/loading_19_13.gif" />';
                                if(!_Lock){
                                    var postData = new Object();
                                    postData.bid = blogid;
                                    postData.title = dojo.byId('805d62459b82c8e9').value
                                    postData.content = editor.html();
                                    dojo.xhrPost({
                                        url : '/user/postc/alter/alter_blog.php',
                                        postData : dojo.objectToQuery(postData),
                                        load : function(res){
                                            var R = String2Json(res);
                                            if(R.s == 1){
                                                alert('编辑成功!');
                                                window.location.href = window.location.href;
                                            } else {
                                                alert('系统出错!请联系管理员');
                                            }
                                        }
                                    });
                                }
                            });
                            dojo.query('#f7fbbc083dda18d5').onclick(function(){
                                n_bgwapper.innerHTML = tmp_node.innerHTML;
                            });
                        }
                    });

                });
            } else {
            ;
            }
        });
        query('.bg-delbtn').onclick(function(){
            /**
             * 删除文章
             */
            var Btn = this;
            if(confirm('你确定要删除这篇文章吗?')){
                var blogid = domAttr.get(this,'data-blogid');
                dojo.xhrPost({
                    url : '/user/postc/del/del_blog.php',
                    postData:dojo.objectToQuery({
                        blogid : blogid
                    }),
                    load:function(res){
                        var R = String2Json(res);
                        if(R.s == 1){
                            $('#bg-wapp-'+blogid).slideUp(200);
                        } else {
                            alert('删除失败!');
                        }
                    }
                }
                );
            }
        });
    });
}

function n_index(){
    /**
     * 个人中心首页 调用模块
     */
    dojo.query('#etc-btn').onclick(sendShuoShuo);
    // 编辑器输入事件
    dojo.query('#shuoshuoTx').onkeyup(ss_count);
    dojo.query('#shuoshuoTx').onfocus(function(evt){
        index_emotion_close();
    });
    dojo.query('#uc-loadmore-btn').onclick(function(evt){
        //@desc 加载更多按钮绑定
        var dy_page_lite = parseInt(dojo.byId('dy-pl').value);
        var tc_val_code = dojo.byId('tc-val').value;
        var btn = evt.srcElement || evt.target;
        var btn_tmp_innerhtml = btn.innerHTML;
        btn.innerHTML = '<img src="/img/loading_19_13.gif" />';
        dojo.xhrPost({
            url : '/user/postc/uc_dy_load_more.php',
            postData : dojo.objectToQuery({
                tc_val_code:tc_val_code,
                page : dy_page_lite + 1
            }),
            load : function(res){
                if(res != 0){
                    btn.innerHTML = btn_tmp_innerhtml;
                    dojo.byId('dy-pl').value = parseInt(dojo.byId('dy-pl').value) + 1;
                    $('#uc-dy-list').append(dojo.toDom(res));
                } else {

                }
            }
        });
    });
    dojo.query('#uc-tc-emo').onclick(index_emotion_click);
    dojo.query('#uc-tc-pic').onclick(index_picture_click);
    dojo.query('#sn-en-close').onclick(index_emotion_close);
    $('#main_body').append($("<a class='toTopbtn' href='javascript:;' onclick='goTop()'></a>"));
}