<?php
	if(!isset($isPassedThroughController)){
		header("Location: error.php");
	}
?>

<?php
	$id = $_GET['id'];
	$query = "DELETE FROM player1 WHERE id=$id";
	$con = mysqli_connect("localhost", "root", "", "kkr_bd");	
	$result = mysqli_query($con, $query);	
	if($result){
		var_dump($result);
		echo "Deleted";
	}
	echo "<a href='../controller/user-controller.php?view=showall'>View</a>";
?>	