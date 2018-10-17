<?php
include_once "koneksi.php";
?>
<body>
	<br><be>
	<center>
			<table >
					<form action=" " method="post">
						<?php
						if (isset($_GET['nim'])) {
						$nim = $_GET['nim'];
						$query = mysqli_query($koneksi,"SELECT `nama`, `nim`, `jk`, `prodi`, `fakultas`, `asal`, `moto` FROM `registrasi` WHERE `nim` = '$nim'");
						while ($array = mysqli_fetch_array($query)) {
						?>
						<tr>
							<td>NIM</td>
							<td>:</td>
							<td><input type="text" name="nim" value="<?php echo $array['nim']; ?>"></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" name="nama" value="<?php echo $array['nama']; ?>"></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td>
								<input type="radio" name="jk" value="Laki-laki" <?php echo $array['jk'] == "Laki-laki" ? "checked" : ""; ?>>Laki-laki<br>
								<input type="radio" name="jk" value="Perempuan" <?php echo $array['jk'] == "Perempuan" ? "checked" : ""; ?>>Perempuan
							</td>
						</tr>
						<tr>
							<td>Program Studi</td>
							<td>:</td>
							<td>
								<select name="prodi">
									<option value="D3 Manajemen Informatika" <?php echo $array['prodi'] == "D3 Manajemen Informatika" ? "selected='selected'" : ""; ?>>D3 Manajemen Infromatika</option>
									<option value="D3 Komputerisasi Akuntansi" <?php echo $array['prodi'] == "D3 Komputerisasi Akuntansi" ? "selected='selected'" : ""; ?>>D3 Komputerisasi Akuntansi</option>
									<option value="D3 Manajemen Pemasaran" <?php echo $array['prodi'] == "D3 Manajemen Pemasaran" ? "selected='selected'" : ""; ?>>D3 Manajemen Pemasaran</option>
									<option value="D3 Teknik Komputer" <?php echo $array['prodi'] == "D3 Teknik Komputer" ? "selected='selected'" : ""; ?>>D3 Teknik Komputer</option>
									<option value="D3 Teknik Informatika" <?php echo $array['prodi'] == "D3 Teknik Informatika" ? "selected='selected'" : ""; ?>>D3 Teknik Informatika</option>
									<option value="D3 Teknik Telekomunikasi" <?php echo $array['prodi'] == "D3 Teknik Telekomunikasi" ? "selected='selected'" : ""; ?>>D3 Teknik Telekomunikasi</option>
									<option value="D4 Sistem Multimedia" <?php echo $array['prodi'] == "D4 Sistem Multimedia" ? "selected='selected'" : ""; ?>>D4 Sistem Multimedia</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Fakultas</td>
							<td>:</td>
							<td><select name="fakultas">
									<option value="FIT" <?php echo $array['prodi'] == "FIT" ? "selected='selected'" : ""; ?>>Fakultas Ilmu Terapan</option>
									<option value="FIK" <?php echo $array['prodi'] == "FIK" ? "selected='selected'" : ""; ?>>Fakultas Ildustri Kreatif</option>
									<option value="FKB" <?php echo $array['prodi'] == "FKB" ? "selected='selected'" : ""; ?>>Fakultas Komunikasi dan Bisnis</option>
									<option value="FRI" <?php echo $array['prodi'] == "FRI" ? "selected='selected'" : ""; ?>>Fakultas Rekayasa Industri</option>
									<option value="FTE" <?php echo $array['prodi'] == "FTE" ? "selected='selected'" : ""; ?>>Fakultas Teknik elektro</option>
									<option value="FTI" <?php echo $array['prodi'] == "FTI" ? "selected='selected'" : ""; ?>>Fakultas teknik Informatika</option>
							</select></td>
						</tr>
						<tr>
							<td>Asal Daerah</td>
							<td>:</td>
							<td><input type="text" name="asal" value="<?php echo $array['asal']; ?>"></td>
						</tr>
						<tr>
							<td>Moto Hidup</td>
							<td>:</td>
							<td><input type="textarea" name="moto" value="<?php echo $array['moto']; ?>"></td>
						</tr>
						<tr>
							<td><input type="submit" name="update" value="Update"></td>
						</tr>
						<?php }
						} ?>
					</form>
				</table>
	
</body>
<?php 
if (isset($_POST['update'])) {
	$nama =$_POST['nama'];
	$nim =$_POST['nim'];
	$jk =$_POST['jk'];
	$prodi =$_POST['prodi'];
	$fakultas =$_POST['fakultas'];
	$asal =$_POST['asal'];
	$moto =$_POST['moto'];
	$query = mysqli_query($koneksi,"UPDATE `registrasi` SET `nama`='$nama',`nim`='$nim',`jk`='$jk',
		`prodi`='$prodi',`fakultas`='$fakultas',`asal`='$asal',`moto`='$moto' WHERE `nim` = '$nim'");
	if ($query) {
		header ("location: detail.php?nim=$nim");
	} else {
		echo "Error";
		echo "<a href='form.php'>Kembali</a>";
	}
}
?>
