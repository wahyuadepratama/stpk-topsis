<?php
if(isset($_POST['submit'])){
	include ('koneksi.php');
	$alt=strtoupper($_POST['txtAlternatif']);
	$cek = mysql_query("SELECT nama_alternatif FROM talternatif WHERE UPPER(nama_alternatif)='".$alt."'");
	if (mysql_num_rows($cek)>0) {
		echo '
		<script>alert("Tidak bisa menambahkan data. Data alternatif sudah ada !. Silahkan tambah data yang lainnya")</script>
		<meta  http-equiv="refresh" content="0.1;url=../alternatif.php">
		';
	}
	else {
		$input = mysql_query("INSERT INTO talternatif (nama_alternatif,keterangan)
				  VALUES('$_POST[txtAlternatif]','$_POST[txtKeterangan]')") or die(mysql_error());

		//jika query input sukses
		if($input){
			echo '
			<script>
			alert("berhasil menambahkan data")
			</script>

			<meta  http-equiv="refresh" content="0.1;url=../alternatif.php">
			';
		}else{

			error();

		}
	}
}else{
echo '
		<script>
		alert("kosong")
		</script>';

	echo '<script>window.history.back()</script>';

}

function error(){
	echo '
		<script>
		alert("gagal menambahkan data")
		</script>

		<meta  http-equiv="refresh" content="0.1;url=../alternatif.php">
		';
}
