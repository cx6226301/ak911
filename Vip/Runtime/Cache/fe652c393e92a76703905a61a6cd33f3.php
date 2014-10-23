<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Manage</title>
<style type="text/css">
<!--
body{ font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:180%;}
.STYLE1 {color: #FF0000}
.STYLE2 {color: #00CC99}
-->
</style>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	z-index:1;
	background-color: #CCC;
	filter:alpha(opacity=90); -moz-opacity:0.9; opacity:0.9;
	text-align: center;
}
#apDiv1 #contt {
	margin:auto;
	padding:auto;
	width: 400px;
	margin-top: 150px;
	background-color: #FFF;
	border: 2px solid #999;
}
#apDiv1 #contt img{
	margin-top: 5px;
	margin-right: 20px;
	margin-bottom: 5px;
	margin-left: 5px;
}
#ctop{
	margin-top: 20px;
}
#ccont{
	padding: 5px;
	height: 30px;
}
#cnet{
	margin-top: 10px;
	padding: 5px;
	height: 30px;
	position:relative;
}
#cbtm{
	margin-top: 10px;
	padding: 5px;
	height: 30px;
	margin-bottom: 10px;
}
#status{
	line-height:28px;
}
-->
</style>
<style type="text/css">
<!--
#apDiv2 {
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	z-index:1;
	background-color: #CCC;
	filter:alpha(opacity=90); -moz-opacity:0.9; opacity:0.9;
	text-align: center;
}
#apDiv2 #contt2 {
	margin:auto;
	padding:auto;
	width: 400px;
	margin-top: 150px;
	background-color: #FFF;
	border: 2px solid #999;
}
#apDiv2 #contt2 img{
	margin-top: 5px;
	margin-right: 20px;
	margin-bottom: 5px;
	margin-left: 5px;
}
#ctop2{
	margin-top: 20px;
}
#ccont2{
	padding: 5px;
	height: 30px;
}
#cnet2{
	margin-top: 10px;
	padding: 5px;
	height: 30px;
	position:relative;
}
#cbtm2{
	margin-top: 10px;
	padding: 5px;
	height: 30px;
	margin-bottom: 10px;
}
#status2{
	line-height:28px;
}
-->
</style>
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
<script>
function checkpresent(nn,mm,recod,mrecod){
	var mwidth=380;
	var sMsg=(recod/mrecod)*mwidth;
	if(nn=="0"&&mm=="0"){
		document.getElementById("status").innerHTML = "All the data table backup completed"; 
		document.getElementById("progress").style.width = mwidth + "px";
		document.getElementById("percent").innerHTML = "100%"; 
	}else{
		document.getElementById("status").innerHTML = "Backup is a data table "+nn+" ["+recod+"/"+mrecod+" data] /  "+mm+" total"; 
		document.getElementById("progress").style.width = sMsg + "px";
		document.getElementById("percent").innerHTML = parseInt(recod / mrecod * 100) + "%"; 
	}
}
function okdone(){
	var okprint="<img src=\"__PUBLIC__/Images/is_ok.png\" name=\"The database backup\" align=\"absmiddle\" />The database backup";
	document.getElementById("ctop").innerHTML=okprint;
	document.getElementById("ccont").innerHTML="备份完成！";
	document.getElementById("cbtm").style.display="block";
	document.getElementById("action_a").focus();
}
function buttonn(){
	if(confirm("Warm prompt: time needed for backup database is determined according to the data source, please do not perform other operations during the backup.Are you sure you want to backup the current database?")){
		document.getElementById("apDiv1").style.display="block";
		document.getElementById("ccont").focus();
		document.getElementById("ifra1").src='__URL__/DBBeiFen/Cid/'+Math.random();
		setTimeout("ajaxfunction()",2000);
	}
}
function ajaxfunction(){
	var xmlHttp;
	try{
		//FF Opear 8.0+ Safair
		xmlHttp=new XMLHttpRequest();
	}
	catch(e){
		try{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e){
			alert("您的浏览器不支持AJAX");
			return false;    
		}
	}
	xmlHttp.onreadystatechange=function(){
		if(xmlHttp.readyState==4){
			checkpresent('0','0','0','0')
			//alert("备份完成");
			okdone();
		}
	}
	var url="__URL__/endgookweb";
	url+="/cid/"+Math.random();
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
		
}
</script>

<script>
function restorepresent(nn,mm,recod,mrecod){
	var mwidth=380;
	var sMsg=(recod/mrecod)*mwidth;
	if(nn=="0"&&mm=="0"){
		document.getElementById("status2").innerHTML = "All the data table reduction"; 
		document.getElementById("progress2").style.width = mwidth + "px";
		document.getElementById("percent2").innerHTML = "100%"; 
	}else{
		document.getElementById("status2").innerHTML = "Is reduction of  "+nn+"  pieces of data table["+recod+"/"+mrecod+" data] /  "+mm+" total"; 
		document.getElementById("progress2").style.width = sMsg + "px";
		document.getElementById("percent2").innerHTML = parseInt(recod / mrecod * 100) + "%"; 
	}
}
function restoredone(){
	var okprint="<img src=\"__PUBLIC__/Images/is_ok.png\" name=\"Restore database\" align=\"absmiddle\" />Restore database";
	document.getElementById("ctop2").innerHTML=okprint;
	document.getElementById("ccont2").innerHTML="还原完成！";
	document.getElementById("cbtm2").style.display="block";
	document.getElementById("action_b").focus();
}
function buttonm(vpath){
	if(confirm("Warm prompt: \n \n reduction time needed for the database is determined according to the data source, please do not close the browser during reduction, in order to prevent data loss in.\n \n are you sure you want to restore the current database?")){
		document.getElementById("apDiv2").style.display="block";
		document.getElementById("ccont2").focus();
		document.getElementById("ifra2").src='__URL__/DBHuanYuan/fname/'+vpath+'/Cid/'+Math.random();
		setTimeout("re_ajaxfunction()",2000);
	}
}
function re_ajaxfunction(){
	var xmlHttp;
	try{
		//FF Opear 8.0+ Safair
		xmlHttp=new XMLHttpRequest();
	}
	catch(e){
		try{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e){
			alert("您的浏览器不支持AJAX");
			return false;    
		}
	}
	xmlHttp.onreadystatechange=function(){
		if(xmlHttp.readyState==4){
			restorepresent('0','0','0','0')
			restoredone();
		}
	}
	var url="__URL__/endgookweb";
	url+="/cid/"+Math.random();
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
		
}
</script>
</head>

<body>
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td style="font-size:14px; font-weight:bold; line-height:30px;" align="center">Database backup/restore</td>
  </tr>
  <tr>
    <td align="center">
<input type="button" name="action" value="The database backup" onclick="buttonn();" />
<br /><br />
<table width="750" class="tab3" border="0" cellpadding="3" cellspacing="1" style="background:#CCC;">
	<thead>
    <tr align="center">
      	<th width="10%" nowrap bgcolor="#EEEEEE"><span>ID</span></th>
        <th width="40%" nowrap bgcolor="#EEEEEE"><span>The name of the backup</span></th>
		<th width="25%" nowrap bgcolor="#EEEEEE">The backup time</th>
    <th width="25%" nowrap bgcolor="#EEEEEE"><span>operation</span></th>
        </tr>
    </thead>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form action="__URL__/indexAC/" method="post" name="form<?php echo ($i); ?>" id="form<?php echo ($i); ?>">
    <tr class="content_td lz" align="center">
    	<td nowrap bgcolor="#FFFFFF"><?php echo ($i); ?></td> 
        <td nowrap bgcolor="#FFFFFF"><?php echo ($vo['name']); ?></td>
        <td nowrap bgcolor="#FFFFFF"><?php echo (date("Y-m-d H:i:s",$vo['time'])); ?></td>
        <td nowrap bgcolor="#FFFFFF">
        <input name="action" type="submit" value="download" id="action" onclick="{if(confirm('Are you sure you want to download？')){return true;}return false;}"/>
        <input name="action" type="button" value="reduction" id="action" onclick="buttonm('<?php echo $vo['getpath'] ?>');"/>
        <input name="fname" type="hidden" id="fname" value="<?php echo ($vo['path']); ?>" />
        <input name="mname" type="hidden" id="fname" value="<?php echo ($vo['name']); ?>" />
        <input name="action" type="submit" value="delete" id="action" onclick="{if(confirm('Are you sure you want to delete？')){return true;}return false;}"/></td>
    </tr>
    </form><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<table width="700" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td class="hong">A total of：<?php echo ($count); ?> datas</td>
  </tr>
</table>
</td>
  </tr>
</table>

<div id="apDiv1" style="display:none">
<div id="contt">
  <div id="ctop"><img src="__PUBLIC__/Images/loading3.gif" alt="" name="In the database backup" align="absmiddle" />The database backup, please wait patiently...</div>
  <div id="cnet">
  <!--start-->
	<div style="padding: 0; background-color: white; border: 1px solid navy; width: 380px" align="left"> 
    <div id="progress" style="padding: 0; background-color: #FFCC66; border: 0; width: 0px; text-align: center;   height: 20px"></div>
    </div> 
    <div id="status">&nbsp;</div>
    <div id="percent" style="position:absolute; top: 8px; left:45%; text-align: center; font-weight: bold; font-size: 8pt; font-family: Tahoma;">0%</div>
  <!--end-->
  </div>
  <div id="ccont">Before completion of the data backup, please don't for other operation, so as not to cause loss of data.</div>
  <div id="cbtm" style="display:none"><input type="button" id="action_a" name="action_a" value="query" onclick="window.location='__URL__/index/'" /></div>
  <iframe src="" width="200" height="30" style="display:none" id="ifra1"></iframe>
</div>
</div>

<div id="apDiv2" style="display:none">
<div id="contt2">
  <div id="ctop2"><img src="__PUBLIC__/Images/loading3.gif" alt="" id="backup" name="backup" align="absmiddle" />Restore database, please wait patiently...</div>
  <div id="cnet2">
  <!--start-->
	<div style="padding: 0; background-color: white; border: 1px solid navy; width: 380px" align="left"> 
    <div id="progress2" style="padding: 0; background-color: #FFCC66; border: 0; width: 0px; text-align: center;   height: 20px"></div>
    </div> 
    <div id="status2">&nbsp;</div>
    <div id="percent2" style="position:absolute; top: 8px; left:45%; text-align: center; font-weight: bold; font-size: 8pt; font-family: Tahoma;">0%</div>
  <!--end-->
  </div>
  <div id="ccont2">Before completion of data reduction, please don't, don't close the browser, lest cause data loss。</div>
  <div id="cbtm2" style="display:none"><input type="button" id="action_b" name="action_b" value="query" onclick="window.location='__URL__/index/'" /></div>
  <iframe src="" width="200" height="30" style="display:none" id="ifra2"></iframe>
</div>
</div>

</body>
</html>