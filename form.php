<?php 
session_start();
include_once 'koneksi.php';
if (isset($_SESSION["nim"])) {
	header(" ");
}
?>
<?php
	if (isset($_POST['submit'])) {
		$nama =$_POST['nama'];
		$nim =$_POST['nim'];
		$jK =$_POST['jK'];
		$prodi =$_POST['prodi'];
		$fakultas =$_POST['fakultas'];
		$asal =$_POST['asal'];
		$moto =$_POST['moto'];
	}
?>
 <center><h2>Form Registrasi</h2></center>
<form action=" " method="POST">
	<center><table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim"></td>
				</tr>
				<tr>
					<td>Jenis kelamin</td>
					<td>:</td>
					<td><input type="radio" name="jK" value="Laki-laki">Laki-laki
					<input type="radio" name="jK" value="Perempuan">Perempuan</td>
				</tr>
				<tr>
					<td>Program Studi</td>
					<td>:</td>
					<td><select name="prodi">
							<option value="D3 Manajemen Infromatika">D3 Manajemen Infromatika</option>
							<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
							<option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
							<option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
							<option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
							<option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
							<option value="D4 Sistem Multimedia">D4 Sistem Multimedia</option>
					</select></td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td><select name="fakultas">
							<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
							<option value="Fakultas Teknik Informatika">Fakultas Teknik Informatika</option>
							<option value="Fakultas Ildustri Kreatif">Fakultas Ildustri Kreatif</option>
							<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
							<option value="Fakultas Komunikasi dan Bisnis">Fakultas Komunikasi dan Bisnis</option>
							<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
							
					</select></td>
				</tr>
				<tr>
					<td>Asal Daerah</td>
					<td>:</td>
					<td><input type="text" name="asal"></td>
				</tr>
				<tr>
					<td>Moto Hidup</td>
					<td>:</td>
					<td><input type="textarea" name="moto"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Masuk"></td>
				</tr>
		
			</table>

</form>
<?php 
if(isset($_POST['submit'])){
		$nama =$_POST['nama'];
		$nim =$_POST['nim'];
		$jK =$_POST['jK'];
		$prodi =$_POST['prodi'];
		$fakultas =$_POST['fakultas'];
		$asal =$_POST['asal'];
		$moto =$_POST['moto'];
		$sql = mysqli_query($koneksi,"INSERT INTO registrasi VALUES ('$nama','$nim','$jK','$prodi','$fakultas','$asal','$moto')");
		if ($sql) {
		$_SESSION['nim'] = $nim;
		header("location: index.php");
	} 
	} 


?>
