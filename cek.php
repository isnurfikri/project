<?php

$Nama = $_POST['Nama'];
$Tempat = $_POST['Tempat'];
$gender = $_POST['gender'];
$Usia = $_POST['Usia'];
if ($Nama == "") {
	header("location;formbaru.php");
}else {
	echo "nama anda adalah ".$Nama;
	echo "tempat anda adalah ".$Tempat;
	echo "gender anda adalah ".$gender;
	echo "usia anda adalah ".$Usia;
}


echo "";
?>