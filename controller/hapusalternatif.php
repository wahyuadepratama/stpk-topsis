<?php
	function error(){
		echo '<script>
					alert("gagal hapus data")
				  </script>
				 <meta  http-equiv="refresh" content="0.1;url=../alternatif.php">';	 //redirect untuk kembali ke halaman beranda
	}

if(isset($_GET['id'])){

	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');

	$id = $_GET['id'];

	//cek ke database apakah ada data
	$cek = mysql_query("SELECT * FROM talternatif WHERE id_alternatif='$id'") or die(error());

	//jika data tidak ada
	if(mysql_num_rows($cek) == 0){

		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';

	}else{

		//jika data ada di database, maka melakukan query DELETE data
		$del = mysql_query("DELETE FROM talternatif WHERE id_alternatif='$id'");

		//jika query DELETE berhasil
		if($del){
				//Pesan jika proses hapus berhasil
			echo '<script>
					alert("berhasil menghapus data")
				  </script>
				 <meta  http-equiv="refresh" content="0.1;url=../alternatif.php">';	 //redirect untuk kembali ke halaman beranda

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
