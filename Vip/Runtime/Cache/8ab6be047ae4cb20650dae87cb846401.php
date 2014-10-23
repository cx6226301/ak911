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
<div class="accounttitle"><h1>outbox </h1></div>
<form name="form1" method="post" action="__URL__/messagesDelAC/bUrl/outMessages">&nbsp;
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
  <tr>
    <th align="center"><input type="checkbox" name="chkall" value="checkbox" onclick="CheckAll(this.form)"  class="btn2" id="chkall" /></th>
    <th align="center">type</th>
    <th align="center">The recipient</th>
    <th align="center">The theme</th>
    <th align="center">Time</th>
  </tr>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td align="center"><input type="checkbox" name="tabledb[]" value="<?php echo ($vo['id']); ?>" class="btn2" /></td>
    <td align="center">
    <?php if(($vo['is_read']) == "0"): ?><span class="STYLE1">Did not read</span><?php endif; ?>
    <?php if(($vo['is_read']) == "1"): ?><span class="STYLE2">Have read</span><?php endif; ?>
    </td>
    <td align="center"><?php echo (conname($vo['s_user_id'])); ?></td>
    <td align="center"><a href="__URL__/outMessagesShow/Pid/<?php echo ($vo['id']); ?>"><?php echo ($vo['title']); ?></a></td>
    <td align="center"><?php echo (date('Y-m-d H:i:s',$vo["pdt"])); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
      <td colspan="5">&nbsp;&nbsp;
      <input name="all" type="button" class="button_text" id="all" onclick="CheckAll(this.form)" value="all" />        &nbsp;&nbsp;
        <input type="submit" name="action" value="Delete the letters"  class="button_text" /></td>
    </tr>
    <tr><td colspan="5" align="center"><?php echo ($page); ?></td></tr>
</table>
</form>
</div>
</body>
</html>
<script>new TableSorter("tb1");</script>