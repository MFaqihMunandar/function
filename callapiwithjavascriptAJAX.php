<!DOCTYPE html>
<html>
    <head>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	</head>
	<body>
		<a id='testajax' name='testajax' onclick='ajaxCall();' > get json </a>
		<script>
			function ajaxCall() {
				$.ajax({
					// Our sample url to make request can be a php file, json, or else 
					url: 'http://192.168.1.9:8080/sboservice/groupkredit3.php',
					headers:{         
						'Authorization' : 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHBWZXIiOiIwLjAuMCIsImV4cCI6NDcyNjM4OTEyMiwibG9jYWxlIjoiIiwibWFzdGVyVmVyIjoiIiwicGxhdGZvcm0iOiIiLCJwbGF0Zm9ybVZlciI6IiIsInVzZXJJZCI6IiJ9.QIZbmB5_9Xlap_gDhjETfMI6EAmR15yBtIQkWFWJkrg',
					},
					// Type of Request
					type: "GET",
					// Function to call when to
					// request is ok 
					success: function (data) {
						const p = data;
						alert(JSON.stringify(p));
					},
					// Error handling 
						error: function (error) {
							console.log(`Error ${error}`);
						}
					});
			}
		</script>
	</body>
</html>