function addbrp(){}
addbrp.prototype = 
{
	topNum:50,
	addbrp:function(data){
	 var datas = data.split("\n");
	 for(var i=0,data="";i<datas.length;i++)
	 {
		//if(datas[i].indexOf("</br>") || datas[i].indexOf("</p>")) alert("1");
		if(datas[i].length>this.topNum) data = data + "<p>" + datas[i] + "</p>";
	 }
	 return data;
  }
};