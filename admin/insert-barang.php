<?php
include('../koneksi.php');
$n=$_POST['nama'];
$h=$_POST['harga'];
$k=$_POST['keterangan'];
$lokasi_file=$_FILES[gambar][tmp_name];
$nama_file=$_FILES[gambar][name];
move_uploaded_file($lokasi_file,"../barang/$nama_file");
mysql_query("insert into tbl_barang (nama_barang,harga,gambar,keterangan) values ('$n','$h','$nama_file','$k')");
?>
	<script type="text/javascript">
		alert("Data di tambah...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=product.php'>";
?>