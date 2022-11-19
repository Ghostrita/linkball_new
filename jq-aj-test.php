<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>

<input type="button" name="btnGetJson" id="btnGetJson" value="Get Json">
<div id="content"></div>

<script type="text/javascript">
		$(document).ready(function() {
			
			$("#btnGetJson").click(function() {                 //if btngetjson clicked
					
					$.ajax({
					   type: "POST",
					   url: "getJson.php",
					   data: '',
					   success: function(result) {
                            console.log(result)
                            document.querySelector("#content").innerHTML= result;
							//$('#content').html(result); 
					   }
					 });

			});
	
		});
</script>

</body>
</html>