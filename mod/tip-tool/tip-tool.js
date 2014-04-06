function Tiptool(){}
Tiptool.prototype = 
{
   modpath                  : "/mod/tip-tool/tip-tool-mod.html",
   msg_head_stateimage      : "",
   msg_head_state           : "",
   msg_body_suggest_ul_li   : new Array(),
   msg_body_suggest_ul_href : new Array(),
   init_is_runed            : false,
   init:function(msg_head_stateimage,msg_head_state,msg_body_suggest_ul_li,msg_body_suggest_ul_href)
   {
      /*
		 	* @para #msg_head_stateimage/image of tip(45px*45px)
		 	* @para #msg_head_state/big tip text
		 	* @para #msg_body_suggest_ul:
		 	* ----> @msg_body_suggest_ul_li<li>,@msg_body_suggest_ul_href<a>
		 	*/ 
      this.msg_head_stateimage      = msg_head_stateimage;
      this.msg_head_state           = msg_head_state;
      this.msg_body_suggest_ul_li   = msg_body_suggest_ul_li;
      this.msg_body_suggest_ul_href = msg_body_suggest_ul_href;
      this.init_is_runed=true;
   },
   load_option:function()
   {
      var scale=this.msg_body_suggest_ul_li.length>this.msg_body_suggest_ul_href.length?this.msg_body_suggest_ul_li.length:this.msg_body_suggest_ul_href.length;
      for(var i=0,nodes_ul=$("#msg_body_suggest_ul");i<scale;i++)
      {
         var $li="<li><strong>&gt;&gt;&nbsp;&nbsp;</strong><a href='"+this.msg_body_suggest_ul_li[i]+"'>"
         +this.msg_body_suggest_ul_href[i]+"</a></li>";
         //append <li>
         nodes_ul.append($($li));
      }
   },
	
   resize:function()
   {
      var doc          = document,layer = doc.getElementById('msgDiv'),
      clientWidth      = window.innerWidth/*W3C*/|| doc.documentElement.clientWidth/*std IE*/||doc.body.clientWidth/*IE quirk mode*/,
      clientHeight     = window.innerHeight || doc.documentElement.clientHeight || doc.body.clientHeight;
      layer.style.left = Math.round((clientWidth - $('#msgDiv').width()) / 2) + 'px';
      layer.style.top  = Math.round((clientHeight + doc.documentElement.scrollTop - $('#msgDiv').height()) / 2) + 'px';
   },
	
   show:function()
   {
      if(!this.init_is_runed)
      {
         alert('this script should run after the init()!');
         return;
      }
      var self=this;
      $.ajax
      ({
         url      : self.modpath,
         dataType : "html",
         cache    : true,
         success  : function(data)
         {
            //append HTML_module to body
            $('body').append($(data)).append($("<div id='bgDiv'></div>"));
					
            //set message_head
            $("#msg_head_state").html(self.msg_head_state);
            self.resize();

            //set img
            if(self.msg_head_stateimage == false) self.msg_head_stateimage=0;
            var reg=/^[0-2]+$/g;
            if(reg.test(self.msg_head_stateimage))
            {
               var _imgName="tipimg"+self.msg_head_stateimage.toString()+".png";
               //alert(_imgName);
               $('#msg_head_stateimage').css("background-image","url('/img/"+_imgName+"')");
            }
					
            //last setting
            $('#bgDiv').css('display','block');
            $('#msgDiv').fadeIn(450);
					
            //load the option list
            self.load_option();
         }
      });
   }
};
