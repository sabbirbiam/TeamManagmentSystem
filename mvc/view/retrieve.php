<?php
	if(!isset($isPassedThroughController)){
		header("Location: error.php");
	}
?>

<?php
	echo "<table border='1'>";
	foreach($persons as $person){
		echo "<tr>
				<td>$person[name]</td>
				<td>$person[role]</td>
				<td><a href='?user-show&id=$person[id]'>Detail</a></td>
				<td><a href='index.php?user-edit&id=$person[id]'>Edit</a></td>
				<td><a href='index.php?user-remove&id=$person[id]'>Delete</a></td>
			</tr>";
	}
	echo "</table>";
?>