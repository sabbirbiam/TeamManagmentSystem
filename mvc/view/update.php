<?php
	if(!isset($isPassedThroughController)){
		header("Location: error.php");
	}
?>

<?php
	$id = $_GET['id'];
	$query = "SELECT * FROM player1 WHERE id=$id";
	$con = mysqli_connect("localhost", "root", "", "kkr_bd");	
	$result = mysqli_query($con, $query);	
	
	if($row = mysqli_fetch_assoc($result)){
		echo '
		<form method="post">
			ID: '.$row['id'].'<br/>
			<input type="hidden" name="id" value="'.$row['id'].'"/>	
			<br/>Name:<br/>
			<input name="name" value="'.$row['name'].'"/>
			<br/>Role:<br/>
			<input name="role" value="'.$row['role'].'"/>
			<br/>Match:<br/>
			<input name="mat" value="'.$row['mat'].'"/>
			<br/>Runs:<br/>
			<input name="runs" value="'.$row['runs'].'"/>
			<br/>Century:<br/>
			<input name="cen" value="'.$row['cen'].'"/>
			<br/>Best bolling figiure:<br/>
			<input name="bbi" value="'.$row['bbi'].'"/>
			<br/>Wicket:<br/>
			<input name="wic" value="'.$row['wic'].'"/>
			<br/>Price:<br/>
			<input name="price" value="'.$row['price'].'"/>
			<br/>Country:<br/>
			<input name="country" value="'.$row['country'].'"/>
			<br/><br/>
			<input type="submit"/>
		</form>';								
	}
	echo "<a href='../controller/user-controller.php?view=showall'>View</a>";
?>

<?php

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$role = $_POST['role'];
		$mat = $_POST['mat'];
		$runs = $_POST['runs'];
		$cen = $_POST['cen'];
		$bbi = $_POST['bbi'];
		$wic = $_POST['wic'];
		$price = $_POST['price'];
		$country = $_POST['country'];
	 

		$query = "UPDATE player1 SET name='$name', role='$role',mat='$mat',runs='$runs',cen='$cen',bbi='$bbi',wic='$wic',
		price='$price',country='$country' WHERE id=$id";
		$con = mysqli_connect("localhost", "root", "", "kkr_bd");	
		$result = mysqli_query($con, $query);	
		if($result==true){
			echo "Record Edited";
		}
	}
?>