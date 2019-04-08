<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

<!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                Decision Support System
            </a>
        </div>

        <ul class="nav">
            <li <?php if($_SERVER['REQUEST_URI'] == '/stpk-topsis/'){ echo 'class="active"'; } ?>>
                <a href="/stpk-topsis">
                    <i class="pe-7s-user"></i>
                    <p>Home</p>
                </a>
            </li>
            <li <?php if($_SERVER['REQUEST_URI'] == '/stpk-topsis/kriteria.php'){ echo 'class="active"'; } ?>>
                <a href="kriteria.php">
                    <i class="pe-7s-note2"></i>
                    <p>Kriteria</p>
                </a>
            </li>
            <li <?php if($_SERVER['REQUEST_URI'] == '/stpk-topsis/alternatif.php'){ echo 'class="active"'; } ?>>
                <a href="alternatif.php">
                    <i class="pe-7s-albums"></i>
                    <p>Alternatif</p>
                </a>
            </li>
            <li <?php if($_SERVER['REQUEST_URI'] == '/stpk-topsis/nilai.php'){ echo 'class="active"'; } ?>>
                <a href="nilai.php">
                    <i class="pe-7s-graph"></i>
                    <p>Input Nilai</p>
                </a>
            </li>
            <li <?php if($_SERVER['REQUEST_URI'] == '/stpk-topsis/rangking.php'){ echo 'class="active"'; } ?>>
                <a href="rangking.php">
                    <i class="pe-7s-graph1"></i>
                    <p>Rangking</p>
                </a>
            </li>
        </ul>
  </div>
</div>
