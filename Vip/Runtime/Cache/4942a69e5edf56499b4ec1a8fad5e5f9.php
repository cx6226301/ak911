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
<div class="accounttitle"><h1>Member of the audit </h1></div>
&nbsp;
<form name="form3" method="post" action="__URL__/auditMenberAC">
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
	<thead>
    <tr align="center">
        <th nowrap></th>
        <th nowrap><span>Membership number</span></th>
        <th nowrap><span>Member name</span></th>
        <th nowrap><span>bank</span></th>
        <th nowrap><span>Bank card number</span></th>
        <!--<th nowrap><span>开户姓名</span></th>-->
        <th nowrap><span>Contact address</span></th>
        <th nowrap><span>Contact phone number</span></th>
        <th nowrap><span>Registration time</span></th>
        <th nowrap><span>Registered amount</span></th>
        <!--<th nowrap><span>会员级别</span></th>-->
        <th nowrap><span>type</span></th>
    </tr>
    </thead>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
        <td><input type="checkbox" name=tabledb[] value="<?php echo ($vo['id']); ?>" class="btn2"></td>
        <td><a href="__URL__/adminuserData/PT_id/<?php echo ($vo['id']); ?>"><?php echo ($vo['user_id']); ?></a></td>
        <td><?php echo ($vo['user_name']); ?></td>
        <td><?php echo ($vo['bank_name']); ?></td>
        <td><?php echo ($vo['bank_card']); ?></td>
        <!--<td><?php echo ($vo['user_name']); ?></td>-->
        <td><?php echo ($vo['user_address']); ?></td>
        <td><?php echo ($vo['user_tel']); ?></td>
        <td><?php echo (date('Y-m-d H:i:s',$vo["rdt"])); ?></td>
        <td><?php echo ($vo['cpzj']); ?></td>
        <!--<td><?php echo ($voo[$vo['u_level']]); ?></td>-->
        <td><?php if(($vo['is_pay']) == "0"): ?><span style="color: #FF0000;">Did not open</span><?php else: ?>Has been opened<?php endif; ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
    <tr>
    	<td width="50%"><input name="all" type="button" class="button_text" id="全选" onClick="CheckAll(this.form)" value="all">
      &nbsp;&nbsp;
	  <input type="submit" name="action" value="Opening of the member" onclick="{if(confirm('Determine the opening member?')){return true;}return false;}" class="button_text">
	  &nbsp;&nbsp;
	  <input type="submit" name="action" value="Set to an empty list" onclick="{if(confirm('Determines the member is set to an empty list?')){return true;}return false;}" class="button_text">
	  &nbsp;&nbsp;
	  <input type="submit" name="action" value="Delete members" onclick="{if(confirm('Sure to delete members?')){return true;}return false;}" class="button_text"></td>
        <td width="50%"><?php echo ($page); ?></td>
    </tr>
</table>
</form>
<table width="600" align="center">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <td align="center"><form method='post' action="__URL__/auditMenber/">Search for members：<input type="text" name="UserID" title="Account query">
    <input type="submit" name="Submit" value="query"  class="button_text"/>
    </form></td>
    </tr>
</table>
</div>
</body>
</html>
<script>new TableSorter("tb1");</script>