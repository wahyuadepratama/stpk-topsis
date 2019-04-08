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
                                <h4 class="title">Nilai</h4>
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
													                  id="dataTable"
													                >
													                    <thead>
													                      <tr style="background-color: lightblue">
													                        <th>No. Alt</th>
													                        <th>No. Kr</th>
													                        <th data-direction="asc" data-filterable="true" data-sortable="true">Nama Alternatif</th>
													                        <th data-filterable="true" data-sortable="true" >Nama Kriteria</th>
													                        <th data-direction="asc" data-filterable="true" data-sortable="true">Nilai</th>
													                        <th data-filterable="false" class="hidden-xs hidden-sm">Aksi</th>

													                      </tr>
													                    </thead>
													                    <tbody>
													                      <?php
													            $calt=mysql_query("SELECT min(id_alternatif) as min FROM talternatif");
													            while ($hasil=mysql_fetch_assoc($calt)) {
													              $alt1 = $hasil['min'];
													            }

													            $kriteria=mysql_query("SELECT * FROM talternatif_kriteria,tkriteria,talternatif
													                        WHERE talternatif_kriteria.id_alternatif=talternatif.id_alternatif AND
													                      talternatif_kriteria.id_kriteria=tkriteria.id_kriteria ORDER BY talternatif.id_alternatif ASC");
													            $no=1;
													            $nomor=1;
													            $warna="white";
													            while($kr=mysql_fetch_array($kriteria)){
													              $nilai= $kr['nilai'];
													              $alt2=$kr['id_alternatif'];
													              if ($alt1!=$alt2) {
													                $alt1=$alt2;
													                $no++;$nomor=1;
													              }
													            if ($no%2==0) {
													                $warna="lightgray";
													              }
													            else {
													                $warna="white";
													              }

													              echo"
													              <tr style=background-color:".$warna.">
													              <td>$no</td>
													              <td>$nomor</td>
													              <td>$kr[nama_alternatif]</td>
													              <td>$kr[nama_kriteria]</td>
													              <td>$nilai</td>
													              <td>";
													              if ($kr['rentangnilai']>1) {
													                $r=' inputan max s/d <font color="red"><b>'.$kr['rentangnilai'].'</b></font>';
													              }
													              else {
													                $r=' rentang nilai <font color="red"><b>tidak ditentukan</b></font>';
													              }
													              echo '
													                <a data-toggle="modal" data-target="#n'.$kr['id_alternatif'].'_'.$kr['id_kriteria'].'"><button type="button" class="btn btn-sm pe-7s-note"></button></a>
													                <a data-toggle="modal" data-target="#hapusn'.$kr['id_alternatif'].'_'.$kr['id_kriteria'].'"><button type="button" class="btn btn-danger btn-sm pe-7s-close"></button></a>

													                  <div class="modal fade" id="n'.$kr['id_alternatif'].'_'.$kr['id_kriteria'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													                <div class="modal-dialog" role="document">
													                  <div class="modal-content">
													                    <div class="modal-header">
													                      <h5 class="modal-title" id="exampleModalLabel">Edit Nilai Alternatif-kriteria</h5>
													                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
													                        <span aria-hidden="true">×</span>
													                      </button>
													                    </div>
													                    <form method="post" action="controller/editnilai.php">
													                    <div class="modal-body">
													                      Alternatif :<input class="form-control" name="" value="'.$kr['nama_alternatif'].'" disabled>
													                      Kriteria : <input class="form-control" type="text" name="" value="'.$kr['nama_kriteria'].'" disabled>
													                      Nilai : <input class="form-control" type="number" name="txtNilai" value="'.$kr['nilai'].'">
													                      <input type="hidden" name="idalt" value="'.$kr['id_alternatif'].'">
													                      <input type="hidden" name="idk" value="'.$kr['id_kriteria'].'">
													                      <br/><small><font color="blue"><b>'.$kr['nama_kriteria'].'</b></font>'.$r.'</small>
													                    </div>
													                    <div class="modal-footer">
													                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
													                      <input class="btn btn-primary" type="submit" name="simpan" value="Simpan"></button>
													                    </div>
													                  </form>
													                  </div>
													                </div>
													              </div>

													              <div class="modal fade" id="hapusn'.$kr['id_alternatif'].'_'.$kr['id_kriteria'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													              <div class="modal-dialog" role="document">
													                <div class="modal-content">
													                  <div class="modal-header">
													                    <h5 class="modal-title" id="exampleModalLabel">Hapus Nilai Alternatif-Kriteria</h5>
													                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
													                      <span aria-hidden="true">×</span>
													                    </button>
													                  </div>
													                  <div class="modal-body">Yakin hapus nilai alternatif-kriteria: '.$kr['nama_alternatif'].' <br/>'.$kr['nama_kriteria'].' = '.$kr['nilai'].' ?</div>
													                  <div class="modal-footer">
													                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
													                    <a class="btn btn-danger" href="controller/hapusnilai.php?idalt='.$kr['id_alternatif'].'&idk='.$kr['id_kriteria'].'">Hapus</a>
													                  </div>
													                </div>
													              </div>
													            </div>

													                ';

													              echo "

													              </td>




													              </tr>


													              ";

													              $nomor++;
													           }
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
														<form method='post' action='controller/tambahnilai.php'>
					                    <div class="modal-body">
					                      Nama Alternatif :
					                      <select id="s2_basic" class="form-control" name="cboAlternatif">
					                      <option>-- Pilih Nama Alternatif --</option>
					                      <?php
					                        $alternatif=mysql_query("SELECT * FROM talternatif ORDER BY nama_alternatif ASC");
					                        while($alt=mysql_fetch_array($alternatif)){
					                          echo"<option value='$alt[id_alternatif]'>$alt[nama_alternatif]</option>";
					                        }
					                      ?>
					                      </select> <br/>
					                      Nama Kriteria :
					                      <select id="s2_basic" class="form-control" name="cboKriteria">
					                      <option>-- Pilih Nama Kriteria --</option>
					                      <?php
					                        $kriteria=mysql_query("SELECT * FROM tkriteria ORDER BY nama_kriteria ASC");
					                        while($kr=mysql_fetch_array($kriteria)){
					                        echo"<option value='$kr[id_kriteria]'>$kr[nama_kriteria]</option>";
					                        }
					                      ?>
					                      </select> <br/>
					                      Nilai :
					                      <input type="number" class="form-control"  name="txtNilai">
					                      <?php
					                      $c=mysql_query("SELECT * FROM tkriteria");
					                      while ($show=mysql_fetch_assoc($c)) {
					                        if ($show['rentangnilai']>1) {
					                          $r='<ul><li> inputan max s/d <font color="red"><b>'.$show['rentangnilai'].'</b></font></li></ul>';
					                        }
					                        else {
					                          $r='<ul><li> rentang nilai <font color="red"><b>tidak ditentukan</b></font></li></ul>';
					                        }
					                        echo '<br/><small><li><font color="blue"><b>'.$show['nama_kriteria'].'</b></font></li>'.$r.'</small>';
					                      }
					                    ?>
					                    </div>
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
