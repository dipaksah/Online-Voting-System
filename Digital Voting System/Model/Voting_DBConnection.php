<?php

$hostname="localhost";
$username="root";
$password="";
$votingDB="digital_voting_system";

$conn=mysqli_connect($hostname,$username,$password,$votingDB);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	/*echo "database connected";*/
} 

?>