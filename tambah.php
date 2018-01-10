<!DOCTYPE html>
<html>
<head>
	<title>CRUD Tabe dan Join</title>
</head>
<body>
	<h2>Simple CRUD dan Join Tabel by Nugroho</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data Siswa</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nis" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">Pilih Kelas</option>
						<option value="TI">TI</option>
						<option value="SI">SI</option>
						<option value="MI">MI</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value="">Pilih Jurusan</option>
						<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
						<option value="Multimedia">Multimedia</option>
						<option value="Jaringan">Akuntansi</option>
						<option value="Pemrograman">Perbankan</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>