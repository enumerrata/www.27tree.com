<a href="/user/{$conf.uid}/index.html" class="left-nav-btn">个人主页</a>
<a href="/user/{$conf.uid}/admin/index.html" class="left-nav-btn {if $conf.sub_action eq "index"}left-nav-btn-ac{/if}">管理首页</a>
<a href="/user/{$conf.uid}/admin/submit_blog.html" class="left-nav-btn {if $conf.sub_action eq "submit_blog"}left-nav-btn-ac{/if}">发表文章</a>
<a href="/user/{$conf.uid}/admin/alter_info.html" class="left-nav-btn {if $conf.sub_action eq "alter_info"}left-nav-btn-ac{/if}">修改资料</a>
<a href="/user/{$conf.uid}/admin/alter_head.html" class="left-nav-btn {if $conf.sub_action eq "alter_head"}left-nav-btn-ac{/if}">修改头像</a>