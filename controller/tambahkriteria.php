<?php
if(isset($_POST['submit'])){
	include ('koneksi.php');

	$k=strtoupper($_POST['txtKriteria']);
	$cek = mysql_query("SELECT nama_kriteria FROM tkriteria WHERE UPPER(nama_kriteria)='".$k."'");
	if (mysql_num_rows($cek)>0) {
		echo '
		<script>alert("Tidak bisa menambahkan data. Data kriteria sudah ada !. Silahkan tambah data yang lainnya")</script>
		<meta  http-equiv="refresh" content="0.1;url=../alternatif.php">
		';
	}
	else {
			$input = mysql_query("INSERT INTO tkriteria (nama_kriteria,kepentingan,costbenefit,rentangnilai)
					  VALUES('$_POST[txtKriteria]','$_POST[txtKep]','$_POST[rbCB]','$_POST[rentang]')") or die(mysql_error());

			//jika query input sukses
			if($input){
				echo '
				<script>
				alert("berhasil menambahkan data")
				</script>

				<meta  http-equiv="refresh" content="0.1;url=../kriteria.php">
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

		<meta  http-equiv="refresh" content="0.1;url=../kriteria.php">
		';
}
