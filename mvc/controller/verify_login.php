 <?php
session_start();
include "../model/verify.php";

	if($result==true){
	
		$_SESSION["client"] = "admin";
		$_SESSION["valid"] = "valid";
		header("Location: ../admin.php"); 
		
	}

	else{
		$_SESSION["client"] = "none";
        $_SESSION['login_error_msg'] = "User name or password is incorrct";
		header("Location: ../view/login.php");
		exit();
	}

mysqli_close($conn);
?> 
