<?php
include_once "koneksi.php";
?>
<!DOCTYPE html>
<html>
<body><br><br><br>	
	<center>
					<table>
							<?php
							$nim = $_GET['nim'];
							$query = "SELECT * FROM `registrasi` WHERE nim = '$nim'";
							$result = mysqli_query($koneksi,$query);
							while ($array = mysqli_fetch_array($result)) {
							?>
							<tr>
								<td>
									<label>Nama</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $array['nama']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>NIM</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $array['nim']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Jenis Kelamin</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $array['jk']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Fakultas</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $array['fakultas']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Program Studi</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $array['prodi']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Asal</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $array['asal']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Moto Hidup</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $array['moto']; ?>
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>
									<a href="edit.php?nim=<?php echo $array['nim']; ?>">Update Data !</a>
								</td>
							</tr>
							<?php } ?>
					</table>
		
</body>
</html>