<?php 
 
$server = "localhost"; 
$user = "root"; 
$password = ""; 
$db_name = "db_zaky"; 
 
$conn = mysqli_connect($server, $user, $password, $db_name); 
 if (!$conn) {     die("Gagal terhubung dengan database: " . mysqli_connect_error()); } 
 
