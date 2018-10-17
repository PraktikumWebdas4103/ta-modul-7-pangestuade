<?php include_once 'koneksi.php'; ?>
<body><br>
	<center><h2>Data Tersimpan</h2></center>

	<form action=" " method="POST">
		<center><table border="1">
		<tr>
			<td><input type="text" name="nim" placeholder="NIM"></td>
			<td ><input type="submit" name="submit" value="Cari"></td>
		</tr>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>

<?php
if (isset($_POST['submit'])) {
	$nim =$_POST['nim'];

$sql = mysqli_query($koneksi,"SELECT * FROM registrasi where nim ='$nim'");

while ($array = mysqli_fetch_array($sql)) {
	echo "<tr>";
	echo "<td>".$array['nim']."</td>";
	echo "<td>".$array['nama']."</td>";
	echo "<td>";
	echo"<a href='delete.php?nim=".$array['nim']."'>delete</a> ";
	echo "</tr>";
}
}
?>
</table>
<br><br>
		<center>
			<table border="1">
				
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>Aksi</th>
				</tr>		
		<?php
		$sql = mysqli_query($koneksi,"SELECT * FROM registrasi");

		while ($array = mysqli_fetch_array($sql)) {
			
			echo "<tr>";
			echo "<td>".$array['nim']."</td>";
			echo "<td>".$array['nama']."</td>";
			echo "<td>";
			echo"<a href='delete.php?nim=".$array['nim']."'>Delete |</a> ";
			echo"<a href='detail.php?nim=".$array['nim']."'>Detail |</a>";
			echo "</tr>";

		}
		?>
</table>
<center><a href="form.php">Tambah Form !</a></center>
	</form>
</body>
</html>
	
	