<?php /*%%SmartyHeaderCode:2876352d652b4aa1306-27765267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce3d7068228020927b0faa92893f9263f0a7c9db' => 
    array (
      0 => 'E:\\_web\\27tree\\minbbs\\templates\\index\\split_body.tpl',
      1 => 1369445250,
      2 => 'file',
    ),
    '742b77f29a890743ef67fe1bf1cfe139625005cd' => 
    array (
      0 => 'E:\\_web\\27tree\\minbbs\\templates\\index\\editor\\default_editor.tpl',
      1 => 1363576552,
      2 => 'file',
    ),
    'b0149386a50660ac7688bbb13c1701fe962cbfb1' => 
    array (
      0 => 'E:\\_web\\27tree\\minbbs\\templates\\index\\sm_guss\\tech.tpl',
      1 => 1363576552,
      2 => 'file',
    ),
    'fb8c740d470c5c754c0319bcef74d0d0ce89ad01' => 
    array (
      0 => 'E:\\_web\\27tree\\templates\\stat_code.php',
      1 => 1360988926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2876352d652b4aa1306-27765267',
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52f8d1f1757f89_90218564',
  'has_nocache_code' => false,
  'cache_lifetime' => 60,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8d1f1757f89_90218564')) {function content_52f8d1f1757f89_90218564($_smarty_tpl) {?>
<div class="ps-left" style="width:750px;float:left;z-index:0;position:relative;">

    <!--编辑器-->
    <div class="ps-items" id="ps-sm-wapper">
    <input type="hidden" value="1" id="sid"/>
    <span class="sdText" style="margin-bottom:10px;">
        <input type="text" value="" id="post-sm-title" placeholder="请输入标题"/>
    </span>
    <textarea id="ps-editor" style="width:99.8%;display:none;margin-bottom:10px;"></textarea>
    <a class="next-cp" style="margin-top:10px;" href="javascript:;" id="ps-submit-btn">马上发表</a>
</div>
    <!--编辑器-->
    <!-- 帖子列表 -->
    <div class="ps-items Shadow" id="ps-post-list">
        <div class="or-alert">
            <span>我们必须与其它生命共同分享我们的地球。——雷切尔.卡森</span>
        </div>
        <!--页码 start-->
        <div class="sp-page-wapp" id="pg-top"></div>
        <!--页码 end-->
        <div id="ps-list">
                        <div class="clear"></div>
        </div>
        <!--页码 start-->
        <div class="sp-page-wapp"></div>
        <!--页码 end-->
    </div>
</div>
<div class="ps-right" style="margin-left:760px;">

    

    <div class="ps-items Shadow borderR5" style="text-align:center;line-height:25px;">
    <h1 style="font-size:18px;">
        投我以木瓜，报之以琼瑶。
    </h1>
    <a class="next-cp" href="javascript:;" id="ps-newpost-btn" style="width:60%;margin:0 auto;margin-top:20px;">
        <span style="display:inline-block;padding-left:20px;background:url('/user/sources/img/add.png') left 55% no-repeat;">
            分享技术
        </span>
    </a>
</div>
    
    <div class="ps-items borderR5">
        <span class="RedBar">
            <span class="RedBar-in">热门主题</span>
        </span>
            </div>
</div>
<div class="clear"></div>
</div>
<span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
</body>
</html><?php }} ?>