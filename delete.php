<?php
	$nim = $_GET['nim'];
	include"koneksi.php";
	$query = mysqli_query($koneksi,"delete from registrasi where nim='$nim'");
	if ($query) {
		header ("location: isi2.php");
	} else {
		echo "Error";
		echo "<a href='form.php'>Kembali</a>";
	}
?>