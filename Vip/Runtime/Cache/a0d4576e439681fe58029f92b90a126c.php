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
<div class="accounttitle"><h1>电子股购买</h1></div>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="tab" >

        <tr>
          <td height="28" colspan="8" align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td width="40%">
              <table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" class="tab_l3" id="noborder">
                <tr>
                  <td align="left">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr class="bor">
                    <th width="35%" height="30" align="left">金币账户：<span style="color:#F00;">￥ <?php echo ($game_m); ?></span></th>
                    </tr>
                  <tr class="bor">
                    <th height="30" align="left">电子股持有数量：<span style="color:#F00;"><?php echo ($live_gp); ?></span> 个</th>
                  </tr>
                  <tr class="bor">
                    <th height="30" align="left">电子股求购数量：<span style="color:#F00;"><?php echo ($gping_num); ?></span> 个</th>
                  </tr>
                  <tr class="bor">
                    <th height="30" align="left">当前股价：<span style="color:blue;"><?php echo ($one_price); ?></span> /股</th>
                  </tr>
                  <tr class="bor">
                    <th height="30" align="left">距下次涨价需交易：<span style="color:#F00;"><?php echo ($cha); ?></span>股 </th>
                  </tr>
                </table></td>
                </tr>
              </table></td>
              <td width="60%">
              <form action="__URL__/buyGP" method="post" name="form1" id="form1" onsubmit="return checkf();">
              <table width="400" border="0" cellpadding="0" cellspacing="0" class="tab3">
                  <tr>
                    <td width="30%" height="40" align="right">求购总价格额度：</td>
                    <td width="70%" align="left" style="padding-left:10px;"><input name="sNun" type="text" id="sNun"  maxlength="20" onblur="value=value.replace(/[^0-9.]/g,'');tot_price();" />
                  </td>
                  </tr>
                  <tr>
                    <td height="40" align="right">电子股当前价格：</td>
                    <td align="left" style="padding-left:10px;"><font color='red'><?php echo ($one_price); ?></font>
                      /个</td>
                  </tr>
                  <tr>
                    <td height="40" align="right">购买价格：</td>
                    <td align="left" style="padding-left:10px;"><input name="one_price" type="text" id="one_price"  maxlength="20" value="<?php echo ($one_price); ?>"  onblur="value=value.replace(/[^0-9.]/g,'');tot_price();"/>
                      /个</td>
                  </tr>
                  <tr>
                    <td height="40" align="right">购买电子股总数：</td>
                    <td align="left" style="padding-left:10px;"><span style="color:#960" id="tot_price">0</span></td>
                  </tr>
                  <tr>
                    <td height="40" align="right">二级密码：</td>
                    <td align="left" style="padding-left:10px;"><input name="gp_pwd" type="password" id="gp_pwd" value="" /></td>
                  </tr>
                  <tr>
                    <td height="40" align="right">&nbsp;</td>
                    <td align="left" style="padding-left:10px;">
                        
                    <?php if(($close_gp) == "0"): if(($fgq) != "0"): ?><font color="red">还差<?php echo ($fgq); ?>天即可操作</font><?php else: ?><input type="submit" name="button2" id="button2" value="确认求购" class="btn1" /><?php endif; ?>
                      
                      <?php else: ?>
                      <?php if(($open) == "0"): ?><span style="color:#F00">股票还未出售完全</span><?php else: ?>
                      <span style="color:#F00">股市交易已关闭</span><?php endif; endif; ?>
                      <input name="cPP" type="hidden" id="cPP" value="122" />
                      <input name="PID" type="hidden" id="PID" /></td>
                  </tr>
              </table>
              </form></td>
            </tr>
          </table>
          <br />
          <br />
        <table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#b9c8d0" class="tab3" id="tb1">
        <tr>
          <th width="14%" height="28"><span>求购时间</span></th>
          <th width="12%"><span>求购总额</span></th>
		  <th width="12%"><span>求购数量</span></th>
		  <th width="12%"><span>购买单价</span></th>
		  <th width="12%"><span>已成交量</span></th>
          <th width="12%"><span>剩余数量</span></th>
		  <th width="14%"><span>状态</span></th>
          <th width="12%"><span>功能/说明</span></th>
        </tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
          <td height="25" align="center"><?php echo (date('Y-m-d H:i:s',$vo["add_time"])); ?></td>
		  <td align="center"><?php echo ($vo["price"]); ?></td>
		  <td align="center"><?php echo ($vo['price']/$vo['one_price']); ?></td>
                  <td align="center"><font color='blue' ><b><?php echo ($vo["one_price"]); ?></b></font></td>
		  <td align="center"><?php echo ($vo['all_nums']-$vo['only_nums']); ?></td>
          <td align="center"><?php echo ($vo['only_nums']); ?></td>
		  <td align="center">
          <?php if(($vo["is_cancel"]) == "1"): ?><font color="#0000FF">已撤销</font><?php endif; ?>
  <?php if(($vo["is_cancel"]) == "0"): if(($vo["ispay"]) == "0"): ?><font color="#FF0000">未完成</font><?php else: ?><font color='green'>已成交</font><?php endif; endif; ?>
          </td>
          <td align="center">
          <?php if(($vo["ispay"]) == "1"): ?>返还 <font color='green'><?php echo ($vo['only_nums']*$vo['one_price']); ?></font> 元<?php endif; ?>
          <?php if(($vo["ispay"]) == "0"): ?><a href="__URL__/delbuyGP/id/<?php echo ($vo["id"]); ?>/">撤销</a><?php endif; ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<tr>
        <td align="center" height="25" colspan="8"><?php echo ($page); ?></td>
        </tr>
        </table>
		</td>
        </tr>
      </table>
</div>
</body>
</html>

<script type="text/javascript">
function tot_price(){
	var one_price = document.getElementById('one_price').value;//单价
	var sNun	= document.getElementById('sNun').value;//总额
	one_price = parseInt(one_price*100);
	sNun = parseInt(sNun*100);
	var mai_num = parseInt(sNun/one_price);
	document.getElementById('tot_price').innerHTML = mai_num+'';
}
function formatNumberUnitsDivd(num) {
	return num.toFixed(2);
}
function checkf(){
	if(document.form1.one_price.value==""){
		alert("请输入价格");
		document.form1.one_price.focus();
		return false;
	}
	if(document.form1.sNun.value==""){
		alert("请输入GB总额");
		document.form1.sNun.focus();
		return false;
	}
	var one_price = document.getElementById('one_price').value;//单价
	var sNun	= document.getElementById('sNun').value;//总额
	one_price = parseInt(one_price*100);
	sNun = parseInt(sNun*100);
	var mai_num = parseInt(sNun/one_price);
	if(confirm("您确定要购买总额为 "+document.form1.sNun.value+" 股票币的电子股吗？\n\n每颗电子股单价："+document.form1.one_price.value+"\n\n当前购买力："+mai_num)){
		return true;
	}else{
		return false;
	}
}
</script>