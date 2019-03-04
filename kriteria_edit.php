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
                        <a class="active-menu" href="kriteria.php"><i class="fa fa-bolt "></i>Kriteria</a>
                        
                    </li>
                   
                     
                     <li>
                        <a href="subkriteria.php"><i class="fa fa-code "></i>Sub Kriteria</a>
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
                        <h1 class="page-head-line">Edit Kriteria</h1>
                    </div>
                </div>
                
                   <?php
                   
                    // Check If form submitted, insert form data into users table.
                    if(isset($_POST['update'])) {
                        $id = $_POST['id_kriteria'];
                        $name = $_POST['nama_kriteria'];
                        $att = $_POST['attribut'];
                        
                        // include database connection file
                        include_once("koneksi.php");
                                
                        // Insert user data into table
                        $result = mysql_query("UPDATE kriteria SET nama_kriteria='$name', attribut='$att' WHERE id_kriteria=$id");
                        
                        // Show message when user added
                        echo "<script type=text/javascript>
                                window.location.href='http://localhost/sawhp/kriteria.php';
                                </script>";
                    }?>
                    
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
                           Form Edit Kriteria
                        </div>
                        <div class="panel-body">
                            <?php
                    $id_kriteria = $_GET['id_kriteria'];
                    $result = mysql_query("SELECT * FROM kriteria WHERE id_kriteria='$id_kriteria'") or die (mysql_error());
 
                        $data = mysql_fetch_array($result);
                                            ?>
                    <form action="kriteria_edit.php" method="post" name="form1">
                        <table width="25%" border="0">
                            
                            <div class="form-group">
                                
                                <input type="hidden" class="form-control" name="id_kriteria" value="<?php echo $data['id_kriteria'];?>" placeholder="Id" />
                            </div>
                            <div class="form-group">
                                <label>Nama Kriteria</label>
                                <input type="text" class="form-control" name="nama_kriteria" value="<?php echo $data['nama_kriteria'];?>" placeholder="Nama Kriteria" />
                            </div>
                            <div class="form-group">
                                <label>Attribut</label><br>
                                <div class="radio">
                                    <div class="col-md-6">
                                <input type="radio" name="attribut" value="Cost" <?php if ($data["attribut"]=="Cost"){?> checked="checked" <?php } ?> />
                                Cost <br>
                                <input type="radio" name="attribut" value="Benefit" <?php if ($data["attribut"]==="Benefit"){ ?> checked="checked" <?php } ?> />
                                Benefit
                                    </div>
                                </div>
                            </div>
                            
                            <tr> 
                                <td></td>
                                <td><input type="submit" name="update" value="Update" class="btn btn-primary btn-sm"></td>
                                <td><a href="kriteria.php" value="Cancel" class="btn btn-danger btn-sm">Cancel</a></td>
                            </tr>
                        </table>
                    </form>
    </div>
                    
            <!-- /. PAGE INNER  -->
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