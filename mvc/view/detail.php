<?php
	if(!isset($isPassedThroughController)){
		header("Location: error.php");
	}
?>

<?php
	echo "
	ID: $person[id]<br/>
	Name: $person[name]<br/>
	Role: $person[role]<br/>
	Match: $person[mat]<br/>
	Runs:$person[runs]<br/>
	Century: $person[cen]<br/>
	Best bolling figure: $person[bbi]<br/>	
    Wicket: $person[wic]<br/>
    Price: $person[price]<br/>
    Country: $person[country]<br/>";

	echo "<a href='../controller/user-controller.php?view=showall'>View</a>";
?>