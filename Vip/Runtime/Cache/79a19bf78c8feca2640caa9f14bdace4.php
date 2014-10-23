<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<div class="accounttitle"><h1>Stock to sell</h1></div>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="tab" >

        <tr>
          <td height="28" colspan="8" align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td width="40%"><table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" class="tab_l3" id="noborder">
                <tr>
                  <td align="left">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr class="bor">
                        <th width="35%" height="30" align="left">Gold account：<span style="color:#F00;"><?php echo ($game_m); ?></span></th>
                        </tr>
                        
                      <tr class="bor">
                        <th height="30" align="left">Stock quantity：<span style="color:#F00;"><?php echo ($live_gp); ?></span> </th>
                      </tr>
                      <tr class="bor">
                        <th height="30" align="left">Is to sell quantity：<span style="color:#F00;"><?php echo ($gping_num); ?></span> </th>
                      </tr>
                      <tr class="bor">
                    <th height="30" align="left">The current share price：<span style="color:blue;"><?php echo ($one_price); ?></span></th>
                  </tr>
                  <tr class="bor">
                    <th height="30" align="left">The price of next must be traded：<span style="color:#F00;"><?php echo ($cha); ?></span> </th>
                  </tr>
                    </table>
                  </td>
                </tr>
              </table></td>
              <td width="60%">
                   <form action="__URL__/sell_GP" method="post" name="form1" id="form1" onsubmit="return checkf();">
                  <table width="400" border="0" cellpadding="0" cellspacing="0" class="tab3">
                  <tr>
                    <td width="30%" height="40" align="right">Sell quantity：</td>
                    <td align="left" style="padding-left:10px;"><input name="sNun" type="text" id="sNun"  maxlength="20" onblur="value=value.replace(/[^0-9]/g,'');tot_price();" />
                      </td>
                  </tr>
                  <tr>
                    <td height="40" align="right">The current price：</td>
                    <td align="left" style="padding-left:10px;"><font color='red' id="one_price"><?php echo ($one_price); ?></font>
                      </td>
                  </tr>
                  <tr>
                    <td height="40" align="right">The total price：</td>
                    <td align="left" style="padding-left:10px;"><span style="color:#960" id="tot_price">0</span></td>
                  </tr>
                  <tr>
                    <td height="40" align="right">The secondary password：</td>
                    <td align="left" style="padding-left:10px;"><input name="gp_pwd" type="password" id="gp_pwd" value="" /></td>
                  </tr>
                  <tr>
                    <td height="40" align="right">&nbsp;</td>
                    <td align="left" style="padding-left:10px;"><eq name="close_gp" value="0">
                        <?php if(($open == 0) and ($is_boss == 0)): ?><span style="color:#F00">Issued can not be traded</span>
                        <?php elseif(($gp_kg == 1) and ($is_boss == 0)): ?><span style="color:#F00">Trading has been closed</span>
                        <?php else: ?><input type="submit" name="button2" id="button2" onclick="if(confirm('Sure to sell??')) return true;else return false;" value="Confirm sold" class="btn1" /><?php endif; ?>

                      <input name="cPP" type="hidden" id="cPP" value="122" />
                      <input name="PID" type="hidden" id="PID" /></td>
                  </tr>
              </table></form></td>
            </tr>
          </table>
          <br />
          <br />
          <table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#b9c8d0" class="tab3" id="tb1">
          <tr>
          <th width="15%" height="28"><span>Selling time</span></th>
          <th width="10%"><span>The total</span></th>
		  <th width="10%"><span>Has sold</span></th>
		  <th width="10%"><span>The remaining</span></th>
		  <th width="10%"><span>The original price</span></th>
          <th width="10%"><span>The original total</span></th>
          <th width="12%"><span>sales</span></th>
          <th width="10%"><span>type</span></th>
		  <th width="13%"><span>function</span></th>
        </tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align='center'>
          <td height="25" nowrap="nowrap"><?php echo (date('Y-m-d H:i:s',$vo["add_time"])); ?></td>
          <td><?php echo ($vo["all_nums"]); ?></td>
		  <td><?php echo ($vo['all_nums']-$vo['only_nums']); ?></td>
		  <td><?php echo ($vo["only_nums"]); ?></td>
		  <td><font color='blue' ><b><?php echo ($vo["one_price"]); ?></b></font></td>
          <td><?php echo ($vo["price"]); ?></td>
          <td><?php echo ($vo['all_nums']*$vo['one_price']-$vo['only_nums']*$vo['one_price']); ?></td>
          <td>
          <?php if(($vo["is_cancel"]) == "1"): ?><span style="color:#0F0">Deal to cancel</span><?php endif; ?>
          <?php if(($vo["is_cancel"]) == "0"): if(($vo["ispay"]) == "1"): ?>The deal<?php else: ?><span style="color:#F00">Waiting for the transaction</span><?php endif; endif; ?>
          </td>
		  <td>
                      <?php if(($vo["ispay"]) == "0"): ?><a href="__URL__/delsellGP/id/<?php echo ($vo["id"]); ?>/">undo</a><?php else: if(($vo["is_cancel"]) == "1"): ?>return <?php echo ($vo["only_nums"]); else: ?><font color='green'>Transaction has been successful</font><?php endif; endif; ?>
          
          </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tab3">
          <tr>
            <td><?php echo ($page); ?></td>
          </tr>
        </table>
          </td>
        </tr>
      </table>


</div>
</body>
</html>
<script type="text/javascript">
    function s(){
        var one_price = document.getElementById('one_price').value;//单价
        if(one_price<2){
            document.getElementById('one_prices').innerHTML='不少于2.00元';
            document.getElementById('one_price').focus();
            return false;
        }else{
            document.getElementById('one_prices').innerHTML='';
            return true;
        }
    }
function tot_price(){
	var one_price = document.getElementById('one_price').value;//单价
	var sNun	= document.getElementById('sNun').value;//数量
	var t_price = formatNumberUnitsDivd(parseFloat(sNun * one_price)); 
	document.getElementById('tot_price').innerHTML = t_price+'';
}
function formatNumberUnitsDivd(num) {
	return num.toFixed(2);
}
function checkf(){
	if(document.form1.one_price.value==""){
		alert("Please input the price");
		document.form1.one_price.focus();
		return false;
	}
	if(document.form1.sNun.value==""){
		alert("Please enter the sell stock quantity");
		document.form1.sNun.focus();
		return false;
	}
        var one_price = document.getElementById('one_price').value;//单价
//        if(one_price<2){
//            document.getElementById('one_prices').innerHTML='不少于2.00元';
//            document.form1.one_price.focus();
//            return false;
//        }
	var one_price = document.getElementById('one_price').value;//单价
	var sNun	= document.getElementById('sNun').value;//数量
	var t_price = formatNumberUnitsDivd(parseFloat(sNun * one_price)); 
	if(confirm("Are you sure you want to buy a total of "+document.form1.sNun.value+" COINS of the stock?\n\nThe stock price："+document.form1.one_price.value+"\n\nThe current purchasing power："+mai_num)){
		return true;
	}else{
		return false;
	}
}
</script>
<script>new TableSorter("tb1");</script>