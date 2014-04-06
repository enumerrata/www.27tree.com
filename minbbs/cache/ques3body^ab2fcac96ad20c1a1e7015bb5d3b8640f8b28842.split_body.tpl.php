<?php /*%%SmartyHeaderCode:149000243251a014bb434ad6-73959172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab2fcac96ad20c1a1e7015bb5d3b8640f8b28842' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/index/split_body.tpl',
      1 => 1369445251,
      2 => 'file',
    ),
    '455dbefeb94c683cb01fb80bbd38046ba3c4f078' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/index/editor/ques_editor.tpl',
      1 => 1363576552,
      2 => 'file',
    ),
    'e4fb10e19d067c551555642fe0ed73148056b6f6' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/index/sm_guss/ques.tpl',
      1 => 1363576553,
      2 => 'file',
    ),
    '22d1643e793a2fe27cb30c1ecff58342c4f8febd' => 
    array (
      0 => '/www/users/itsrcs.com/templates/stat_code.php',
      1 => 1360988927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149000243251a014bb434ad6-73959172',
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d60e682989b4_19590128',
  'has_nocache_code' => false,
  'cache_lifetime' => 60,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d60e682989b4_19590128')) {function content_52d60e682989b4_19590128($_smarty_tpl) {?>
<div class="ps-left" style="width:750px;float:left;z-index:0;position:relative;">

    <!--编辑器-->
    <div class="ps-items" id="ps-sm-wapper">
    <input type="hidden" value="0" id="sid"/>
    <span class="sdText" style="margin-bottom:10px;">
        <input type="text" value="" id="post-sm-title" placeholder="请输入标题"/>
    </span>
    <textarea id="ps-editor" style="width:99.8%;display:none;margin-bottom:10px;"></textarea>
    <a class="next-cp" style="margin-top:10px;" href="javascript:;" id="ps-submit-btn">发布问题</a>
</div>
    <!--编辑器-->
    <!-- 帖子列表 -->
    <div class="ps-items Shadow" id="ps-post-list">
        <div class="or-alert">
            <span>敏而好学，不耻下问。——《论语·公冶长》</span>
        </div>
        <!--页码 start-->
        <div class="sp-page-wapp" id="pg-top"><a href="/minbbs/ques/2.html" class="s-pages-i borderR10 Shadow">&#19978;&#19968;&#39029;</a><a href="/minbbs/ques/1.html" class="s-pages-i borderR10 Shadow">1</a><a href="/minbbs/ques/2.html" class="s-pages-i borderR10 Shadow">2</a><a href="/minbbs/ques/3.html" class="s-pages-i s-pages-cur borderR10 Shadow">3</a></div>
        <!--页码 end-->
        <div id="ps-list">
            <div class="ps-list-items"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/q_a/question/2-7-1-37.html">LOL赵信如何出装</a></span><span class="Gray">由 <a href="/user/visit/2">koodo</a> 发布于 2013年2月24日 12:51</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">441</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">2</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/73"><img src="/user/data/head-img/73_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/q_a/question/0-5-2-5.html">标题不短的提问</a></span><span class="Gray">由 <a href="/user/visit/73">_后觉</a> 发布于 2012年10月22日 21:47</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">807</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">2</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/29"><img src="/minbbs/default/headimg/default4.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/q_a/question/4-4-1-4.html">测试线，，今天中午吃什么</a></span><span class="Gray">由 <a href="/user/visit/29">human</a> 发布于 2012年10月22日 11:30</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">336</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">1</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/q_a/question/1-1-2-41.html">Android如何实现阴影</a></span><span class="Gray">由 <a href="/user/visit/2">koodo</a> 发布于 2013年3月13日 12:33</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">297</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">1</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/q_a/question/3-3-0-3.html">模糊或过于简单的标题会被降低排位</a></span><span class="Gray">由 <a href="/user/visit/2">koodo</a> 发布于 2012年10月20日 18:47</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">837</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">3</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/66"><img src="/user/data/head-img/66_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/q_a/question/3-3-1-43.html">看视频的广告</a></span><span class="Gray">由 <a href="/user/visit/66">影子</a> 发布于 2013年3月20日 21:02</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">433</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">1</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/66"><img src="/user/data/head-img/66_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/q_a/question/4-4-2-44.html">播放视频时的声音</a></span><span class="Gray">由 <a href="/user/visit/66">影子</a> 发布于 2013年3月20日 21:06</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">396</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">2</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/29"><img src="/minbbs/default/headimg/default4.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/q_a/question/0-5-0-45.html">PV</a></span><span class="Gray">由 <a href="/user/visit/29">human</a> 发布于 2013年3月25日 15:46</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">565</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">1</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/442"><img src="/minbbs/default/headimg/default17.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/q_a/question/0-5-1-55.html">base64 加密是什么原理</a></span><span class="Gray">由 <a href="/user/visit/442">test223</a> 发布于 2013年4月28日 16:42</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">271</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">1</b>回复</span></div></div><div class="clear"></div></div>            <div class="clear"></div>
        </div>
        <!--页码 start-->
        <div class="sp-page-wapp"><a href="/minbbs/ques/2.html" class="s-pages-i borderR10 Shadow">&#19978;&#19968;&#39029;</a><a href="/minbbs/ques/1.html" class="s-pages-i borderR10 Shadow">1</a><a href="/minbbs/ques/2.html" class="s-pages-i borderR10 Shadow">2</a><a href="/minbbs/ques/3.html" class="s-pages-i s-pages-cur borderR10 Shadow">3</a></div>
        <!--页码 end-->
    </div>
</div>
<div class="ps-right" style="margin-left:760px;">

    

    <div class="ps-items Shadow borderR5" style="text-align:center;line-height:25px;">
    <h1 style="font-size:18px;">
        有什么技术问题吗?
    </h1>
    <a class="next-cp" href="javascript:;" id="ps-newpost-btn" style="width:60%;margin:0 auto;margin-top:20px;">
        <span style="display:inline-block;padding-left:20px;background:url('/user/sources/img/help.png') left 55% no-repeat;">
            发表提问
        </span>
    </a>
</div>
    
    <div class="ps-items borderR5">
        <span class="RedBar">
            <span class="RedBar-in">热门主题</span>
        </span>
        <div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/341"><img src="/user/data/head-img/341_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/q_a/question/0-0-2-20.html">来晒工资啦,看看谁最低</a></div><span class="Gray">12 / 658</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/q_a/question/4-9-1-49.html">有天学校门口有400人要打你 你想说什么 仅限4个字</a></div><span class="Gray">10 / 510</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/q_a/question/2-2-1-22.html">大家都发发问题吧,在线问答这个都很少人用啊</a></div><span class="Gray">9 / 528</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/250"><img src="http://qzapp.qlogo.cn/qzapp/100276764/F0CC476378D4F8A410ED78C10D009949/100" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/q_a/question/4-9-0-9.html">为什么这里的人不怎么活跃呢</a></div><span class="Gray">8 / 1236</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/306"><img src="/user/data/head-img/306_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/q_a/question/1-6-1-16.html">为什么别人都说HTML很好学</a></div><span class="Gray">8 / 707</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/q_a/question/1-6-0-6.html">为什么 ++[[]][+[]]+[+[]] = 10？</a></div><span class="Gray">6 / 1153</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/78"><img src="/user/data/head-img/78_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/q_a/question/3-8-2-38.html">来请教请教！！！！！！！！！</a></div><span class="Gray">6 / 567</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/3"><img src="/user/data/head-img/3_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/q_a/question/1-6-0-36.html">什么是XSS攻击，求解答</a></div><span class="Gray">5 / 579</span></div></div>    </div>
</div>
<div class="clear"></div>
</div>
<span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
</body>
</html><?php }} ?>