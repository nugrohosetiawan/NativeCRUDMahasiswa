<!DOCTYPE html>
<html>
<head>
	<title>Go Training</title>
</head>
<body>
	<h2>CRUD Tabel dan Join Tabel</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data Siswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Opsi</th>
		</tr>
		
		<?php
		
		include('koneksi.php');
		
		
		$query = mysql_query("SELECT * FROM mahasiswa ") or die(mysql_error());
		
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
			
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){	
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nim'].'</td>';	
					echo '<td>'.$data['nama'].'</td>';	
					echo '<td>'.$data['jurusan'].'</td>';	
					echo '<td>'.$data['kelas'].'</td>';	
					echo '<td><a href="edit.php?id='.$data['nim'].'">Edit</a> / <a href="hapus.php?id='.$data['nim'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
				echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
	</table>
</body>
</html>