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

<script language=javascript src="__PUBLIC__/Js/wpCalendar.js"></script>
<div class="ncenter_box">
<div class="accounttitle"><h1>充值管理 </h1></div>
<SCRIPT language=JavaScript>
function checklogin() {
	if (document.myform.UserID.value=="") {
		alert("请输入会员编号!");
		myform.UserID.focus();
		return false;
	}
	if (document.myform.ePoints.value=="") {
		alert("请输入充值金额!");
		myform.ePoints.focus();
		return false;
	}

	if(confirm('温馨提示：\n\n请确认以下货币充值信息正确性！ \n\n充入会员编号： '+ document.myform.UserID.value+' \n\n充值金额： '+document.myform.ePoints.value+' 元'))
	{
		this.document.myform.submit();
		return true;
	}else{
		return false;
	}

}
</SCRIPT>

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
<!-- 列表显示区域  -->&nbsp;
<form id="myform" name="myform" method="post"  action="__URL__/adminCurrencyRechargeAdd">
<table width="100%" class="tab4" border="0" cellpadding="3" cellspacing="0">
<tr>
  <td width="37%" align="right">&nbsp;</td>
  <td width="63%">为商户充值</td>
</tr>
<tr>
  <td align="right">充值会员编号：</td>
  <td><input name="UserID" type="text" id="UserID" maxlength="50" />
    <span style="color: #FF3300;">*</span></td>
</tr>
<tr>
  <td align="right">充值类型：</td>
  <td><select name="stype">
      <option value="0">充值报单币</option>
      <option value="1">充值奖金币</option>
      </select></td>
</tr>
<tr>
  <td align="right">充值金额：</td>
  <td><input name="ePoints" type="text" id="ePoints" size="10" maxlength="12" />
    <span style="color: #FF3300;">*（要减少币值，输入负金额即可！）</span></td>
</tr>

  <td align="right">&nbsp;</td>
  <td><span class="fLeft">
    <input type="button" name="Actions" id="Actions" value="确定充值" class="button_text" onclick="checklogin()"/>
  </span></td>
</tr>
</table>
</form>
<form name="form3" method="post" action="__URL__/adminCurrencyRechargeAC">
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0" >
<tr class="content_td" align="center">
    <th >
        <input type="checkbox" name="chkall" value="checkbox" onclick="CheckAll(this.form)"  class="btn2" id="chkall" />
      </th>
    <th nowrap ><span>会员编号</span></th>
    <th nowrap ><span>充值金额</span></th>
    <th nowrap ><span>充值类型</span></th>
    <th nowrap ><span>充值时间</span></th>
    <th nowrap ><span>确认时间</span></th>
    <th nowrap ><span>账号</span></th>
    <th nowrap ><span>状态</span></th>
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="content_td" align="center">
	<td><div align="center">
	  <input type="checkbox" name="tabledb[]" value="<?php echo ($vo['id']); ?>" class="btn2" />
	</div></td>
	<td><?php echo ($vo['user_id']); ?></td>
	<td><span class="STYLE1"><?php echo ($vo['epoint']); ?></span></td>
	<td><?php if(($vo["stype"]) == "0"): ?>充入报单币<?php else: ?>充值奖金币<?php endif; ?></td>
	<td><?php echo (date('Y-m-d H:i:s',$vo["rdt"])); ?></td>
	<td><?php if(($vo["pdt"]) > "0"): echo (date('Y-m-d H:i:s',$vo["pdt"])); endif; ?></td>
	<td><?php echo ($vo['zhuanghao']); ?></td>
	<td><?php if(($vo['is_pay']) == "1"): ?><span style="color: #F00;">已确认</span><?php endif; if(($vo['is_pay']) == "0"): ?><span style="color: #090;">未确认</span><?php endif; ?></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
  <tr>
    	<td width="50%">
<input name="全选" type="button" class="button_text" id="全选" onclick="CheckAll(this.form)" value="全选" />	  &nbsp; &nbsp;
	  <input type="submit" name="action" value="确认" class="button_text" onclick="{if(confirm('确定吗?')){return true;}return false;}">
	  &nbsp; &nbsp;
	  <input type="submit" name="action" value="删除" class="button_text" onclick="{if(confirm('确定删除吗?')){return true;}return false;}"></td>
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
    <td align="center">
    <form method='post' action="__URL__/adminCurrencyRecharge">
		会员编号：
		    <input name="UserID" type="text"id="UserID" title="帐号查询" maxlength="200" >
		  <input type="submit" name="Submit" value="搜索"  class="button_text"/>
		</form>
    </td>
    </tr>
</table>
</div>
</body>
</html>
<script>new TableSorter("tb1");</script>