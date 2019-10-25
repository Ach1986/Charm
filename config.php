<?php
$host = 'localhost'; #host
$mydatabase = 'lhio'; #databasename
$username = 'root'; #username
$password = '';#password

try{
// $dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);
$conn = new PDO("mysql:host = {$host};dbname = {$mydatabase}", $username, $password);	
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "PDO Connection Success";
}
catch(PDOException $e){
	echo $e->getMessage();
}
?>