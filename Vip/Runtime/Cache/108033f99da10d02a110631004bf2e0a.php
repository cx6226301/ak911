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

<SCRIPT language=JavaScript>
function checklogin() {
	if (document.myform.UserID.value=="") {
		alert("Please enter the recipient!");
		myform.UserID.focus();
		return false;
	}
	if (document.myform.Title.value=="") {
		alert("Please enter the email title!");
		myform.Title.focus();
		return false;
	}
	return true;
}
</SCRIPT>
<div class="ncenter_box">
  
<div class="accounttitle"><h1>Write E-mail </h1></div>&nbsp;
    <form method='post' id="form1" name="myform" onSubmit="return checklogin()" action="__URL__/messagesAC">
    <table width="100%" border="0" cellpadding="5" cellspacing="5">
      <tr>
        <td width="28%" align="right">No.：</td>
        <td width="72%"><input name="UserID" type="text"  id="UserID" value="Company"/>
        <input name="level" type="radio" value="1" checked="checked" onclick="UserID.value='Company';"> Write E-mail To Company
        <?php if(($mrs["id"]) == "1"): ?><input name="level" type="radio" value="0" onclick="UserID.value='';"> Write E-mail To Member<?php endif; ?>
        </td>
      </tr>
      <tr>
          <td align="right">Title：</td>
        <td><input name="Title" type="text"  id="Title" size="35" maxlength="200" /></td>
      </tr>
      <tr>
        <td align="right">Content：</td>
        <td><textarea name="Msg" cols="45" rows="7" id="Msg"></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="submit" type="submit"  class="button_text" value="Send" /></td>
      </tr>
    </table>
    </form>
</div>
</body>
</html>