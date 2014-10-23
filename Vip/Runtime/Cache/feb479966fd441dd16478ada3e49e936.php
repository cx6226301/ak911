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

<script language='javascript'>
function CheckForm(){
	if(confirm('Are you sure you want to use form money payment to qualify？')){
		return true;
	}else{
		return false;
	}
}
</script>
<div class="ncenter_box">
<div class="accounttitle"><h1>Promotion application </h1></div>
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="0" id="tb1">

	<form name="form1" method="post" action="__URL__/jinjiConfirm" onSubmit="return CheckForm();">
	<tr>
    <td align="right">Membership number：</td>
    <td><input name="UserID" type="text"  value="<?php echo ($frs['user_id']); ?>"  readonly="readonly"/></td>
    </tr>
	<tr>
    <td align="right">Declaration for currency balance：</td>
    <td><?php echo ($frs['agent_cash']); ?>
    </tr>
    <tr>
    <td align="right">The current level：</td>
    <td><?php echo ($level[$frs['u_level']]); ?> - <?php echo ($frs['cpzj']); ?>
    </tr>
  <tr>
    <td align="right">Qualify for：</td>
    <td>
    <?php if(($frs['u_level']) < "5"): ?><select name="uLevel" id="uLevel">
        <?php if(is_array($sx1)): $i = 0; $__LIST__ = $sx1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($key) >= $frs['u_level']): ?><option value="<?php echo ($key+1); ?>"><?php echo ($level[$key+1]); ?> - <?php echo ($sx1[$key]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>   
        </select>                            
   <?php else: ?><span class="hong"> You have is the highest level to advance。</span><?php endif; ?>
      
      </td>
  </tr>
  <?php if(($frs['u_level']) < "5"): ?><tr>
            <td align="right">remark：</td>
            <td><textarea name="content" id="content" cols="40" rows="8"></textarea></td>
    </tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" name="Submit" value="Determine the promotion" class="btn1"/></td>
  </tr><?php endif; ?>
  </form>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
   <tr align="center">
     <td><strong>Qualifying record</strong></td>
    </tr>
</table>
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="0" id="tb2">
      <tr>
        <th><span>Membership number</span></th>
        <th><span>Before the promotion</span></th>
        <th><span>after the promotion</span></th>
        <th><span>Investment amount</span></th>
        <th><span>To apply for time</span></th>
        <th><span>Set the time</span></th>
        <th><span>remark</span></th>
        <th><span>status</span></th>
      </tr>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td><div align="center"><?php echo ($vo['user_id']); ?></div></td>
        <td><div align="center"><span  class="STYLE1"><?php echo ($level[$vo['u_level']]); ?></span></div></td>
        <td><div align="center"><span  class="STYLE1"><?php echo ($level[$vo['up_level']]); ?></span></div></td>
        <td><div align="center"><span  class="STYLE1"><?php echo ($vo['money']+$vo['money_two']); ?></span></div></td>
        <td><div align="center"><?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?></div></td>
        <td><div align="center"><?php if(($vo["pdt"]) > "0"): echo (date('Y-m-d H:i:s',$vo["pdt"])); else: ?>&nbsp;<?php endif; ?></div></td>
        <td><div align="center"><a href="__URL__/jinjishow/Sid/<?php echo ($vo['id']); ?>/">Click to view</a></div></td>
        <td><div align="center"><?php if(($vo['is_pay']) == "0"): ?><span style="color: #FF3300;">unconfirmed</span><?php endif; ?>
        				<?php if(($vo['is_pay']) == "1"): ?>Have been confirmed<?php endif; ?></div></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</div>
</body>
</html>