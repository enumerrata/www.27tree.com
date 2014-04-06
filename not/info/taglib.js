(function(){
     if(!window.m){
          window['m'] = {}
     }
     var TagsLib = new Array("指针","类型","函数","深层","int","ansi","扩展名",
          "php","文件","function","复习资料","语言","注册表","修改","打开","表示","访问",
          "用户","正则表达式","匹配","高效率","笔记","文本","正则","解析","语言","病毒",
          "微软","危险","windows","服务器","用户","圆角","jquery","自适应","宽度","按钮",
          "http","jquery","插件","国产","c++","程序员","必读","清单","书目","泛型编程",
          "函数","编译器","c++","重载","流程","查找","android","手机品牌","系统","htc",
          "分布","智能手机","苏宁","京东","国美","物流","互联网","电商","php","程序员",
          "技能","函数","内容","java","伪静态","记录","实例","news","html","括号","static");
     window['m']['TagsLib'] = TagsLib;

     Array.prototype.unique = function()
     {
          var a = {};
          for(var i=0; i<this.length; i++){
               if(typeof a[this[i]] == "undefined")
                    a[this[i]] = 1;
          }
          this.length = 0;
          for(var i in a)
               this[this.length] = i;
          return this;
     }
})();