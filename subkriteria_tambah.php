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
                        <a class="active-menu"  href="subkriteria.php"><i class="fa fa-code "></i>Sub Kriteria</a>
                    </li>
                   
                    <li>
                        <a href="normalisasi.php"><i class="fa fa-dashcube "></i>Normalisasi</a>
                    </li>
                    <li>
                        <a href="perhitungan.php"><i class="fa fa-dashcube "></i>Perhitungan</a>
                    </li>
                    <li>
                        <a href="kesimpulan.php"><i class="fa fa-dashcube "></i>Kesimpulan</a>
                    </li>
                   
                </ul>
            </div>

        </nav>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Tambah SubKriteria</h1>
                    </div>
                </div>
                
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
                           Form Tambah SubKriteria
                        </div>
                        <div class="panel-body">
                    <form action="subkriteria_tambah.php" method="post" name="form1">
                        <table width="25%" border="0">
                            <div class="form-group">
                                <label>Nama Kriteria</label>
                                <select name="id_kriteria" placeholder="Pilih Kriteria..." class="form-control">
                                    <option>Pilih Kriteria...</option>
                                    
                                    <?php
                                    $query = "SELECT * FROM kriteria ORDER BY id_kriteria asc";
                                    $hasil = mysql_query($query);
                                    while ($data = mysql_fetch_array($hasil)){
                                        echo "<option value='".$data['id_kriteria']."'>".$data['nama_kriteria']."</option>";
                                    }
                                    ?>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="nama_sub" placeholder="Nama SubKriteria" />
                            </div>
                            <div class="form-group">
                                <label>Nilai</label>
                                <select name="nilai" class="form-control">
                                    <option>Pilih Nilai...</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>75</option>
                                    <option>100</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label>Bobot</label>
                                <select name="keterangan" class="form-control">
                                    <option>Pilih Bobot...</option>
                                    <option>Kurang</option>
                                    <option>Cukup</option>
                                    <option>Baik</option>
                                    <option>Sangat Baik</option>
                                </select>
                            </div>
                            
                            <tr> 
                                <td></td>
                                <td><input type="submit" name="Submit" value="Add" class="btn btn-primary btn-sm"></td>
                            </tr>
                        </table>
                    </form>
    </div>
                    <?php
                 
                    // Check If form submitted, insert form data into users table.
                    if(isset($_POST['Submit'])) {
                        $id = $_POST['id_kriteria'];
                        $ket = $_POST['nama_sub'];
                        $nilai = $_POST['nilai'];
                        $bobot = $_POST['keterangan'];

                        // include database connection file
                        include_once("koneksi.php");
                                
                        // Insert user data into table
                        $result = mysql_query("INSERT INTO subkriteria VALUES('','$id','$ket','$nilai','$bobot')") or die(mysql_error());
                        
                        // Show message when user added
                        echo "Data added successfully. <a href='subkriteria.php'>View Kriteria</a>";
                    }
                    ?>
            <!-- /. PAGE INNER  -->
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