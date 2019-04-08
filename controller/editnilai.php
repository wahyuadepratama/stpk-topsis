<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){

	$c=mysql_query("SELECT * FROM tkriteria WHERE id_kriteria='$_POST[idk]'");
    while ($show=mysql_fetch_assoc($c)) {
    	$r=$show['rentangnilai'];
    }

    if ($r>0) {

		    if ($_POST['txtNilai'] > $r || $_POST['txtNilai']<0) {
		    	echo '<script>alert("gagal mengedit data, nilai melewati batas")</script>
		    	<meta  http-equiv="refresh" content="0.1;url=../nilai.php">
		    	';
		    }
		    else {
					$query = mysql_query("UPDATE talternatif_kriteria SET nilai='$_POST[txtNilai]'
						  					WHERE id_alternatif='$_POST[idalt]' && id_kriteria='$_POST[idk]'") or die(error());

					if($query){
							echo '
							<script>
							alert("berhasil update data")
							</script>
							<meta  http-equiv="refresh" content="0.1;url=../nilai.php">
							';
						}else{

							echo 'Gagal update data! ';
							echo '<a href="nilai.php>Kembali</a>';

						}
			}
	}
	else {
					$query = mysql_query("UPDATE talternatif_kriteria SET nilai='$_POST[txtNilai]'
						  					WHERE id_alternatif='$_POST[idalt]' && id_kriteria='$_POST[idk]'") or die(error());

					if($query){
							echo '
							<script>
							alert("berhasil update data")
							</script>
							<meta  http-equiv="refresh" content="0.1;url=../nilai.php">
							';
						}else{

							echo 'Gagal update data! ';
							echo '<a href="nilai.php>Kembali</a>';

						}
			}


}

	function error(){
		echo '<script>
					alert("gagal proses data")
				  </script>
				 <meta  http-equiv="refresh" content="0.1;url=../nilai.php">';	 //redirect untuk kembali ke halaman beranda
	}
