function borderToggle(node,color1,color2) {
     dojo.query(node).onmouseover(function(e){
          dojo.style(this,"border-color",color1);
     }).onmouseout(function(e){
          dojo.style(this,"border-color",color2);
     });
}

function Hex_session_dojo(){
     this.uid = getCookie('_uid');
     this.username = getCookie('username');
}
Hex_session_dojo.prototype = {
     //@param false uid or username empty,may visiter
     constructor: Hex_session_dojo,
     onerror: function(error){
     //alert(error);
     },
     callback: function(data){},
     check: function(){
          var self = this;
          if (!checkBoth(self.uid, self.username)){
               self.callback(false);
               return;
          }
          dojo.xhrPost({
               url : "/mod/session/validate_cookie.php",
               postData : "uid="+self.uid+"&username="+self.username,
               load : function(data){
                    self.callback(data==1?true:false);
               }
          });
     }
};

function letter_remain(text){
     var max_num = dojo.byId("text_max_num").value;
     var num     = max_num-text.length;
     if(num<0) {
          dojo.byId("comment-content").value = text.substr(0,max_num);
          dojo.byId("tip-ems").innerHTML = 0;
     } else {
          dojo.byId("tip-ems").innerHTML = max_num-text.length.toString();
     }
}

function selectAll(value,classname) {
     dojo.query(".li-title>input,#select_all_top,#select_all_bottom").attr("checked",value);
}