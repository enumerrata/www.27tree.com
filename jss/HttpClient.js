function HttpClient(){}
HttpClient.prototype = {
		
		requestType:'GET',//The Method : GET or POST 
		
		isAsync:false,
		onState:true,
		isXML:false,
		
		xmlhttp:false,
		callback:false,
		
		onSend:function(){
			if(this.onState) document.getElementById('HS').style.display='block';
		},
		
		onLoad:function(){
			if(this.onState) document.getElementById('HS').style.display='none';
		},
		
		onError:function(error){
			alert(error);
		},
		
		
		init:function(){
			try{
				this.xmlhttp = new XMLHttpRequest();
			}catch(e)
			{
				var XMLHTTP_IDS = new Array('MSXML2.XMLHTTP.5.0',
						'MSXML2.XMLHTTP.4.0',
						'MSXML2.XMLHTTP.3.0',
						'MSXML2.XMLHTTP',
						'Microsoft.XMLHTTP');
				var success = false;
				for(var i=0 ; i < XMLHTTP_IDS.length && !success ; i++)
				{
					try
					{
						this.xmlhttp = new ActiveXObject(XMLHTTP_IDS[i]);
						success = true;
					}catch(e){}
				}
				if(!success) this.onError("Unable to create XMLHttpRequest!");
			}
		},
		
		makeRequest:function( url , playload ){
			if(!this.xmlhttp) {
				this.init();
			}
			this.xmlhttp.open(this.requestType,url,this.isAsync);
			var self = this;
			this.xmlhttp.onreadystatechange = function(){self.readystatechange();};
			
			this.xmlhttp.send(playload);
			
			if(!this.isAsync){
				if(!this.isXML) return this.xmlhttp.responseText;
				if(this.isXML) return this.xmlhttp.responseXML;
			}
		},
		
		readystatechange:function(){
			switch(this.xmlhttp.readyState){
			case 0:
			case 1:
			case 2:
			case 3: 
				this.onSend(); 
				break;
			case 4:
				this.onLoad(); 
				if(this.xmlhttp.status == 200){
					var return_c;					
				    if(!this.isXML) return_c = this.xmlhttp.responseText;
				    if(this.isXML) return_c = this.xmlhttp.responseXML;
					this.callback( return_c );
				} else {
					this.onError('Http Error Making request:' + '[' + this.xmlhttp.status + ']' + this.xmlhttp.statusText);
				}
				break;
			}
		}
};