$(function(){
    $('#query').focus(function(){
        $(this).parent().css('border-color','#4b8cf7');
    }).blur(function(){
        $(this).parent().css('border-color','#ccc');
    });
    $('.top-btn').hover(function(){
        $(this).addClass('top-btn-ho');
    },function(){
        if(!$(this).hasClass('tbnlock'))
            $(this).removeClass('top-btn-ho');
    });
});
function go_search(_key){
    var href = '/search/?q=' + encodeURI(_key) + '&t=' + $('#s_t').val();
    window.location.href = href; 
}
function search_enter(e){
    if(e.keyCode == 13){
        go_search($('#query').val());
    }
}