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
<div class="accounttitle"><h1>电子股出售</h1></div>
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
                        <th width="35%" height="30" align="left">金币账户：<span style="color:#F00;"><?php echo ($game_m); ?></span></th>
                        </tr>
                        
                      <tr class="bor">
                        <th height="30" align="left">股票持有数量：<span style="color:#F00;"><?php echo ($live_gp); ?></span> 股</th>
                      </tr>
                      <tr class="bor">
                        <th height="30" align="left">正出售数量：<span style="color:#F00;"><?php echo ($gping_num); ?></span> 股</th>
                      </tr>
                      <tr class="bor">
                    <th height="30" align="left">当前股价：<span style="color:blue;"><?php echo ($one_price); ?></span> /股</th>
                  </tr>
                  <tr class="bor">
                    <th height="30" align="left">距下次涨价需交易：<span style="color:#F00;"><?php echo ($cha); ?></span>股 </th>
                  </tr>
                    </table>
                  </td>
                </tr>
              </table></td>
              <td width="60%"><table width="400" border="0" cellpadding="0" cellspacing="0" class="tab3">
                <form action="__URL__/sell_GP" method="post" name="form1" id="form1" onsubmit="return checkf();">

                  <tr>
                    <td width="30%" height="40" align="right">出售数量：</td>
                    <td align="left" style="padding-left:10px;"><input name="sNun" type="text" id="sNun"  maxlength="20" onblur="value=value.replace(/[^0-9]/g,'');tot_price();" />
                      个</td>
                  </tr>
                  <tr>
                    <td height="40" align="right">当前价格：</td>
                    <td align="left" style="padding-left:10px;"><font color='red'><?php echo ($one_price); ?></font>
                      /个</td>
                  </tr>
                  <tr>
                    <td height="40" align="right">卖出价格：</td>
                    <td align="left" style="padding-left:10px;"><input name="one_price" type="text" id="one_price"  maxlength="20" value="<?php echo ($one_price); ?>" onblur="value=value.replace(/[^0-9.]/g,'');tot_price();" />
                        /个&nbsp;&nbsp;<font color="red" id="one_prices"></font></td>
                  </tr>
                  <tr>
                    <td height="40" align="right">总售价：</td>
                    <td align="left" style="padding-left:10px;"><span style="color:#960" id="tot_price">0</span></td>
                  </tr>
                  <tr>
                    <td height="40" align="right">二级密码：</td>
                    <td align="left" style="padding-left:10px;"><input name="gp_pwd" type="password" id="gp_pwd" value="" /></td>
                  </tr>
                  <tr>
                    <td height="40" align="right">&nbsp;</td>
                    <td align="left" style="padding-left:10px;"><eq name="close_gp" value="0">
                        <?php if(($open == 0) and ($is_boss == 0)): ?><span style="color:#F00">尚未拆分</span>
                        <?php elseif(($gp_kg == 1) and ($is_boss == 0)): ?><span style="color:#F00">股市交易已关闭</span>
                        <?php else: ?><input type="submit" name="button2" id="button2" value="确认求购" class="btn1" /><?php endif; ?>

                      <input name="cPP" type="hidden" id="cPP" value="122" />
                      <input name="PID" type="hidden" id="PID" /></td>
                  </tr>
                </form>
              </table></td>
            </tr>
          </table>
          <br />
          <br />
          <table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#b9c8d0" class="tab3" id="tb1">
          <tr>
          <th width="15%" height="28"><span>出售时间</span></th>
          <th width="10%"><span>总量</span></th>
		  <th width="10%"><span>已卖出</span></th>
		  <th width="10%"><span>剩余</span></th>
		  <th width="10%"><span>原单价</span></th>
          <th width="10%"><span>原总额</span></th>
          <th width="12%"><span>售出总额</span></th>
          <th width="10%"><span>状态</span></th>
		  <th width="13%"><span>功能/说明</span></th>
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
          <?php if(($vo["is_cancel"]) == "1"): ?><span style="color:#0F0">交易撤销</span><?php endif; ?>
          <?php if(($vo["is_cancel"]) == "0"): if(($vo["ispay"]) == "1"): ?>交易完成<?php else: ?><span style="color:#F00">等待交易</span><?php endif; endif; ?>
          </td>
		  <td>
                      <?php if(($vo["ispay"]) == "0"): ?><a href="__URL__/delsellGP/id/<?php echo ($vo["id"]); ?>/">撤销</a><?php else: if(($vo["is_cancel"]) == "1"): ?>返还<?php echo ($vo["only_nums"]); ?>股<?php else: ?><font color='green'>交易已成功</font><?php endif; endif; ?>
          
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
		alert("请输入价格");
		document.form1.one_price.focus();
		return false;
	}
	if(document.form1.sNun.value==""){
		alert("请输入出售股票数量");
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
	if(confirm("您确定要出售 "+document.form1.sNun.value+" 个 股票吗？\n\n售出单价："+document.form1.one_price.value+"\n\n售出总额："+t_price)){
		return true;
	}else{
		return false;
	}
}
</script>
<script>new TableSorter("tb1");</script>