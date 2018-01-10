<?php

if(isset($_POST['simpan'])){
	
	
	include('koneksi.php');
	
	$nim		= $_POST['nim'];	
	$nama		= $_POST['nama'];	
	$kelas		= $_POST['kelas'];	
	$jurusan	= $_POST['jurusan'];	

	$update = mysql_query("UPDATE mahasiswa SET nim='$nim', nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE nim='$nim'") or die(mysql_error());
	
	
	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="edit.php?id='.$nim.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="edit.php?id='.$nim.'">Kembali</a>';
		
	}

}else{	
	echo '<script>window.history.back()</script>';

}
?>