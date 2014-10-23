<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Css/common.css" />
<script type="text/javascript" src="__PUBLIC__/Js/myfocus-1.0.4.min.js"></script><!--引入myFocus库-->
<script type="text/javascript" src="__PUBLIC__/Js/jquery1.32.min.js"></script><!--引入Jquery库-->
<script type="text/javascript" src="__PUBLIC__/Js/all.js"></script>
<title><?php echo ($System_namex); ?></title>
<style>
    
    #header{background: url(__PUBLIC__/Images/header_en.jpg) no-repeat;}
</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" style="height:110%; width:100%;" >
    <tr>
    <td height="60" colspan="3">
    <div id="header">
<link href="__PUBLIC__/Css/lanrenzhijia.css" type="text/css" rel="stylesheet" />
    	
    	<div id="logo"><!--<img src="__PUBLIC__/images/logo.png" />--></div>
    	
    	
    <div class="user">Hi <a href="./"><?php echo ($fck_rs['user_id']); ?></a> ,Welcome to the System!
    					    <a onclick="javascript:SetUrl('__APP__/Fck/inMessages/')"><img src="__PUBLIC__/images/ico_msg.gif" style="vertical-align:middle"/>(<?php echo ($info_count); ?>)</a>
                            <a href="__APP__/Public/LogOut/" onClick="{if(confirm('Really want to quit?')){this.document.selform.submit();return true;}return false;}" target="_top">Out</a>
                            <!-- | <a href="#" onClick="window.close();return false;">关闭本窗口</a>--><a href="__APP__/Public/convert">中文</a>
</div>
    </div>
    
    <div id="nav">
    	<div id="nihao" class="welcome">The last login time：&nbsp;<?php echo (date('Y-m-d H:i:s',$_SESSION['lastLoginTime'])); ?></div>
        <ul>
        <!-- 导航菜单 -->
        <li><a onclick="javascript:qiehuan(1);javascript:SetUrl('__APP__/Public/News');" id="mynav1" class="nav_on">Home</a><s></s></li>
        <li><a onclick="javascript:qiehuan(2);" id="mynav2" class="nav_on">Member info</a><s></s></li>
        <li><a onclick="javascript:qiehuan(3);" id="mynav3" class="nav_on">Financial AC</a><s></s></li>
        <li><a onclick="javascript:qiehuan(8);" id="mynav8" class="nav_on">The stock market</a><s></s></li>
        <li><a onclick="javascript:qiehuan(4);" id="mynav4" class="nav_on">Team info</a><s></s></li>
        <li><a onclick="javascript:qiehuan(5);" id="mynav5" class="nav_on">Company News</a><s></s></li>
        <li><a onclick="javascript:qiehuan(6);" id="mynav6" class="nav_on">Message</a><s></s></li>
		<li><?php if(($fck_rs['is_boss']) >= "1"): ?><a onclick="javascript:qiehuan(7);" id="mynav7" class="nav_on">Management</a><s></s><?php else: ?><a id="mynav7" class="nav_on"></a><?php endif; ?></li>
        <li style=" color:#666">The last login time：&nbsp;<?php echo (date('Y-m-d H:i:s',$fck_rs["last_login_time"])); ?></li>
		
        </ul>
       
    </div>
    </td>
    </tr>
    	
    
    <tr>
    <td class="main_left" style="width:140px;height: auto;">
    
    <div class="menu2">
    <ul>
    <!--<li><span style="font-weight:bold">个人工资：</span><?php echo ($count[1]); ?> </li>
    <li><span style="font-weight:bold">服务补贴：</span><?php echo ($count[2]); ?> </li>
    <li><span style="font-weight:bold">推荐补贴：</span><?php echo ($count[3]); ?> </li>-->
    <li><span style="font-weight:bold">All bonus：</span><?php echo ($fck_rs['zjj']); ?> </li>
    <li><span style="font-weight:bold">BD coins：</span><?php echo ($fck_rs['agent_cash']); ?> </li>
    <li><span style="font-weight:bold">YJ coins：</span><?php echo ($fck_rs['agent_use']); ?> </li>
    <li><span style="font-weight:bold">G coins：</span><?php echo ($fck_rs['agent_zz']); ?> </li>
    <!--<li><span style="font-weight:bold">股票币账户：</span><?php echo ($fck_rs['agent_gp']); ?> </li>-->
    <!--<li><span style="font-weight:bold">股票数量：</span><?php echo ($fck_rs['live_gupiao']); ?> </li>-->
   	
    </ul>
    </div>
	<div class="l_top" id="qh_con1" ><h1>Menu</h1>
           <div class="menu"> 
            <ul>
            <li><a onclick="javascript:SetUrl('__APP__/Public/News')">News</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/users')">Registered member</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/9')">The list of bonus</a></li>
            <!--<li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/7')">提现申请</a></li>-->
            <li><a onclick="javascript:SetUrl('__APP__/Fck/messages/')">Write E-mail</a></li>
            </ul>
            </div>
    </div>
    <div class="l_top" id="qh_con2" style="display:none;"><h1>My inofomation</h1>
           <div class="menu"> 
            <ul>
<!--            <li><a onclick="javascript:SetUrl('__APP__/Public/cody/c_id/3')">我的资料</a></li>-->
            <li><a onclick="javascript:SetUrl('__APP__/Public/cody/c_id/2')">Change the password</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/yanzheng')">Change the infomation</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/users')">Registered member</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/1')">Open member</a></li>
            <?php if(($fck_rs['is_agent']) < "2"): ?><li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/4')">To apply for center</a></li><?php endif; ?>
			<li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/18')">upgrade</a></li>
            </ul>
            </div>
    </div>
    <div class="l_top" id="qh_con3" style="display:none;"><h1>The financial management</h1>
        <div class="menu">
            <ul>
            <li><a onclick="javascript:SetUrl('__APP__/Public/cody/c_id/3')">The query</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/9')">The list of bonus </a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/6')">The transfer</a></li>
            <!--<li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/17')">消费申请</a></li>-->
            <!--<li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/7')">提现申请</a></li>-->
            <li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/10')">top-up</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/20')">The bonus trading</a></li>
            </ul>
        </div>
    </div>
        <div class="l_top" id="qh_con8" ><h1>Stock center</h1>
            <div class="menu">
            <ul>
                                            <!--<li><a onclick="javascript:SetUrl('__APP__/Gupiao/cody/c_id/9')">股票走势图</a></li>-->
                                            <li><a onclick="javascript:SetUrl('__APP__/Gupiao/cody/c_id/1')">Buy the Stock</a></li>
                                    <li><a onclick="javascript:SetUrl('__APP__/Gupiao/cody/c_id/3')">Sell the Stock</a></li>
                                    <li><a onclick="javascript:SetUrl('__APP__/Gupiao/cody/c_id/4')">The list of Stock</a></li>
                                    <?php if(($fck_rs['is_boss']) >= "1"): ?><li><a onclick="if(confirm('To determine all the stock?')) SetUrl('__APP__/Gupiao/cody/c_id/10');else return false;">Sell All</a></li>
                                        <li><a onclick="javascript:SetUrl('__APP__/Gupiao/cody/c_id/5')">The Stock Parameter Settings</a></li>
                                        <li><a onclick="javascript:SetUrl('__APP__/Gupiao/cody/c_id/7')">The list of Buy the Stock</a></li>
                                        <li><a onclick="javascript:SetUrl('__APP__/Gupiao/cody/c_id/8')">The list of Sell the Stock</a></li><?php endif; ?>
                                            <li class="bottom"></li>
                                        </ul>
   
        
            
        </div>
    </div>
    <div class="l_top" id="qh_con4" style="display:none;"><h1>Team info</h1>
        <div class="menu">
            <ul>
                
                <?php if(($id) == "1"): ?><li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/1')">audit</a></li>
                    <li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/18')">The list of bonus</a></li><?php endif; ?>
            <li><a onclick="javascript:SetUrl('__APP__/Tree/cody/c_id/5')">chart</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Tree/cody/c_id/6')">Recommended figure</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/cody/c_id/3')">See straight push table</a></li>
            </ul>
        </div>
    </div>
    <div class="l_top" id="qh_con5" style="display:none;"><h1>News</h1>
        <div class="menu">
            <ul>
            <li><a onclick="javascript:SetUrl('__APP__/Public/News/')">View</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Public/plan')">Incentive plan</a></li>
            </ul>
        </div>
    </div>
 	<div class="l_top" id="qh_con6" style="display:none;"><h1>Leave a message</h1>
        <div class="menu">
            <ul>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/inMessages/')">Receive mail</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/outMessages/')">Send E-mail</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/Fck/messages/')">Write E-mail</a></li>
            </ul>
        </div>
    </div>

	<?php if(($fck_rs['is_boss']) >= "1"): ?><div class="l_top" id="qh_con7" style="display:none;"><h1>
Management
</h1>
        <div class="menu">
            <ul>
                <li><a onclick="if(confirm('Sure, share out bonus？')) javascript:SetUrl('__APP__/Test/xxx');">Share out bonus</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/5')">The current cashier</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/8')">Bonus query</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/1')">Member of the audit</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/2')">Member management</a></li>
			<!--<li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/24')">物流管理</a></li>-->
			<!--<li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/26')">产品管理</a></li>-->
            <li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/10')">Service center management</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/18')">Money flows to</a></li>
            <!--<li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/6')">提现管理</a></li>-->
            <li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/12')">Top-up management</a></li>
            <!--<li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/28')">重复消费清单</a></li>-->
            <li><a onclick="javascript:SetUrl('__APP__/News/index/')">Press release management</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/News/plan/')">Rewards program set</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/7')">The database backup</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/3')">Parameter Settings</a></li>
            <li><a onclick="javascript:SetUrl('__APP__/YouZi/cody/c_id/9')">Empty data</a></li>
            </ul>
        </div>
    </div>
    <?php else: ?>
    <div class="l_top" id="qh_con7" style="display:none;"></div><?php endif; ?>
    <!--<div class="l_top" id="qh_con6" style="display:none;"><h1>关于我们</h1>
        <div class="menu">
            <ul>
            <li><a onclick="javascript:SetUrl('__APP__/Public/planTwo')">关于我们</a></li>
            </ul>
        </div>
    </div>-->
    </td>
    <td valign="top" style="width:99%;height:expression(this.clientHeight);">
    <iframe id="main" style="z-index: 1; width:99%" name="main" src="__APP__/Public/News/" frameborder="0" scrolling="auto" onload="turnHeight('main');" target="self" allowtransparency="true"></iframe>
    </td>
    </tr>
    <tr>
<td height="25" colspan="2">
<div id="foot">copyright @ 2013-2015</div>
</td></tr>
</table>
    
    <script>
        /* 代码整理：懒人之家 www.lanrenzhijia.com */
document.writeln("<div class=\"float-contact\" id=\"float-contact\" style=\"position: fixed;z-index:1000; right: 1px; display: block;\">");
document.writeln("<a title=\"Click narrow\" href=\"javascript:void(0);\" onclick=\"show12()\" class=\"close\" id=\"float-contact-close\">narrow</a>");
document.writeln("<div class=\"container\">");
document.writeln("<div class=\"qq\">");
document.writeln("<h3 class=\"qqtitle\">Customer service</h3>");
document.writeln("<ul class=\"btnl\">");
document.writeln("<li><a title=\"QQ\" target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($fee["str4"]); ?>&site=qq&menu=yes\"><?php echo ($fee["str1"]); ?></a></li>");

document.writeln("</ul>");
document.writeln("</div>");
document.writeln("<div class=\"qqtel\">");
document.writeln("<h3 class=\"qqtitle\">Telephone</h3>");
document.writeln("<div class=\"qqcontent\"><?php echo ($fee["str5"]); ?></div>");
document.writeln("</div>");
document.writeln("</div>");
document.writeln("<a target=\"_blank\" href=\"/\" class=\"myqqlink\">Ou Jin</a>");
document.writeln("</div>");
document.writeln("<div class=\"float-contact-mini\" id=\"float-contact-mini\" style=\"display: none; position: fixed; right: 1px;\">");
document.writeln("<a href=\"javascript:void(0);\" onclick=\"show12()\" id=\"float-contact-mini\">Contact us</a>");
document.writeln("</div>");
        function show12() {
	var floatContact = document.getElementById('float-contact');
	var floatContactMini = document.getElementById('float-contact-mini');
	if(floatContact.style.display=="none") {
		floatContact.style.display="block";
		floatContactMini.style.display="none";
	}else {
		floatContact.style.display="none";
		floatContactMini.style.display="block";
	}
}
    </script>
</body>
</html>
<script language="javascript">
	function SetUrl(url)
	{
		window.parent.main.location.href = url;
	}
	function qiehuan(num){
		for(var id = 1;id<=8;id++)
		{
			if(id==num)
			{
				document.getElementById("qh_con"+id).style.display="block";
				document.getElementById("mynav"+id).className="nav_on";
			}
			else
			{
				document.getElementById("qh_con"+id).style.display="none";
				document.getElementById("mynav"+id).className="nav_off";
			}
		}
	}
	function SetCwinHeight(iframename){
		var cwin=iframename;
		if (document.getElementById)
		{
			if (cwin && !window.opera)
			{
				var helt = document.body.clientHeight-120;
				cwin.height = helt;
			}
		}
	}
	function settime()
		{
		var myyear,mymonth,myweek,myday,mytime,mymin,myhour,mysec;
		function initArray(){
			this.length=initArray.arguments.length;
			for(var i=0;i<this.length;i++){
				this[i+1]=initArray.arguments[i];
			}
		}
		var d=new initArray(" Sun"," Mon"," Tues"," Wed"," Thur"," Fri"," Sat");
	    var mydate=new Date();
		myyear=mydate.getFullYear();
		mymonth=mydate.getMonth()+1;
		myday=mydate.getDate();
		myhour=mydate.getHours();
		mymin=mydate.getMinutes();
		mysec=mydate.getSeconds();
		mytime = d[mydate.getDay()+1] + " " + myyear+"-"+mymonth+"-"+myday+" "+myhour+":"+mymin+":"+mysec;
		if(mytime.length<25){
			for(var i=mytime.length;i<=25;i++){
				mytime += "&nbsp;";
			}
		}
		document.getElementById("nihao").innerHTML = "Today：" + mytime;
		setTimeout('settime()',1000);
	} 
	settime();
	qiehuan(1);
</script> 
<script language="javascript">
function turnHeight(iframe)
{
    var frm = document.getElementById(iframe);
	frm.height = 600;
    var subWeb = document.frames ? document.frames[iframe].document : frm.contentDocument;
    if(frm != null && subWeb != null)
    {
	if (subWeb.body.scrollHeight<600){
	frm.height = 600;
	}else{
	frm.height = subWeb.body.scrollHeight + 20;
	}
	}
}
</script>