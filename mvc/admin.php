<!DOCTYPE html>
<head>
       <title>Home kkr</title>
</head>
<body>
 <h2>Ami kkr</h2>
 <h1 align="center"><i>Kolkata Knight Riders<i> </h1>
 <h3 align="center"><i>ADMIN PAGE</i></h3>
	 <nav  >
		<a href="../Home.php">HOME</a> |
		<a href='http://localhost/kkr/mvc/?user-add'>ADD A PLAYERR</a> |
		<a href='http://localhost/kkr/mvc/?user-showall'>SHOW ALL PLAYER</a> |
		<a href='http://localhost/kkr/mvc/logout.php'>LOGOUT</a>
     </nav>

     <br/> <br/> <br/>

		<script type="text/javascript">	
			var f=true;
			function slide(){
				if(f==true){
					document.getElementById("label").innerHTML="Welcome";
				}
				else{
					document.getElementById("label").innerHTML="Admin";
				}
				f=!f;
			}
			setInterval(slide, 1000);
		</script>
	 
		<h1 align="center" id="label" ></h1>
	 
</body>
</html>