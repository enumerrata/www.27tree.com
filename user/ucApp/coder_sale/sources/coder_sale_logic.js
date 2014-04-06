var G_do_target = null;
var G_do_target_usn = null;
var G_do_target_ush = null;
var TPL_Slave_free = false;
var TPL_Slave_my   = false;
var max_for_hid = 7;
var TMP_dy = '<div style="border-bottom:1px dashed #ccc;margin:2px 10px;padding:5px 0;"><a class="headwapper"><img src="${0}" width="32px" height="32px"/></a><span style="line-height:20px;display:block;margin-left:45px;font-size:14px;"><a href="/user/ucApp/coder_sale/?uid=${1}">${2}</a> <span class="block">被我${3}&nbsp;<span class="Gray">${4}</span></span></span><span class="clear"></span></div>';
var show_all_btn_lock = false;
dojo.require('dojo.string');
$(function(){
    var SlaveNum = parseInt($('#info-Slavenum').html());
    if(SlaveNum > 5) $('#show-all-btn').css('display','block');
    $('#show-all-btn').click(function(){
        if(!show_all_btn_lock){
            $('.slave-item:gt('+max_for_hid+')').show(300);
            $(this).html('&and;收起');
            show_all_btn_lock = true;
        } else {
            $('.slave-item:gt('+max_for_hid+')').hide(300);
            $(this).html('&or;显示所有');
            show_all_btn_lock = false;
        }
    });
    $('.slave-item:gt('+max_for_hid+')').hide();
    $('.buyFreer').click(function(e){
        var Ele = e.target || e.srcElement;
        var _target = $(Ele).attr('rel');
        var exclude_uid = new Array();
        $.each($('.free-slave-uid'),function(index,_node){
            exclude_uid.push($(_node).val());
        });
        $.post('/user/ucApp/coder_sale/postc/buyFreer.php',{
            target : _target,
            exclude : exclude_uid.join(',')
        },function(res){
            var S = String2Json(res);
            if(S['s'] == 1){
                //$('#sector-free_slave').prepend($(S['tpl']));
                $.post('/user/ucApp/coder_sale/postc/get_my_slave_tpl.php',{
                    uid:_target
                },function(rex){
                    var _node = $(rex);
                    // 事件绑定
                    $(_node).find('.torture-btn').click(do_torture);
                    $(_node).find('.sl-back-btn').click(slave_torture_btn_back);
                    $('#sector-my_slave').prepend(_node);
                    var _parent = $(Ele).parents('.freeSlave-items');
                    _parent.hide();
                    tip_side('你刚刚购买了一个奴隶');
                });
            }
        });
    });
    
    $('.sl-command-btn').click(function(e){
        var Ele = e.target || e.srcElement;
        $.post('/user/ucApp/coder_sale/postc/do_tortute.php',{
            tcode:$(Ele).attr('cmc'),
            target:G_do_target
        },function(sr){
            var ct = $(Ele).html();
            var _node = dojo.string.substitute(TMP_dy,[G_do_target_ush,G_do_target,G_do_target_usn,ct,'刚刚']);
            _node = $(_node);
            $('#sector-dy>span:eq(0)').after(_node);
            $(_node).hide().slideDown(300);
        });
    });
    
    $('.slave-item').hover(function(){
        $(this).css('border-color','#aaa')
    },function(){
        $(this).css('border-color','#ccc')
    });
    $('.torture-btn').click(do_torture);
    $('.sl-back-btn,.sl-back-btn2').click(slave_torture_btn_back);
});

function slave_torture_btn_back(e){
    if(!show_all_btn_lock)
        $('.slave-item:lt(6)').show();
    else 
        $('.slave-item').show();
    $('.sl-command-tab').hide();
    $('.sl-back-btn').hide();
}

function do_sl_command($target,$code,_node){
    debug(_node);
}

function freeMyself(){
    $.post('/user/ucApp/coder_sale/postc/free_self.php',{
        uid:1
    },function(res){
        debug(res);
    });
}

function tip_side(command){
    if(false == command){
        $('tip-side').slideUp(300);
    } else {
        $('.tip-side').show().find('span').html(command);
    }
}

function do_torture(e){
    var Ele = e.target || e.srcElement;
    G_do_target = parseInt($(Ele).attr('rel'));
    G_do_target_usn = $(Ele).parent().parent().find('.my-slave-usn').html().toString();
    G_do_target_ush = $(Ele).parent().parent().parent().find('a.headwapper>img').attr('src');
    $('.slave-item').hide();
    $(Ele).parents('.slave-item').eq(0).show();
    $('.sl-command-tab').fadeIn(300);
    $('.sl-back-btn').css('display','inline-block');
}

function free_slave(target){
    if(confirm('以你宽大的胸怀,他将重新获得自由!')){
        if(isInteger(target)){
            $.post('/user/ucApp/coder_sale/postc/free_slave.php',{
                target : target
            },function(response){
                debug(response);
            });
        } else return;
    }else return;
}