;
(function($){
     $.fn.extend({
          "zj_ppt":function(value){
               //默认参数定义
               var $this = $(this);
               value = $.extend({
                    "time":2000,		//间隔变化动画时间
                    "con":0,
                    "sto":true,
                    "count":"count",	//切换小图的父级class名字
                    "src":"src",		//切换小图片路径
                    "src_cur":"src_cur"	//当前切换小图片路径
               },value);

               //图片切换函数
               function autopic(){
                    $("li",$this[0]).hide();
                    $("li:eq("+value.con+")",$this[0]).fadeIn(1000);
                    //$(value.count).find("ul li img").attr("src",value.src);
                    //$(value.count).find("ul li img:eq("+value.con+")").attr("src",value.src_cur);
                    if(value.con>$("li",$this[0]).length-2){
                         value.con = 0;
                    }else{
                         value.con += 1;
                    }
               }

               //每间隔多少时间执行一次图片切换
               function sett(){
                    if(value.sto){
                         autopic()
                         };
                    setTimeout(sett,value.time);
               }

               //鼠标悬停时切换图片，并停止自动切换
               /*$(value.count).find("ul li").hover(function(){
                    var _index = $(this).index();
                    value.con = _index;
                    value.sto = false;
                    autopic();
               },function(){
                    var _index = $(this).index();
                    value.sto = true;
                    value.con = _index;

               });*/
               sett();
               //反回原对像，以便连缀JQuery的其它方法
               return $this;
          }
     });
})(jQuery)