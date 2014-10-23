<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($System_namex); ?></title>
<link href="__PUBLIC__/Css/body.css" rel="stylesheet" media="screen" type="text/css" />
<link href="__PUBLIC__/Css/menu.css" rel="stylesheet" media="screen" type="text/css" />
<link href="__PUBLIC__/Css/main.css" rel="stylesheet" media="all" type="text/css" />
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/Base.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/prototype.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/mootools.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/Ajax/ThinkAjax.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/Form/CheckForm.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/common.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/Util/ImageLoader.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/myfocus-1.0.4.min.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/all.js\"></sc"+"ript>")</script>
<script language="JavaScript">
ifcheck = true;
function CheckAll(form)
{
	for (var i=0;i<form.elements.length-2;i++)
	{
		var e = form.elements[i];
		e.checked = ifcheck;
	}
	ifcheck = ifcheck == true ? false : true;
}
</script>
</head>
<body onLoad="loadBar(0)">

<script type="text/javascript" src="__PUBLIC__/Js/UserJs.js"></script>
<div class="ncenter_box">
<div class="accounttitle"><h1>Change the password </h1></div>
    <div class="c_p5"><div class="tips">Please select a level of change the password, enter the old password and you want to change to become the new password, enter the authentication code and encrypted answers, click on the confirmation. </div></div>
        <table width="100%" border="0" cellpadding="3" cellspacing="0">
        <form method='post' name="login" action="__URL__/changePwd/">
          <tr>
            <td colspan="3" class="tabletd">&nbsp;</td>
            </tr>
          <tr>
            <td width="29%" align="right">Password level：</td>
            <td width="14%"><input name="type" type="radio" class="ipt_radi" value="1" checked="checked" />
              Level 1&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="type" value="2" class="ipt_radi" />
              Level 2 </td>
            <td width="57%">&nbsp;</td>
          </tr>
          <tr>
            <td width="29%" align="right">The old password：</td>
            <td width="14%"><input name="oldpassword" id="oldpassword" type="password" maxlength="50" class="ipt" onkeyup="javascript:Null_Full(this.name)" onfocus="notice('0','')"  onblur="notice('0','none')"/></td>
            <td width="57%"><div id="oldpassword1" class="info"><div id="0" class="focus_r" style="display:none;"><div class="msg_tip">请输入旧密码。</div></div></div></td>
          </tr>
          <tr>
            <td align="right">The new password：</td>
            <td><input  name="password" id="password" type="password" maxlength="50" class="ipt" onkeyup="javascript:Null_Full(this.name)" onfocus="notice('1','')" onblur="notice('1','none')"/></td>
            <td><div id="password1" class="info"><div id="1" class="focus_r" style="display:none;"><div class="msg_tip">请输入新密码。</div></div></div></td>
          </tr>
          <tr>
            <td align="right">Confirm new password：</td>
            <td><input  name="repassword" id="repassword" type="password" maxlength="50" class="ipt" onkeyup="javascript:yhrePass(this.name,'password')" onfocus="notice('2','')" onblur="notice('2','none')"//></td>
            <td><div id="repassword1" class="info"><div id="2" class="focus_r" style="display:none;"><div class="msg_tip">确认新密码。</div></div></div></td>
          </tr>
          <tr>
            <td align="right">verify：</td>
            <td><input name="verify" type="text" class="small bLeftRequire" size="4" maxlength="4" />
                <img src="__URL__/verify/" border="0" alt="Click the refresh verification code" id="verifyImg" onclick="fleshVerify()" style="cursor:pointer" align="absmiddle" />&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" style="height:5px;"><hr></td>
            </tr>
          <tr>
          <tr>
            <td align="right">Encrypted problem：</td>
            <td><select name='wt'>
			<option value=1><?php echo ($vo['wt1']); ?></option>
			<?php if(($wt2) != ""): ?><option value=2><?php echo ($vo['wt2']); ?></option><?php endif; ?>
			</select></td>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td align="right">Please answer encrypted answers：</td>
            <td><input name="da" type="password" id="wenti_dan" value="" class="ipt"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td><span class="tCenter">
              <input name="submit"  type="submit" class="button_text" value="Confirm" alt="确认" />
              <input name="button"  type="reset" class="button_text" value="Reset" alt="取消" />
            </span></td>
            <td>&nbsp;</td>
          </tr>
          </form>
        </table>
</div>
</body>
</html>
<script language="JavaScript">
<!--
function fleshVerify(){
//重载验证码
var timenow = new Date().getTime();
$('verifyImg').src= '__URL__/verify/'+timenow;
}
//-->
</script>