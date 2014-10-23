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
<div class="accounttitle"><h1>股票参数设置</h1></div>&nbsp;
<form method='post' id="myform" action="__URL__/setGPSave" >
<table width="100%" cellpadding=5 cellspacing=0 border=0 class="list">
<tr  class="content_td">
		<td width="25%" height="30" class="tabr">&nbsp;</td>
		<td width="75%">&nbsp;</td>
</tr>

<tr>
		<td height="30" align="right" class="tabr"><span style="color:#00C">股票价格</span>：</td>
		<td class="center"><input name="gp_one" type="text" id="gp_one" value="<?php echo ($fee_rs['gp_one']); ?>" size="8" maxlength="12" onkeyup="guolv(this.name);"/>
                    <input name="gpprice" type="hidden" id="gpprice" value="<?php echo ($fee_rs['gp_one']); ?>"/>涨价次数:<font color='red'><?php echo ($fee_rs['zhang_nums']); ?></font>
        </td>
</tr>
<tr style="display:none">
		<td height="30" align="right" class="tabr"><span style="color:#00C">今日开盘价</span>：</td>
		<td class="center"><input name="gp_open" type="text" id="gp_open" value="<?php echo ($fee_rs['gp_one']); ?>" size="8" maxlength="12" onkeyup="guolv(this.name);"/>
        </td>
</tr>
<tr style="display:none">
		<td height="30" align="right" class="tabr"><span style="color:#00C">今日关盘价</span>：</td>
		<td class="center"><input name="gp_close" type="text" id="gp_close" value="<?php echo ($fee_rs['gp_close']); ?>" size="8" maxlength="12" onkeyup="guolv(this.name);"/>
        </td>
</tr>
<tr>
		<td height="30" align="right" class="tabr"><span style="color:#00C">交易手续费</span>：</td>
		<td class="center"><input name="gp_perc" type="text" id="gp_perc" value="<?php echo ($fee_rs['gp_perc']); ?>" size="8" maxlength="12" onkeyup="guolv(this.name);"/>
        %</td>
</tr>
<tr>
		<td height="30" align="right" class="tabr"><span style="color:#00C">总股票量</span>：</td>
		<td class="center"><input name="zl" type="text" id="fgq" value="<?php echo ($fee_rs['zl']); ?>" size="8" maxlength="12" onkeyup="guolv(this.name);"/>
         股</td>
</tr>
<tr>
		<td height="30" align="right" class="tabr"><span style="color:#00C">股票交易量涨价</span>：</td>
		<td class="center"><input name="gpzjgl" type="text" id="gpzjgl" value="<?php echo ($fee_rs['gpzjgl']); ?>" size="8" maxlength="12" onkeyup="guolv(this.name);"/>
                    股 </td>
</tr>
<tr>
		<td height="30" align="right" class="tabr"><span style="color:#00C">涨价幅度</span>：</td>
		<td class="center"><input name="zhang_one" type="text" id="gp_inm" value="<?php echo ($fee_rs['zhang_one']); ?>" size="8" maxlength="12" onkeyup="guolv(this.name);"/>
        元</td>
</tr>
<tr>
		<td height="30" align="right" class="tabr"><span style="color:#00C">交易量最大值</span>：</td>
		<td class="center"><input name="max_jyl" type="text" id="fgq" value="<?php echo ($fee_rs['max_jyl']); ?>" size="8" maxlength="12" onkeyup="guolv(this.name);"/>
         百分比</td>
</tr>
<tr style="display:none">
		<td height="30" align="right" class="tabr"><span style="color:#00C">第一次拆分清仓</span>：</td>
		<td class="center"><input name="gp_inn" type="text" id="gp_inn" value="<?php echo ($fee_rs['gp_inn']); ?>" size="8" maxlength="12" onkeyup="guolv(this.name);"/>
        % (第一次拆分股票时清仓的比例)</td>
</tr>
<tr style="display:none">
		<td height="30" align="right" class="tabr"><span style="color:#00C">拆分股票（比率）</span>：</td>
		<td class="center">
        <input name="gp_cgbl" type="text" id="gp_cgbl" value="<?php echo ($fee_rs['gp_cgbl']); ?>" size="8" maxlength="12" onblur="cur_price();" onkeyup="value=value.replace(/[^0-9.:]/g,'');"/>
        【拆分后的价格：<span style="color:#F00" id="cur_p"></span>，如果不拆分请填写<span style="color:#36f">1:1</span>】
        <?php echo ($btn); ?></td>
</tr>
<tr>
		<td colspan="2" style="height:5px;"><hr></td>
</tr>
<tr>
		<td height="30" align="right" class="tabr"><span style="color:#00C">股票开关</span>：</td>
		<td class="center">
    	<input type="radio" name="gp_kg" value="0" <?php if(($fee_rs['gp_kg']) == "0"): ?>checked<?php endif; ?> />开启&nbsp;
    	<input type="radio" name="gp_kg" value="1" <?php if(($fee_rs['gp_kg']) == "1"): ?>checked<?php endif; ?> />关闭
		&nbsp; <span>(关闭将无法进行交易)</span>
		</td>
</tr>
<tr>
		<td height="30">&nbsp;</td>
		<td class="center">
    	<input type="submit" value="修改" class="btn1">
    	<input type="reset" value="还原" class="btn1">
        </td>
</tr>
</table>
</form>
</div></div>
</body>
</html>
<script type="text/javascript">
function guolv(Ful){
	var str = $F(Ful).replace(/^\s+|\s+$/g,"");
	var re = /[^0-9.]/g;
	str = str.replace(re,"");
	document.getElementById(Ful).value = str;
}
function cur_price(){
	var old_price = document.getElementById('gp_one').value;//之前的价格
	var xtox =  document.getElementById('gp_cgbl').value;//拆分股票的比率
	var x_arr = xtox.split(":");
	var cur_p = old_price*x_arr[0]/x_arr[1];
	cur_p = cur_p.toFixed(4);
	document.getElementById('cur_p').innerHTML = cur_p+'';
}
cur_price();//页面加载完，先运行一次
</script>