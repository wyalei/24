// JavaScript Document
function queryrst(form) {
	var name = form.name.value;
	var formid = form.formid.value;
	if(name == '' && formid == ''){
		alert('用户或订单号至少有一个不能为空');
		form.name.focus();
		return false;
	}
	var url = "query.php?vendee="+name+"&formid="+formid;
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("microsoft.xmlhttp");
	}
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == '0'){
				exam.innerHTML = '';
				alert('没有查询结果');
			}else{
				exam.innerHTML =  msg;
			}
		}
	};
	xmlhttp.send(null);

}
function showfm(){
	alert("result: " + xmlhttp.readyState);
	if(xmlhttp.readyState == 4){
		var msg = xmlhttp.responseText;
		if(msg == '0'){
				exam.innerHTML = '';
				alert('没有查询结果');
		}else{
				exam.innerHTML =  msg;
		}
	}
}