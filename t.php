<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "ggwp";

$db = mysqli_connect($server, $user, $password, $nama_database);
if ( !$db ) {
	die("gagal terhubung dengan database: " . mysqli_connect_error());
}else{
	echo "connected";
}
?>