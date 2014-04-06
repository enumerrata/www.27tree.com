<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>修改用户信息_www.Itsrcs.com</title>
<meta name="description" content="Java编程,Spring Struts Webwork框架深入,XMLHTTP AJAX开发,Java Web开发,Java企业应用,Java设计模式,Java开源框架,Java应用服务器,Rich Client讨论,JavaScript编程,数据库,C/C++ PHP/Linux平台,精通Hibernate" />
<link rel="stylesheet" type="text/css" href="../core.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="zh-cn" />
<meta name="robots" content="all" />
<meta name="author" content="itsrcs.com" />
<meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
<script src="/jss/jquery-min.js"></script>
<script src="/mod/tip-tool/tip-tool.js"></script>
<script src="jquery.validate.min.js"></script>
<script src="jquery.metadata.js"></script>
<script src="messages_cn.js"></script>
<script src="/jss/coref.js"></script>
<script src="./js/userinfo.js"></script>
<link rel="stylesheet" type="text/css" href="/mod/tip-tool/tip-tool.css" />
<link rel="stylesheet" type="text/css" href="/core.css" />
<link rel="stylesheet" type="text/css" href="/log/log.css"/>
</head>
<body onload="check_login()">
<div id="header1">
	<div id="logo"></div>
  <?php require('../templates/nav.html'); ?>
	<div class="clear"></div>
	<?php	require('../mod/header2.php');?>
</div>
<?php
$mod=$_GET['mod'];
switch ($mod)
{
    case "new":
    case "change":
    break;
    default:die("");
}
?>
			<!----------imgCache_place_here-------------------------------->
				<img src="./img/ok-hover.png" class="img_cache" />
				<img src="./img/clear-hover.png" class="img_cache" />
			<!----------imgCache_place_here-------------------------------->

<div id="log" class="atr"><div class="atr-bac-left"></div>
	<div id="useradd-left">
		<div class="form-wapper">
		<form id="log-form" action="#" method=post>
		    <input type=hidden value=change name=mod />
		    <span class="tipS">填写你的个人资料，好让大家都认识你</span>
			<!--FORM_POST_DATA: 'sex','ages','job','prov','city','self-info','qqnumber' -->
			<div class="item"><!--Form-Item-div-->
				<label for="sex" class="log-label">性别:</label>
				<select class="ex" name="sex">
					<option>男</option>
					<option>女</option>
					<option>保密</option>
				</select>
				<label class="log-label"></label><span class="validate-span"></span>
			</div>
			<div class="item"><!--Form-Item-div-->
				<label for="age" class="log-label">年龄:</label>
				<input id="age" name="ages" type="text" class="{required:true,number:true,range:[1,120]} input-t" />
				<label class="log-label"></label><span class="validate-span"></span>
			</div>
			<div class="item"><!--Form-Item-div-->
				<label for="qqnumber" class="log-label">qq:</label>
				<input id="qqnumber" name="qqnumber" type="text" class="required qq input-t"/>
				<label class="log-label"></label><span class="validate-span"></span>
			</div>
			<div class="item"><!--Form-Item-div-->
				<label for="password" class="log-label">职业:</label>
				<select class="ex" name="job" id="job-list">
					<option>软件工程师</option>
					<option>系统分析师</option>
					<option>系统设计师</option>
					<option>软件测试工程师</option>
					<option>系统管理工程师</option>
					<option>数据库管理工程师</option>
					<option>售前技术工程师</option>
					<option>需求分析工程师</option>
					<option>WEB开发工程师</option>
					<option>程序美工</option>
					<option>网站营维工程师</option>
					<option>网站架构工程师</option>
					<option>手机应用软件开发工程师</option>
					<option>手机游戏开发工程师</option>
					<option>WAP开发工程师</option>
					<option>在校大学生</option>
                                        <option>其他领域人员</option>
					<option>无业游民</option>
				</select>
				<label class="log-label"></label><span class="validate-span"></span>
			</div>
			<div class="item"><!--Form-Item-div-->
				<label for="password" class="log-label">地址:</label>
				<select class="ex ex2" id="pro-list" onchange="selectchange(this.value)" name="prov">
				<script language="javascript">
					$.get("./data/city.xml",function(list_data){
						var x=list_data.getElementsByTagName('pro');
						for (var i=0;i<x.length;i++)
							if(x[i].nodeType==1)
								document.getElementById("pro-list").options.add(new Option(x[i].attributes[0].nodeValue,x[i].attributes[0].nodeValue));
						document.getElementById("pro-list").options[3].selected=true;
						selectchange('广东省');
						loadinfo();
					});
				</script>
				</select>
				<select class="ex ex2" id="city-list" name="city"></select>
				<label class="log-label"></label><span class="validate-span"></span>
			</div>
			<div class="item"><!--Form-Item-div-->
				<label for="lan" class="log-label">语言精通:</label>
				<input id="lan" name="lan" type="text" class="input-t" style="font-size:10px;" readonly="readonly" />
				<label class="log-label"></label><span class="validate-span"></span>
			</div>
			<div class="item"><!--Form-Item-div-->
				<label for="inc" class="log-label">就职公司:</label>
				<input id="inc" name="inc" type="text" class="input-t" />
				<label class="log-label"></label><span class="validate-span"></span>
			</div>
			<div class="item"><!--Form-Item-div-->
				<label for="self-info" class="log-label">个人简介:</label>
				<textarea rows="5" id="self-info" name="conv" class="{rangelength:[0,200]}" style="width:265px;overflow-y:auto;resize:none;"></textarea>
				<label class="log-label"></label><span class="validate-span"></span>
			</div>
		  <div class="clear"></div><br />
		  <span class="tipS">填好了?点OK吧！</span>
			<div class="item"><!--Form-Item-div-->
				<label class="log-label"></label>
				<input type="button" id="input-sub-info" class="btn"/>&nbsp;&nbsp;
				<input type="reset" id="input-clr" value="" class="btn input-clr"/>
			</div>
		</form>
    </div>

	</div>
	<div class="user-right">
	    <!-- Language! -->
		<div class="wapper borderR5" id="lang"><span class="tipS">请在下面选择你比较熟悉的编程语言</span></div>
	</div>
	<div class="clear"></div>
</div>
<?php require('../mod/footer.php'); ?>
</body>
</html>