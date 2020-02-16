<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script>

	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     		var response = JSON.parse(xhttp.responseText);
     		
     		for(x in response){
     			for(inner in response[x])
     				document.write(response[x][inner]+"<br>");
     		}

     		var test =  response;
     		var display="";

     		/*for(var i=0;i<response.length;i++)
     		{
     			display += test[i].id +"<br>";
     			document.write("<br");
     		}*/
    	}
  	};

	  xhttp.open("GET", "https://jsonplaceholder.typicode.com/posts", true);
	  xhttp.send();

</script>
</body>
</html>