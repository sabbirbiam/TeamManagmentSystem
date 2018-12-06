 <?php
	$key = $_GET['key'];
	$users = array("Samsung Galaxy", "HTC Desire", "IPhone 5s", "ASUS ZenFone Laser 2", "LG Nexus 5x", "OFFICIAL KOLKATA KINIGHT RADHER T-SHART ");
	
	$str="";
	foreach($users as $user){
		if(strstr($user, $key)){
			$str.="<br/>$user";
		}
	}
	echo $str;
	
?>