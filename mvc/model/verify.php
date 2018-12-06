<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$uname =  $_POST["username"]; 
$pass = $_POST["pass"]; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM user WHERE name='$uname' AND password='$pass'");
   /* $sql = "INSERT INTO info (firstname, lastname, email,phone,gender,password,dob)
      VALUES ('$fn', '$ln', '$em','$ph','$gen','$pass','$dob')";*/
    $stmt->execute();
   // $conn->exec($sql);
    
    $result=$stmt->fetch(PDO::FETCH_ASSOC);

    }

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>