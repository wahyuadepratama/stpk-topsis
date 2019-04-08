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
                                <h4 class="title">Rangking</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
																			<div class="content">
																				<div class="row" style="margin:2%;">

																					<div id="rangking">
													                  <div style="float: right;"
													                  data-preset="circle"
													                  class="ldBar label-center"
													                  data-value="<?php echo $p; ?>">
															              </div>
														                <div style="float: right;">Data tersisi (nilai alternatif-kriteria) = <?php echo $jdt; ?>/<?php echo $matriks;?></div>
													                  Alternatif Terbaik : <h4 class="heading"> <span class="label label-primary"> <?php echo $alternatifrangking[0]; ?></span></h4>Dengan nilai terbesar :  <h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[0]; ?></span></h4><br />
													                  <div id="chartContainer" style="width: 100%; margin: 1px;"></div>
													                  <?php
													                    echo $pesan;  echo "<br/>";
													                    echo $pesan2; echo "<br/>";
													                    echo $pesan3;
													                  ?>
															            </div> <!-- ID = rangking -->

																				</div>
																			</div>
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
