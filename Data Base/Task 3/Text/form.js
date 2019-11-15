function showCustomer(str)
{ 
 var xmlHttp=new XMLHttpRequest();

var url="form.php?Name="+str;

//url=url+"&sid="+Math.random();
	alert(url);
 
	xmlHttp.onreadystatechange=function (){
	          alert(xmlHttp.readyState)
             if(xmlHttp.readyState==4 && xmlHttp.status==200)
 document.getElementById("txtfile").innerHTML=xmlHttp.responseText;
//	alert(xmlHttp.responseText);
};
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

