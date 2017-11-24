var ifra = (function(d){
	  var iframe = d.body.appendChild(d.createElement('iframe')),
	  doc = iframe.contentWindow.document;

	  // style the iframe with some CSS
	  iframe.style.cssText = "position:absolute;width:200px;height:100px;left:0px;";
	  
	  doc.open().write('<body onload="' + 
	  'var d = document;d.getElementsByTagName(\'head\')[0].' + 
	  'appendChild(d.createElement(\'script\')).src' + 
	  '=\'\/path\/to\/file\'">');
	  
	  doc.close(); //iframe onload event happens

	  })(document);