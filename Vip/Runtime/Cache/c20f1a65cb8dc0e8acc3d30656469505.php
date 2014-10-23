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

<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
.STYLE2 {color: #00CC99}
-->
</style>
<div class="ncenter_box">
<div class="accounttitle"><h1>收入列表&nbsp;&nbsp;[<a href='javascript:history.back()'>返回列表</a>] </h1></div>
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
<td colspan="7" class="tabletd">
<form method="post" action="__URL__/adminFinanceList">
<div class="fLeft">
	<span id="key">查询：
	<input type="text" name="UserID" title="帐号查询">
      <input type="hidden" name="eDate" value="<?php echo ($eDate); ?>" />
      <input type="hidden" name="sDate" value="<?php echo ($sDate); ?>" />
	<input type="submit" name="Submit" value="查 询" class="button_text" />
	</span></div>
<div  id="searchM" class=" none search cBoth" ></div>
</form></td>
</tr>
<tr align="center">
    <th nowrap><span>会员编号</span></th>
    <th nowrap><span>姓名</span></th>
	<th nowrap><span>消费金额</span></th>
	<th nowrap><span>联系电话</span></th>
	<th nowrap><span>开通会员</span></th>
	<th nowrap><span>注册时间</span></th>
	<th nowrap><span>开通时间</span></th>
	<!--<th nowrap><span>商户级别</span></th>-->
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
	<td nowrap="nowrap"><?php echo ($vo['user_id']); ?></td>
	<td nowrap="nowrap"><?php echo ($vo['user_name']); ?></td>
	<td nowrap="nowrap"><?php echo ($vo['cpzj']); ?></td>
	<td nowrap="nowrap"><?php echo ($vo['user_tel']); ?></td>
	<td nowrap="nowrap"><?php if(($vo["open"]) == "1"): ?>公司开通<?php else: echo ($vo['re_name']); endif; ?></td>
	<td nowrap="nowrap"><?php echo (date('Y-m-d H:i:s',$vo["rdt"])); ?></td>
	<td nowrap="nowrap"><?php echo (date('Y-m-d H:i:s',$vo["pdt"])); ?></td>
	<!--<td nowrap="nowrap"><?php echo ($voo[$vo['u_level']]); ?></td>-->
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr align="center">
	<td colspan="7"><?php echo ($page); ?></td>
</tr>
</table>
</div>
</body>
</html>