<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){

	$query = mysql_query("UPDATE talternatif SET nama_alternatif='$_POST[txtAlternatif]',
							   keterangan='$_POST[txtKeterangan]'
		  					WHERE id_alternatif='$_POST[id]'") or die(mysql_error());

	if($query){
			echo '
			<script>
			alert("berhasil update data")
			</script>
			<meta  http-equiv="refresh" content="0.1;url=../alternatif.php">
			';
		}else{

			echo 'Gagal update data! ';
			echo '<a href="alternatif.php">Kembali</a>';

		}

}
