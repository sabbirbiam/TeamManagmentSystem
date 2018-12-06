<?php
	if(!isset($isPassedThroughController)){
		header("Location: error.php");
	}
?>

<form method="post">
	<br/>Name:<br/>
	<input name="name"/>
	<br/>Rolee:<br/>
	<input name="role"/>
	<br/>Match:<br/>
	<input name="mat"/>
	<br>Runs:<br/>
	<input name="runs"/>	
	<br/>Century:<br/>
	<input name="cen"/>
	<br/>Best bolling figure:<br/>
	<input name="bbi"/>
	<br/>Wicket:<br/>
	<input name="wic"/>
	<br/>Price:<br/>
	<input name="price"/>
	<br/>Country:<br/>
	<input name="country"/>
	<br/><br/>
	<input type="submit"/>
</form>

<?php
  //echo "THis is";
	if($_SERVER['REQUEST_METHOD']=="POST"){
		//$id = $_POST['id'];
		$name = $_POST['name'];
		$role = $_POST['role'];
		$mat = $_POST['mat'];
		$runs = $_POST['runs'];
		$cen = $_POST['cen'];
		$bbi = $_POST['bbi'];
		$wic = $_POST['wic'];
		$price = $_POST['price'];
		$country = $_POST['country'];
		
	$query = "INSERT INTO player1 (name, role, mat, runs, cen, bbi, wic, price, country) VALUES ('$name', '$role', 
		'$mat', '$runs', '$cen', '$bbi', '$wic', '$price', '$country')";
		$con = mysqli_connect("localhost", "root", "", "kkr_bd");	
		$result = mysqli_query($con, $query);
		//echo "THis is my com";	
		if($result==true){
			echo "Record Added";
		}
	}
?>