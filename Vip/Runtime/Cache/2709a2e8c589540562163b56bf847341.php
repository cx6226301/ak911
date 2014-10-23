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
<div class="accounttitle"><h1>Declaration center management </h1></div>
&nbsp;
<form name="form3" method="post" action="__URL__/adminAgentsAC">
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
	<thead>
    <tr class="content_td" align="center">
        <th nowrap></th>
        <th nowrap><span>Membership number</span></th>
        <th nowrap><span>Member name</span></th>
        <th nowrap><span>To apply for time</span></th>
        <th nowrap><span>Set the time</span></th>
        <th nowrap><span>The remaining electronic currency</span></th>
        <th nowrap><span>Remark</span></th>
        <th nowrap><span>Stutas</span></th>
    </tr>
    </thead>
    <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr align="center">
        <td><input type="checkbox" name="tabledb[]" value="<?php echo ($vo['id']); ?>" class="btn2" /></td>
        <td><a href="__APP__/Fck/menber/bj_id/<?php echo ($vo['id']); ?>/eth/2"><?php echo ($vo['user_id']); ?></a>&nbsp;</td>
        <td><span class="STYLE1"><?php echo ($vo['user_name']); ?></span>&nbsp;</td>
        <td><?php echo (date('Y-m-d H:i:s',$vo["idt"])); ?>&nbsp;</td>
        <td><?php if(($vo['is_agent']) == "2"): echo (date('Y-m-d H:i:s',$vo["adt"])); endif; ?>&nbsp;</td>
        <td><?php echo ($vo['agent_cash']); ?></td>
        <td><a href="__URL__/adminAgentsShow/Sid/<?php echo ($vo['id']); ?>/">Click to view</a></td>
        <td><?php if(($vo['is_agent']) > "1"): ?><font color="#009900">Have been confirmed</font><?php else: ?><font color="#FF0000">unconfirmed</font><?php endif; ?>&nbsp;</td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
<tr>
    	<td width="50%">&nbsp;&nbsp;
          <input name="All" type="button" class="button_text" id="All" onclick="CheckAll(this.form)" value="All" />&nbsp;&nbsp;
          <input type="submit" name="action" value="Confirm" class="button_text" onclick="{if(confirm('Confirm?')){return true;}return false;}">&nbsp;&nbsp;
          <input type="submit" name="action" value="Delete" class="button_text" onclick="{if(confirm('Delete is?')){return true;}return false;}">&nbsp;&nbsp;
          <input name="button3" type="button" onclick="window.location.href='__URL__/financeDaoChu_BD/'" value="Declaration center export Excel spreadsheet" class="button_text" />
          </td>
        <td width="50%"><?php echo ($page); ?></td>
    </tr>
</table>
</form>
<table width="600" align="center">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <td align="center"><form method='post' action="__URL__/adminAgents/">Search for members：<input type="text" name="UserID" title="Account query">
    <input type="submit" name="Submit" value="Query"  class="button_text"/>
    </form></td>
    </tr>
</table>
</div>
</body>
</html>
<script>new TableSorter("tb1");</script>