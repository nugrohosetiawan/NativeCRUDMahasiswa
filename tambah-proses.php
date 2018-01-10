<?php

if(isset($_POST['tambah'])){
	
	
	include('koneksi.php');
	
	
	$nim		= $_POST['nim'];	
	$nama		= $_POST['nama'];	

	$jurusan	= $_POST['jurusan'];
	$kelas		= $_POST['kelas'];	


	
	
	$input = mysql_query("INSERT INTO mahasiswa VALUES( '$nim', '$nama', '$kelas', '$jurusan')") or die(mysql_error());
	
	
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="tambah.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tambah.php">Kembali</a>';	
		
	}

}else{	

	
	echo '<script>window.history.back()</script>';

}
?>