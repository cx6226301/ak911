<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>找回密码</title>
<style type="text/css">
<!--
body {
	background-image: url();
	background-color: #222;
	font-family: Arial, Helvetica, sans-serif;
}
td {
	font-size: 13px;
	line-height: 24px;
	color: #FFF;
}
.tit2 {
	font-size: 13px;
	line-height: 24px;
	font-weight: bold;
	color: #F00;
}
.tit1 {
	font-size: 15px;
	line-height: 30px;
	font-weight: bold;
	color: #96E403;
}
.botn1 {
	width: 80px;
	border: 1px solid #CCC;
	font-size: 12px;
	line-height: 22px;
}
input {
	border: 1px solid #999;
}
-->
</style>
<script language="JavaScript">
<!--
function CheckForm()
{
	if (document.form1.mb_end.value.length == 0)
	{
	alert("温馨提示您： 请输入您的密保答案！\n");
	document.form1.mb_end.focus();
	return false;
	}
	return true;
}
//-->
</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    <table width="450" border="0" align="center" cellpadding="20" cellspacing="1" style="margin-top:100px; background:#666">
      <tr>
        <td height="150" valign="top" bgcolor="#3D3D3D"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tit1">您的密码也发送到邮箱：</td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="__URL__/find_pw_t" onsubmit="return CheckForm()">
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="100%"><span class="tit2"><?php echo ($myask); ?></span></td>
  </tr>
  <tr>
    <td class="tit1">请注意查收邮件。</td>
  </tr>
  <tr>
    <td class="tit1"> [<a href="../../"><font color="#62F906">返回登录</font></a>]</td>
  </tr>
</table>
</form>
</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>