var LOCK_add_foll = false;
$(function(){
    $('#add-follow-btn').click(function(){
        if(!LOCK_add_foll){
            var ocval = $('#ocval').val();
            var target = $(this).attr('rel');
            var _n = $(this);
            $.post('/user/postc/add/add_following.php',{
                md:'oc',
                ocval : ocval,
                target : target,
                uid : getCookie('_uid')
            },function(re){
                debug(re);
                var R = String2Json(re);
                if(R.s == 1){
                    // success
                    _n.css('background','url(\'/user/sources/img/check.png\') left center no-repeat').html('关注成功');
                } else if(R.s == 0){
                    // 已经关注
                    LOCK_add_foll = true;
                    _n.css('background','url(\'/user/sources/img/remove.png\') left center no-repeat').html('你已是粉丝');
                } else if(R.s == 2){
                    // 未知系统错误
                    LOCK_add_foll = true;
                    _n.css('background','url(\'/user/sources/img/remove.png\') left center no-repeat').html('关注失败');
                }
            });
        }
    });
});
