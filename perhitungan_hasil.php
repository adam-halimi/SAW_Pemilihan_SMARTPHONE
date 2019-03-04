<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pendukung Keputusan SAW</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.php">SMARTPHONE CHOICER 

                </a>
            </div>

            <div class="notifications-wrapper">
              
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/adam.jpg" class="img-circle" />

                           
                        </div>

                    </li>
                     <li>
                        <a  href="#"> <strong> Muhammad Adam </strong></a>
                    </li>

                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="alternatif.php"><i class="fa fa-venus "></i>Alternatif</a>
                        
                    </li>
                    
                    <li>
                        <a href="kriteria.php"><i class="fa fa-bolt "></i>Kriteria</a>
                        
                    </li>
                   
                     
                     <li>
                        <a href="subkriteria.php"><i class="fa fa-code "></i>Sub Kriteria</a>
                    </li>
                   
                    <li>
                        <a href="normalisasi.php"><i class="fa fa-dashcube "></i>Normalisasi</a>
                    </li>
                    <li>
                        <a  href="perhitungan.php"><i class="fa fa-dashcube "></i>Perhitungan</a>
                    </li>
                    <li>
                        <a class="active-menu" href="kesimpulan.php"><i class="fa fa-dashcube "></i>Kesimpulan</a>
                    </li>
                   
                </ul>
            </div>

        </nav>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"> Hasil Perhitungan</h1>
                    </div>
                </div>
                
<div class="col-md-16">
    <div class="panel panel-default">
    <div class="panel-heading">
                           <div>
                   	<tr>
                   		<th></th>
                   		<th>Bobot : </th>
                   		<th><?php echo "(" .$_POST['bobot_harga']. ")"; ?></th>
            			<th><?php echo "(" .$_POST['bobot_ram']. ")"; ?></th>
            			<th><?php echo "(" .$_POST['bobot_rom']. ")"; ?></th>
            			<th><?php echo "(" .$_POST['bobot_camera']. ")"; ?></th>
            			<th><?php echo "(" .$_POST['bobot_layar']. ")"; ?></th>
                   	</tr>
                   </div> 
                        </div>
                        <div class="panel-body">
                   
                    <div class="datatable table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>C1. Harga</th>
                                            <th>C2. RAM</th>
                                            <th>C3. Memory Internal</th>
                                            <th>C4. Camera</th>
                                            <th>C5. Resolusi Layar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
				            				$nomor = 0;
				            				$hasil = mysql_query("select * from normal, alternatifhp where normal.idhp=alternatifhp.idhp");
				            				while ($dataku = mysql_fetch_array($hasil)) {
				            				?>
				            				<tr>
				            					<td><?php echo $nomor=$nomor+1; ?></td>
				            					<td><?php echo $dataku['merk_hp']; ?></td>
				            					<td><?php echo $dataku['harga']; ?></td>
				            					<td><?php echo $dataku['ram']; ?></td>
				            					<td><?php echo $dataku['memory']; ?></td>
				            					<td><?php echo $dataku['camera']; ?></td>
				            					<td><?php echo $dataku['layar']; ?></td>
				            				</tr>
				            				<?php }	?>
                                    </tbody>
                                </table>
                            </div>
    </div>
</div>
                    <?php
#Cari nilai maximal
$carimax = mysql_query("SELECT max(harga) as max1,
								max(ram) as max2,
								max(memory) as max3,
								max(camera) as max4,
								max(layar) as max5
								FROM normal");
$max = mysql_fetch_array($carimax);
# Cari nilai minimal
$carimin = mysql_query("SELECT min(harga) as min1,
								min(ram) as min2,
								min(memory) as min3,
								min(camera) as min4,
								min(layar) as min5
								FROM normal");
$min = mysql_fetch_array($carimin);
?>
            <!-- /. PAGE INNER  -->
            <div class="col-md-16">
    <div class="panel panel-default">
    <div class="panel-heading">
                           <div>
                   	Normalisasi Data
                   </div> 
                        </div>
                        <div class="panel-body">
                   
                    <div class="datatable table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>C1. Harga</th>
                                            <th>C2. RAM</th>
                                            <th>C3. Memory Internal</th>
                                            <th>C4. Camera</th>
                                            <th>C5. Resolusi Layar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
				            				$nomor = 0;
				            				$hasil = mysql_query("select * from normal, alternatifhp where normal.idhp=alternatifhp.idhp");
				            				while ($dataku = mysql_fetch_array($hasil)) {
				            				?>
				            				<tr>
				            					<td><?php echo $nomor=$nomor+1; ?></td>
				            					<td><?php echo $dataku['merk_hp']; ?></td>
				            					<td><?php echo round($min['min1']/$dataku['harga'],2);?></td>
												<td><?php echo round($dataku['ram']/$max['max2'],2); ?></td>
												<td><?php echo round($dataku['memory']/$max['max3'],2); ?></td>
												<td><?php echo round($dataku['camera']/$max['max4'],2); ?></td>
												<td><?php echo round($dataku['layar']/$max['max5'],2); ?></td>
				            				</tr>
				            				<?php }	?>
                                    </tbody>
                                </table>
                            </div>
    </div></div>
    <?php
$bobot_harga		= $_POST['bobot_harga'];
$bobot_ram			= $_POST['bobot_ram'];
$bobot_memory		= $_POST['bobot_rom'];
$bobot_camera		= $_POST['bobot_camera'];
$bobot_layar		= $_POST['bobot_layar'];
?>
<div class="col-md-16">
    <div class="panel panel-default">
    <div class="panel-heading">
                           <div>
                   	Perangkingan Data
                   </div> 
                        </div>
                        <div class="panel-body">
                   
                    <div class="datatable table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Hasil Perhitungan</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
				            				$nomor = 0;
				            				$hasil = mysql_query("select * from normal, alternatifhp where normal.idhp=alternatifhp.idhp");
				            				while ($dataku = mysql_fetch_array($hasil)) {
				            				?>
				            				<tr>
				            					<td><?php echo $nomor=$nomor+1; ?></td>
				            					<td><?php echo $dataku['merk_hp']; ?></td>
				            					<td><?php echo round((($min['min1']/$dataku['harga'])*$bobot_harga)+(($dataku['ram']/$max['max2'])*$bobot_ram)+(($dataku['memory']/$max['max3'])*$bobot_memory)+(($dataku['camera']/$max['max4'])*$bobot_camera)+(($dataku['layar']/$max['max5'])*$bobot_layar),2);?></td>
												
				            				</tr>
				            				<?php }	?>
                                    </tbody>
                                </table>
                            </div>
    </div>

        </div>
    </div>
        </div>
    </div>
    </div>
<footer>
    &copy; 2018 Poltekpos | By : <a href="#" target="_blank">Muhammad Adam Nahdlotul Halimi</a>
</footer>
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>