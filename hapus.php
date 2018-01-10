<?php

if(isset($_GET['id'])){
	
	
	include('koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$cek = mysql_query("SELECT nim FROM mahasiswa WHERE nim='$nim'") or die(mysql_error());
	
	
	if(mysql_num_rows($cek) == 0){
		
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysql_query("DELETE FROM mahasiswa WHERE nim='$nim'");
		
		
		if($del){
			
			echo 'Data siswa berhasil di hapus! ';		
			echo '<a href="index.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="index.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	
	echo '<script>window.history.back()</script>';
	
}
?>