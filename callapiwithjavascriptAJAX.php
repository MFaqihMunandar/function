<!DOCTYPE html>
<html>
    <head>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	</head>
	<body>
		<a id='testajax' name='testajax' onclick='ajaxCall();' > get json </a>
		<script>
			function ajaxCall(a,b,c,d,e,f,g,h,i,j,k){
				var Book = {	value_a:a,
						value_b:b,
						value_c:c,
						value_d:d,
						value_e:e,
						value_j:j,
						value_f:f,
						value_k:k,
						value_g:g,
						value_h:h,
						value_i:i,
					    	//this is how you include from php, if only the value stay the same
						userid:"<?php echo $_SESSION['userid'];?>",
						uoffice:"<?php echo $_SESSION['uoffice'];?>"
					}
													
				$.ajax(
					{
						url:'someserver.php',
						type: "POST",
						data:JSON.stringify( Book ),
						contentType: "application/json; charset=utf-8",
						dataType: "json",
						success: function (data) {
							//do whatever inside here if it success 
						},
						error: function (error) {
							console.log(`Error ${error}`);
						}
					}
				);
			}
		</script>
	</body>
</html>
