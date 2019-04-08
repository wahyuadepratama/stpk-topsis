<?php
if(isset($_POST['submit'])){
	include ('koneksi.php');

	$c=mysql_query("SELECT * FROM tkriteria WHERE id_kriteria='$_POST[cboKriteria]'");
    while ($show=mysql_fetch_assoc($c)) {
    	$r=$show['rentangnilai'];
    }
    if ($r>0) {

		    if ($_POST['txtNilai'] > $r || $_POST['txtNilai']<0) {
		    	echo '<script>alert("gagal menambahkan data, nilai melewati batas")</script>
		    	<meta  http-equiv="refresh" content="0.1;url=../nilai.php">
		    	';
		    }
		    else {

				$input = mysql_query("INSERT INTO talternatif_kriteria (id_alternatif,id_kriteria,nilai)
						  VALUES('$_POST[cboAlternatif]','$_POST[cboKriteria]','$_POST[txtNilai]')") or die(error());

				//jika query input sukses
				if($input){
					echo '
					<script>
					alert("berhasil menambahkan data")
					</script>

					<meta  http-equiv="refresh" content="0.1;url=../nilai.php">
					';
				}else{

					error();

				}
			}
	}
	else {
		$input = mysql_query("INSERT INTO talternatif_kriteria (id_alternatif,id_kriteria,nilai)
				  VALUES('$_POST[cboAlternatif]','$_POST[cboKriteria]','$_POST[txtNilai]')") or die(error());

		//jika query input sukses
		if($input){
			echo '
			<script>
			alert("berhasil menambahkan data")
			</script>

			<meta  http-equiv="refresh" content="0.1;url=../nilai.php">
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

		<meta  http-equiv="refresh" content="0.1;url=../nilai.php">
		';
}
