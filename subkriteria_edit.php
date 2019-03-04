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
                        <h1 class="page-head-line">Edit SubKriteria</h1>
                    </div>
                </div>
                <?php
                    $id_sub = $_GET['id_sub'];
                    $result = mysql_query("SELECT * FROM subkriteria WHERE id_sub='$id_sub'") or die (mysql_error());
 
                        $dataku = mysql_fetch_array($result);
                                            ?>
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
                           Form Edit SubKriteria
                        </div>
                        <div class="panel-body">
                    <form action="subkriteria_edit.php" method="post" name="form1">
                        <table width="25%" border="0">
                            <div class="form-group">
                                <label>Nama Kriteria</label>
                                <select name="id_kriteria" placeholder="Pilih Kriteria..." class="form-control">
                                    <option value='' selected>Pilih Kriteria...</option>
                                    
                                    <?php
                                    $query = "SELECT * FROM kriteria ORDER BY id_kriteria asc";
                                    $hasil = mysql_query($query);
                                    while ($data = mysql_fetch_array($hasil)){
                                        if ($dataku['id_kriteria']==$data['id_kriteria']){
                                           echo "<option value='$data[id_kriteria]' selected='$dataku[id_kriteria]'>".$data['nama_kriteria']."</option>"; 
                                        }else{
                                            echo "<option value='$data[id_kriteria]'>".$data['nama_kriteria']."</option>";
                                        }
                                        
                                    }
                                    ?>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="nama_sub" value="<?php echo $dataku['nama_sub'];?>" placeholder="Nama SubKriteria" />
                            </div>
                            <div class="form-group">
                                <label>Nilai</label>
                                <select name="nilai" class="form-control">
                                    <option>Pilih Nilai...</option>
                                    <?php
                                    $query = "SELECT * FROM subkriteria ORDER BY id_sub asc";
                                    $hasil = mysql_query($query);
                                    while ($data = mysql_fetch_array($hasil)){
                                        if ($dataku['id_sub']==$data['id_sub']){
                                           echo "<option value='$data[id_sub]' selected='$dataku[id_sub]'>".$data['nilai']."</option>"; 
                                        }else{
                                            echo "<option value='$data[id_sub]'>".$data['nilai']."</option>";
                                        }
                                        
                                    }
                                    ?>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label>Bobot</label>
                                <select name="keterangan" class="form-control">
                                    <option>Pilih Bobot...</option>
                                    <?php
                                    $query = "SELECT * FROM subkriteria ORDER BY id_sub asc";
                                    $hasil = mysql_query($query);
                                    while ($data = mysql_fetch_array($hasil)){
                                        if ($dataku['id_sub']==$data['id_sub']){
                                           echo "<option value='$data[id_sub]' selected='$dataku[id_sub]'>".$data['keterangan']."</option>"; 
                                        }else{
                                            echo "<option value='$data[id_sub]'>".$data['keterangan']."</option>";
                                        }
                                        
                                    }
                                    ?>
                                </select>
                            </div>
                            
                            <tr> 
                                <td></td>
                                <td><input type="submit" name="update" value="Update" class="btn btn-primary btn-sm"></td>
                                <td><a href="subkriteria.php" value="Cancel" class="btn btn-danger btn-sm">Cancel</a></td>
                            </tr>
                        </table>
                    </form>
    </div>
                    <?php
                 
                    // Check If form submitted, insert form data into users table.
                    if(isset($_POST['update'])) {
                        $id_sub = $_POST['id_sub'];
                        $id = $_POST['id_kriteria'];
                        $ket = $_POST['nama_sub'];
                        $nilai = $_POST['nilai'];
                        $bobot = $_POST['keterangan'];

                        // include database connection file
                        include_once("koneksi.php");
                                
                        // Insert user data into table
                        $result = mysql_query("UPDATE subkriteria SET id_kriteria='$id', nama_sub='$ket', nilai='$nilai', keterangan='$bobot' WHERE id_sub='$id_sub'") or die(mysql_error());
                        
                        // Show message when user added
                        echo "<script type=text/javascript>
                                window.location.href='http://localhost/sawhp/subkriteria.php';
                                </script>";
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