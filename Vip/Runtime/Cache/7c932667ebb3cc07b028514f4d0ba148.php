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

<div class="ncenter_box">
<div class="accounttitle"><h1>Direct driving system table </h1></div>
<!-- 功能操作区域结束 -->
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
  <tr>
    <td colspan="10" class="tabletd">
    <form method='post' action="__URL__/relations">
Member number：<input type="text" name="UserID" title="member query" class="medium" >
  <input type="submit" name="Submit" value="query" class="button_text"/ >
</form></td>
    </tr>
  <tr>
    <th><div align="center">Member number</div></th>
    <th><div align="center">Bank</div></th>
    <th><div align="center">Bank card number</div></th>
    <th><div align="center">Name</div></th>
    <th><div align="center">Telephone</div></th>
    <th><div align="center">Registration time</div></th>
    <th><div align="center">open time</div></th>
    <th><div align="center">Purchase quantity</div></th>
    <th><div align="center">Registered amount</div></th>
    <th><div align="center">level</div></th>
  </tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
      <td><div align="center"><?php echo ($vo['user_id']); ?></div></td>
      <td><div align="center"><?php echo ($vo['bank_name']); ?></div></td>
      <td><div align="center"><?php echo ($vo['bank_card']); ?></div></td>
      <td><div align="center"><?php echo ($vo['user_name']); ?></div></td>
      <td><div align="center"><?php echo ($vo['user_tel']); ?></div></td>
      <td><div align="center"><?php echo (date('Y-m-d',$vo["rdt"])); ?></div></td>
    <td><div align="center"><?php echo (date('Y-m-d',$vo["pdt"])); ?></div></td>
    <td><div align="center"><span class="STYLE1"><?php echo ($vo['f4']); ?></span></div></td>
    <td><div align="center"><span class="STYLE1"><?php echo ($vo['cpzj']); ?></span></div></td>
    <td><div align="center"><?php echo ($voo[$vo['u_level']]); ?></div></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
<td colspan="10"><div align="center"><?php echo ($page); ?></div></td>
</tr>
</table>
</div>
</body>
</html>