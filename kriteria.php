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

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
    </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Kriteria</h4>
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
																						id="dataTable3"
																					>
																							<thead>
																								<tr style="background-color: lightblue">
																									<th>No</th>
																									<th>Nama Kriteria</th>
																									<th>Kepentingan</th>
																									<th>Cost Benefit</th>
																									<th>Rentang Nilai</th>
																									<th>Aksi</th>

																								</tr>
																							</thead>
																							<tbody>
																								<?php
																			$kriteria=mysql_query("SELECT * FROM tkriteria");
																			$no=1;
																			while($kr=mysql_fetch_array($kriteria)){
																				$r=$kr['rentangnilai'];
																				if ($r>0) {
																					$rr="0 sampai ".$r;
																				}
																				else {
																					$rr = "tidak ditentukan";
																				}
																				echo"
																				<tr>
																				<td>$no</td>
																				<td>$kr[nama_kriteria]</td>
																				<td>$kr[kepentingan]</td>
																				<td>$kr[costbenefit]</td>
																				<td>$rr</td>
																				<td>";
																				echo '
																					<a data-toggle="modal" data-target="#'.$kr['id_kriteria'].'"><button type="button" class="btn btn-primary btn-sm pe-7s-note"></button></a>
																					<a data-toggle="modal" data-target="#hapus'.$kr['id_kriteria'].'"><button type="button" class="btn btn-danger btn-sm pe-7s-close"></button></a>

																						<div class="modal fade" id="'.$kr['id_kriteria'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																					<div class="modal-dialog" role="document">
																						<div class="modal-content">
																							<div class="modal-header">
																								<h5 class="modal-title" id="exampleModalLabel">Edit Kriteria</h5>
																								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
																									<span aria-hidden="true">×</span>
																								</button>
																							</div>
																							<form method="post" action="controller/editkriteria.php">
																							<div class="modal-body">
																								<input class="form-control" type="hidden" name="id" value="'.$kr['id_kriteria'].'">
																								Nama Kriteria :<input class="form-control" name="txtKriteria" value="'.$kr['nama_kriteria'].'"></input>
																								Kepentingan : <input class="form-control" type="number" name="txtKep" value="'.$kr['kepentingan'].'">
																								CostBenefit :
																									<select class="form-control" name="rbCB" value='.$kr['costbenefit'].'>
																										<option value="Cost">Cost</option>
																										<option value="Benefit">Benefit</option>
																									</select>
																								Rentang Nilai :
																								<input class="form-control" type="number" name="rentang" value="'.$kr['rentangnilai'].'">
																								<small><i>biarkan kosong atau beri angka 0 jika rentang nilai tidak ditentukan</i></small>
																							</div>
																							<div class="modal-footer">
																								<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
																								<input class="btn btn-primary" type="submit" name="simpan" value="Simpan"></button>
																							</div>
																						</form>
																						</div>
																					</div>
																				</div>

																				<div class="modal fade" id="hapus'.$kr['id_kriteria'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																				<div class="modal-dialog" role="document">
																					<div class="modal-content">
																						<div class="modal-header">
																							<h5 class="modal-title" id="exampleModalLabel">Hapus Kriteria</h5>
																							<button class="close" type="button" data-dismiss="modal" aria-label="Close">
																								<span aria-hidden="true">×</span>
																							</button>
																						</div>
																						<div class="modal-body">Yakin hapus kriteria <b>'.$kr['nama_kriteria'].'</b> ?</div>
																						<div class="modal-footer">
																							<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
																							<a class="btn btn-danger" href="controller/hapuskriteria.php?id='.$kr['id_kriteria'].'">Hapus</a>
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
													<form method='post' action='controller/tambahkriteria.php'>
													<div class="modal-body">
														<form class='form-horizontal' role='form' method='post' action='controller/tambahkriteria.php' enctype='multipart/form-data'>

															Nama kriteria :
															<input type='text' class='form-control' placeholder='Nama Kriteria' name='txtKriteria'>
															<br/>
															Kepentingan :
															<input type='number' class='form-control' name='txtKep'>
															<br/>
															Cost/Benefit : <br/>
															<div class="form-group">
														    <select class="form-control" name="rbCB">
														      <option value="Cost">Cost</option>
														      <option value="Benefit">Benefit</option>
														    </select>
														  </div>
															Rentang Nilai :
															<input class="form-control" type="number" name="rentang">
															<small><i>biarkan kosong atau beri angka 0 jika rentang nilai tidak ditentukan</i></small>
												<div>
												</div>
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
