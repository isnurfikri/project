<!DOCTYPE html>
<html>
<head>
	<title>form php</title>
</head>
<body>
<form method="post" action="cek.php">
	<center><table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="Nama"></td>
		</tr>
			<td>Tempat</td>
			<td><input type="text" name="Tempat"></td>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="gender" value="Laki-Laki"> Laki-Laki
	<input type="radio" name="gender" value="Perempuan"> Perempuan
	<input type="radio" name="gender" value="Lainnya"> Lainnya</td>
		</tr>
		<tr>
			<td>Usia</td>
			<td><input type="text" name="Usia"></td>
		</tr>
	<td><tr>
		<td><input type="submit" name="submit" value="simpan"></td>
	</tr></td>
	</table></center>
</form>
<?php
echo @$_post['Nama'];
echo "<BR>";
echo @$_post['Tempat'];
echo "<BR>";
echo @$_post['gender'];
echo "<BR>";
echo @$_post['Usia'];
echo "<BR>";
echo @$_post['submit'];
?>

</body>
</html>