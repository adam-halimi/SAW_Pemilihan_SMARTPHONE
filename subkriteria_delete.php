<?php
include "koneksi.php";
$id_sub = $_GET['id_sub'];
$query = mysql_query("DELETE FROM subkriteria WHERE id_sub = '$id_sub'") or die(mysql_error());
if ($query) {
	?>
	<script type="text/javascript">
		alert("Berhasil delete!");
		document.location='subkriteria.php';
	</script>
<?php
}
?>