<!DOCTYPE html>
<html>
    <head>
	<title>Validation javaScrip</title>
	</head>
	
	<body>
	 <h1 align="center">Customer Address </h1>
	   <form align="center" name="myForm"  action="php_valid.php" onSubmit="return validateForm()" method="post">
		<table border="1" align="center">
		  <tr>
		    <td>Name:</tr>
			<td><input type="text" id="fName"></tr>
		  </tr><br>
		  
		  <tr>
		    <td>Address:</tr>
			<td><input type="text" id="add"></tr>
		  </tr><br>
		  
		  <tr>
		    <td>Phone:</tr>
			<td><input type="text" id="phone"></tr>
		  </tr><br>
		  
		  <tr>
		    <td>Email:</tr>
			<td><input type="text" id="email"></tr>
		  </tr><br>
		  
		  <tr>
		    <td>Payment:</tr>
			<td><input type="text" id="Paymetn"></tr>
		  </tr><br>

		  <tr>
		    <td><input type="submit" id="btnSubmit" value="Submit" style="width:175px"></td>
		  </tr><br>
		  
		</table>
		
	  </form>
	  
	   <script>
		     function validateForm() {
                var firstName = document.getElementById("fName").value;
				if(firstName == "")
				{
				   alert("Name can not be empty");
				   return false;
				}
				
				var add = document.getElementById("add").value;
				if(lastName == "")
				{
				   alert("Address can not be empty");
				   return false;
				}
				
				var phone = document.getElementById("phone").value;
				if(phone == "")
				{
				   alert("Phone name can not be empty");
				   return false;
				}
			 
				
				var email = document.getElementById("email").value;
				if(email == "")
				{
				   alert("Email name can not be empty");
				   return false;
				}
				 
				
				var conPass = document.getElementById("Paymetn").value;
				if(conPass == "")
				{
				   alert("Enter your payement type");
				   return false;
				}
				
				var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
			 if (!reg.test(email)){
			    alert("Invalid Email Type");
               return false; 
              }
			 if(!preg_match('/^(0088|\+88)?(01)[156789]{1}[0-9]{8}$/',phone));
					{
						alert("Invalid phone number");
						return false;
					}
			   
			}
			
             
			  
          

		  </script>
	</body>
	
</html>