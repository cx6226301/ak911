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

<style>
.tab_l3{font-size:14px;}
</style>
<div class="ncenter_box">
<div class="accounttitle"><h1>Purchase list</h1></div>
<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#b9c8d0" class="tab3" id="tb1">
<tr>
  <th width="12%"><span>Membership number</span></th>
  <th width="18%" height="28"><span>time</span></th>
  <th width="12%"><span>the total amount of</span></th>
  <th width="12%"><span> the remaining</span></th>
  <th width="12%"><span>Have volume</span></th>
  <th width="12%"><span>Clinch a deal amount</span></th>
  <th width="10%"><span>type</span></th>
  <th width="12%"><span>return</span></th>
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
  <td align="center"><?php echo (user_id($vo["uid"])); ?></td>
  <td height="25" align="center"><?php echo (date('Y-m-d H:i:s',$vo["add_time"])); ?></td>
  <td align="center"><?php echo ($vo["price"]); ?></td>
  <td align="center"><?php echo ($vo["buy_s"]); ?></td>
  <td align="center"><?php echo ($vo['only_nums']); ?></td>
  <td align="center"><?php echo ($vo['all_nums']*$vo['one_price']-$vo['only_nums']*$vo['one_price']); ?></td>
  <td align="center">
  <?php if(($vo["is_cancel"]) == "1"): ?><font color="#0000FF">Had withdrawn</font><?php endif; ?>
  <?php if(($vo["is_cancel"]) == "0"): if(($vo["ispay"]) == "0"): ?><font color="#FF0000">unfinished</font><?php else: ?>Has been to clinch a deal<?php endif; endif; ?>
  </td>
  <td align="center">
  <?php if(($vo["ispay"]) == "1"): ?>return <?php echo ($vo['only_nums']*$vo['one_price']); endif; ?></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
    <tr>
        <td><?php echo ($page); ?></td>
    </tr>
</table>
</div>
</body>
</html>