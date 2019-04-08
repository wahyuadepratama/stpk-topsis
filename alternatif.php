<!doctype html>
<html lang="en">
<head>
	<?php include 'layout/head.php'; ?>
	<?php include 'controller/koneksi.php'; ?>
	<?php include 'controller/proses.php'; ?>
</head>
<body>

<div class="wrapper">

		<?php include 'layout/sidebar.php' ?>
		<?php include 'layout/include-js-alternatif.php' ?>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">

    </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Alternatif</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
																			<div class="content">
																				<div class="row" style="margin:2%;">

																					<table
													                  class="table table-striped table-bordered table-hover table-highlight table-checkable"
													                  data-provide="datatable"
													                  data-display-rows="10"
													                  data-info="true"
													                  data-search="true"
													                  data-length-change="true"
													                  data-paginate="true"
													                  id="dataTable2"
													                >
													                    <thead>
													                      <tr style="background-color: lightblue">

													                        <th>No</th>
													                        <th>Nama Alternatif</th>
													                        <th>Kecamatan</th>
													                        <th>Aksi</th>

													                      </tr>
													                    </thead>
													                    <tbody>
													                      <?php
													            $alternatif=mysql_query("SELECT * FROM talternatif ORDER BY keterangan ASC");
													            $no=1;
													            while($al=mysql_fetch_array($alternatif)){
													              $text=$al['keterangan'];
													              $keterangan=substr($text,0,100);
													              echo"
													              <tr>
													              <td>$no</td>
													              <td>$al[nama_alternatif]</td>
													              <td>$keterangan</td>
													              <td> ";

													               echo '
													                <a data-toggle="modal" data-target="#k'.$al['id_alternatif'].'"><button type="button" class="btn btn-primary btn-sm pe-7s-note"></button></a>
													                <a data-toggle="modal" data-target="#hapusk'.$al['id_alternatif'].'"><button type="button" class="btn btn-danger btn-sm pe-7s-close"></button></a>

													                  <div class="modal fade" id="k'.$al['id_alternatif'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													                <div class="modal-dialog" role="document">
													                  <div class="modal-content">
													                    <div class="modal-header">
													                      <h5 class="modal-title" id="exampleModalLabel">Edit Alternatif</h5>
													                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
													                        <span aria-hidden="true">×</span>
													                      </button>
													                    </div>
													                    <form method="post" action="controller/editalternatif.php">
													                    <div class="modal-body">
													                      <input class="form-control" type="hidden" name="id" value="'.$al['id_alternatif'].'">
													                      Nama Alternatif :<input class="form-control" name="txtAlternatif" value="'.$al['nama_alternatif'].'"></input>
													                      Kecamatan :
													                      <select name="txtKeterangan" class="form-control">
													                      <option value="Bungus">Bungus</option>
													                      <option value="Koto Tangah">Koto Tangah</option>
													                      <option value="Kuranji">Kuranji</option>
													                      <option value="Lubuk Begalung">Lubuk Begalung</option>
													                      <option value="Lubuk Kilangan">Lubuk Kilangan</option>
													                      <option value="Nanggalo">Nanggalo</option>
													                      <option value="Padang Barat">Padang Barat</option>
													                      <option value="Padang Selatan">Padang Selatan</option>
													                      <option value="Padang Timur">Padang Timur</option>
													                      <option value="Padang Utara">Padang Utara</option>
													                      <option value="Pauh">Pauh</option>
													                      </select>
													                    </div>
													                    <div class="modal-footer">
													                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
													                      <input class="btn btn-primary" type="submit" name="simpan" value="Simpan"></button>
													                    </div>
													                  </form>
													                  </div>
													                </div>
													              </div>

													              <div class="modal fade" id="hapusk'.$al['id_alternatif'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													              <div class="modal-dialog" role="document">
													                <div class="modal-content">
													                  <div class="modal-header">
													                    <h5 class="modal-title" id="exampleModalLabel">Hapus Kriteria</h5>
													                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
													                      <span aria-hidden="true">×</span>
													                    </button>
													                  </div>
													                  <div class="modal-body">Yakin hapus kriteria <b>'.$al['nama_alternatif'].'</b> ?</div>
													                  <div class="modal-footer">
													                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
													                    <a class="btn btn-danger" href="controller/hapusalternatif.php?id='.$al['id_alternatif'].'">Hapus</a>
													                  </div>
													                </div>
													              </div>
													            </div>

													                ';

													                echo "


													              </td>

													              </tr>


													              ";

													             $no++; }
													            ?>

													                    </tbody>
													                  </table>

																				</div>
																			</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
											<div class="card card-user">
													<div class="modal-body">
														<form method="post" action="controller/tambahalternatif.php">
				                    <div class="modal-body">
				                      Kecamatan :
				                      <select name="txtKeterangan" class="form-control" onchange="showlokasi(this.value)">
				                      <option value="Bungus">Bungus</option>
				                      <option value="Koto Tangah">Koto Tangah</option>
				                      <option value="Kuranji">Kuranji</option>
				                      <option value="Lubuk Begalung">Lubuk Begalung</option>
				                      <option value="Lubuk Kilangan">Lubuk Kilangan</option>
				                      <option value="Nanggalo">Nanggalo</option>
				                      <option value="Padang Barat">Padang Barat</option>
				                      <option value="Padang Selatan">Padang Selatan</option>
				                      <option value="Padang Timur">Padang Timur</option>
				                      <option value="Padang Utara">Padang Utara</option>
				                      <option value="Pauh">Pauh</option>
				                      </select>
				                      <br>Nama Alternatif :
				                      <select name="txtAlternatif" class="form-control" id="lokasi"></select>

				                    <div class="modal-footer">
				                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				                      <input class="btn btn-primary" type='submit' name="submit" value="Tambah"></button>
				                    </div>
				                  </form>
											</div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
