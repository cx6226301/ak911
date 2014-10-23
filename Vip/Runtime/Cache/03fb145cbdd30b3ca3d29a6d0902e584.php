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
<div class="accounttitle"><h1>Member management </h1></div>
&nbsp;
<form name="form3" method="post" action="__URL__/adminMenberAC">
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
	<thead>
    <tr align="center">
        <th></th>
        <th><span>Membership number</span></th>
        <th><span>Name</span></th>
        <th><span>Telephone</span></th>
        <th><span>Declaration for center</span></th>
        <th><span>Opening time</span></th>
        <th><span>The total bonus</span></th>
        <th><span>Cash account</span></th>
        <th><span>Electronic account</span></th>
        <th><span>Check the bonus</span></th>
        <th><span>Type</span></th>
        <th><span>Whether the bonus</span></th>
    </tr>
    </thead>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="content_td lz" align="center">
        <td><input type="checkbox" name="tabledb[]" value="<?php echo ($vo['id']); ?>" class="btn2" /></td>
        <td><a href="__URL__/adminuserData/PT_id/<?php echo ($vo['id']); ?>"><?php echo ($vo['user_id']); ?></a></td>
        <td><?php echo ($vo['user_name']); ?></td>
        <td><?php echo ($vo['user_tel']); ?></td>
        <td><?php if(($vo['is_agent']) == "2"): ?><span style="color:BLUE;">Yes</span><?php else: ?>No<?php endif; ?></td>
        <td><?php echo (date('Y-m-d H:i:s',$vo["pdt"])); ?></td>
        <td><?php echo ($vo['zjj']); ?></td>
        <td><?php echo ($vo['agent_use']); ?></td>
        <td><?php echo ($vo['agent_cash']); ?></td>
        <td><a href="__APP__/Fck/financeTable/cid/<?php echo ($vo['id']); ?>">To view</a></td>
        <td><?php if(($vo['is_lock']) == "0"): ?><span style="color: #FF0000;">unlocked</span><?php else: ?>Has been locked<?php endif; if(($vo['is_pay']) == "2"): ?>[空单]<?php endif; ?></td>
        <td><?php if(($vo['is_fenh']) == "0"): ?><span style="color: #FF0000;">Open the bonus</span><?php else: ?>Close the bonus<?php endif; ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
    <tr>
   	  <td width="60%">
      <input name="All" type="button" class="button_text" id="All" onclick="CheckAll(this.form)" value="All" />	  &nbsp;&nbsp;
	  <input type="submit" name="action" value="Open membership" class="button_text" onclick="{if(confirm('Sure you want to open membership?')){return true;}return false;}">&nbsp;&nbsp;
	  <input type="submit" name="action" value="Locking member" class="button_text" onclick="{if(confirm('Sure you want to lock the member?')){return true;}return false;}">&nbsp;&nbsp;
      <!--<input type="submit" name="action" value="删除会员" class="button_text" onclick="{if(confirm('确定要删除会员吗?')){return true;}return false;}">&nbsp;&nbsp;-->
	  <input type="submit" name="action" value="Open the bonus" class="button_text" onclick="{if(confirm('Sure you want to open a bonus?')){return true;}return false;}">&nbsp;&nbsp;
	  <input type="submit" name="action" value="Close the bonus" class="button_text" onclick="{if(confirm('Sure you want to close the bonuses?')){return true;}return false;}">&nbsp;&nbsp;
      <input type="submit" name="action" value="The center is set to orders" class="button_text" onclick="{if(confirm('Sure you want to the center members will be selected as orders?')){return true;}return false;}">&nbsp;&nbsp;
	  <!--<input type="submit" name="action" value="奖金转电子币" class="button_text" onclick="{if(confirm('确定要将此会员的奖金币全部转为电子币吗?')){return true;}return false;}">--></td>
    </tr>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
    <tr>
        <td><?php echo ($page); ?></td>
    </tr>
</table>
</form>
<table width="600" align="center">
    <tr>
    <td align="center"><form method='post' action="__URL__/adminMenber/">Search Member：<input type="text" name="UserID" title="Account query">
    <input type="submit" name="Submit" value="Query"  class="button_text"/>
    &nbsp;
    <input name="button3" type="button" onclick="window.location.href='__URL__/financeDaoChu_MM/'" value="All the members export Excel spreadsheet" class="button_text" />
    </form></td>
    </tr>
</table>
</div>
</body>
</html>
<script>new TableSorter("tb1");</script>