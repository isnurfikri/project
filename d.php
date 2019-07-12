<!DOCTYPE html>
<html>
<head>
	<title>Contoh</title>
</head>
<body>
	<center><font face="TimesNewRoman color=""><h1>Selamat Belajar PHP </h1></font><BR></center>

	<img src="index.jpg" align="center" alt="BMTH"><br>
	<?php

	printf("Tgl Sekarang : %s", date("d F Y"));
	echo"<hr>";
	?>
	<?php
	function tampilkan_nama(){
		echo "Nama Saya Isnur Fikri";
	}
	tampilkan_nama();
	echo "<BR>";
	echo "<hr>";
	?>
	<?php
	$warna="merah";
	$waRna="kuning";
	$Warna="hitam";
	echo "<BR>";
	echo "Rumahku warna ".$warna."<BR>";
	echo "Bajuku warna ".$waRna."<BR>";
	echo "hidungku warna ".$Warna."<BR>";
	?>

	<?php
	$harga="Rp 60.000";
	echo "harga bajuku adalah ".$harga."<BR>";
	echo "<hr>";
	?>

	<?php
	function perkalian ($angka1, $angka2)
	{
		$a= $angka1;
		$b= $angka2;
		$hasil= $a*$b;
		return $hasil;
	}
	$hasil=perkalian(4,5);
	echo "Perkalian 4 x 5 adalah $hasil";
	echo "<br />";
	$hasil=perkalian(6,3);
	echo "perkalian 6 x 3 adalah $hasil";
	echo "<br />";
	?>


	<?php
	function penjumlahan ($nomor1, $nomor2)
	{
		$c= $nomor1;
		$d= $nomor2;
		$hasil= $c+$d;
		return $hasil;
	}
	$hasil= penjumlahan(5,10);
	echo "hasil dari 5 + 10 adalah $hasil";
	echo "<BR>";
	echo "<HR>";
	?>
	<?php
	$angka= 5;
	switch ($angka) {
		case '1':
			echo "isi variable angka adalah satu";
			break;
		case '2':
			echo "isi variable angka adalah dua";
			break;
		case '3':
			echo "isi variable angka adalah tiga";
			break;
		default:
			echo "isi variable tidak ditemukan";
			break;
	}
	echo "<BR>";
	?>
	<?php
	$angka= 3;
	switch ($angka) {
		case '1':
			echo "isi variable angka adalah satu";
			break;
		case '2':
			echo "isi variable angka adalah dua";
			break;
		case '3':
			echo "isi variable angka adalah tiga";
			break;
		default:
			echo "isi variable tidak ditemukan";
			break;
	}
	echo "<BR>";
	?>
	<?php
		function hitungumur($thn_lahir, $thn_sekarang){
		$umur= $thn_sekarang - $thn_lahir;
		return $umur;
	}
	echo "<hr>";
	?>
	<?php

	function perkenalan($nama, $salam="Selamat Datang"){
		echo "$salam ";
		echo "perkenalkan nama saya ".$nama."<br/>";
	}		

		echo "saya berusia ". hitungumur(2002, 2019) ."tahun<br />";
		echo "senang berkenalan denagn anda<br />";
	echo "<hr>";
	?>
	<?php
	function faktorial($angka){
		if ($angka < 2) {
			return 1;
		}else{
			return ($angka * faktorial($angka-1));
		}
	}
	echo "faktorial 3 adalah " . faktorial(3);
	echo "<BR>";
echo "<hr>";
	?>
	<?php
	function Luas($panjang, $lebar){
		$Luas=$panjang * $lebar;
		return $Luas;
	}
		$Luas=Luas(10,6.5);
	echo "Luas persegi panjang dengan panjang 10 dan lebar 6.5 adalah $Luas";
	echo "<br />";
	echo "<hr>";
	?>
	<?php
	function luassetengahlingkaran($phi, $diameter)
	{
		$jari2= $diameter / 2;
		$luassetengahlingkaran=($phi * $jari2 *$jari2) / 2;
		return $luassetengahlingkaran;
	}
	$luassetengahlingkaran=luassetengahlingkaran(3.14,10);
	echo "luas setengah lingkaran yang berdiameter 10cm adalah $luassetengahlingkaran";
	echo "<br/>";
	echo "<hr>";
	?>
	<?php
	function do_print(){
		echo time();
	}
	do_print();
	echo '<br/>';

	function jumlah($a, $b){
		return ($a + $b);
	}
	echo jumlah(2, 3);
	echo "<hr>";
	?>
</body>
</html>