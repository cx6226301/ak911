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
<div class="accounttitle"><h1>System of announcement </h1></div>&nbsp;
<form name="form3" method="post" action="__URL__/News">
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
    <thead>
        <tr>
        <th width="5%"></th>
        <th width="10%"><span>id</span></th>
        <th width="10%"><span>News type</span></th>
        <th width="30%"><span>News title</span></th>
        <th width="20%"><span>title</span></th>
        <th width="10%"><span>Top</span></th>
        <th width="10%"><span>State of the news</span></th>
        <th width="10%"><span>operation</span></th>
        </tr>
    </thead>
    <tbody>
    	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
        	<td><div align="center">
	  		<input type="checkbox" name="tabledb[]" value="<?php echo ($vo['id']); ?>" class="btn2" />
			</div></td>
            <td><?php echo ($key+1); ?></td>
            <td><?php if(($vo['type']) == "1"): ?>The news bulletin<?php endif; ?>
            </td>
            <td><?php if(($vo["baile"]) == "1"): ?><font color=red>[Top] </font><?php endif; echo (mysubstr($vo['title'],20)); ?></td>
            <td><?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?></td>
            <td><?php if(($vo['baile']) == "1"): ?><span class="STYLE3">Top</span><?php endif; if(($vo['baile']) == "0"): ?>no Top<?php endif; ?></td>
            <td><?php if(($vo['status']) == "1"): ?>To enable the<?php endif; if(($vo['status']) == "0"): ?><span class="STYLE1">disable</span><?php endif; ?></td>
            <td><a href="__URL__/News_edit/EDid/<?php echo ($vo['id']); ?>">The editor</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
     </tbody>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
    <tr>
        <td width="50%">
        <input name="all" type="button" class="button_text" id="all" onclick="CheckAll(this.form)" value="all" />	  &nbsp;&nbsp;
        <input type="submit" name="action" value="Add the news" class="button_text">&nbsp; &nbsp;
        <input type="submit" name="action" value="To enable the" class="button_text">&nbsp; &nbsp;
        <input type="submit" name="action" value="disable" class="button_text">&nbsp; &nbsp;
        <input type="submit" name="action" value="Set the top" class="button_text">&nbsp; &nbsp;
        <input type="submit" name="action" value="Cancel the top" class="button_text">&nbsp; &nbsp;
        <input type="submit" name="action" value="delete" class="button_text"></td>
        <td width="50%"><?php echo ($page); ?></td>
    </tr>
</table>
</form>
</div>
</body>
</html>
<script>new TableSorter("tb1");</script>