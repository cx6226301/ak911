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

<script type="text/javascript" src="__PUBLIC__/Js/Ajax/ThinkAjax-1.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/UserJs_en.js"></script>
<script language="javascript">
	function yhServer(Ful,lx){
		var str = $F(Ful).replace(/^\s+|\s+$/g,"");
		var re = /[^(\w){6,20}$]/g;
		str = str.replace(re,"");
		document.getElementById(Ful).value = str;
		
		if (str != ""){
			if(lx==0){ThinkAjax.send('__URL__/check_shopid/','ajax=1&shopid='+str,'',Ful+'1');}
			if(lx==1){ThinkAjax.send('__URL__/check_reid/','ajax=1&reid='+str,'',Ful+'1');}
			if(lx==2){ThinkAjax.send('__URL__/check_fid/','ajax=1&fid='+str,'',Ful+'1');}
			if(lx==3){ThinkAjax.send('__URL__/check_userid/','ajax=1&userid='+str,'',Ful+'1');}
		}
	}
	function guolv(Ful){
		var str = $F(Ful).replace(/^\s+|\s+$/g,"");
		var re = /[^(\w){6,20}$]/g;
		str = str.replace(re,"");
		document.getElementById(Ful).value = str;
	}
</script>
<div class="ncenter_box">
<div class="accounttitle"><h1>Registered member </h1></div>
<div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div>
<div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div>
<div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div>


      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tab1">
      <tr>
        <td>
        <form method='post' id="form1" name="form1" action="__URL__/usersAdd"/>
        <table width="100%" border="0" cellpadding="3" cellspacing="0" class="tab4">
          <tr>
            <td width="20%" align="right"><span class="zc_hong">*</span> Responsible report Center:：</td>
            <td width="20%"><input name="shopid" type="text" id="shopid" value="<?php echo ($zzc[1]); ?>" class="ipt" onKeyUp="guolv(this.name)" onFocus="notice('0','')" onBlur="javascript:yhServer(this.name,'0');notice('0','none')" /></td>
            <td width="60%"><div id="shopid1" class="info"><div id="0" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div></td>
          </tr>
          <tr>
            <td width="20%" align="right"><span class="zc_hong">*</span> Recommended by：</td>
            <td width="20%"><input name="RID" id="RID" type="text" value="<?php echo ($zzc[2]); ?>" class="ipt" onKeyUp="guolv(this.name)" onFocus="notice('1','')" onBlur="javascript:yhServer(this.name,'1');notice('1','none')" /></td>
            <td width="60%"><div id="RID1" class="info"><div id="1" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div> </td>
          </tr>
          <tr>
            <td align="right"><span class="zc_hong">*</span> Contact person：</td>
            <td><input name="FID" id="FID" type="text"  value="<?php echo ($zzc[3]); ?>" class="ipt" onKeyUp="guolv(this.name)" onFocus="notice('2','')" onBlur="javascript:yhServer(this.name,'2');notice('2','none')" /></td>
            <td><div id="FID1" class="info"><div id="2" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div></td>
          </tr>
          <?php if(empty($User_namex)): else: ?>
          <tr>
            <td align="right"><span class="zc_hong">*</span> Member Number：</td>
            <td>
			<?php if(($myid) == "1"): ?><input name="UserID" id="UserID" type="text"  value="<?php echo ($flist[1]['UserID']); ?>" class="ipt" onKeyUp="guolv(this.name)" onFocus="notice('3','')" onBlur="javascript:yhServer(this.name,'3');notice('3','none')" />
            <?php else: ?>
			<select name="UserID" id="UserID" onchange="javascript:yhServer()">
            <?php if(is_array($flist)): $i = 0; $__LIST__ = $flist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fck_arr): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fck_arr['UserID']); ?>" ><?php echo ($fck_arr['UserID']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>&nbsp;&nbsp;<a href="__APP__/Fck/users">刷新</a><?php endif; ?>
            </td>
            <td><div id="UserID1" class="info"><div id="3" class="focus_r" style="display:none;"><div class="msg_tip">此会员编号用于登录系统使用。</div></div></div></td>
          </tr><?php endif; ?>
          <?php if(empty($Nick_namex)): else: ?>
          <tr style="display:none">
            <td align="right"><span class="zc_hong">*</span> Member Number：</td>
            <td><input name="nickname" type="text" class="ipt" id="nickname" onFocus="notice('14','')"  onblur="notice('14','none')" onKeyUp="guolv(this.name);avascript:Null_Full(this.name)"/></td>
            <td><div id="nickname1" class="info"><div id="14" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div></td>
          </tr><?php endif; ?>
          <tr>
            <td align="right">Area：</td>
            <td><select name="TPL" id="TPL">
                <option value="0" <?php echo ($TPL[0]); ?>> left </option>
                <option value="1" <?php echo ($TPL[1]); ?>> right </option>
            </select></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" style="height:5px;"><hr></td>
          </tr>
          <tr>
            <td align="right"><span class="zc_hong">*</span> Level password：</td>
            <td><input name="Password" type="password" class="ipt"  id="Password" onFocus="notice('4','')"  onblur="javascript:yhPass(this.name);notice('4','none');" value=""/></td>
            <td><div id="Password1" class="info"><div id="4" class="focus_r" style="display:none;"><div class="msg_tip">error!</div></div></div></td>
          </tr>
          <tr>
            <td align="right"><span class="zc_hong">*</span> Confirm level password：</td>
            <td><input name="rePassword" type="password" class="ipt"  id="rePassword" onFocus="notice('5','')"  onblur="javascript:yhrePass(this.name,'Password');notice('5','none')" value=""/></td>
            <td><div id="rePassword1" class="info"><div id="5" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div></td>
          </tr>
          <tr>
            <td align="right"><span class="zc_hong">*</span> Two-level password：</td>
            <td><input name="PassOpen" type="password" class="ipt"  id="PassOpen" onFocus="notice('6','')"  onblur="javascript:yhPass(this.name);notice('6','none')" value=""/></td>
            <td><div id="PassOpen1" class="info"><div id="6" class="focus_r" style="display:none;"><div class="msg_tip">error!</div></div></div></td>
          </tr>
          <tr>
            <td align="right"><span class="zc_hong">*</span> Confirm your secondary password：</td>
            <td><input name="rePassOpen" type="password" class="ipt"  id="rePassOpen" onFocus="notice('7','')"  onblur="javascript:yhrePass(this.name,'PassOpen');notice('7','none')" value=""/></td>
            <td><div id="rePassOpen1" class="info"><div id="7" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div></td>
          </tr>
          <tr>
            <td align="right"><span class="zc_hong">*</span> Secret security question：</td>
            <td><input name="wt1" type="text" class="ipt"  id="rePassOpen" onFocus="notice('30','')"  onblur="notice('30','none')" value=""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><span class="zc_hong">*</span> Secret security answer：</td>
            <td><input name="da1" type="text" class="ipt"  value="" maxlength="255"/></td>
            <td>&nbsp;</td>
          </tr>
		  <tr style="display:none">
            <td align="right"><span class="zc_hong">*</span> 密保问题2：</td>
            <td><input name="wt2" type="text" class="ipt"   value=""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr style="display:none">
            <td align="right"><span class="zc_hong">*</span> 密保答案2：</td>
            <td><input name="da2" type="text" class="ipt"  value="" maxlength="255"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" style="height:5px;"><hr></td>
          </tr>
          <tr>
            <td align="right"><span class="zc_hong">*</span> Bank name：</td>
            <td><select name="BankName" onChange="javasctip:bank_us(this.value);">
              <?php if(is_array($bank)): $i = 0; $__LIST__ = $bank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($bank[$key]); ?>"><?php echo ($bank[$key]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
              <td align="right"><span class="zc_hong">*</span> <span id="bank_id"> (Bank) account</span>：</td>
            <td><input name="BankCard" type="text" class="ipt" id="BankCard" onFocus="notice('8','')"  onblur="notice('8','none')" onKeyUp="javascript:Null_Int(this.name)" value="" style="width: 200px" maxlength="50" /></td>
            <td><div id="BankCard1" class="info"><div id="8" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div></td>
          </tr>
          <tr>
            <td align="right"><span class="zc_hong">*</span> Account name：</td>
            <td><input name="UserName" type="text" class="ipt"  id="UserName" onFocus="notice('9','')"  onblur="notice('9','none')" onKeyUp="javascript:Null_Full(this.name)" value="" maxlength="10" /></td>
            <td><div id="UserName1" class="info"><div id="9" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div></td>
          </tr>
          <tr>
            <td align="right">Province to open an account：</td>
            <td><select name="BankProvince" id="s1" >
                <option></option>
              </select></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right">Bank city：</td>
            <td><select name="BankCity" id="s2" >
                <option></option>
              </select></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right">Opening address details：</td>
            <td><input name="BankAddress" type="text" class="ipt" id="BankAddress" value="" /></td>
            <td><div id="BankAddress1" class="info"><div id="10" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div></td>
          </tr>
          <script language = JavaScript>
            var s=["s1","s2"];
            var opt0 = ["Please select","Please select"];
            function setup()
            {
                for(i=0;i<s.length-1;i++)
                document.getElementById(s[i]).onchange=new Function("change("+(i+1)+")");
                change(0);
            }
            setup();
          </script>
          <tr>
            <td colspan="3" style="height:5px;"><hr></td>
          </tr>
          <tr>
            <td align="right"><span class="zc_hong">*</span>ID number：</td>
            <td><input name="UserCode" type="text" class="ipt" id="UserCode" onFocus="notice('11','')"  onblur="notice('11','none')" onKeyUp="javascript:Null_Full(this.name)" value="" maxlength="18" /></td>
            <td><div id="UserCode1" class="info"><div id="11" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div></td>
          </tr>
          <tr>
            <td align="right">Contact address：</td>
            <td><input name="UserAddress" type="text" class="ipt" id="UserAddress" onFocus="notice('12','')"  onblur="notice('12','none')" onKeyUp="javascript:Null_Full(this.name)" value="" /></td>
            <td><div id="UserAddress1" class="info"><div id="12" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div></td>
          </tr>
          <tr>
            <td align="right"><span class="zc_hong">*</span>E-Mail：</td>
            <td><input name="UserEmail" type="text" class="ipt"  id="UserEmail" onFocus="notice('15','')"  onblur="notice('15','none')" onKeyUp="javascript:Null_Full(this.name)" value="" /></td>
            <td><div id="UserEmail1" class="info"><div id="15" class="focus_r" style="display:none;"><div class="msg_tip">Please input Your E-mail!</div></div></div></td>
          </tr>
          <tr>
            <td align="right">Q Q：</td>
            <td><input name="qq" type="text" class="ipt"  id="qq" onFocus="notice('16','')"  onblur="notice('16','none')" onKeyUp="javascript:Null_Int(this.name)" value="" /></td>
            <td><div id="qq1" class="info"><div id="16" class="focus_r" style="display:none;"><div class="msg_tip">Please input!</div></div></div></td>
          </tr>



          <tr>
            <td align="right"><span class="zc_hong">*</span>Contact phone：</td>
            <td><input name="UserTel" type="text" class="ipt"  id="UserTel" onFocus="notice('13','')"  onblur="notice('13','none')" onKeyUp="javascript:Null_Full(this.name)" value=""/></td>
            <td><div id="UserTel1" class="info"><div id="13" class="focus_r" style="display:none;"><div class="msg_tip">Please input Your tel.</div></div></div></td>
          </tr>
			<tr>
			    <td align="right">Application level：</td>
			    <td colspan="2">
				<?php if(is_array($s9)): $i = 0; $__LIST__ = $s9;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i; if(($key) == "0"): ?><input name="u_level" type="radio" id="radio" value="<?php echo ($key); ?>" checked="checked"  />
				<strong><span class="STYLE3">＄<?php echo ($s9[$key]); ?></span></strong>
				<?php else: ?>
				<input name="u_level" type="radio" id="radio" value="<?php echo ($key); ?>"/>
			    <strong><span class="STYLE3">＄<?php echo ($s9[$key]); ?></span></strong><?php endif; endforeach; endif; else: echo "" ;endif; ?>

				</td>
		  </tr>
		  <tr>
            <td colspan="3" >
            
            <table style="display:none" width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#b9c8d0" class="tab3" id="tb1">
            
              <tr align="center" class="size14">
                <th width="20%" nowrap height="25">产品名称</th>
                <th width="20%" nowrap>产品价格</th>
                <th width="20%" nowrap>数量</th>
                <th width="20%" nowrap>总金额</th>
                <th width="20%" nowrap>备注说明</th>
              </tr>
            
                <?php if(is_array($plist)): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
                  <td nowrap height="22"><?php echo ($vo["name"]); ?></td>
                  <td nowrap><?php echo ($vo["money"]); ?></td>
                  <td nowrap><input name="shu<?php echo ($vo["id"]); ?>" type="text" onKeyUp="he<?php echo ($vo["id"]); ?>.value=this.value*<?php echo ($vo["money"]); ?>;value=value.replace(/[^0-9]/g,'');" onClick="this.value=''" value="0" size="6" maxlength="5" />
                    <input type="hidden" name="uid[]" value="<?php echo ($vo["id"]); ?>"/></td>
                  <td nowrap><input name="he<?php echo ($vo["id"]); ?>" type="text" size="6" value="0" readonly /></td>
                  <td align="center">
                  <a href="__APP__/Gouwu/Cpcontent/id/<?php echo ($vo["id"]); ?>">点击查看</a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            
            </table>
            
            </td>
          </tr>
          <tr>
            <td colspan="3" >
            <table style="display:none" width="90%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#b9c8d0" class="tab3">
              <tr>
                <td colspan="2"><span style="padding-left:18%;"><b>请填写收货人信息</b></span></td>
              </tr>
              <tr>
                <td width="20%" align="right"><span class="hong">* </span>收货人姓名：</td>
                <td><input name="us_name" type="text" id="us_name" maxlength="20" value="1" /></td>
              </tr>
              <tr>
                <td align="right"><span class="hong">* </span>收货地址：</td>
                <td><input name="us_address" type="text" id="us_address" size="50" maxlength="100" value="2"/></td>
              </tr>
              <tr>
                <td align="right"><span class="hong">* </span>收货人电话：</td>
                <td><input name="us_tel" type="text" id="us_tel" maxlength="20" value="3"/></td>
              </tr>
            </table>
			</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td><span class="center">
              <input name="submit1" id="Access" type="submit" class="button_text" value="submit" />
  &nbsp;&nbsp;
  <input name="重置" type="reset" class="button_text" value="reset" id="重置" />
            </span></td>
            <td>&nbsp;</td>
          </tr>
        </table>
        </form>
        </td>
      </tr>
      </table>
</div>
</body>
</html>