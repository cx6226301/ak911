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
<div class="accounttitle"><h1>电子股交易市场</h1></div>
<table width="100%" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <td align="center"><span style="font-size:14px; line-height:30px; font-weight:bold">出售电子股</span></td>
  </tr>
  <tr>
    <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" class="tab3">
      <tr align="center">
        <th width="10%" height="24" class="tabr">序号</th>
        <th width="15%" class="tabr">卖家编号</th>
        <th width="15%" class="tabr">挂入总量</th>
        <th width="15%" class="tabr">挂入价格</th>
        <th width="15%" class="tabr">成交量</th>
        <th width="15%" class="tabr">挂入剩余</th>
        <th width="15%" class="tabr">状态</th>
      </tr>
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
          <td nowrap="nowrap" height="24"><?php echo ($i); ?></td>
          <td nowrap="nowrap"><?php echo (conname($vo["user_id"])); ?></td>
          <td nowrap="nowrap"><?php echo ($vo["all_nums"]); ?></td>
          <td nowrap="nowrap"><?php echo ($vo["one_price"]); ?></td>
          <td nowrap="nowrap"><?php echo ($vo['all_nums']-$vo['only_nums']); ?></td>
          <td nowrap="nowrap"><?php echo ($vo["only_nums"]); ?></td>
          <td nowrap="nowrap"><?php if(($vo['ispay']) == "0"): ?><font color='red'>等待交易</font>
            <?php else: ?>
            <font color='green'>交易成功</font><?php endif; ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      <tr align="center">
          <td height="2" colspan="7"></td>
          </tr>
    </table></td>
  </tr>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td><?php echo ($page); ?></td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <td align="center"><span style="font-size:14px; line-height:30px; font-weight:bold">求购电子股</span></td>
  </tr>
  <tr>
    <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" class="tab3">
      <tr align="center">
        <th width="15%" height="24" class="tabr">序号</th>
        <th width="15%" class="tabr">买家编号</th>
        <th width="15%" class="tabr">求购数量</th>
        <th width="15%" class="tabr">求购单价</th>
        <th width="15%" class="tabr">剩余所需量</th>
        <th width="15%" class="tabr">状态</th>
        </tr>
      <?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><tr align="center">
          <td height="24" nowrap="nowrap"><?php echo ($i); ?></td>
          <td nowrap="nowrap"><?php echo (conname($vo1["user_id"])); ?></td>
          <td nowrap="nowrap"><?php echo ($vo1["all_nums"]); ?></td>
          <td nowrap="nowrap"><?php echo ($vo1["one_price"]); ?></td>
          <td nowrap="nowrap"><?php echo ($vo1["only_nums"]); ?></td>
          <td nowrap="nowrap"><?php if(($vo1['ispay']) == "0"): ?><font color='blue'>正在委托</font>
            <?php else: ?>
            <font color='green'>交易成功</font><?php endif; ?></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      <tr align="center">
          <td height="2" colspan="6"></td>
          </tr>
    </table></td>
  </tr>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td><?php echo ($page1); ?></td>
  </tr>
</table>
</div></div>
</body>
</html>