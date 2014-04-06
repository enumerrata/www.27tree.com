var BeautifullMath;
$(function()
{

     });

function loadartnum()
{
     $.get("./not/info/atr_num.xml",function(list_data)
     {
          var x=list_data.documentElement.childNodes;
          for (var i=0;i<x.length;i++)
          {
               if(x[i].nodeType==1)
                    try{
                         document.getElementById(x[i].nodeName+"_num").innerHTML=x[i].childNodes[0].nodeValue;
                    } catch (e){}
          }
     });
}