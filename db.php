<?php 

$serverName = '127.0.0.1';
$username = 'root';
$password = '';
$dbName = 'test';

$conn = new mysqli($serverName,$username,$password,$dbName);
if($conn->connect_error){
	die("Connection Error ".$conn->connect_error);
}
?>