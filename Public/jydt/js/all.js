// JavaScript Document
	
function SelectAll(theform) {
	//alert(theform.length);
	for (var i=0;i<theform.length;i++) {
		var e=theform[i];
		e.checked=!e.checked;
	}
}

function output(ObjID) 
{ 
//���� 
var elTable = document.getElementById(ObjID); 
var oRangeRef = document.body.createTextRange(); 
oRangeRef.moveToElementText( elTable ); 
oRangeRef.execCommand( "Copy" );
//ճ�� 
try{ 
var appExcel = new ActiveXObject( "Excel.Application" ); 
appExcel.Visible = true; 
appExcel.Workbooks.Add().Worksheets.Item(1).Paste(); 
//appExcel = null; 
}catch(e){ 
alert("ʹ�ô˹��ܱ����������������:Internetѡ��->��ȫ->�Զ��弶��->��û�б��Ϊ��ȫ��ActiveX�ؼ����г�ʼ���ͽű�����->����"); 
}
}