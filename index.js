function checkNum(obj,min,max) 
{  	  
	var x=obj.value;
	//alert("测试"+obj.value);
		if(isNaN(x))
		{	
			alert("请输入正确的数字！");
			obj.value="";
		}
		else
		{	
			if(Number(x)<min || Number(x)>max)
			{
				alert("请输入"+min+"~"+max+"之间的数字！");
				obj.value="";
			}
			else
			{	if(obj.value!="")
				obj.value = Math.round(Number(x)*1000)/1000; 
			}
		}
		
}  

function inputNumZ()
{
	if (event.keyCode!=46 && (event.keyCode<48 || event.keyCode>57))
		event.returnValue=false;
}

function inputNumZF()
{
	if (event.keyCode!=46 && event.keyCode!=45 && (event.keyCode<48 || event.keyCode>57))
		event.returnValue=false;
}

function checkCn(obj)
{
	obj.value=obj.value.replace(/[\u4e00-\u9fa5]/g,'');
}