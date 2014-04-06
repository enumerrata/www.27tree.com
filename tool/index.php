<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>

<link rel="stylesheet" type="text/css" href="/core.css" />
	<style type="text/css">
		img{border:none;}
		.atr{width:99%;margin-top:5px;}
		#dev{margin:30px;filter:progid:DXImageTransform.Microsoft.Shadow (Color=#EEEEEE,Direction=120,strength=3);box-shadow:3px 3px 4px #eee;-webkit-box-shadow:3px 3px 4px #eee;-moz-box-shadow:3px 3px 4px #eee;
			border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;
			width:auto;text-align:center;
		}
	    .btn{width:55px;padding:0;height:20px;cursor:pointer;}
		#ul{border:none;}
		.item{width:60px;margin-left:2px;padding:0;border-color:#fafafa;display:inline;float:left;text-align:center;border-top:5px solid #FAFAFA;height:125px;}
		.button{height:35px;border:1px solid #aaa;line-height:35px;font-size:14px;font-weight:bold;cursor:pointer;}
		#clear_button{display:block;padding:0px 20px;font-size:14px;font-weight:bold;cursor:pointer;}
		#save_button{display:block;width:106px;padding:0px 10px;}
		.num{width:60px;display:block;text-align:center;font-size:30px;font-weight:bold;height:60px;line-height:60px;}
		.input-t{font-weight:bold;display:block;width:56px;background-color:#fff;text-align:center;font-size:15px;}
		.result,.result_sum{border:none;text-align:center;padding:5px;font-size:15px;line-height:25px;text-align:left;}
		.result{padding:0 100px;}
		#comf_button{height:50px;width:135px;}
		.result_sum{border:none;font-size:30px;font-weight:bold;height:35px;text-align:center;}
		#setting{padding:15px;border:none;}
		.label_sum,.label_susm{font-size:15px;font-weight:bold;height:20px;line-height:20px;width:60px;}
		.label_susm{color:#C90915;}
		#max{width:auto;}
	</style>

</head>
<body>

<div id="header1">
<img src="./ball3.png" style="display:none;"></img>
<img src="./ball1.png" style="display:none;"></img>
<img src="./ball2.png" style="display:none;"></img>
</div>

<div id="log" class="atr"><div class="atr-bac-left"></div>
<div id="dev" style="border:1px solid #ccc;">
	<div id="ul"></div><br />
	<div class="result_sum"></div>
		<!--<div class="result">
			<p>
				有待开发的功能：撤销上一次操作，保存当前记录到服务器。。。敬请期待
			</p>
		</div></br>-->
		<div class="clear"></div>
	</div>
</div>

<?php require('../templates/footer.html'); ?>
<script src="../jss/jquery.js"></script>
<script src="../jss/coref.js"></script>
	<script language="javascript">
		$(function()
		{
			var str        = '';
			var sum        = 0;
			var sum_s      = 0;
			var node       = $("#ul");
			var iterlist   = new Array();
			var iterlist_s = new Array();
			var ball1      = new Array(1,2,7,8,12,13,18,19,23,24,29,30,34,35,40,45,46);
			var ball2      = new Array(3,4,9,10,14,15,20,25,26,31,36,37,41,42,47,48);
			var ball3      = new Array(5,6,11,16,17,21,22,27,28,32,33,38,39,43,44,49);
			for(var i=1;i<=49;i++)
			{
				var balltype;
				if($.inArray(i,ball1)!=-1){var ball_style="style=background-image:url('./ball3.png')";balltype=3;}
				if($.inArray(i,ball2)!=-1){var ball_style="style=background-image:url('./ball2.png')";balltype=2;}
				if($.inArray(i,ball3)!=-1){var ball_style="style=background-image:url('./ball1.png')";balltype=1;}
				node.append($("<div class='item red'><label class='num' "+ball_style+">"+i.toString()+"</label><input id='ball' type=hidden value="+balltype+" /><input type='text' class='input-t' id='"+i.toString()+"'/><label class='label_sum'></label></br><label class='label_susm'></label></div>"));
				iterlist_s[i]=0;
			}
			ball1.length=0;
			ball2.length=0;
			ball3.length=0;
			node.append($("<div class='item' id='max'>设置限额&nbsp;<input type='text' id='maxx' value='0' style='text-align:right;font-size:22px;width:80px;' /></br><input id='comf_button' type='button' value='确定' /></div>"));
			node.append($("<div class='clear'></div>"));
			node=null;

			$(".input-t").hover(function(){$(this).css('background-color','#eee')},function(){$(this).css('background-color','#fff')});

			$("#maxx,.input-t").blur(function()
			{
				var self=$(this);
				var reg=/^[0-9]+$/g;
				var val=parseInt($(this).val(),10);
				if(!reg.test(val))
				{
					self.val('');
					return;
				}
				if(self.hasClass('input-t'))
				{
					//如果触发为.input-t,取#进栈
					if($.inArray(self.attr('id'),iterlist)==-1) iterlist.push(self.attr('id'));
					return;
				}
				if(self.attr("id")=="maxx")
				{
					var max=parseInt(self.val(),10);
					if(max==0) return;
					$.each(iterlist_s,function(index,value)
					{
						if(index>0 && value>0)
						{
							var input_node = $("#"+index);
							//处理超额数据
							var col        = parseInt(value,10)-max;
							var bgColor    = "#FAFAFA";
							var bg_color   = "#FAFAFA";
							var data_col   = "";
							var ball       = input_node.siblings("#ball").val();
							var bg         = "url('./ball"+ball+".png')";
							if(col>0)
							{
								bg="url('./ball"+ball+"h.png')";
								bgColor="#FF8000";
								bg_color="#C90915";
								data_col=col.toString();
							} else {
								data_col="";
							}
							input_node.siblings(".label_susm").html(data_col);
							input_node.parent('.item').css('border-color',bg_color);
							input_node.parent('.item').css('background-color',bgColor);
							input_node.siblings('.num').css('background-image',bg);
						}
					});
					max=null;
				}
			});
			$("#comf_button").click(function()
			{
				if(iterlist.length==0)
				{
					alert('没有输入任何数据！');
					return;
				}
				$.each(iterlist,function(index,id)
				{
					var input_node = $("#"+id);
					iterlist_s[id] = iterlist_s[id]+parseInt(input_node.val(),10);
					input_node.siblings(".label_sum").html(iterlist_s[id]);
					//处理超额数据
					max_count=$("#max input").val();
					if(max_count!=0 && max_count!="" && max_count!=null && iterlist_s[id]>=max_count)
					{
						input_node.parent('.item').css('border-color','#C90915');
						input_node.parent('.item').css('background-color','#FF8000');
						input_node.siblings(".label_susm").html(iterlist_s[id]-max_count);
					}
					input_node.val('');
			    });
				iterlist.length=0;
				sum_s=0;
			    $.each(iterlist_s,function(index,value)
			    {
				  if(index>0 && value>0)
				  {
					sum_s+=value;
				  }
			    });
			$('.result_sum').html("共："+sum_s.toString()+"元！");
			$("#maxx").blur();
		});
		$('.button').hover(function(){$(this).css('background-color','#ddd');},function(){$(this).css('background-color','#fafafa');});
		});
	</script>
</body>
</html>