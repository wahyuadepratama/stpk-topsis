<?php
	function error(){
		echo '<script>
					alert("gagal hapus data")
				  </script>
				 <meta  http-equiv="refresh" content="0.1;url=../nilai.php">';	 //redirect untuk kembali ke halaman beranda
	}

if(isset($_GET['idalt']) && $_GET['idalt']!=null){

	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');

	$idalt = $_GET['idalt'];
	$idk = $_GET['idk'];

	//cek ke database apakah ada data
	$cek = mysql_query("SELECT * FROM talternatif_kriteria WHERE id_alternatif='$idalt' && id_kriteria='$idk'") or die(error());

	//jika data tidak ada
	if(mysql_num_rows($cek) == 0){

		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';

	}else{

		//jika data ada di database, maka melakukan query DELETE data
		$del = mysql_query("DELETE FROM talternatif_kriteria WHERE id_alternatif='$idalt' && id_kriteria='$idk'");

		//jika query DELETE berhasil
		if($del){
				//Pesan jika proses hapus berhasil
			echo '<script>
					alert("berhasil menghapus data")
				  </script>
				 <meta  http-equiv="refresh" content="0.1;url=../nilai.php">';	 //redirect untuk kembali ke halaman beranda

		}else{
				//Pesan jika proses hapus gagal
			error();

		}

	}

}else{

	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';

}
?>
