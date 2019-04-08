<?php
var_dump('tes');
include 'koneksi.php';
if(isset($_POST['simpan'])){

	$query = mysql_query("UPDATE tkriteria SET nama_kriteria='$_POST[txtKriteria]',
							   kepentingan='$_POST[txtKep]',
							   costbenefit='$_POST[rbCB]',
							   rentangnilai='$_POST[rentang]'
		  					WHERE id_kriteria='$_POST[id]'") or die(mysql_error());

	if($query){
			echo '
			<script>
			alert("berhasil update data")
			</script>
			<meta  http-equiv="refresh" content="0.1;url=../kriteria.php">
			';
		}else{

			echo 'Gagal update data! ';
			echo '<a href="kriteria.php">Kembali</a>';

		}

}
