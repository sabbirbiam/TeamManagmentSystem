<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "information";

 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  $sql = "INSERT INTO info (firstname, lastname, email,phone,gender,password,dob)
  VALUES ('$_SESSION[fn]', '$_SESSION[ln]', '$_SESSION[em]','$_SESSION[ph]','$_SESSION[gen]','$_SESSION[pass]','$_SESSION[dob]')";

   
  if (mysqli_query($conn, $sql)) 
  {
      echo "New record created successfully";
      header("Location: ../view/login.php");

  }
   else {
    echo mysqli_error($conn);
}    
   mysqli_close($conn);   
// }
?>