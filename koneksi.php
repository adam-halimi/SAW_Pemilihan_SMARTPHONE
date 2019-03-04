<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_spkhp";
$connect = mysql_connect($host,$user,$pass) or die("Gagal Connect ke Database");
$db = mysql_select_db($db) or die("Database Tidak Ada");
?>

