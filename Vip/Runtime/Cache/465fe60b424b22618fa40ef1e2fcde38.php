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

<div class="login">
<div class="ncenter_box">
<div class="accounttitle"><h1>Registered successfully </h1></div>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td class="zc_hong" style="line-height:30px;" align="center" colspan="2"><?php echo ($alert_msg); ?></td>
              </tr>
              <tr>
                <td class="zc_hong" style="line-height:30px;" align="center" colspan="2"><?php echo ($s17); ?></td>
              </tr>
              <tr>
                <td width="20%" style="line-height:30px;" align="right">Membership number：</td>
                <td width="80%" class="zc_hong" style="line-height:30px;"><?php echo ($myrs['user_id']); ?></td>
              </tr>
              <tr>
                <td style="line-height:30px;" align="right">Registration fee：</td>
                <td class="zc_hong" style="line-height:30px;"><?php echo ($myrs['cpzj']); ?></td>
              </tr>
              <tr >
                <td height="30" align="center" colspan="2"><input name="submit" type="submit" class="button_text" onclick="location.href='<?php echo ($gourl); ?>'" value="To complete the registration"></td>
              </tr>
            </table>
</div>
</div>
</body>
</html>