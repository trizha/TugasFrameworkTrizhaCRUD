<?php 

	echo "Sukses Update Data";
	echo "</br>";
	echo anchor('pegawai/update/'.$this->uri->segment(3), 'Update Data Lagi');
	echo "<br>";
	echo anchor('pegawai/index', 'Kembali Ke Home');

 ?>