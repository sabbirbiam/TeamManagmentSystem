<?php
	if(!isset($isPassedThroughController)){
		header("Location: error.php");
	}
?>

<?php
	switch($view){
		case "add":
			include("view/create.php");
			break;
		case "showall":
			$query = "SELECT * FROM player1";
			$con = mysqli_connect("localhost", "root", "", "kkr_bd");	
			$result = mysqli_query($con, $query);
			
			$persons =  array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i]= $row;		
			}
			include("view/retrieve.php");
			break;
		case "edit":
			include("view/update.php");
			break;
		case "remove":
			include("view/delete.php");
			break;
		case "show":
			$id = $_GET['id'];
			$query = "SELECT * FROM player1 WHERE id=$id";
			$con = mysqli_connect("localhost", "root", "", "kkr_bd");	
			$result = mysqli_query($con, $query);	
			
			$person = array();
			if($row = mysqli_fetch_assoc($result)){
				$person = $row;
			}			
			include("view/detail.php");
			break;    
	}	
	
?>