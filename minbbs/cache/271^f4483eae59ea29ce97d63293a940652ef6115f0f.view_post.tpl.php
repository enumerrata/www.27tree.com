<?php /*%%SmartyHeaderCode:15708850551a0142387f8e8-44183512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4483eae59ea29ce97d63293a940652ef6115f0f' => 
    array (
      0 => './templates/view_post.tpl',
      1 => 1366293583,
      2 => 'file',
    ),
    '94576f19f9e8f594e167eac4b2396fa5812c5788' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/bbshead.tpl',
      1 => 1365894661,
      2 => 'file',
    ),
    'cec4ef372ad8d063f1d2bb2b72393f7000fdd977' => 
    array (
      0 => '/www/users/itsrcs.com/templates/nav_v3.php',
      1 => 1369445944,
      2 => 'file',
    ),
    '26e665168fa43d4e7c8baf59fbf5e9001832d7b8' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/view_post_comm.tpl',
      1 => 1363699359,
      2 => 'file',
    ),
    '22d1643e793a2fe27cb30c1ecff58342c4f8febd' => 
    array (
      0 => '/www/users/itsrcs.com/templates/stat_code.php',
      1 => 1360988927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15708850551a0142387f8e8-44183512',
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d5a9e84c0397_91205162',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d5a9e84c0397_91205162')) {function content_52d5a9e84c0397_91205162($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>解高次同余不定方程 C实现</title>
        <meta name="description" content="解高次同余不定方程 C实现:#include&lt;iostream&gt;
#include&lt;stdio.h&gt;
#include&lt;cmath&gt;
#defineMAXN65535
usingnamespacestd;
structhash
{
" />
        <meta name="keywords" content="Java编程 AJAX技术 PHP技术 WEB技术 IT技术社区" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/bbs.css" />
        <script type="text/javascript" src="/jss/jquery-min.js"></script>
        <script type="text/javascript" src="/jss/coref.js?v=4-1"></script>
        <script src="/jss/dojo/dojo.js"></script>
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/postList.css" />
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/view_post.css?v=4-1" />
        <link rel="stylesheet" type="text/css" href="/mod/kd/themes/default/default.css" />
        <link rel="stylesheet" type="text/css" href="/mod/kd/SyntaxHighlighter/Styles/SyntaxHighlighter.css" />
    </head>
    <body>
        <div class="Shadow" id="navWapper">
    <div class="sdCenter nav-v3">
        <div style="float:left;">
            <a class="logo-v3" href="/" title="返回首页"></a>
            <div id="nav">
                <ul>
                    <li><a href="/">首页</a></li>
                    <li><a href="/blog/index.html">博客广场</a></li>
                    <li><a href="/bookLib/">好书分享</a></li>
                    <li><a href="/minbbs/tech/">技术分享</a></li>
                    <li style="border:none;"><a href="/minbbs/ques/">技术问答</a></li>
                </ul>
            </div>
        </div>
        <div id="nav-right">
            <div class="borderR15 tsearch-wapp">
                <input type="text" class="borderR15" value="" id="search-inp"
                       onfocus="$(this).css('width','105px').attr('placeholder','&#35831;&#36755;&#20837;&#25628;&#32034;&#20869;&#23481;');"
                       onblur="$(this).css('width','35px').attr('placeholder','&#25628;&#32034;');"
                       placeholder="&#25628;&#32034;"
                       onkeydown="search_enter(event);"/>
                <a class="tsearch-btn borderR10" href="javascript:;" onclick="Search($('#search-inp').val())"></a>
            </div>
            <div id="top-menu-wapp">
                <a class="next-cp top-bm" id="gb-reg" href="/account/register/" style="color:green;">&#27880;&#20876;</a>&nbsp;
                <a class="next-cp top-bm" id="gb-log" href="/account/login/">登录</a>&nbsp;
                <div id="top-menu-bar">
                    <div id="top-menu">
                        <div class="top-menu-in">
                            <a class="top-menu-btn" id="gb-ucc">个人中心</a>
                            <a class="top-menu-btn" id="gb-usm">发表文章</a>
                            <a class="top-menu-btn" id="gb-usa">修改头像</a>
                            <a class="top-menu-btn" id="gb-ext" href="javascript:;">退出账号</a>
                        </div>
                    </div>
                    <span style="display:inline-block;cursor:pointer;color:#444;" id="gb-usn"><a style="width:19px;height:13px;background:url('/img/loading_19_13.gif') bottom center no-repeat;display:inline-block;"></a></span>
                    <span style="display:inline-block;width:10px;height:10px;background:url('/img/arrd-1.png') center no-repeat;" id="gb-arr"></span>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--<div id="usr-bar">
    <div id="usr-bar-i">
        <div class="ms-l"></div>
        <div>
            <a class="ms-btn" id="ms-btn-top" href="javascript:;" onclick="javascript:goTop();" title="页面顶部"></a>
            <a class="ms-btn" id="ms-btn-ush"></a>
            <a class="ms-btn" id="ms-btn-log" href="/account/login/" title="登录你的帐号">登陆</a>
            <a class="ms-btn" id="ms-btn-reg" href="/account/register/" title="注册一个帐号"><b>注册</b></a>
            <a class="ms-btn" id="ms-btn-dy" href="javascript:;" title="动态"><b id="ms-btn-dym">9+</b></a>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--[if lt IE 7]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
        <div class="sdCenter" style="margin-top:15px;">
            <input type=hidden value="271" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/2"><img src="/user/data/head-img/2_head.jpg"/><span id="author-nickname">koodo</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">解高次同余不定方程 C实现</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年12月8日 12:42</span>
                    </div>

                    <div class="autowarp" id="vps-content"><pre name="code" id="prettyprint" class="javascript">#include &lt;iostream&gt;
#include &lt;stdio.h&gt;
#include &lt;cmath&gt;
#define MAXN 65535
using namespace std;
struct hash
{
    int a;
    int b;
    int next;
}Hash[MAXN*2];
int flg[MAXN+66];
int top,idx;
void ins(int a,int b)
{
    int k=b&amp;MAXN;
    if(flg[k]!=idx)
    {
        flg[k]=idx;
        Hash[k].next=-1;
        Hash[k].a=a;
        Hash[k].b=b;
        return;
    }
    while(Hash[k].next!=-1)
    {
        if(Hash[k].b==b)
        {
            return;
        }
        k=Hash[k].next;
    }
    Hash[k].next=++top;
    Hash[top].next=-1;
    Hash[top].a=a;
    Hash[top].b=b;
}
int find(int b)
{
    int k=b&amp;MAXN;
    if(flg[k]!=idx)
    {
        return -1;
    }
    while(k!=-1)
    {
        if(Hash[k].b==b)
        {
            return Hash[k].a;
        }
        k=Hash[k].next;
    }
    return -1;
}
int gcd(int a,int b)
{
    return b!=0? gcd(b,a%b):a;
}
int ext_gcd(int a,int b,int &amp;x,int &amp;y)
{
    int t,ret;
    if(!b)
    {
        x=1;
        y=0;
        return a;
    }
    ret=ext_gcd(b,a%b,x,y);
    t=x;
    x=y;
    y=t-(a/b)*y;
    return ret;
}
int Inval(int a,int b,int n)
{
    int x,y,e;
    ext_gcd(a,n,x,y);
    e=(long long)x*b%n;
    return e&lt;0? e+n:e;
}
int pow_mod(long long a,int b,int c)
{
    long long ret=1%c;a%=c;
    while(b)
    {
        if(b&amp;1)
        {
            ret=ret*a%c;
        }
        b&gt;&gt;=1;
        a=a*a%c;
    }
    return ret;
}
int BabyStep(int A,int B,int C)
{
    top=MAXN;++idx;
    long long buf=1%C,D=buf,K;
    int i,d=0,tmp;
    for(i=0;i&lt;=100;buf=buf*A%C,++i)
    {
        if(buf==B)
        {
            return i;
        }
    }
    while((tmp=gcd(A,C))!=1)
    {
        if(B%tmp)
        {
            return -1;
        }
        ++d;
        C/=tmp;
        B/=tmp;
        D=D*A/tmp%C;
    }
    int M=(int)ceil(sqrt((double)C));
    for(buf=1%C,i=0;i&lt;=M;buf=buf*A%C,++i)
    {
        ins(i,buf);
    }
    for(i=0,K=pow_mod((long long)A,M,C);i&lt;=M;D=D*K%C,++i)
    {
        tmp=Inval((int)D,B,C);
        int w;
        if(tmp&gt;=0&amp;&amp;(w=find(tmp)!=-1))
        {
            return i*M+w+d;
        }
    }
    return -1;
}
int main()
{
    int A,B,C;
    while(scanf("%d%d%d",&amp;A,&amp;B,&amp;C)!=EOF,A||B||C)
    {
        B%=C;
        int tmp=BabyStep(A,B,C);
        if(tmp&lt;0)
        {
            printf("No Solution\n");
        }
        else
        {
            printf("%d\n",tmp);
        }
    }
    return 0;
}</pre></div>
                </div>

                <!-- 编辑器 -->
                <div class="ps-items" id="ps-editor-wapper">
                    <textarea id="ps-editor" style="width:99.8%;display:none;margin-bottom:10px;"></textarea>
                    <a class="next-cp" style="margin-top:10px;" href="javascript:;" id="ps-submit-btn">马上发表</a>
                </div>
                <!-- 编辑器 -->

                <!-- 回复按钮 -->
                <div class="ps-items">
                    <span class="RedBar">
    <span class="RedBar-in">说几句吧</span><span class="Gray RedBar-in-mr">水水更健康</span>
</span>
<div id="vps-comm-wapper">
    </div>
                    <a class="next-cp" id="loadEditor" style="margin-top:10px;">发表回复</a>
                </div>
                <!-- 回复按钮 -->
            </div>
            <div class="clear"></div>
        </div>
        <script charset="utf-8" src="/minbbs/bin_js/bbs-post.js?v=19"></script>
        <script charset="utf-8" src="/mod/kd/SyntaxHighlighter/Scripts/shCore.js"></script>
        <script language="javascript">$(function() {
            dp.SyntaxHighlighter.HighlightAll("code");
        });
        </script>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
    </body>
</html><?php }} ?>