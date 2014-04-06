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
  'unifunc' => 'content_52d52cb9a01a72_93934377',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d52cb9a01a72_93934377')) {function content_52d52cb9a01a72_93934377($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Vsftpd文件服务器介绍及相关配置</title>
        <meta name="description" content="Vsftpd文件服务器介绍及相关配置:
	Vsftpd全名“verySecureFTPDaemon”，换句话说VSFTPD最初发展理念就是在于构建一个以安全为重的FTP服务器。由于最初使用FTP传输时具有一定的“危险性”，因为数据在互联网上的传输是没有受到保护的“明码”，因此在" />
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
            <input type=hidden value="184" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">Vsftpd文件服务器介绍及相关配置</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年10月25日 17:34</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	Vsftpd全名“very Secure FTP Daemon”，换句话说VSFTPD最初发展理念就是在于构建一个以安全为重的FTP服务器。由于最初使用FTP传输时具有一定的“危险性”，因为数据在互联网上的传输是没有受到保护的“明码”，因此在信息急剧敏感的今天，数据传输的安全性已经受到人们的重视。
</p>
<p>
	Vsftpd的一些特点：
</p>
<p>
	1.Vsftpd服务的启动者的身份是一般用户，所以对于linux系统的使用权限较低，对于linux系统的危害性也就相对降低了。
</p>
<p>
	2.任何需要具有较高执行权限的vsftpd指令均以一个特殊的父进程所控制，该父进程拥有的较高执行权限功能已经被限制的很低，并不以影响linux系统运行为准。
</p>
<p>
	3.绝大部分FTP会使用到的额外指令功能（如：dir、ls、cd等）都已被集成到vsftpd主程序中。
</p>
<p>
	4.所有来自客户端且想要使用这个父进程所提供的较高执行权限的vsftpd指令，均已看成不可信任的要求来处理，必须经过相当程度的身份确认后，方可利用该上层程序的功能。
</p>
<p>
	具有以上这些特点，所以vsftpd比较安全。下面就谈谈它的配置。
</p>
<p>
	一、所需软件及安装
</p>
<p>
	Vsftpd所需要的软件只有一个，即vsftpd
</p>
<p>
	安装方法有很多，笔者建议使用yum来安装，因为yum可以自动解决软件依赖关系，
</p>
<p>
	# yum install vsftpd –y
</p>
<p>
	二、配置文件
</p>
<p>
	Vsftpd的主配置文件为 /etc/vsftpd/vsftpd.conf
</p>
<p>
	在修改主配置文件前，笔者建议先备份配置文件，以防出错时可以恢复默认。
</p>
<p>
	常用的全局配置项：
</p>
<p>
	listen=[YES|NO] &nbsp;是否以独立运行方式监听服务
</p>
<p>
	write_enable=[YES|NO] 是否启用写入权限
</p>
<p>
	tcp_wrappers=[YES|NO] 是否支持TCP Wrappers
</p>
<p>
	download_enable=[YES|NO] 是否允许下载文件
</p>
<p>
	userlist_enable=[YES|NO] 是否启用user_list文件中的用户登录
</p>
<p>
	userlist_deny=[YES|NO] 是否禁用user_list文件中的用户登录,（此功能
</p>
<p>
	当userlist_enable=YES）时有效 YES表示不允许该文件中的用户登录 NO表示只允许该文件中的用户登录
</p>
<p>
	connect_from_port_20=[YES|NO] 是否启用FTP服务器的数据传输端口
</p>
<p>
	listen_port=21 vsftpd使用的命令通道端口，如果想使用非默认的端口，可在该选项中修改
</p>
<p>
	listen_address=192.168.0.1 设置所监听的服务器ip地址
</p>
<p>
	dirmessage_enable=[YES|NO] 当用户进入某个目录时，会显示该目录需要注意的内容，显示信息的文件默认是”.message”,您可以通过修改下面的设置项目来修改
</p>
<p>
	message_file=.message &nbsp; &nbsp;当dirmessage_enable=YES时可设置该项目来让vsftpd寻找该文件，从而显示信息
</p>
<p>
	cnnect_timeout=60 单位是秒，在数据连接的主动连接模式下，发出的连接信号在60秒内得不到客户端的响应，就不再等待并强制断线
</p>
<p>
	idle_session_timeout=300 如果用户在300秒内都没有任何操作，则强制离线
</p>
<p>
	max_clients=0 限制并发客户端的连接数，0表示不限制
</p>
<p>
	max_per_ip=0 限制同一ip地址的并发连接数，0表示不限制
</p>
<p>
	常用的匿名FTP配置项
</p>
<p>
	anonymous_enable=[YES|NO]是否启用匿名用户访问
</p>
<p>
	anon_umask=022匿名用户所上传文件的权限掩码
</p>
<p>
	anon_root=/var/ftp 匿名用户的ftp根目录
</p>
<p>
	anon_upload_enable=[YES|NO] 是否允许匿名用户上传文件
</p>
<p>
	anon_mkdir_write_enable=[YES|NO] 是否允许匿名用户创建目录
</p>
<p>
	anon_other_write_enable= [YES|NO] 是否开放其他写入权限，如匿名用户删除、重命名文件等
</p>
<p>
	anon_max_rate=0 限制最大传输速率，单位为字节， 0表示不限制
</p>
<p>
	常用的本地用户FTP配置项
</p>
<p>
	local_enable=[YES|NO] 是否启用本地系统用户
</p>
<p>
	local_umask=022 本地用户上传的文件掩码
</p>
<p>
	loacal_root=/var/ftp 设置本地用户的FTP根目录
</p>
<p>
	chroot_local_user=[YES|NO] 是否将用户禁锢在自己的家目录下
</p>
<p>
	local_max_rate=0 限制最大传输速率，单位为字节，0表示不限制
</p>
<p>
	三、构建基于虚拟用户的 vsftpd服务器
</p>
<p>
	1、建立虚拟用户的账号数据库文件
</p>
<p>
	建立虚拟用户的账号、密码表
</p>
<p>
	# vim /etc/vsftpd/vusers.list &nbsp; (奇数行为账号，偶数行为对应的密码)
</p>
<p>
	数据格式转换（需先安装db4-utils软件）
</p>
<p>
	# yum install db4-utils –y
</p>
<p>
	# cd /etc/vsftpd
</p>
<p>
	# db_load -T -t hash -f vusers.list &nbsp; vusers.db
</p>
<p>
	修改权限
</p>
<p>
	# chmod 600 /etc/vsftpd/vusers.*
</p>
<p>
	2、创建FTP根目录及虚拟用户映射的系统用户
</p>
<p>
	# mkdir /var/ftproot
</p>
<p>
	# useradd –d /var/ftproot –s /sbin/nologin virtual
</p>
<p>
	# chmod 755 /var/ftproot/
</p>
<p>
	3、建立支持虚拟用户的PAM认证文件
</p>
<p>
	#vim /etc/pam.d/vusers
</p>
<p>
	auth &nbsp;required &nbsp;pam_userdb.so db=/etc/vsftpd/vusers &nbsp;(vusers对应于第一步中建立的vusers.db 但这里不带后缀)
</p>
<p>
	account required &nbsp;pam_userdb.so db=/etc/vsftpd/vusers
</p>
<p>
	4、在vsftpd.conf文件中添加支持配置
</p>
<p>
	# vim /etc/vsftpd/vsftpd.conf
</p>
<p>
	anonymous_enable=YES
</p>
<p>
	local_enable=YES
</p>
<p>
	write_enable=YES
</p>
<p>
	anon_umask=022
</p>
<p>
	guest_enable=YES
</p>
<p>
	guest_username=virtual //第二步中建立的用户（系统用户）
</p>
<p>
	pam_service_name=vusers //第三步中建立的/etc/pam.d/vusers
</p>
<p>
	5、为个别虚拟用户建立独立的配置文件
</p>
<p>
	在vsftpd.conf 文件中添加用户配置目录支持
</p>
<p>
	# vim /etc/vsftpd/vsftpd.conf &nbsp; &nbsp;添加如下内容
</p>
<p>
	user_config_dir=/etc/vsftpd/vusers_dir
</p>
<p>
	# mkdir /etc/vsftpd/vusers_dir
</p>
<p>
	在该目录内创建与用户名相同的配置文件
</p>
<p>
	# cd /etc/vsftpd/vusers_dir
</p>
<p>
	# vim tom
</p>
<p>
	anon_upload_enable=YES
</p>
<p>
	anon_mkdir_write_enable=YES
</p>
<p>
	6、重新加载vsftpd配置
</p>
<p>
	# service vsftpd restart
</p>
<p>
	7、使用虚拟FTP账户访问测试
</p>
<p>
	分别用刚建的虚拟用户登录FTP进行验证
</p>
<p>
	四、访问控制
</p>
<p>
	为了安全考虑，可以适当的设置访问控制来保证服务器的安全。常用的防控有iptables、TCP Wrappers等，下面就这两种方式进行介绍：
</p>
<p>
	要求：拒绝来自192.168.0.0/24的主机访问vsftpd服务器 其他的允许。
</p>
<p>
	iptables：
</p>
<p>
	# iptables –A INPUT –s 192.168.0.0/24 –p tcp --dport 21 –j DROP
</p>
<p>
	# iptables –A OUTPUT –d 192.168.0.0/24 –p tcp --sport 21 –j DROP
</p>
<p>
	# iptables –A INPUT –p tcp --dport 21 –j ACCEPT
</p>
<p>
	# iptables –A OUTPUT –p tcp --sport 21 –j ACCEPT
</p>
<p>
	TCP Wrappers：
</p>
<p>
	要支持该方式，必须在vsftpd的主配置文件中开启此选项，即：tcp_wrappers=YES
</p>
<p>
	# vim /etc/hosts.deny
</p>
<p>
	vsftpd: 192.168.0.0/255.255.255.0
</p></div>
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