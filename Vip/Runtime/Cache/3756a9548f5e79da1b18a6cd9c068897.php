<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($System_namex); ?></title>
<link href="__PUBLIC__/Css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/Base.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/prototype.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/mootools.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/Ajax/ThinkAjax.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/Form/CheckForm.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/common.js\"></sc"+"ript>")</script>
<!--[if IE 6]>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/DD_belatedPNG_0.0.8a-min.js\"></sc"+"ript>")</script>
<script>
  DD_belatedPNG.fix('#login_box,.l-logo');  // IE6，PNG透明
</script>
<![endif]-->
<body>
<form method='post' name="login" id="form1" onsubmit="return false">

<div id="login_layout">
<div id="topbox" style="height:85px; width:200px; position:absolute; top:250px; left:500px;">

<embed src="__PUBLIC__/Swf/hudie.swf" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="99%" height="150"></embed>

</div>
	<div class="l-logo"></div>
			<div id="login_box">
				<div class="error"><span id="result"></span></div>
                <div class="zhangh">  &nbsp;&nbsp;&nbsp; <a href="__URL__/find_pw"><font style=" color:#90F">找回密码</font></a></div>
	
				<table width="100%" cellpadding="0" cellspacing="0" class="ltable">
					<tr>
						<td class="lname" nowrap="nowrap"><strong>用户名</strong><b class="fred">:</b></td>
						<td><input name="account" id="account" type="text" maxlength="20" onfocus="this.className='ipt_hover ipt_style'" onblur="this.className='ipt_text ipt_style'" class="ipt_text ipt_style" /></td>
					</tr>
					<tr>
						<td class="lname"><strong>密　码</strong><b class="fred">:</b></td>
						<td><input name="password" id="password" type="password" maxlength="20" onfocus="this.className='ipt_hover ipt_style'" onblur="this.className='ipt_text ipt_style'"  class="ipt_text ipt_style" /></td>
					</tr>
					<tr>
						<td class="lname"><strong>验证码</strong><b class="fred">:</b></td>
						<td><input name="verify" id="verify" type="text" onKeyDown="keydown(event)" check="Require" warning="请输入验证码" onfocus="this.className='ipt_hover ipt_style'" onblur="this.className='ipt_text ipt_style'" maxlength="4" class="ipt_text" style="width:109px" />
							<input type="hidden" name="ajax" value="1">
							<img id="verifyImg" src="__URL__/verify/" width="55" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer" align="absmiddle" />
							<a href="#" onclick="fleshVerify()" title="点击刷新验证码"  style=" text-decoration:none; color:#90F; padding-left: 5px;">看不清？换一张</a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td style=" line-height:40px;"><input type="submit"   name="button" value="" title="登陆" onmouseover="this.className='btn_1';" onmouseout="this.className='btn_0';" class="btn_0" onClick="ThinkAjax.sendForm('form1','__URL__/checkLogin/',loginHandle,'result')" />
                      
                        </td>
					</tr>
				</table>
			</div>
		</div>

</form>
</body>
</html>
<script language="JavaScript">
<!--
var PUBLIC	 =	 '__PUBLIC__';
ThinkAjax.image = [	 '__PUBLIC__/Images/loading2.gif', '__PUBLIC__/Images/ok.gif','__PUBLIC__/Images/update.gif' ]
ThinkAjax.updateTip	=	'登录中～';
function loginHandle(data,status){
if (status==1)
{
$('result').innerHTML	=	'<span style="color:blue"><img SRC="__PUBLIC__/Images/ok.gif" WIDTH="20" HEIGHT="20" BORDER="0" ALT="" align="absmiddle" > 登录成功！3 秒后跳转～</span>';
$('form1').reset();
window.location = '__URL__';
}
}
function keydown(e){
	var e = e || event;
	if (e.keyCode==13)
	{
	ThinkAjax.sendForm('form1','__URL__/checkLogin/',loginHandle,'result');
	}
}
function fleshVerify(type){
//重载验证码
var timenow = new Date().getTime();
if (type)
{
$('verifyImg').src= '__URL__/verify/adv/1/'+timenow;
}else{
$('verifyImg').src= '__URL__/verify/'+timenow;
}

}
function checkRadio(){
	alert('您不是该地区的ID');
	window.location = '__URL__/login';
}

//-->
</script>