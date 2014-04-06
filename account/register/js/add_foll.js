var sugg_set = new Array();
$(function(){
    $('.ug-mapp').hover(function(){
        $(this).addClass('Shadow');
        $(this).addClass('ug-mapp-ho');
    },function(){
        if($(this).hasClass('Shadow')){
            $(this).removeClass('Shadow');
            $(this).removeClass('ug-mapp-ho');
        }
    }).click(function(){
        var uid = parseInt($(this).attr('rel'));
        if($(this).hasClass('ug-mapp-click')){
            // del
            $(this).removeClass('ug-mapp-click');
            sugg_set.remove(dojo.indexOf(sugg_set,uid));
        } else {
            // add
            $(this).addClass('ug-mapp-click');
            sugg_set.push(uid);
        }
    });
    $('.ug-mapp').click();
    $('#add-fol-btn').click(function(){
        $(this).html('<span class="add-fol-su"></span>');
        dojo.xhrPost({
            url : '/account/register/postc/add_foll.php',
            postData : 'data=' + sugg_set.join('|'),
            load : function(rs){
                var R = String2Json(rs);
                window.location.href='/user/' + getCookie('_uid');
            }
        });
    });
});
